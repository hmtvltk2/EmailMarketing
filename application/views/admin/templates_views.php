<!DOCTYPE html>
<html lang="en">
    <head>   
        <?php $this->load->view("admin/head"); ?>
    </head>
    <body class="nav-md">
        <div class="container body" style="font-size: 13px">
            <div class="main_container">

                <div class="bar_left_top">
                    <?php $this->load->view("admin/bar_left_top"); ?>
                </div>

                <!-- page content -->
                <div class="right_col" role="main">
                    <div class="contet_main">
                        <div>
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2><i class="fa fa-pencil-square-o"></i><small> Tạo thư mới</small></h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <form class="form-horizontal form-label-left input_mask" method="post">
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Mã thư *</label>
                                            <div class="col-md-7 col-sm-7 col-xs-12">
                                                <input type="text" class="form-control maKhachHang_sua" placeholder="Tự động" disabled="disabled" style="width: 50%">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" >Tên thư * </label>
                                            <div class="col-md-7 col-sm-7 col-xs-12">
                                                <input type="text" class="form-control col-md-7 col-xs-12 tenThu" required="" >
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" >Tiêu đề thư * </label>
                                            <div class="col-md-7 col-sm-7 col-xs-12">
                                                <input type="text" class="form-control col-md-7 col-xs-12 tieuDeThu" required="" >
                                            </div>
                                        </div>
                                    </form>                              
                                </div>
                            </div>
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2><small>Nội dung</small></h2>

                                    <ul class="nav navbar-right panel_toolbox"></ul>
                                    <div class="clearfix"></div>
                                </div>    
                                <div class="col-md-10 col-xs-10" style="border-right: 1px solid #E6E9ED;">
                                    <div class="email_gui">
                                        <div>
                                          <?php $this->load->view("admin/tl5"); ?>
                                        </div>
                                        <div class="chuKi" style="margin-left: 20px;">
                                            <p>Công ty : <?php echo $chuKi->tenCongTy ?></p>
                                            <p>Website : <?php echo $chuKi->websiteCongTy ?></p>
                                            <p>Số điện thoại : <?php echo $chuKi->soDienThoai ?></p>
                                            <p>Địa chỉ : <?php echo $chuKi->diaChiCongTy ?></p>
                                            <p><a href="#" style="color: #337ab7">Click tại đây để theo dõi.</a></p>
                                        </div>
                                    </div>
                                    <h4 class="loading"></h4>
                                    <button class="btn btn-success pull-right luu_Mail">Lưu</button>
                                </div>
                                <div class="col-md-2 col-xs-2">
                                    <div class="col-md-11 col-sm-11 col-xs-12 animated fadeInDown" style="margin-left: 10px">
                                        <div class="well profile_view button">
                                            <div class="col-sm-12">
                                                <h5 style="font-size: 15px">Basic</h5>    
                                                <img src="<?= base_url() ?>html/img/basic.png" alt="..." class="img-responsive">
                                            </div>
                                            <div class="col-xs-12 bottom text-center">
                                                <div class="col-xs-12 col-sm-12 emphasis">
                                                    <button type="button" class="btn btn-warning btn-xs" style="float: right"> <i class="fa fa-user"></i> Chọn </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-11 col-sm-11 col-xs-12 animated fadeInDown" style="margin-left: 10px">
                                        <div class="well profile_view button">
                                            <div class="col-sm-12">
                                                <h5 style="font-size: 15px">Order</h5>    
                                                <img src="<?= base_url() ?>html/img/order.png" alt="..." class="img-responsive">
                                            </div>
                                            <div class="col-xs-12 bottom text-center">
                                                <div class="col-xs-12 col-sm-12 emphasis">
                                                    <button type="button" class="btn btn-warning btn-xs" style="float: right"> <i class="fa fa-user"></i> Chọn </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-11 col-sm-11 col-xs-12 animated fadeInDown" style="margin-left: 10px">
                                        <div class="well profile_view button">
                                            <div class="col-sm-12">
                                                <h5 style="font-size: 15px">News</h5>    
                                                <img src="<?= base_url() ?>html/img/news.png" alt="..." class="img-responsive">
                                            </div>
                                            <div class="col-xs-12 bottom text-center">
                                                <div class="col-xs-12 col-sm-12 emphasis">
                                                    <button type="button" class="btn btn-warning btn-xs" style="float: right"> <i class="fa fa-user"></i> Chọn </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-11 col-sm-11 col-xs-12 animated fadeInDown" style="margin-left: 10px">
                                        <div class="well profile_view button">
                                            <div class="col-sm-12">
                                                <h5 style="font-size: 15px">Marketing</h5>    
                                                <img src="<?= base_url() ?>html/img/marketing.png" alt="..." class="img-responsive">
                                            </div>
                                            <div class="col-xs-12 bottom text-center">
                                                <div class="col-xs-12 col-sm-12 emphasis">
                                                    <button type="button" class="btn btn-warning btn-xs" style="float: right"> <i class="fa fa-user"></i> Chọn </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-11 col-sm-11 col-xs-12 animated fadeInDown" style="margin-left: 10px">
                                        <div class="well profile_view button">
                                            <div class="col-sm-12">
                                                <h5>Drip</h5>    
                                                <img src="<?= base_url() ?>html/img/drip.png" alt="..." class="img-responsive">
                                            </div>
                                            <div class="col-xs-12 bottom text-center">
                                                <div class="col-xs-12 col-sm-12 emphasis">
                                                    <button type="button" class="btn btn-warning btn-xs" style="float: right"> <i class="fa fa-user"></i> Chọn </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-11 col-sm-11 col-xs-12 animated fadeInDown" style="margin-left: 10px">
                                        <div class="well profile_view button">
                                            <div class="col-sm-12">
                                                <h5 style="font-size: 15px">Welcome</h5>    
                                                <img src="<?= base_url() ?>html/img/welcome.png" alt="..." class="img-responsive">
                                            </div>
                                            <div class="col-xs-12 bottom text-center">
                                                <div class="col-xs-12 col-sm-12 emphasis">
                                                    <button type="button" class="btn btn-warning btn-xs" style="float: right"> <i class="fa fa-user"></i> Chọn </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <footer>

                            <a href = "#" id = "show-alert" style="display: none"> Show Alert </a>
                            <a href = "#" id = "show-info" style="display: none"> Show Info </a>
                            <a href = "#" id = "show-success" style="display: none"> Show Success </a>
                            <a href = "#" id = "show" style="display: none" > Show Success </a>
                            <div class="copyright-info">
                                <div class="noiDung"></div>
                                <div class="pull-right">Mail_Indigo - Được phát triển bởi<a href="https://colorlib.com">2TL</a>  
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </footer>
                        <!-- /footer content -->
                    </div>
                </div>
            </div>

        </div>
        <!-- /page content -->
    </body>

    <?php $this->load->view("admin/footer"); ?>

    <script type="text/javascript" >
        $(document).ready(function () {
            $('.luu_Mail').click(function () {

                $(".noiDung").hide();
                $(".noiDung").html($('.email_gui').html());

                $(".tt1").html($(".tt1_").val());
                $(".ct1").html($(".ct1_").val());

                $(".tt2").html($(".tt2_").val());
                $(".ct2").html($(".ct2_").val());
                $(".ct22").html($(".ct22_").val());

                $(".tt3").html($(".tt3_").val());
                $(".ct3").html($(".ct3_").val());
                $(".ct33").html($(".ct33_").val());

                $(".noiDung #uploadimage1").remove();
                $(".noiDung #uploadimage2").remove();
                $(".noiDung textarea").remove();

                content = $(".noiDung").html();

                if ($(".tieuDeThu").val() == "" || $(".tenThu").val() == "")
                {
                    alert("Nhập đầy đủ thông tin!");
                } else
                {
                    tieuDeThu = $(".tieuDeThu").val();
                    tenThu = $(".tenThu").val();
                     $('#show-success').click();
                     $(".loading").show();
                    $.post("<?= base_url() ?>sendEmail_controllers/luuEmail", {content: content, tieuDeThu: tieuDeThu, tenThu: tenThu}, function (data, status)
                    {
                        $(".loading").hide();
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



    <div id="notification-1" class="notification ">Thao tác thất bại !</div>
    <div id="notification-2" class="notification ">Đã tồn tại !</div>
    <div id="notification-3" class="notification">Lưu thành công !</div>
</html>
