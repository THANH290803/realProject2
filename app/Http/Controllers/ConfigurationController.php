<?php

namespace App\Http\Controllers;

use App\Models\Configuration;
use App\Http\Requests\StoreConfigurationRequest;
use App\Http\Requests\UpdateConfigurationRequest;
use App\Models\Product;
use App\Models\ProductDetail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class ConfigurationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Product $product)
    {
        $configurations = $product->configurations;

        return view('product.showDetail', compact('product', 'configurations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        $products = Product::all();
//        return view('config.addConfig', compact( 'products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreConfigurationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreConfigurationRequest $request)
    {
        // Tạo một bản ghi mới trong bảng configurations
        $configuration = Configuration::create($request->all());
        $productID = $request->input('product_id');
        // Tạo một bản ghi mới trong bảng product_details và lưu config_id
        $productDetail = new ProductDetail();
        $productDetail->config_id = $configuration->id;
        $productDetail->save();

        // Redirect hoặc thực hiện các hành động khác sau khi lưu thành công
        return redirect()->back()->with('success', 'Cấu hình đã được tạo thành công.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Configuration  $configuration
     * @return \Illuminate\Http\Response
     */
    public function show(Configuration $configuration, $productId)
    {
        $product = Product::find($productId);
        $configurations = DB::table('configurations')
            ->where('product_id', $productId)
            ->select('id AS ConfigurationId', 'name AS ConfigurationName', 'amount', 'price')
            ->get();

        return view('config.config', compact('configurations', 'product', 'configuration'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Configuration  $configuration
     * @return \Illuminate\Http\Response
     */
    public function edit(Configuration $configuration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateConfigurationRequest  $request
     * @param  \App\Models\Configuration  $configuration
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateConfigurationRequest $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'nullable|string', // Cho phép giá trị null hoặc là một chuỗi
            'price' => 'required|numeric',
            'amount' => 'required|integer',
        ]);

        $configuration = Configuration::find($id);
        if (!$configuration) {
            return redirect()->back()->with('error', 'Không tìm thấy cấu hình');
        }

        $validatedData['amount'] = $request->input('amount');

        // Kiểm tra nếu giá trị price hoặc amount âm, thì trả về thông báo lỗi
        if ($validatedData['price'] < 0 || $validatedData['amount'] < 0) {
            return redirect()->back()->with('error', 'Số lượng không được âm');
        }

        $configuration->update($validatedData);

        return redirect()->back()->with('success', 'Cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Configuration  $configuration
     * @return \Illuminate\Http\Response
     */
    public function destroy(Configuration $configuration)
    {
        $productDetail = ProductDetail::where('config_id', $configuration->id)->first();
        if ($productDetail) {
            $productDetail->delete();
        }
        $configuration->delete();
        return redirect()->back()->with('success', 'Xóa cấu hình thành công');
    }
}
