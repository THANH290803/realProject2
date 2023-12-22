<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $orders = Order::with('customer', 'paymentMethod', 'orderDetails')
            ->leftJoin('admins', 'orders.admin_id', '=', 'admins.id')
            ->orderByRaw('
                            CASE
                                WHEN orders.status IN (1) THEN 1
                                WHEN orders.status IN (2, 3, 4) THEN 2
                                WHEN orders.status IN (5, 6) THEN 3
                                ELSE 4
                            END
                        ')
//            ->orderBy('orders.purchase_date', 'desc')
//            ->orderBy('orders.id', 'desc')
            ->select('orders.*', 'admins.name as admin_name', 'admins.email as admin_email') // Select the columns you need from both tables
            ->get();



//        $randomIds = $request->session()->get('randomIds', []);

        foreach ($orders as $order) {
            // Kiểm tra xem random ID đã tồn tại cho đơn hàng này
//            if (!isset($randomIds[$order->id])) {
//                $randomIds[$order->id] = Str::random(12); // Tạo một random ID riêng cho đơn hàng
//            }
//            if (isset($randomIds[$order->id])) {
//                $order->random_id = $randomIds[$order->id];
//            }
            $totalPrice = $order->orderDetails->sum('until_price'); // Tính tổng tiền từ các chi tiết đơn hàng
            $order->totalPrice = $totalPrice; // Gán tổng tiền cho đơn hàng
//            $order->random_id = $randomIds[$order->id];
        }
//        $request->session()->put('randomIds', $randomIds);
        return view('order.order', compact( 'orders'));
    }

    public function detail($order_id)
    {
        $details = Order::select(
            'orders.id as order_id',
            'orders.status',
            'orders.purchase_date',
            'products.name AS NameProduct',
            'products.img',
            'configurations.name as NameConfig',
            'configurations.price',
            'customers.name as customer_name',
            'customers.address',
            'customers.phone_number',
            'order_details.amount',
            'order_details.until_price',
            'payment_methods.name as payment_method'
        )
            ->join('customers', 'orders.customer_id', '=', 'customers.id')
            ->join('payment_methods', 'orders.payment_id', '=', 'payment_methods.id')
            ->join('order_details', 'orders.id', '=', 'order_details.order_id')
            ->join('product_details', 'order_details.pro_de_id', '=', 'product_details.id')
            ->join('configurations', 'product_details.config_id', '=', 'configurations.id')
            ->join('products', 'configurations.product_id', '=', 'products.id')
            ->where('orders.id', $order_id)
            ->get();

        if (!$details) {
            abort(404); // Hiển thị trang lỗi 404 nếu đơn hàng không tồn tại
        }

        return view('order.orderDetail', compact('details'));
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
     * @param  \App\Http\Requests\StoreOrderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrderRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOrderRequest  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOrderRequest $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }

    public function confirmOrder($order_id)
    {
        // Lấy thông tin đơn hàng từ CSDL
        $order = Order::find($order_id);

        // Kiểm tra trạng thái của đơn hàng
        if ($order->status == 1) {
            // Nếu trạng thái là 1 (Chờ xác nhận), thì chuyển sang trạng thái 2 (Đã duyệt đơn hàng)
            $order->status = 2;
            // Lấy thông tin admin (người dùng đã đăng nhập)
            $admin = Auth::guard('admin')->user(); // Sử dụng Auth::user() trong Laravel

            // Gán admin_id cho đơn hàng
            $order->admin_id = $admin->id;
            $order->save();

            return redirect()->back()->with('success', 'Đơn hàng đã được xác nhận');
        } elseif ($order->status == 3 || $order->status == 4 || $order->status == 5) {
            // Nếu trạng thái là 3, 4, 5 hoặc 6, không thực hiện thay đổi và thông báo lỗi
            return redirect()->back()->with('error', 'Không thể xác nhận đơn hàng với trạng thái hiện tại');
        } else {
            // Trường hợp còn lại, không thực hiện thay đổi và thông báo lỗi
            return redirect()->back()->with('error', 'Không thể xác nhận đơn hàng');
        }
    }

    public function shipOrder($order_id)
    {
        // Lấy thông tin đơn hàng từ CSDL
        $order = Order::find($order_id);

        // Kiểm tra trạng thái của đơn hàng
        if ($order->status == 2) {
            // Nếu trạng thái là 2 (Đã duyệt đơn hàng), thì chuyển sang trạng thái 3 (Đang giao hàng)
            $order->status = 3;
            $order->save();

            return redirect()->back()->with('success', 'Đơn hàng đang được giao hàng cho bên vận chuyển');
        } elseif ($order->status == 4 || $order->status == 5 || $order->status == 6) {
            // Nếu trạng thái là 1, 4, 5 hoặc 6, không thực hiện thay đổi và thông báo lỗi
            return redirect()->back()->with('error', 'Không thể giao hàng cho đơn hàng với trạng thái hiện tại');
        } else {
            // Trường hợp còn lại, không thực hiện thay đổi và thông báo lỗi
            return redirect()->back()->with('error', 'Không thể giao hàng cho đơn hàng');
        }
    }

    // app/Http/Controllers/OrderController.php

    public function confirmShipping($order_id)
    {
        // Lấy thông tin đơn hàng từ CSDL
        $order = Order::find($order_id);

        // Kiểm tra trạng thái của đơn hàng
        if ($order->status == 3) {
            // Nếu trạng thái là 3 (Đang giao hàng), thì chuyển sang trạng thái 4 (Đã giao hàng cho khách)
            $order->status = 4;
            $order->save();

            return redirect()->back()->with('success', 'Đã giao hàng thành công');
        } elseif ($order->status == 5 || $order->status == 6) {
            // Nếu trạng thái là 5 hoặc 6 (Hoàn Thành Đơn Hàng hoặc Hủy đơn hàng), không thực hiện thay đổi và thông báo lỗi
            return redirect()->back()->with('error', 'Không thể xác nhận đã giao hàng với trạng thái hiện tại');
        } else {
            // Trường hợp còn lại, không thực hiện thay đổi và thông báo lỗi
            return redirect()->back()->with('error', 'Không thể xác nhận đã giao hàng với trạng thái hiện tại');
        }
    }


}
