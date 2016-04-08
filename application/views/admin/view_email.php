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

                        <div class="x_panel">
                            <div class="x_title">
                                <h2><i class="fa fa-envelope-o"></i><small> Thư điện tử</small></h2>
                                <div class="clearfix"></div>
                            </div>    
                            <div class="col-md-8 col-xs-8" style="border-right: 1px solid #E6E9ED;">
                                <div class="email_gui">
                                    <div>
                                        <?php
                                        while (!feof($myfile)) {
                                            echo fgets($myfile);
                                        }
                                        fclose($myfile);
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-4">

                                <table class="table table-hover">
                                    <thead>
                                        <tr class="headings">
                                            <th class="column-title" style="font-weight: bold">Mã thư</th>
                                            <th class="column-title" style="font-weight: bold">#</th>
                                            <th class="column-title" style="font-weight: bold">lần gửi</th>
                                            <th class="column-title" style="font-weight: bold"><i class="fa fa-trash-o"></i></th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php foreach ($thuDienTu as $r): ?>    
                                            <tr class="even pointer">     
                                                <td class=" "><?php echo $r['maThu']; ?></td>
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

 <a href = "#" id = "show-alert" style="display: none"> Show Alert </a>
    <a href = "#" id = "show-info" style="display: none"> Show Info </a>
    <a href = "#" id = "show-success" style="display: none" > Show Success </a>
    <a href = "#" id = "show" style="display: none" > Show Success </a>
    <script type="text/javascript" >
        $(document).ready(function () {

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

         
        });

    </script>

    <div id="notification-1" class="notification ">Thao tác thất bại !</div>
    <div id="notification-2" class="notification ">Đã cập nhật !</div>
    <div id="notification-3" class="notification">Gửi thành công !</div>
    
</html>
