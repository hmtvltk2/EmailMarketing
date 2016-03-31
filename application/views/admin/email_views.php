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
                            <div class="x_title">
                                <h2><i class="fa fa-pencil-square-o"></i><small> Tạo thư mới</small></h2>
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
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Mã thư *</label>
                                        <div class="col-md-7 col-sm-7 col-xs-12">
                                            <input type="text" class="form-control maKhachHang_sua" placeholder="Tự động" disabled="disabled">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Tên thư * </label>
                                        <div class="col-md-7 col-sm-7 col-xs-12">
                                            <input type="text" class="form-control col-md-7 col-xs-12" required="" >
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Tiêu đề thư * </label>
                                        <div class="col-md-7 col-sm-7 col-xs-12">
                                            <input type="text" class="form-control col-md-7 col-xs-12" required="" >
                                        </div>
                                    </div>
                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-3">
                                            <button type="reset" class="btn btn-primary">Hủy</button>
                                            <button type="submit" class="btn btn-success">Lưu</button>
                                        </div>
                                    </div>

                                </form>                              
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
                                <div class="form-horizontal form-label-left input_mask" method="post">
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="website">Tên công ty *</label>
                                        <div class="col-md-7 col-sm-7 col-xs-12">
                                            <input type="text" id="website" class="form-control col-md-7 col-xs-12 tenCongTy" placeholder="<?php echo $chuKi->tenCongTy ?>" disabled="disabled">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Địa chỉ công ty *</label>
                                        <div class="col-md-7 col-sm-7 col-xs-12">
                                            <input type="text" id="website" class="form-control col-md-7 col-xs-12 diaChi" placeholder="<?php echo $chuKi->diaChiCongTy ?>" disabled="disabled">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Website công ty *</label>
                                        <div class="col-md-7 col-sm-7 col-xs-12">
                                            <input type="text" id="webite" class="form-control col-md-7 col-xs-12 website" placeholder="<?php echo $chuKi->websiteCongTy ?>" disabled="disabled">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Số điện thoại *</label>
                                        <div class="col-md-7 col-sm-7 col-xs-12">
                                            <input class="optional form-control col-md-7 col-xs-12 sdt" placeholder="<?php echo $chuKi->soDienThoai ?>" disabled="disabled">
                                        </div>
                                    </div>
                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-3">
                                            <button class="btn btn-warning suaChuKi">Sửa</button>
                                            <button class="btn btn-primary huy_chuKi">Hủy</button>
                                            <button class="btn btn-success luu_chuKi">Lưu</button>
                                        </div>
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

    <?php $this->load->view("admin/footer"); ?>
    <script type="text/javascript" >
        $(document).ready(function () {
            $(".huy_chuKi").hide();
            $(".luu_chuKi").hide();

            $(".suaChuKi").click(function () {
                $(this).hide();
                $(".sdt").attr('disabled', false);
                $(".tenCongTy").attr('disabled', false);
                $(".diaChi").attr('disabled', false);
                $(".website").attr('disabled', false);
                $(".huy_chuKi").show();
                $(".luu_chuKi").show();

                $.post("<?= base_url() ?>email_controllers/get_info_ChuKi_sua", function (data, status)
                {
                    mang = $.parseJSON(data);
                    $(".sdt").val(mang.soDienThoai);
                    $(".tenCongTy").val(mang.tenCongTy);
                    $(".diaChi").val(mang.diaChiCongTy);
                    $(".website").val(mang.websiteCongTy);

                });

            });
            $(".huy_chuKi").click(function () {
                $(this).hide();
                $(".sdt").val("");
                $(".tenCongTy").val("");
                $(".diaChi").val("");
                $(".website").val("");
                $(".huy_chuKi").hide();
                $(".luu_chuKi").hide();
                $(".suaChuKi").show();
            });

            $(".luu_chuKi").click(function () {
                sdt = $(".sdt").val();
                tenCongTy = $(".tenCongTy").val();
                diaChi = $(".diaChi").val();
                website = $(".website").val();

                $.post("<?= base_url() ?>email_controllers/update_ChuKi", {sdt: sdt, tenCongTy: tenCongTy, diaChi: diaChi, website: website}, function (data, status)
                {
                    if (data == "1")
                    {
                        alert("thanh cong");
                        $(".huy_chuKi").hide();
                        $(".luu_chuKi").hide();
                        $(".suaChuKi").show();
                         $(".sdt").attr('disabled', true);
                $(".tenCongTy").attr('disabled', true);
                $(".diaChi").attr('disabled', true);
                $(".website").attr('disabled', true);
                    }
                });

            });
        });

    </script>
</html>
