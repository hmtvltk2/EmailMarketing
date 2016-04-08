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
                        <div class="x_panel">
                            <p class="loading"></p>
                            <div class="x_title">
                                <h2><i class="fa fa-bullhorn"></i><small> Tạo mới chiến dịch</small></h2>
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
                                <form class="form-horizontal form-label-left input_mask" method="post" id="taoChienDich">
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Mã chiến dịch *</label>
                                        <div class="col-md-7 col-sm-7 col-xs-12">
                                            <input type="text" class="form-control maKhachHang_sua" placeholder="Tự động" disabled="disabled" style="width: 50%">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Tên chiến dịch * </label>
                                        <div class="col-md-7 col-sm-7 col-xs-12">
                                            <input type="text" class="form-control col-md-7 col-xs-12 tenChienDich" required="" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Ngày gửi * </label>
                                        <div class="col-md-7 col-sm-7 col-xs-12">
                                            <input type="date" class="form-control ngay" required="" name="<?php echo date("Y-m-d"); ?>" readonly="" >
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="occupation">Tên gửi *</label>
                                        <div class="col-md-7 col-sm-7 col-xs-12">
                                            <input type="text" class="form-control col-md-7 col-xs-12 tenGui" required="">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email gửi *</label>
                                        <div class="col-md-7 col-sm-7 col-xs-12">
                                            <input type="email" id="email" disabled="disabled" class="form-control col-md-7 col-xs-12 emailGui" placeholder="<?php echo $taiKhoan->email ?>">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Chọn danh sách *</label>
                                        <div class="col-md-7 col-sm-7 col-xs-12">
                                            <select class="form-control maDSKH" required="" readonly="readonly">
                                                <?php foreach ($dskh as $r): ?>                                                
                                                    <option value=""><?php echo $r->maLoai; ?></option>                                                                                               
                                                <?php endforeach ?>
                                            </select>                          
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Nhắc lại lý do <span class="required">*</span>
                                        </label>
                                        <div class="col-md-7 col-sm-7 col-xs-12">
                                            <textarea style="height: 100px" id="textarea" class="form-control col-md-7 col-xs-12 lyDo" placeholder="vd: Bạn nhận được email này vì bạn đã đăng ký tại khung đăng ký của tôi"></textarea>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Chọn thư gửi *</label>
                                        <div class="col-md-7 col-sm-7 col-xs-12">
                                            <select class="form-control timKhachHangTheoDanhSach maThuGui" required="" readonly="readonly">
                                                <option value=""></option> 
                                                <?php foreach ($thuDienTu as $r): ?>                                                
                                                    <option value=""><?php echo $r['maThu']; ?></option>                                                                                               
                                                <?php endforeach ?>
                                            </select>                          
                                        </div>
                                        <div class="col-md-2 col-sm-2 col-xs-12">
                                            <a href="<?= base_url() ?>Templates_controllers/load"><button class="btn btn-warning" style="padding-bottom: 4px;padding-top: 4px;margin-top: 2px" type="button">Tạo mới</button></a>
                                        </div>
                                    </div>
                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-3">
                                            <button type="reset" class="btn btn-primary">Hủy</button>
                                            <button type="submit" class="btn btn-success">Gửi</button>
                                        </div>
                                    </div>

                                </form>                              
                            </div>
                        </div>
                        <div class="x_panel" style="margin-top: 20px">
                            <div class="x_title">
                                <h2><i class="fa fa-envelope-o"></i><small> Danh sách thư đã tạo </small></h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li style="padding-right: 13px; padding-top: 7px"> Mã thư: </li>
                                    <li> <select class="form-control" required="" readonly="readonly">
                                            <option value=""></option>
                                            <?php foreach ($thuDienTu as $r): ?>                                                
                                                <option value=""><?php echo $r['maThu']; ?></option>                                                                                               
                                            <?php endforeach ?>
                                        </select> 
                                    </li>

                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content" style="height: 400px; overflow-x: hidden">
                                <table class="table table-striped responsive-utilities jambo_table bulk_action">
                                    <thead style="background-color: #DEF0D8;color: black">
                                        <tr class="headings">
                                            <th class="column-title">Mã thư</th>
                                            <th class="column-title">Tên thư</th>
                                            <th class="column-title">Tiêu đề thư</th>
                                            <th class="column-title">#</th>
                                            <th class="column-title">Số lần gửi</th>
                                            <th class="column-title"><i class="fa fa-trash-o"></i></th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php foreach ($thuDienTu as $r): ?>    
                                            <tr class="even pointer">     
                                                <td class=" "><?php echo $r['maThu']; ?></td>
                                                <td class=" "><?php echo $r['tenThu']; ?></td>
                                                <td class=" "><?php echo $r['tieuDe']; ?></td>
                                                <td><a href="<?= base_url() ?>ThuDienTu_controllers/xemThu/<?php echo $r['noiDung']; ?>">xem nội dung</a></td>   
                                                <td class=" "><?php echo $r['num']; ?></td>
                                                <td><input type="checkbox" class="xoaEmail" name="<?php echo $r['maThu']; ?>" id="<?php echo $r['num']; ?>"></td>                                                                                    
                                            </tr>
                                        <?php endforeach ?>
                                    </tbody>

                                </table>
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
                </div>
                <div class="thu"></div>
                <!-- /footer content -->
            </div>
            <!-- /page content -->
        </div>
    </body>
    <?php $this->load->view("admin/footer"); ?>
    <a href = "#" id = "show-alert" style="display: none"> Show Alert </a>
    <a href = "#" id = "show-info" style="display: none"> Show Info </a>
    <a href = "#" id = "show-success" style="display: none" > Show Success </a>
    <a href = "#" id = "show" style="display: none" > Show Success </a>
    <script type="text/javascript" >
        $(document).ready(function () {

            a = $(".ngay").attr("name");
            $(".ngay").val(a);

            $('#taoChienDich').submit(function (e) {


                e.preventDefault();
                var tenChienDich = $(".tenChienDich").val();
                var ngay = $(".ngay").val();
                var tenGui = $(".tenGui").val();
                var emailGui = $(".emailGui").attr('placeholder');
                var maDSKH = $(".maDSKH").find(":selected").html();
                var lyDo = $(".lyDo").val();
                var maThuGui = $(".maThuGui").find(":selected").html();
                $(".loading").show();
                $.post("<?= base_url() ?>chienDich_controllers/insert_ChienDich", {tenChienDich: tenChienDich, ngay: ngay, tenGui: tenGui, emailGui: emailGui, maDSKH: maDSKH, lyDo: lyDo, maThuGui: maThuGui}, function (data, status)
                {
                    $(".loading").hide();
                    if (data == "0") {
                    } else {
                        $('#show-success').click();
                        window.location = "<?=base_url()?>TrangChu_controllers/load";
                    }
                });
            });

            $(".xoaEmail").click(function () {

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
                            $.post("<?= base_url() ?>chienDich_controllers/delete_thuDienTu", {id: ma}, function (data, status)
                            {
                                if (data == '1') {
                                    $('#show-info').click();
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

            $(".maThuGui").change(function () {
                var maThuGui = $(".maThuGui").find(":selected").html();
                $.post("<?= base_url() ?>ChienDich_controllers/get_id_Cuoi_v", {}, function (data, status)
                {
                    macd = data;
                    $.post("<?= base_url() ?>SendEmail_controllers/get_Thu", {id: maThuGui}, function (data, status)
                    {
                        $(".thu").hide();
                        $(".thu").html(data);
                        pat = $(".link_dinhKem").attr("name");
                        pat = "<?= base_url() ?>ChienDich_controllers/update_SLclickLink/" + macd + "/" + pat;
                        $(".link_dinhKem").attr("href", pat)
                        $cont = $(".thu").html();
                        $.post("<?= base_url() ?>sendEmail_controllers/update_Email", {content: $cont, id: maThuGui}, function (data, status)
                        {
                        });
                    });
                });
            });
        });

    </script>

    <div id="notification-1" class="notification ">Thao tác thất bại !</div>
    <div id="notification-2" class="notification ">Đã cập nhật !</div>
    <div id="notification-3" class="notification">Gửi thành công !</div>
</html>
