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
                                    <h2><small>Thư điện tử</small></h2>
                                    
                                    <ul class="nav navbar-right panel_toolbox">
                                        <p>Mã thư : 10</p>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>    
                                <div class="col-md-12 col-xs-12" style="border-right: 1px solid #E6E9ED;">
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
</html>
