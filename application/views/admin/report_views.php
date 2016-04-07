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
                                <h2><i class="fa fa-bullhorn"></i><small> Chiến dịch </small></h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li style="padding-right: 13px; padding-top: 7px"> Mã chiến dịch: </li>
                                    <li> <select id="heard" class="form-control" required="" readonly="readonly">
                                            <option value=""></option>
                                            <?php foreach ($chienDich as $r): ?>                                                
                                                <option value=""><?php echo $r->maChienDich; ?></option>                                                                                               
                                            <?php endforeach ?>
                                        </select> 
                                    </li>

                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content" style="height: 400px; overflow-x: hidden">
                                <table class="table table-striped responsive-utilities jambo_table bulk_action">
                                    <thead>
                                        <tr class="headings">
                                            <th class="column-title">Mã</th>
                                            <th class="column-title">Mã thư</th>
                                            <th class="column-title">Mã DSKH</th>
                                            <th class="column-title">Ngày gửi</th>
                                            <th class="column-title">Tên chiến dịch</th>
                                            <th class="column-title">Người gửi</th>
                                            <th class="column-title">Email gửi</th>
                                            <th class="column-title">SL gửi</th>
                                            <th class="column-title">SL mở</th>
                                            <th class="column-title">SL click link</th>
                                            <th class="column-title"><i class="fa fa-trash-o"></i></th>
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
                                                <td class=" "><?php echo $r->SLgui; ?></td>
                                                <td class=" "><?php echo $r->SLmo; ?></td>
                                                <td class=" "><?php echo $r->SLclickLink; ?></td>                                   
                                                <td><input type="checkbox" class="xoaEmail" name="<?php echo $r->maChienDich; ?>" id="<?php echo $r->maChienDich; ?>"></td>                                                                                    
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
    <div id="notification-2" class="notification ">Đã cập nhật !</div>
    <div id="notification-3" class="notification">Gửi thành công !</div>
</html>
