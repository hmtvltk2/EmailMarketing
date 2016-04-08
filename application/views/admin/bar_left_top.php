<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Mail_Indigo!</span></a>
        </div>
        <div class="clearfix"></div>
        <!-- menu prile quick info -->
        <div class="profile">
            <div class="profile_pic">
                <img src="<?= base_url() ?>html/img/img.jpg" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Welcome,</span>
                <h2>Admin</h2>
            </div>
        </div>
        <!-- /menu prile quick info -->
        <br />
        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>Quản lý chung</h3>
                <ul class="nav side-menu">
                    <li><a href="<?=base_url()?>TrangChu_controllers/load"><i class="fa fa-home"></i> Trang chủ </a>
                    </li>
                    <li><a href="<?=base_url()?>KhachHang_controllers/load" ><i class="fa fa-users"></i> Khách hàng</a>
                    </li>
                    <li><a href="<?=base_url()?>Templates_controllers/load"><i class="fa fa-cut"></i> Template </a>
                    </li>
                    <li><a href="<?=base_url()?>ThuDienTu_controllers/load"><i class="fa fa-envelope-o"></i> Thư điện tử </a>
                    </li>
                    <li><a href="<?=base_url()?>ChienDich_controllers/load"><i class="fa fa-table"></i> Chiến dịch</a>
                    </li>
                    <li><a href="<?=base_url()?>ThietLap_controllers/load"><i class="fa fa-desktop"></i> Thiết lập </a>
                    </li>                 
                    
                </ul>
                </li>
                </ul>
            </div>
        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
            <a href="<?=base_url()?>ThietLap_controllers/load" data-toggle="tooltip" data-placement="top" title="Thiết lập">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Trợ giúp">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a href="<?= base_url() ?>Login_controllers/logout" data-toggle="tooltip" data-placement="top" title="Đăng xuất">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>

<!-- top navigation -->
<div class="top_nav">

    <div class="nav_menu">
        <nav class="" role="navigation">
            <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <img src="<?= base_url() ?>html/img/img.jpg" alt="">Admin
                        <span class=" fa fa-angle-down"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                        <li>
                            <a href="<?=base_url()?>ThietLap_controllers/load">
                                <span class="badge bg-red pull-right">100%</span>
                                <span>Thiết lập</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">Trợ giúp</a>
                        </li>
                        <li><a href="<?= base_url() ?>Login_controllers/logout"><i class="fa fa-sign-out pull-right"></i>Đăng xuất</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</div>
<!-- /top navigation -->