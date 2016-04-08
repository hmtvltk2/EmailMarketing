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

                        <div class="x_panel" style="margin-top: 20px">
                            <div class="x_title">
                                <h2><i class="fa fa-bar-chart-o"></i><small> Báo cáo </small></h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li style="padding-right: 13px; padding-top: 7px"> Mã chiến dịch: </li>
                                    <li> 
                                        <select id="heard" class="form-control maChienDich_change" required="" readonly="readonly">
                                            <?php foreach ($chienDich as $r): ?>                                                
                                                <option value=""><?php echo $r->maChienDich; ?></option>                                                                                               
                                            <?php endforeach ?>
                                        </select> 
                                    </li>

                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">

                                <div class="row top_tiles">
                                    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="tile-stats">
                                            <div class="icon"><i class="fa fa-check-square-o"></i>
                                            </div>
                                            <div class="count slg_bc"><?php echo $info->SLgui ?></div>

                                            <h3>Gửi thành công</h3>
                                            <p>Số lượng khách hàng gửi thành công.</p>
                                        </div>
                                    </div>
                                    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="tile-stats">
                                            <div class="icon"><i class="fa fa-comments-o"></i>
                                            </div>
                                            <div class="count slm_bc"><?php echo $info->SLmo ?></div>

                                            <h3>Thư đã mở</h3>
                                            <p>Update số lượng người đọc thư.</p>
                                        </div>
                                    </div>
                                    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="tile-stats">
                                            <div class="icon"><i class="fa fa-paper-plane-o"></i>
                                            </div>
                                            <div class="count"><div class="count sltc_bc"><?php echo $info->SLclickLink ?></div></div>

                                            <h3>Người truy cập</h3>
                                            <p>Update số lượng người truy cập link.</p>
                                        </div>
                                    </div>
                                    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="tile-stats">
                                            <div class="icon"><i class="fa fa-thumbs-o-down"></i>
                                            </div>
                                            <div class="count sltb_bc"><?php echo $info->SLgui - $info->SLmo ?></div>

                                            <h3>Lượng thư bị hỏng</h3>
                                            <p>Số lượng thư chưa mở hoặc gửi thất bại.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="row" style="margin-top:45px;">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" style="text-align: left;">Mã chiến dịch : </label>
                                                    <label class="control-label col-md-9 col-sm-9 col-xs-12 maChienDich" style="text-align: left;font-weight: 100;margin-bottom: 10px;"><?php echo $info->maChienDich ?></label>
                                                </div>
                                            </div>
                                            <div class="item form-group">
                                                <div class="row">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" style="text-align: left;">Tên chiến dịch :  </label>
                                                    <label class="control-label col-md-9 col-sm-9 col-xs-12 tenChienDich" style="text-align: left;font-weight: 100;margin-bottom: 10px;"><?php echo $info->tenChienDich ?></label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" style="text-align: left;">Ngày gửi : </label>
                                                    <label class="control-label col-md-9 col-sm-9 col-xs-12 ngay" style="text-align: left;font-weight: 100;margin-bottom: 10px;"><?php echo $info->ngayGui ?></label>
                                                </div>
                                            </div>
                                            <div class="item form-group">
                                                <div class="row">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" style="text-align: left;">Tên gửi : </label>
                                                    <label class="control-label col-md-9 col-sm-9 col-xs-12 tenGui" style="text-align: left;font-weight: 100;margin-bottom: 10px;"><?php echo $info->tenGui ?></label>

                                                </div></div>
                                            <div class="item form-group">
                                                <div class="row">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" style="text-align: left;">Email gửi : </label>
                                                    <label class="control-label col-md-9 col-sm-9 col-xs-12 emailGui" style="text-align: left;font-weight: 100;margin-bottom: 10px;"><?php echo $info->emailGui ?></label>
                                                </div>
                                            </div>
                                            <div class="item form-group">
                                                <div class="row">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" style="text-align: left;">Khách hàng : </label>
                                                    <label class="control-label col-md-9 col-sm-9 col-xs-12 maDSKH" style="text-align: left;font-weight: 100;margin-bottom: 10px;"><?php echo $info->maDanhSachKhachHang ?></label>
                                                </div>
                                            </div>
                                            <div class="item form-group">
                                                <div class="row">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" style="text-align: left;">Thư gửi : </label>
                                                    <label class="control-label col-md-9 col-sm-9 col-xs-12 thu" style="text-align: left;font-weight: 100;margin-bottom: 10px;"><?php echo $info->maThu ?></label>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <section>
                                            <ul id="chart">

                                                <li title="<?php echo ($info->SLmo * 100 / $info->SLgui) ?>" class="m_1">
                                                    <span class="bar" style="background: #3B6BBB;color: white;padding-left: 10px;padding-top: 7px;">Thư đã mở</span>
                                                    <span class="percent"></span>
                                                </li>

                                                <li title="<?php echo ($info->SLclickLink * 100 / $info->SLgui) ?>" class="m_2">
                                                    <span class="bar" style="background: #C53A2E ;color: white;padding-left: 10px;padding-top: 7px;">Người truy cập link</span>
                                                    <span class="percent"></span>
                                                </li>
                                                <li title="<?php echo (($info->SLgui - $info->SLmo) * 100 / $info->SLgui) ?>" class="m_3">
                                                    <span class="bar" style="background: #2F944A;color: white;padding-left: 10px;padding-top: 7px;">Lượng thư bị hỏng</span>
                                                    <span class="percent"></span>
                                                </li>
                                                <li title="100" class="m_4">
                                                    <span class="bar" style="background: #EAB311;color: white;padding-left: 10px;padding-top: 5px;">Gửi thành công</span>
                                                    <span class="percent"></span>
                                                </li>
                                            </ul>

                                        </section>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="x_panel" style="margin-top: 20px">
                            <div class="x_title">
                                <h2><i class="fa fa-bullhorn"></i><small> Chiến dịch </small></h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content" style="height: 400px; overflow-x: hidden">
                                <table class="table table-striped responsive-utilities jambo_table bulk_action">
                                    <thead>
                                        <tr class="headings" style="background-color: #DEF0D8;color: black">
                                            <th class="column-title">Mã</th>
                                            <th class="column-title">Mã thư</th>
                                            <th class="column-title">Mã DSKH</th>
                                            <th class="column-title">Ngày gửi</th>
                                            <th class="column-title">Tên chiến dịch</th>
                                            <th class="column-title">Người gửi</th>
                                            <th class="column-title">Email gửi</th>
                                            <th class="column-title">#</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php foreach ($chienDich as $r): ?>    
                                            <tr class="even pointer">     
                                                <td class=" "><?php echo $r->maChienDich; ?></td>
                                                <td class=" "><?php echo $r->maThu; ?></td>
                                                <td class=" "><?php echo $r->maDanhSachKhachHang; ?></td>
                                                <td class=" "><?php echo $r->ngayGui; ?></td>
                                                <td class=" "><?php echo $r->tenChienDich; ?></td>
                                                <td class=" "><?php echo $r->tenGui; ?></td>
                                                <td class=" "><?php echo $r->emailGui; ?></td>                                 
                                                <td><a class="a" href="#" style="border: none" name="<?php echo $r->maChienDich; ?>" id="<?php echo $r->maChienDich; ?>">xem</a></td>                                                                                    
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

            $(function () {
                $('#chart li').each(function () {
                    var pc = $(this).attr('title');
                    pc = pc > 100 ? 100 : pc;
                    $(this).children('.percent').html(pc + '%');
                    var ww = $(this).width();
                    var len = parseInt(ww, 10) * parseInt(pc, 10) / 100;
                    $(this).children('.bar').animate({'width': len + 'px'}, 1500);
                });
            });


            $(".maChienDich_change").change(function () {
                ma = $(this).find(":selected").html();

                $.post("<?= base_url() ?>ChienDich_controllers/thayDoiMa", {id: ma}, function (data, status)
                {
                    mang = $.parseJSON(data);
                    $(".slg_bc").html(mang['SLgui']);
                    $(".slm_bc").html(mang['SLmo']);
                    $(".sltc_bc").html(mang['SLclickLink']);
                    $(".sltb_bc").html(mang['SLgui'] - mang['SLmo']);

                    $(".maChienDich").html(mang['maChienDich']);
                    $(".tenChienDich").html(mang['tenChienDich']);
                    $(".ngay").html(mang['ngayGui']);
                    $(".tenGui").html(mang['tenGui']);
                    $(".emailGui").html(mang['emailGui']);
                    $(".maDSKH").html(mang['maDanhSachKhachHang']);
                    $(".thu").html(mang['maThu']);

                    a = mang['SLmo'] * 100 / mang['SLgui'];
                    $(".m_1").attr('title', a);
                    a = mang['SLclickLink'] * 100 / mang['SLgui'];
                    $(".m_2").attr('title', a);
                    a = (mang['SLgui'] - mang['SLmo']) * 100 / mang['SLgui'];
                    $(".m_3").attr('title', a);

                    $('#chart li').each(function () {
                        var pc = $(this).attr('title');
                        pc = pc > 100 ? 100 : pc;
                        $(this).children('.percent').html(pc + '%');
                        var ww = $(this).width();
                        var len = parseInt(ww, 10) * parseInt(pc, 10) / 100;
                        $(this).children('.bar').animate({'width': len + 'px'}, 1500);
                    });
                });
            });

             $(".a").click(function () {
                 id = $(this).attr('name');
                
                  $.post("<?= base_url() ?>ChienDich_controllers/thayDoiMa", {id: id}, function (data, status)
                {
                    mang = $.parseJSON(data);
                    $(".slg_bc").html(mang['SLgui']);
                    $(".slm_bc").html(mang['SLmo']);
                    $(".sltc_bc").html(mang['SLclickLink']);
                    $(".sltb_bc").html(mang['SLgui'] - mang['SLmo']);

                    $(".maChienDich").html(mang['maChienDich']);
                    $(".tenChienDich").html(mang['tenChienDich']);
                    $(".ngay").html(mang['ngayGui']);
                    $(".tenGui").html(mang['tenGui']);
                    $(".emailGui").html(mang['emailGui']);
                    $(".maDSKH").html(mang['maDanhSachKhachHang']);
                    $(".thu").html(mang['maThu']);

                    a = mang['SLmo'] * 100 / mang['SLgui'];
                    $(".m_1").attr('title', a);
                    a = mang['SLclickLink'] * 100 / mang['SLgui'];
                    $(".m_2").attr('title', a);
                    a = (mang['SLgui'] - mang['SLmo']) * 100 / mang['SLgui'];
                    $(".m_3").attr('title', a);

                    $('#chart li').each(function () {
                        var pc = $(this).attr('title');
                        pc = pc > 100 ? 100 : pc;
                        $(this).children('.percent').html(pc + '%');
                        var ww = $(this).width();
                        var len = parseInt(ww, 10) * parseInt(pc, 10) / 100;
                        $(this).children('.bar').animate({'width': len + 'px'}, 1500);
                    });
                });
                
             });

        });

    </script>
</html>
