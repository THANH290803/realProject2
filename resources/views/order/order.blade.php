<!DOCTYPE html>
<html lang="en">

<head>
    <title>Danh sách nhân viên | Quản trị Admin</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/mai.css')}}">
    <link rel="stylesheet" href="{{asset('https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css')}}">
    <!-- or -->
    <link rel="stylesheet" href="{{asset('https://unpkg.com/boxicons@latest/css/boxicons.min.css')}}">

    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css"
          href="{{asset('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css')}}">
    <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('https://use.fontawesome.com/releases/v5.8.2/css/all.css')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('user/images/favicon.png')}}">
    <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">

</head>

<style>
    .trash{
        background: #2cf61e;
        color: orange;
    }
    .button-container {
        display: flex;
        justify-content: space-between;
        text-align: center;
    }
    .completed-icon{
        font-size: 13px;
        width: 32px;
        color: #02b0fa; /* Màu sắc mặc định của biểu tượng */
        background: #16f8cf; /* Màu nền của biểu tượng */
        border-top-left-radius: 20%; /* Bo tròn cạnh trên bên trái */
        border-top-right-radius: 20%; /* Bo tròn cạnh trên bên phải */
        border-bottom-left-radius: 20%; /* Bo tròn cạnh trên bên trái */
        border-bottom-right-radius: 20%; /* Bo tròn cạnh trên bên phải */
        border: none;
    }
    .completed-icon i {
        color: #02b0fa; /* Màu sắc mặc định của biểu tượng */
        padding-top: 25%;
    }
    .fa-truck{
        color: rgb(245 157 57);
    }

    .bg-light {
        background-color: #007fff !important;
    }
</style>

<body onload="time()" class="app sidebar-mini rtl">
<!-- Navbar-->
@include('admin.header')
<main class="app-content">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item active"><a href="#"><b>Danh sách đơn hàng</b></a></li>
        </ul>
        <div id="clock"></div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="row element-button">
                        <div class="col-sm-2">
                            <a class="btn btn-add btn-sm" href="{{ asset('payment/payment-method') }}"><i class="fas fa-credit-card"></i> Xem phương thức thanh toán</a>
                        </div>
                        <div class="col-sm-2">
                            <a class="btn btn-delete btn-sm nhap-tu-file" type="button" title="Nhập" onclick="myFunction(this)"><i
                                    class="fas fa-file-upload"></i> Tải từ file</a>
                        </div>

                        <div class="col-sm-2">
                            <a class="btn btn-delete btn-sm print-file" type="button" title="In" onclick="myApp.printTable()"><i
                                    class="fas fa-print"></i> In dữ liệu</a>
                        </div>
                        <div class="col-sm-2">
                            <a class="btn btn-delete btn-sm print-file js-textareacopybtn" type="button" title="Sao chép"><i
                                    class="fas fa-copy"></i> Sao chép</a>
                        </div>

                        <div class="col-sm-2">
                            <a class="btn btn-excel btn-sm" href="" title="In"><i class="fas fa-file-excel"></i> Xuất Excel</a>
                        </div>
                        <div class="col-sm-2">
                            <a class="btn btn-delete btn-sm pdf-file" type="button" title="In" onclick="myFunction(this)"><i
                                    class="fas fa-file-pdf"></i> Xuất PDF</a>
                        </div>
                        <div class="col-sm-2">
                            <a class="btn btn-delete btn-sm" type="button" title="Xóa" onclick="myFunction(this)"><i
                                    class="fas fa-trash-alt"></i> Xóa tất cả </a>
                        </div>
                    </div>
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                        <tr>
                            <th width="10"><input type="checkbox" id="all"></th>
{{--                            <th>ID đơn hàng</th>--}}
                            <th>Khách hàng</th>
                            <th>Địa chỉ</th>
                            <th>Số điện thoại</th>
                            <th>Ngày đặt đơn hàng</th>
                            <th>Phương thức thanh toán</th>
                            <th>Tổng tiền đơn hàng</th>
                            <th>Trạng thái</th>
                            <th>Tính năng</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($orders as $order)
                        <tr>
                            <td width="10"><input type="checkbox" name="check1" value="1"></td>
{{--                            <td>MT9835</td>--}}
                            <td>{{ $order->customer->name }}</td>
                            <td>{{ $order->customer->address }}</td>
                            <td>{{ $order->customer->phone_number }} </td>
                            <td>{{ $order->purchase_date }}</td>
                            <td>{{ $order->paymentMethod->name }}</td>
                            <td>{{ number_format($order->totalPrice, 0, ',', '.') }} VND</td>
                            <td>
                                @if($order->status == 1)
                                    <span class="badge bg-primary">Chờ xác nhận</span>
                                @elseif($order->status == 2)
                                    <span class="badge bg-info">Đã duyệt đơn hàng</span>
                                @elseif($order->status == 3)
                                    <span class="badge bg-warning">Đang giao hàng</span>
                                @elseif($order->status == 4)
                                    <span class="badge bg-light">Đã giao hàng cho khách</span>
                                @elseif($order->status == 5)
                                    <span class="badge bg-success">Khách hàng đã nhận đơn hàng</span>
                                @elseif($order->status == 6)
                                    <span class="badge bg-danger">Đã hủy</span>
                                @endif
                            </td>
                            <td>
                                <div class="button-container">
                                    <a class="btn btn-primary btn-sm info" title="Chi tiết đon hàng" href="{{ route('order.orderDetail', ['order_id' => $order->id]) }}" style="margin-right: 5px;"><i class="fas fa-info-circle" style="color: #fc8686"></i></a>
                                    @if($order->status != 3 && $order->status != 2  && $order->status != 4 && $order->status != 5 && $order->status != 6)
                                        <a class="btn btn-primary btn-sm trash"  title="Xác nhận đơn hàng" href="{{ route('order.confirmOrder', ['order_id' => $order->id]) }}" style="margin-right: 5px;"><i class="fas fa-check"></i></a>
                                    @endif
                                    @if($order->status != 3 && $order->status != 1  && $order->status != 4 && $order->status != 5 && $order->status != 6)
                                        <a class="btn btn-primary btn-sm edit" title="Giao hàng cho bên vận chuyển" href="{{ route('order.shipOrder', ['order_id' => $order->id]) }}" style="margin-right: 5px;"><i class="fas fa-truck"></i></a>
                                    @endif
                                    @if($order->status != 2 && $order->status != 1  && $order->status != 4 && $order->status != 5 && $order->status != 6)
                                    <a class="btn btn-primary btn-sm success"  title="Đã giao đơn hàng" href="{{ route('order.confirmShipping', ['order_id' => $order->id]) }}"><i class="fas fa-check-circle"></i></a>
                                    @endif
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- Essential javascripts for application to work-->
<script src="{{asset('admin/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('admin/js/popper.min.js')}}"></script>
<script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
<script src="{{asset('/ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js')}}"></script>
<script src="src/jquery.table2excel.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="{{asset('admin/js/main.js')}}"></script>
<!-- The javascript plugin to display page loading on top-->
<script src="{{asset('admin/js/plugins/pace.min.js')}}"></script>
<!-- Page specific javascripts-->
<script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js')}}"></script>
<!-- Data table plugin-->
<script type="text/javascript" src="{{asset('admin/js/plugins/jquery.dataTables.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/js/plugins/dataTables.bootstrap.min.js')}}"></script>
<link rel="shortcut icon" type="image/x-icon" href="{{asset('user/images/favicon.png')}}">
<script type="text/javascript">$('#sampleTable').DataTable();</script>
<script>
    // function deleteRow(r) {
    //     var i = r.parentNode.parentNode.rowIndex;
    //     document.getElementById("myTable").deleteRow(i);
    // }
    // jQuery(function () {
    //     jQuery(".trash").click(function () {
    //         swal({
    //             title: "Thông báo",
    //             text: "Bạn đã xác nhận đơn hàng thành công",
    //             buttons: {
    //                 confirm: {
    //                     text: "OK",
    //                     value: true,
    //                     visible: true,
    //                     className: "swal-ok-button",
    //                     closeModal: true
    //                 }
    //             }
    //         });
    //     });
    // });
    // oTable = $('#sampleTable').dataTable();
    // $('#all').click(function (e) {
    //     $('#sampleTable tbody :checkbox').prop('checked', $(this).is(':checked'));
    //     e.stopImmediatePropagation();
    // });

    //EXCEL
    // $(document).ready(function () {
    //   $('#').DataTable({

    //     dom: 'Bfrtip',
    //     "buttons": [
    //       'excel'
    //     ]
    //   });
    // });


    //Thời Gian
    function time() {
        var today = new Date();
        var weekday = new Array(7);
        weekday[0] = "Chủ Nhật";
        weekday[1] = "Thứ Hai";
        weekday[2] = "Thứ Ba";
        weekday[3] = "Thứ Tư";
        weekday[4] = "Thứ Năm";
        weekday[5] = "Thứ Sáu";
        weekday[6] = "Thứ Bảy";
        var day = weekday[today.getDay()];
        var dd = today.getDate();
        var mm = today.getMonth() + 1;
        var yyyy = today.getFullYear();
        var h = today.getHours();
        var m = today.getMinutes();
        var s = today.getSeconds();
        m = checkTime(m);
        s = checkTime(s);
        nowTime = h + " giờ " + m + " phút " + s + " giây";
        if (dd < 10) {
            dd = '0' + dd
        }
        if (mm < 10) {
            mm = '0' + mm
        }
        today = day + ', ' + dd + '/' + mm + '/' + yyyy;
        tmp = '<span class="date"> ' + today + ' - ' + nowTime +
            '</span>';
        document.getElementById("clock").innerHTML = tmp;
        clocktime = setTimeout("time()", "1000", "Javascript");

        function checkTime(i) {
            if (i < 10) {
                i = "0" + i;
            }
            return i;
        }
    }
    //In dữ liệu
    var myApp = new function () {
        this.printTable = function () {
            var tab = document.getElementById('sampleTable');
            var win = window.open('', '', 'height=700,width=700');
            win.document.write(tab.outerHTML);
            win.document.close();
            win.print();
        }
    }
    //     //Sao chép dữ liệu
    //     var copyTextareaBtn = document.querySelector('.js-textareacopybtn');

    // copyTextareaBtn.addEventListener('click', function(event) {
    //   var copyTextarea = document.querySelector('.js-copytextarea');
    //   copyTextarea.focus();
    //   copyTextarea.select();

    //   try {
    //     var successful = document.execCommand('copy');
    //     var msg = successful ? 'successful' : 'unsuccessful';
    //     console.log('Copying text command was ' + msg);
    //   } catch (err) {
    //     console.log('Oops, unable to copy');
    //   }
    // });


    //Modal
    $("#show-emp").on("click", function () {
        $("#ModalUP").modal({ backdrop: false, keyboard: false })
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        @if(session('success'))
        Swal.fire({
            icon: 'success',
            title: 'Thành công!',
            text: '{{ session('success') }}',
        });
        @endif

        @if(session('error'))
        Swal.fire({
            icon: 'error',
            title: 'Lỗi!',
            text: '{{ session('error') }}',
        });
        @endif
    });
</script>


</body>

</html>
