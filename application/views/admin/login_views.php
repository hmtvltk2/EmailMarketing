<!DOCTYPE html>
<html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <a href="login_views.php"></a>

    <title>Email marketing! | </title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url() ?>html/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>html/fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>html/css/animate.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="<?= base_url() ?>html/css/custom.css" rel="stylesheet">
    <link href="<?= base_url() ?>html/css/icheck/flat/green.css" rel="stylesheet">

    <script src="<?= base_url() ?>html/js/jquery.min.js"></script>

</head>

<body style="background:white;">
    <div id="wrapper">
        <div id="login" class="animate form">
            <section class="login_content">
                <form action="<?= base_url() ?>login_controllers/login" method="post">
                    <h1 style="font-size: 23px">ĐĂNG NHẬP</h1>
                    <div>
                        <input type="text" class="form-control" placeholder="Tên" name="username" required="" />
                    </div>
                    <div>
                        <input type="password" class="form-control" placeholder="Mật khẩu" name="password" required="" />
                    </div>
                    <div style="margin-bottom: 60px;">
                        <input type="submit" value="Gửi" class="btn btn-default" style="margin-left: 80px; padding-bottom: 3px;padding-top: 3px;margin-bottom: 3px"/>  
                        <a class="reset_pass">Quên mật khẩu?</a>
                    </div>
                    <div class="separator">
                        <br />
                        <div>
                            <h1><i class="fa fa-paw" style="font-size: 26px;"></i> Email marketing!</h1>
                            <p>©2016 Được phát triển bởi 2TL</p>
                        </div>
                    </div>
                </form>
                <!-- form -->
            </section>
            <!-- login -->
        </div>      
        <!-- wrapper -->
    </div>

</body>

</html>
