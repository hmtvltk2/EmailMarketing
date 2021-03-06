<!DOCTYPE html>
<html lang="en">
    <head>   
        <?php $this->load->view("admin/head"); ?>

    </head>
    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                <div class="bar_left_top">
                    <?php $this->load->view("admin/bar_left_top"); ?>
                </div>

                <!-- page content -->
                <div class="right_col" role="main">
                    <div class="contet_main">
                        <div class="row">  
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2><i class="fa fa-pencil-square-o"></i><small> Tạo mới</small></h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"></a>
                                            </li>
                                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <form class="form-horizontal form-label-left input_mask" method="post">
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Mã danh sách *</label>
                                                <div class="col-md-9 col-sm-9 col-xs-12">
                                                    <input type="text" class="form-control" placeholder="Tự động" disabled="disabled" >
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Tên danh sách * </label>
                                                <div class="col-md-9 col-sm-9 col-xs-12">
                                                    <input type="text" class="form-control tenDS"  placeholder="Danh sách đăng ký tháng 2"  name="ten" required="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" >Ngày tạo * </label>
                                                <div class="col-md-9 col-sm-9 col-xs-12">
                                                    <input type="date" class="form-control ngayTao" placeholder="Read-Only Input" required="" name="ngay">
                                                </div>
                                            </div>
                                            <div class="ln_solid"></div>
                                            <div class="form-group">
                                                <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                                    <button type="reset" class="btn btn-primary">Hủy</button>
                                                    <button type="submit" class="btn btn-success themDanhSach">Lưu</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="x_panel" style="padding-right: 0;">
                                    <div class="x_title">
                                        <h2><i class="fa fa-list-alt"></i><small> Danh sách</small></h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                            </li>                                    
                                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content" style="overflow-x: hidden;height: 217px;">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Mã</th>
                                                    <th>Tên danh sách</th>
                                                    <th>Ngày tạo</th>
                                                    <th>SL email</th>
                                                    <th>xóa</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($ds1 as $r): ?>
                                                    <tr>
                                                        <td><?php echo $r['maLoai']; ?></td>
                                                        <td><?php echo $r['tenloai']; ?></td>
                                                        <td><?php echo $r['ngayTao']; ?></td>
                                                        <td><?php echo $r['num']; ?></td>
                                                        <td><input type="checkbox" class="xoaDanhSach" name="<?php echo $r['maLoai']; ?>" id="<?php echo $r['num']; ?>"></td>
                                                    </tr>
                                                <?php endforeach ?>                                             
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="x_panel" style="margin-top: 25px; background-color: rgba(247, 247, 247, 0.31)">
                                    <div class="x_title" style="border-bottom:none">
                                        <h2 style="font-size:13px; font-weight:bold;overflow: inherit">THÊM KHÁCH HÀNG</h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li style="padding-right: 13px; padding-top: 7px"> Mã danh sách : </li>
                                            <li> <select class="form-control maLoaiKhachHang" required="" readonly="readonly">
                                                    <?php foreach ($ds1 as $r): ?>                                                
                                                        <option value=""><?php echo $r['maLoai']; ?></option>                                                                                               
                                                    <?php endforeach ?>                                                 
                                                </select> 
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="x_panel">
                                            <div class="x_title">
                                                <h2><i class="fa fa-pencil"></i><small style="font-weight:100"> Nhập thủ công</small></h2>
                                                <ul class="nav navbar-right panel_toolbox"></ul>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="x_content">
                                                <form class="form-horizontal form-label-left input_mask" id="themKhachHang1" method="post">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Mã khách hàng</label>
                                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                                            <input type="text" class="form-control" placeholder="Tự động" disabled="disabled">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Khách hàng</label>
                                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                                            <input type="text" class="form-control t1 tenKH1" placeholder="" name="ten">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Địa chỉ email</label>
                                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                                            <input class="form-control col-md-7 col-xs-12 e1 emailKH1" required="" type="email" name="email">
                                                        </div>
                                                    </div>
                                                    <div class="ln_solid"></div>
                                                    <div class="form-group">
                                                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                                            <button type="reset" class="btn btn-primary rs1">Hủy</button>
                                                            <button  type="submit" class="btn btn-success">Lưu</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="x_panel">
                                            <p class="loading"></p>
                                            <div class="x_title">
                                                <h2 ><i class="fa fa-link"></i><small style="font-weight:100"> Thêm tự động</small></h2>
                                                <ul class="nav navbar-right panel_toolbox"></ul>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="x_content">
                                                <form class="form-horizontal form-label-left input_mask themKhachHang2">    
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nhập URL * </label>
                                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                                            <input class="form-control col-md-7 col-xs-12 url" required="required" type="url">
                                                        </div>
                                                    </div>
                                                    <div class="ln_solid" style="margin-top: 120px"></div>
                                                    <div class="form-group">
                                                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">

                                                            <button type="reset" class="btn btn-primary">Hủy</button>
                                                            <button type="submit" class="btn btn-success ">Đọc</button>
                                                        </div>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="x_panel">
                                            <div class="x_title">
                                                <h2><i class="fa fa-file-excel-o"></i><small style="font-weight:100"> Sao chép và dán từ Excel</small> </h2>                                       
                                                <ul class="nav navbar-right panel_toolbox"> </ul>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="x_content">
                                                <form class="form-horizontal form-label-left input_mask">   
                                                    <div class="form-group">
                                                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Dán *</label>
                                                        <div class="col-md-10 col-sm-10 col-xs-12 bu">
                                                            <textarea style="height: 165px" placeholder="Thông tin mỗi khách hàng trên một dòng" id="textarea" required="required" name="textarea" class="form-control col-md-7 col-xs-12"></textarea>
                                                        </div>
                                                    </div>  
                                                    <div class="ln_solid"></div>
                                                    <div class="form-group">
                                                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                                            <button type="" class="btn btn-primary">Hủy</button>
                                                            <button type="submit" class="btn btn-success ">Đọc</button>
                                                        </div>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="x_panel">
                                            <div class="x_title">
                                                <p class="loading"></p>
                                                <h2><i class="fa fa-folder-open-o"></i><small style="font-weight:100"> Thêm TXT file</small> </h2>
                                                <ul class="nav navbar-right panel_toolbox"></ul>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="x_content" >
                                                <form style="margin-top:20px"  method="post"  enctype="multipart/form-data" id="themKhachHang4" class="form-horizontal form-label-left input_mask">
                                                    <div><span>Chọn từ máy tính</span></div>
                                                    <label id="message1" style="color: #D87C7C;display: none">Select Your Image</label>
                                                    <input type="file"  name="file1" id="file1" required=""><br>
                                                    <input id="lala" name="lala" style="display:none">
                                                    <div class="ln_solid" style="margin-top:105px"></div>
                                                    <div class="form-group">
                                                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                                            <button type="reset" class="btn btn-primary">Hủy</button>
                                                            <button type="submit" class="btn btn-success " >Đọc</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2><i class="fa fa-list-alt"></i><small> DANH SÁCH KHÁCH HÀNG</small></h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li style="padding-right: 13px; padding-top: 7px"> Mã danh sách : </li>
                                            <li> 
                                                <select class="form-control timKhachHangTheoDanhSach" required="" readonly="readonly">
                                                    <?php foreach ($ds1 as $r): ?>                                                
                                                        <option value=""><?php echo $r['maLoai']; ?></option>                                                                                               
                                                    <?php endforeach ?>   
                                                </select> 
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>

                                    <div class="x_content" style="height: 400px; overflow-x: hidden">

                                        <p><a href="#">Lưu file</a></p>
                                        <div id="message_container" style="display:none">
                                            <span id="msg"></span>
                                            <a id="clear_ack" href="#" 
                                               onclick="$(this).parents('div#message_container').fadeOut(400); return false;">
                                                clear
                                            </a>
                                        </div>

                                        <table class="table table-striped responsive-utilities jambo_table bulk_action kh">
                                            <thead style="background-color: #DEF0D8;color: black; height: 40px">
                                                <tr class="headings">
                                                    <th class="column-title">STT </th>
                                                    <th class="column-title">Mã </th>
                                                    <th class="column-title">Mã danh sách</th>
                                                    <th class="column-title">Địa chỉ email</th>
                                                    <th class="column-title">Tên khách hàng</th>
                                                    <th class="column-title"><i class="fa fa-cogs"></i></th>
                                                    <th class="column-title"><i class="fa fa-trash-o"></i></th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php
                                                $k = 1;
                                                foreach ($ds2 as $r):
                                                    ?>
                                                    <tr>
                                                        <td><?php
                                                            echo $k;
                                                            $k++;
                                                            ?></td>
                                                        <td><?php echo $r->maKhachHang; ?></td>  
                                                        <td><?php echo $r->maLoaiKhachHang; ?></td> 
                                                        <td><?php echo $r->email; ?></td>
                                                        <td><?php echo $r->tenKhachHang; ?></td>                                                       

                                                        <td><a href="#" data-toggle="modal" name="<?php echo $r->maKhachHang; ?>" data-target="#myModal" class="suaKhachHang">sửa</a></td>
                                                        <td><input type="checkbox" class="xoaKhachHang" name="<?php echo $r->maKhachHang; ?>"></td>
                                                    </tr>
                                                <?php endforeach ?>   
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <footer>
                        <div class="copyright-info">
                            <p class="pull-right">Mail_Indigo - Được phát triển bởi<a href="https://colorlib.com">2TL</a>  
                            </p>
                        </div>
                        <div class="clearfix"></div>
                    </footer>
                    <!-- /footer content -->
                </div>
                <!-- /page content -->
            </div>
        </div>
    </body>

    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body" style="padding: 0px">

                    <div class="x_panel" style="margin-bottom: 0px">
                        <div class="x_title">
                            <h2><i class="fa fa-pencil"></i><small> Chỉnh sửa thông tin khách hàng</small></h2>
                            <ul class="nav navbar-right panel_toolbox"></ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <form class="form-horizontal form-label-left input_mask suaKhachHang_luu" method="post">
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Mã danh sách * </label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <li style="list-style: none"> 
                                            <select class="form-control maLoaiKhachHang_sua" required="" readonly="readonly">
                                                <?php foreach ($ds1 as $r): ?>                                                
                                                    <option value=""><?php echo $r['maLoai']; ?></option>                                                                                               
                                                <?php endforeach ?>   
                                            </select> 
                                        </li>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Mã khách hàng</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <input type="text" class="form-control maKhachHang_sua" placeholder="Tự động" disabled="disabled">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Tên khách hàng * </label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <input type="text" class="form-control t1 tenKhachHang_sua" placeholder="" name="ten">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Địa chỉ email * </label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <input class="form-control col-md-7 col-xs-12 e1 emailKhachHang_sua" required="required" type="email" name="email">
                                    </div>
                                </div>
                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Hủy</button>
                                        <button type="submit" class="btn btn-success">Lưu</button>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php $this->load->view("admin/footer"); ?>
    <script type="text/javascript" >
        $(document).ready(function () {

            reg_mail = /^[A-Za-z0-9]+([_\.\-]?[A-Za-z0-9])*@[A-Za-z0-9]+([\.\-]?[A-Za-z0-9]+)*(\.[A-Za-z]+)+$/;

            $("#lala").val($(".maLoaiKhachHang").find(":selected").html());
            var set_message = function (message) {
                var container = $('#msg_container');
                $(container).find('span#msg').html(message);
                $(container).show();
            };

            $(".maLoaiKhachHang").change(function () {
                $("#lala").val($(".maLoaiKhachHang").find(":selected").html());
            });
//            $(".timKhachHangTheoDanhSach").change(function () {
//                var ma = $(this).find(":selected").html();
//                var path = "<?= base_url() ?>" + "KhachHang_controllers/" + "reload/" +ma;
//                 window.location = path;
//            });

            $(".timKhachHangTheoDanhSach").change(function () {
                ma = $(this).find(":selected").html();

                $.post("<?= base_url() ?>KhachHang_controllers/get_list_KH_LoaiKhachHang", {id: ma}, function (data, status)
                {
                    $(".kh > tbody").remove();
                    mang = $.parseJSON(data);
                    a = 1;
                    $.each(mang, function (i, mang) {
                        var html = "<tr><td>" + a + "</td>" +
                                "<td>" + mang['maKhachHang'] + "</td>" +
                                "<td>" + mang['maLoaiKhachHang'] + "</td>" +
                                "<td>" + mang['email'] + "</td>" +
                                "<td>" + mang['tenKhachHang'] + "</td>";
                        var h = " <td><a href='#' data-toggle='modal' name='" + mang['maKhachHang'] + "' data-target='#myModal' class='suaKhachHang'>sửa</a></td>' ";
                        var k = " <td><input type='checkbox' class='xoaKhachHang' name='" + mang['maKhachHang'] + "'></td></tr>";
                        $(".kh").append(html + h + k);
                        a++;
                    });
                });
            });
            $(".xoaKhachHang").click(function () {
                var i10 = $(this).prop('checked');
                if (i10 == false) {
                    return;
                } else
                {
                    var ma = $(this).attr("name");
                    var k = confirm("Bạn có chắc chắn muốn xóa không?");
                    if (k == true)
                    {
                        $.post("<?= base_url() ?>KhachHang_controllers/delete_KH", {id: ma}, function (data, status)
                        {
                            if (data == '1') {
                                la = $(".timKhachHangTheoDanhSach").find(":selected").html();
                                $.post("<?= base_url() ?>KhachHang_controllers/get_list_KH_LoaiKhachHang", {id: la}, function (data, status)
                                {
                                    $(".kh > tbody").remove();
                                    mang = $.parseJSON(data);
                                    a = 1;
                                    $.each(mang, function (i, mang) {
                                        var html = '<tr><td>' + a + '</td>' +
                                                '<td>' + mang['maKhachHang'] + '</td>' +
                                                '<td>' + mang['maLoaiKhachHang'] + '</td>' +
                                                '<td>' + mang['email'] + '</td>' +
                                                '<td>' + mang['tenKhachHang'] + '</td>' +
                                                '<td><a href="#" data-toggle="modal" name="' + mang['maKhachHang'] + '" data-target="#myModal" class="suaKhachHang">sửa</a></td>' +
                                                '<td><input type="checkbox" class="xoaKhachHang" name="' + mang['maKhachHang'] + '"></td></tr>';
                                        $(".kh").append(html);
                                        a++;
                                    });
                                });
                                $('#show-success').click();
                            } else
                            {
                                $('#show-alert').click();
                                $('input[type="checkbox"]').attr("checked", false);
                            }
                        });
                    } else
                    {
                        $(this).attr("checked", false);
                    }
                }
            });

            $(".themDanhSach").click(function () {
                {
                    var tenDS = $(".tenDS").val();
                    var ngayTao = $(".ngayTao").val();
                    if (tenDS != "" && ngayTao != "")
                    {
                        $.post("<?= base_url() ?>KhachHang_controllers/insert_LKH", {ten: tenDS, ngay: ngayTao}, function (data, status)
                        {
                            if (data == "1") {
                                $('#show-success').click();
                                location.reload(true);
                            } else {
                                $('#show-alert').click();
                            }
                            ;
                        });
                    }
                }
            });

            $("#themKhachHang1").on('submit', (function (e) {

                e.preventDefault();
                var tenkh = $(".tenKH1").val();
                var email = $(".emailKH1").val();
                var maloai = $(".maLoaiKhachHang").find(":selected").html();

                if (email != "")
                {
                    if (reg_mail.test(email)) {
                        $.post("<?= base_url() ?>KhachHang_controllers/insert_KH1", {ten: tenkh, email: email, maLoaiKhachHang: maloai}, function (data, status)
                        {
                            if (data == 1) {
                                $('#show-success').click();
                                location.reload(true);
                            } else {
                                $('#show-info').click();
                                $(".emailKH1").val("");
                            }
                        });
                    }
                }
            }));

            $(".themKhachHang2").submit(function (e) {

                e.preventDefault();

                var url = $(".url").val();
                var maloai = $(".maLoaiKhachHang").find(":selected").html();
                if (url != "") {
                    $(".loading").show();
                    $.post("<?= base_url() ?>KhachHang_controllers/insert_KH2", {url: url, maLoaiKhachHang: maloai}, function (data, status)
                    {
                        html = "Đã thêm " + data + " khách hàng!";
                        $(".url_them").html(html);
                        $(".loading").hide();
                        $('#show').click();
                        location.reload(true);
                    });
                }

            });

            $("#themKhachHang4").on('submit', (function (e) {
                e.preventDefault();
                $('.loading').show();
                $.ajax({
                    url: "<?= base_url() ?>KhachHang_controllers/insert_KH4",
                    type: "POST",
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function (data) {
                        $(".loading").hide();
                        if (data == "Chọn lại text!")
                        {
                            html = "Chọn lại text!";
                             $(".url_them").html(html);
                              $('#show').click();
                            return;
                        } else
                        {
                            html = "Đã thêm " + data + " khách hàng!";
                            $(".url_them").html(html);
                            $('#show').click();
                            location.reload(true);
                        }
                    }
                });
            }));

            $("#file1").change(function () {
                $("#message1").empty();
                var file = this.files[0];
                var imagefile = file.type;
                if (!(imagefile == "text/plain"))
                {
                    $("#message1").html("Chọn lại file text !").show();
                    return false;
                }
            });

            $(".suaKhachHang").click(function () {
                var idd = $(this).attr('name');

                $.post("<?= base_url() ?>KhachHang_controllers/get_info_KH", {id: idd}, function (data, status)
                {
                    mang = $.parseJSON(data);
                    $(".maKhachHang_sua").val(idd);
                    $(".maLoaiKhachHang_sua").find(":selected").html(mang['maLoaiKhachHang']);
                    $(".emailKhachHang_sua").val(mang['email']);
                    $(".tenKhachHang_sua").val(mang['tenKhachHang']);
                });

            });

            $(".suaKhachHang_luu").submit(function (e) {
                e.preventDefault();

                maKhachHang_sua = $(".maKhachHang_sua").val();
                maLoaiKhachHang_sua = $(".maLoaiKhachHang_sua").find(":selected").html();
                emailKhachHang_sua = $(".emailKhachHang_sua").val();
                tenKhachHang_sua = $(".tenKhachHang_sua").val();

                if (emailKhachHang_sua != "")
                {
                    if (reg_mail.test(emailKhachHang_sua))
                    {
                        $.post("<?= base_url() ?>KhachHang_controllers/update_KH", {maKhachHang: maKhachHang_sua, ten: tenKhachHang_sua, email: emailKhachHang_sua, maLoaiKhachHang: maLoaiKhachHang_sua}, function (data, status)
                        {
                            if (data == "1") {
                                $('#show-success').click();
                                location.reload(true);
                            } else
                            {
                                $('#show-info').click();
                                $(".emailKhachHang_sua").val(emailKhachHang_sua);
                            }
                        });
                    } else {
                        alert("Nhập đúng định dạng email!");
                    }
                }
            });

            $(".xoaDanhSach").click(function () {
                var i10 = $(this).prop('checked');
                if (i10 == false) {
                    return;
                } else
                {
                    var ma = $(this).attr("name");
                    var sl = $(this).attr("id");
                    if (sl == "0")
                    {
                        var k = confirm("Bạn có chắc chắn muốn xóa không?");
                        if (k == true)
                        {
                            $.post("<?= base_url() ?>KhachHang_controllers/delete_LKH", {id: ma}, function (data, status)
                            {
                                if (data == '1') {
                                    $('#show-success').click();
                                    location.reload(true);
                                } else
                                {
                                    $(this).attr("checked", false);
                                    $('#show-alert').click();
                                }
                            });
                        } else
                        {
                            $(this).attr("checked", false);
                        }
                    } else
                    {
                        $('#show-alert').click();
                        $(this).attr("checked", false);
                    }
                }
            });

            $('#show-alert').click(function () {
                $("#notification-1").emerge({
                    theme: 'emerge-base top-right alert',
                });
            });
            $('#show-info').click(function () {
                $("#notification-2").emerge({
                    theme: 'emerge-base top-right info',
                });
            });
            $('#show-success').click(function () {
                $("#notification-3").emerge({
                    theme: 'emerge-base top-right success',
                });
            });

            $('#show').click(function () {
                $("#notification-4").emerge({
                    theme: 'emerge-base top-right success',
                });
            });

        });

    </script>

    <a href = "#" id = "show-alert" style="display: none"> Show Alert </a>
    <a href = "#" id = "show-info" style="display: none"> Show Info </a>
    <a href = "#" id = "show-success" style="display: none" > Show Success </a>
    <a href = "#" id = "show" style="display: none" > Show Success </a>

    <div id="notification-1" class="notification ">Thao tác thất bại !</div>
    <div id="notification-2" class="notification ">Đã tồn tại !</div>
    <div id="notification-3" class="notification">Đã cập nhật !</div>

    <div id="notification-4" class="notification url_them"></div>
</html>
