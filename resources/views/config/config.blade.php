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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.5/dist/sweetalert2.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('user/images/favicon.png')}}">
    <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css')}}">

</head>
<style>
    .Choicefile {
        display: block;
        background: #14142B;
        border: 1px solid #fff;
        color: #fff;
        width: 150px;
        text-align: center;
        text-decoration: none;
        cursor: pointer;
        padding: 5px 0px;
        border-radius: 5px;
        font-weight: 500;
        align-items: center;
        justify-content: center;
    }

    .Choicefile:hover {
        text-decoration: none;
        color: white;
    }

    #uploadfile,
    .removeimg {
        display: none;
    }

    #thumbbox {
        position: relative;
        width: 100%;
        margin-bottom: 20px;
    }

    .removeimg {
        height: 25px;
        position: absolute;
        background-repeat: no-repeat;
        top: 5px;
        left: 5px;
        background-size: 25px;
        width: 25px;
        /* border: 3px solid red; */
        border-radius: 50%;

    }

    .removeimg::before {
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        content: '';
        border: 1px solid red;
        background: red;
        text-align: center;
        display: block;
        margin-top: 11px;
        transform: rotate(45deg);
    }

    .removeimg::after {
        /* color: #FFF; */
        /* background-color: #DC403B; */
        content: '';
        background: red;
        border: 1px solid red;
        text-align: center;
        display: block;
        transform: rotate(-45deg);
        margin-top: -2px;
    }
</style>

<body onload="time()" class="app sidebar-mini rtl">
<!-- Navbar-->
@include('admin.header')

<main class="app-content">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item active"><a href="#"><b>Danh sách cấu hình</b></a></li>
        </ul>
        <div id="clock"></div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="row element-button">
                        <div class="col-sm-2">
                            <a class="btn btn-add btn-sm" id="openConfigDialog" title="Thêm"><i class="fas fa-plus"></i>
                                Tạo mới cấu hình</a>
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
                            <a class="btn btn-excel btn-sm" href="#" title="In" id="exportExcel">
                                <i class="fas fa-file-excel"></i> Xuất Excel
                            </a>
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
                            {{--                            <th>Mã sản phẩm</th>--}}
                            <th>Tên cấu hình</th>
                            <th>Số lượng</th>
                            <th>Giá tiền</th>
                            <th>Chức năng</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($configurations as $config)
                            <tr>
                                <td width="10"><input type="checkbox" name="check1" value="1"></td>
                                {{--                            <td>71309005</td>--}}
                                <td>{{ $config->ConfigurationName }}</td>
                                <td>{{ $config->amount }}</td>
                                <td>{{ number_format($config->price, 0, ',', '.') }} VND</td>
                                <td>
                                    <a class="btn btn-primary btn-sm edit" href="#" title="Sửa" data-id="{{ $config->ConfigurationId }}" data-name="{{ $config->ConfigurationName }}" data-amount="{{ $config->amount }}" data-price="{{ $config->price }}">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                @if ($config->ConfigurationId)
                                        <a class="btn btn-primary btn-sm view-details" href="{{ route('product.showDetail', ['configurationId' => $config->ConfigurationId]) }}" style="background-color: #FFEB3B;" title="Xem Chi Tiết">
                                            <i class="fas fa-search"></i>
                                        </a>
                                    @else
                                         Handle the case where ConfigurationId is not set
                                    @endif
                                    <form method="post" action="{{ route('config.destroy', $config->ConfigurationId) }}" style="display: inline-block;">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-primary btn-sm trash" title="Xóa" type="submit"
                                                onclick="myFunction(this)"><i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal dialog for the form -->
    <div class="modal fade" id="configModal" tabindex="-1" role="dialog" aria-labelledby="configModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document"> <!-- Adjust the modal size as needed -->
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="configModalLabel" style="color: rgba(87,125,248,0.72); font-size: 25px">Tạo mới cấu hình</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="row" method="post" action="{{ route('config.store') }}">
                        @csrf
                        <div class="form-group col-md-12">
                            <label for="name" class="control-label">Nhập tên cấu hình</label>
                            <input class="form-control" id="name" name="name" type="text">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="amount" class="control-label">Số lượng của cấu hình</label>
                            <input class="form-control" id="amount" name="amount" type="number" required>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="price" class="control-label">Nhập giá tiền cấu hình</label>
                            <input class="form-control" id="price" name="price" type="text" required>
                        </div>
                        <div class="form-group col-md-12">
                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                        </div>
                        <button class="btn btn-primary" id="addConfigEntry" style="margin-left: 15px; margin-right: 15px; margin-bottom: 15px">Lưu lại</button>
                        <a class="btn btn-secondary" data-dismiss="modal" style="margin-bottom: 15px">Hủy bỏ</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

{{--        <div id="edit-dialog" style="display: none;">--}}
{{--        <div class="card">--}}
{{--            <div class="card-header">Chỉnh sửa cấu hình</div>--}}
{{--            <div class="card-body">--}}
{{--                <form method="POST" action="{{ route('config.update', ['configuration' => $config->ConfigurationId ]) }}">--}}
{{--                    @csrf--}}
{{--                    @method('PUT')--}}

{{--                    <!-- Thêm các trường chỉnh sửa dữ liệu ở đây -->--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="name">Tên cấu hình</label>--}}
{{--                        <input type="text" name="name" id="name" class="form-control" value="{{ $config->ConfigurationName  }}">--}}
{{--                    </div>--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="amount">Số lượng</label>--}}
{{--                        <input type="text" name="amount" id="amount" class="form-control" value="{{ $config->amount }}">--}}
{{--                    </div>--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="price">Giá tiền</label>--}}
{{--                        <input type="text" name="price" id="price" class="form-control" value="{{ $config->price }}">--}}
{{--                    </div>--}}

{{--                    <!-- Thêm các trường khác ở đây -->--}}

{{--                    <button type="submit" class="btn btn-primary">Lưu</button>--}}
{{--                    <button type="button" onclick="closeEditDialog()" class="btn btn-secondary">Hủy</button>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

    <div class="modal fade" id="editConfigModal" tabindex="-1" role="dialog" aria-labelledby="editConfigModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editConfigModalLabel" style="color: rgba(87, 125, 248, 0.72); font-size: 25px">Sửa thông tin cấu hình</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="row" method="post" action="{{ route('config.update', ['id' => $product->id ]) }}">
                        @csrf
                        @method('PUT')
                        <div class="form-group col-md-12">
                            <label for="name" class="control-label">Tên cấu hình</label>
                            <input class="form-control" id="editName" name="name" type="text">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="amount" class="control-label">Số lượng của cấu hình</label>
                            <input class="form-control" id="editAmount" name="amount" type="number" required>
                        </div>
                        <div class="form-group col-md-12">
                            <label for "price" class="control-label">Giá tiền cấu hình</label>
                            <input class="form-control" id="editPrice" name="price" type="text" required>
                        </div>
                        <div class="form-group col-md-12">
                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                        </div>
                        <button class="btn btn-primary" id="saveConfigChanges" style="margin-left: 15px; margin-right: 15px; margin-bottom: 15px">Lưu thay đổi</button>
                        <a class="btn btn-secondary" data-dismiss="modal" style="margin-bottom: 15px">Hủy bỏ</a>
                    </form>
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
<script src="{{asset('https://cdn.jsdelivr.net/npm/sweetalert2@11')}}"></script>
<script src="{{asset('https://code.jquery.com/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('admin/js/main.js')}}"></script>
<!-- The javascript plugin to display page loading on top-->
<script src="{{asset('admin/js/plugins/pace.min.js')}}"></script>
<script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.0/xlsx.full.min.js')}}"></script>

<!-- Page specific javascripts-->
<script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js')}}"></script>
<!-- Data table plugin-->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.5/dist/sweetalert2.min.js"></script>
<!-- jQuery -->
<!-- Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{asset('admin/js/plugins/jquery.dataTables.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/js/plugins/dataTables.bootstrap.min.js')}}"></script>
<script type="text/javascript">
    $('#sampleTable').DataTable();
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
</script>
<script>
    jQuery(document).ready(function ($) {
        $('.trash').click(function (event) {
            var button = this;

            event.preventDefault(); // Prevent the default button behavior

            Swal.fire({
                title: "Cảnh báo",
                text: "Bạn có chắc chắn là muốn xóa thương hiệu này?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Đồng ý",
                cancelButtonText: "Hủy bỏ"
            }).then((result) => {
                if (result.isConfirmed) {
                    // Trigger the actual form submission
                    $(button).closest('form').submit();
                }
            });
        });
    });
</script>
<script>
    const inpFile = document.getElementById("inpFile");
    const loadFile = document.getElementById("loadFile");
    const previewContainer = document.getElementById("imagePreview");
    const previewContainer = document.getElementById("imagePreview");
    const previewImage = previewContainer.querySelector(".image-preview__image");
    const previewDefaultText = previewContainer.querySelector(".image-preview__default-text");
    inpFile.addEventListener("change", function () {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            previewDefaultText.style.display = "none";
            previewImage.style.display = "block";
            reader.addEventListener("load", function () {
                previewImage.setAttribute("src", this.result);
            });
            reader.readAsDataURL(file);
        }
    });
</script>
<script>

    function readURL(input, thumbimage) {
        if (input.files && input.files[0]) { //Sử dụng  cho Firefox - chrome
            var reader = new FileReader();
            reader.onload = function (e) {
                $("#thumbimage").attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
        else { // Sử dụng cho IE
            $("#thumbimage").attr('src', input.value);

        }
        $("#thumbimage").show();
        $('.filename').text($("#uploadfile").val());
        $('.Choicefile').css('background', '#14142B');
        $('.Choicefile').css('cursor', 'default');
        $(".removeimg").show();
        $(".Choicefile").unbind('click');

    }
    $(document).ready(function () {
        $(".Choicefile").bind('click', function () {
            $("#uploadfile").click();

        });
        $(".removeimg").click(function () {
            $("#thumbimage").attr('src', '').hide();
            $("#myfileupload").html('<input type="file" id="uploadfile"  onchange="readURL(this);" />');
            $(".removeimg").hide();
            $(".Choicefile").bind('click', function () {
                $("#uploadfile").click();
            });
            $('.Choicefile').css('background', '#14142B');
            $('.Choicefile').css('cursor', 'pointer');
            $(".filename").text("");
        });
    })
</script>

<script>
    document.getElementById('exportExcel').addEventListener('click', function() {
        const table = document.getElementById('sampleTable');

        // Tạo bản sao của bảng và loại bỏ cột "Chức năng"
        const clonedTable = table.cloneNode(true);
        const columnIndexToRemove = Array.from(clonedTable.querySelectorAll('th')).findIndex(th => th.textContent === 'Chức năng');
        if (columnIndexToRemove >= 0) {
            const thElements = clonedTable.querySelectorAll('th');
            thElements[columnIndexToRemove].remove();

            const trElements = clonedTable.querySelectorAll('tr');
            for (const tr of trElements) {
                const tdElements = tr.querySelectorAll('td');
                if (tdElements.length > columnIndexToRemove) {
                    tdElements[columnIndexToRemove].remove();
                }
            }
        }

        const ws = XLSX.utils.table_to_sheet(clonedTable);
        const wb = XLSX.utils.book_new();
        XLSX.utils.book_append_sheet(wb, ws, 'Sheet1');

        const blob = new Blob([s2ab(XLSX.write(wb, { bookType: 'xlsx', type: 'binary' }))], {
            type: 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'
        });

        const url = URL.createObjectURL(blob);
        const a = document.createElement('a');
        a.href = url;
        a.download = 'data.xlsx';
        a.click();
        window.URL.revokeObjectURL(url);
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
<script>
    // JavaScript to handle the modal dialog
    $(document).ready(function () {
        $('#openConfigDialog').click(function (e) {
            e.preventDefault();
            // Show the modal dialog
            $('#configModal').modal('show');
        });
    });
</script>
<script>
    // JavaScript to populate the modal when the "Edit" button is clicked
    $(document).on('click', '.edit', function() {
        var configId = $(this).data('id');
        var configName = $(this).data('name');
        var configAmount = $(this).data('amount');
        var configPrice = $(this).data('price');

        // Populate the modal form with the data
        $('#editName').val(configName);
        $('#editAmount').val(configAmount);
        $('#editPrice').val(configPrice);

        $("#editConfigModal").modal("show");

        // Set the form action URL
        $('#editConfigModal form').attr('action', '/realProject2/public/config/configurations/' + configId);
    });

    // Add additional JavaScript to handle form submission and AJAX requests for updating the configuration on the server.
</script>

</body>

</html>
