<?php

namespace App\Http\Controllers;

use App\Models\Configuration;
use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\ProductDetail;
use App\Http\Requests\StoreProductDetailRequest;
use App\Http\Requests\UpdateProductDetailRequest;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ProductDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $total = ProductDetail::count();

//        $total = $totalRecords[0]->total;
        $count = Customer::count();
        $currentMonth = Carbon::now()->month;
        $currentYear = Carbon::now()->year;

        $totalRevenue = OrderDetail::join('orders', 'order_details.order_id', '=', 'orders.id')
            ->whereMonth('orders.purchase_date', $currentMonth)
            ->whereYear('orders.purchase_date', $currentYear)
            ->where('orders.status', '!=', 6)
            ->sum('order_details.until_price');

        $orderCounts = Order::whereMonth('purchase_date', $currentMonth)
            ->whereYear('purchase_date', $currentYear)
            ->count();
        $outOfStockProductsCount = Configuration::where('amount', 0)->count();
        $latestOrders = Order::orderBy('purchase_date', 'desc')->take(5)->get();

        return view('admin.index', compact('total', 'count', 'orderCounts', 'outOfStockProductsCount', 'latestOrders', 'totalRevenue'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductDetailRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductDetailRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductDetail  $productDetail
     * @return \Illuminate\Http\Response
     */
    public function show(ProductDetail $productDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductDetail  $productDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductDetail $productDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductDetailRequest  $request
     * @param  \App\Models\ProductDetail  $productDetail
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductDetailRequest $request, ProductDetail $productDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductDetail  $productDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductDetail $productDetail)
    {
        //
    }
}
