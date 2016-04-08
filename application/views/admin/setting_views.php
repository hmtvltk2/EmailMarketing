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
                                        <h2><i class="fa fa-gears"></i><small> Cài đặt tài khoản</small></h2>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <form class="form-horizontal form-label-left input_mask luu_TaiKhoan" method="post">
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Email * </label>
                                                <div class="col-md-9 col-sm-9 col-xs-12">
                                                    <input disabled="disabled" class="form-control col-md-7 col-xs-12 e1 email_gui_tk" placeholder="<?php echo $taiKhoan->email ?>"   required="required" type="email" name="email">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Tên tài khoản * </label>
                                                <div class="col-md-9 col-sm-9 col-xs-12">
                                                    <input disabled="disabled" type="text" class="form-control tenDS ten_tk"  placeholder="<?php echo $taiKhoan->tenTaiKhoan ?>"  name="ten" required="">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Mật khẩu * </label>
                                                <div class="col-md-9 col-sm-9 col-xs-12">
                                                    <input disabled="disabled" class="form-control col-md-7 col-xs-12 e1 mk_tk" id="<?php echo $taiKhoan->matKhau ?>" placeholder="**********" required="required" type="password">
                                                </div>
                                            </div>

                                            <div class="ln_solid"></div>
                                            <div class="form-group">
                                                <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                                    <button class="btn btn-success suaTaiKhoan">Sửa</button>
                                                    <button class="btn btn-primary huy_TaiKhoan" style="display:none">Hủy</button>
                                                    <button class="btn btn-success TaiKhoan" style="display:none" type="submit">Lưu</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2><i class="fa fa-thumb-tack"></i><small> Thiết lập gửi </small></h2>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <form class="form-horizontal form-label-left input_mask" method="post">
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Email gửi * </label>
                                                <div class="col-md-9 col-sm-9 col-xs-12">
                                                    <input disabled="disabled" type="text" class="form-control tenDS"  placeholder="<?php echo $thietLap->emailGui ?>"  name="ten" required="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Email trả lời * </label>
                                                <div class="col-md-9 col-sm-9 col-xs-12">
                                                    <input disabled="disabled" class="form-control col-md-7 col-xs-12 e1 " required="required" type="email" name="email" placeholder="<?php echo $thietLap->emailNhanTraLoi ?>" >
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Mật khẩu gửi * </label>
                                                <div class="col-md-9 col-sm-9 col-xs-12">
                                                    <input disabled="disabled" class="form-control col-md-7 col-xs-12 e1 " required="required" type="password" id="<?php echo $thietLap->matKhauEmail ?>" placeholder="*********">
                                                </div>
                                            </div>
                                            <div class="ln_solid"></div>
                                            <div class="form-group">
                                                <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                                    <button class="btn btn-primary suaThietLap">Sửa</button>
                                                    <button class="btn btn-warning huy_ThietLap" style="display:none">Hủy</button>
                                                    <button class="btn btn-success luu_ThietLap" style="display:none" type="submit">Lưu</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="x_panel">
                            <div class="x_title">
                                <h2><i class="fa fa-rupee"></i><small> Chữ ký</small></h2>
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
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="website">Tên công ty *</label>
                                        <div class="col-md-7 col-sm-7 col-xs-12">
                                            <input type="text" id="website" class="form-control col-md-7 col-xs-12 tenCongTy" placeholder="<?php echo $chuKi->tenCongTy ?>" disabled="disabled" required="">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Địa chỉ công ty *</label>
                                        <div class="col-md-7 col-sm-7 col-xs-12">
                                            <input type="text" id="website" class="form-control col-md-7 col-xs-12 diaChi" placeholder="<?php echo $chuKi->diaChiCongTy ?>" disabled="disabled" required="">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Website công ty *</label>
                                        <div class="col-md-7 col-sm-7 col-xs-12">
                                            <input type="text" id="webite" class="form-control col-md-7 col-xs-12 website" placeholder="<?php echo $chuKi->websiteCongTy ?>" disabled="disabled" required="">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Số điện thoại *</label>
                                        <div class="col-md-7 col-sm-7 col-xs-12">
                                            <input class="optional form-control col-md-7 col-xs-12 sdt" placeholder="<?php echo $chuKi->soDienThoai ?>" disabled="disabled" required="">
                                        </div>
                                    </div>
                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-3">
                                            <button class="btn btn-warning suaChuKi">Sửa</button>
                                            <button class="btn btn-primary huy_chuKi">Hủy</button>
                                            <button class="btn btn-success luu_chuKi" type="submit">Lưu</button>
                                        </div>
                                    </div>

                                </form>                              
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

    <?php $this->load->view("admin/footer"); ?>
    <script type="text/javascript" >
        $(document).ready(function () {
            $(".huy_chuKi").hide();
            $(".luu_chuKi").hide();

            $(".suaChuKi").click(function (e) {
                $(this).hide();
                e.preventDefault();
                $(".sdt").attr('disabled', false);
                $(".tenCongTy").attr('disabled', false);
                $(".diaChi").attr('disabled', false);
                $(".website").attr('disabled', false);
                $(".huy_chuKi").show();
                $(".luu_chuKi").show();

                $.post("<?= base_url() ?>ThietLap_controllers/get_info_ChuKi_sua", function (data, status)
                {
                    mang = $.parseJSON(data);
                    $(".sdt").val(mang.soDienThoai);
                    $(".tenCongTy").val(mang.tenCongTy);
                    $(".diaChi").val(mang.diaChiCongTy);
                    $(".website").val(mang.websiteCongTy);

                });

            });
            $(".huy_chuKi").click(function (e) {
                e.preventDefault();
                $(this).hide();
                $(".sdt").val("");
                $(".tenCongTy").val("");
                $(".diaChi").val("");
                $(".website").val("");
                $(".huy_chuKi").hide();
                $(".luu_chuKi").hide();
                $(".suaChuKi").show();
                $(".sdt").attr('disabled', true);
                $(".tenCongTy").attr('disabled', true);
                $(".diaChi").attr('disabled', true);
                $(".website").attr('disabled', true);
            });
            $(".luu_chuKi").click(function (e) {
                e.preventDefault();
                sdt = $(".sdt").val();
                tenCongTy = $(".tenCongTy").val();
                diaChi = $(".diaChi").val();
                website = $(".website").val();

                if (sdt != "" || tenCongTy != "" || diaChi != "" || website != "")
                {
                    $.post("<?= base_url() ?>ThietLap_controllers/update_ChuKi", {sdt: sdt, tenCongTy: tenCongTy, diaChi: diaChi, website: website}, function (data, status)
                    {
                        if (data == "1")
                        {
                            $('#show-success').click();
                            $(".huy_chuKi").hide();
                            $(".luu_chuKi").hide();
                            $(".suaChuKi").show();
                            $(".sdt").attr('disabled', true);
                            $(".tenCongTy").attr('disabled', true);
                            $(".diaChi").attr('disabled', true);
                            $(".website").attr('disabled', true);
                        }
                    });
                }

            });

            $(".suaTaiKhoan").click(function (e) {
                e.preventDefault();
                $(this).hide();
                $(".email_gui_tk").attr('disabled', false);
                $(".ten_tk").attr('disabled', false);
                $(".mk_tk").attr('disabled', false);
                $(".huy_TaiKhoan").show();
                $(".TaiKhoan").show();

                $(".email_gui_tk").val($(".email_gui_tk").attr('placeholder'));
                $(".ten_tk").val($(".ten_tk").attr('placeholder'));
                $(".mk_tk").val("");
            });

            $(".huy_TaiKhoan").click(function (e) {
                e.preventDefault();

                $(".email_gui_tk").val("");
                $(".ten_tk").val("");
                $(".mk_tk").val("");
                $(".huy_TaiKhoan").hide();
                $(".TaiKhoan").hide();
                $(".suaTaiKhoan").show();
            });

            $(".luu_TaiKhoan").submit(function (e) {
                e.preventDefault();
                email_gui_tk = $(".email_gui_tk").val();
                ten_tk = $(".ten_tk").val();
                mk_tk = $(".mk_tk").val();

                if (email_gui_tk != "" || ten_tk != "" || mk_tk != "")
                {
                    $.post("<?= base_url() ?>ThietLap_controllers/update_TaiKhoan", {email_gui_tk: email_gui_tk, ten_tk: ten_tk, mk_tk: mk_tk}, function (data, status)
                    {
                        if (data == "1")
                        {
                           $('#show-success').click();
                            $(".huy_TaiKhoan").hide();
                            $(".TaiKhoan").hide();
                            $(".suaTaiKhoan").show();

                            $(".email_gui_tk").attr('disabled', true);
                            $(".ten_tk").attr('disabled', true);
                            $(".mk_tk").attr('disabled', true);
                        }
                    });
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
