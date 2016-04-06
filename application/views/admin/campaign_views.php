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
                                <h2><small>chiến dịch</small></h2>
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
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Mã chiến dịch *</label>
                                        <div class="col-md-7 col-sm-7 col-xs-12">
                                            <input type="text" class="form-control maKhachHang_sua" placeholder="Tự động" disabled="disabled">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Tên chiến dịch * </label>
                                        <div class="col-md-7 col-sm-7 col-xs-12">
                                            <input type="text" class="form-control col-md-7 col-xs-12" required="" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Ngày gửi * </label>
                                        <div class="col-md-7 col-sm-7 col-xs-12">
                                            <input type="date" class="form-control ngayTao" required="" >
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="occupation">Tên gửi *</label>
                                        <div class="col-md-7 col-sm-7 col-xs-12">
                                            <input type="text" class="form-control col-md-7 col-xs-12" required="">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email gửi *</label>
                                        <div class="col-md-7 col-sm-7 col-xs-12">
                                            <input type="email" id="email" disabled="disabled" class="form-control col-md-7 col-xs-12" placeholder="<?php echo $taiKhoan->email ?>">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Chọn danh sách *</label>
                                        <div class="col-md-7 col-sm-7 col-xs-12">
                                            <select class="form-control timKhachHangTheoDanhSach" required="" readonly="readonly">
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
                                            <textarea style="height: 100px" id="textarea" class="form-control col-md-7 col-xs-12" placeholder="vd: Bạn nhận được email này vì bạn đã đăng ký tại khung đăng ký của tôi"></textarea>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Chọn thư gửi *</label>
                                        <div class="col-md-7 col-sm-7 col-xs-12">
                                            <select class="form-control timKhachHangTheoDanhSach" required="" readonly="readonly">
                                               <?php foreach ($thuDienTu as $r): ?>                                                
                                                    <option value=""><?php echo $r->maThu; ?></option>                                                                                               
                                                <?php endforeach ?>
                                            </select>                          
                                        </div>
                                        <div class="col-md-2 col-sm-2 col-xs-12">
                                            <button type="submit" class="btn btn-warning" style="padding-bottom: 4px;padding-top: 4px;margin-top: 2px">Tạo mới</button>
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
                        <div class="x_panel" style="margin-top: 20px">
                            <div class="x_title">
                                <h2><small>Danh sách đã tạo </small></h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li style="padding-right: 13px; padding-top: 7px"> Mã chiến dịch : </li>
                                    <li> <select id="heard" class="form-control" required="" readonly="readonly">
                                            <option value="">001</option>
                                            <option value="">002</option>
                                            <option value="">003</option>
                                            <option value="">004</option>
                                        </select> 
                                    </li>

                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content" style="height: 400px; overflow-x: hidden">
                                <table class="table table-striped responsive-utilities jambo_table bulk_action">
                                    <thead>
                                        <tr class="headings">
                                            <th class="column-title">Mã </th>
                                            <th class="column-title">Mã thư</th>
                                            <th class="column-title">Mã KH</th>
                                            <th class="column-title">SL gửi</th>
                                            <th class="column-title">SL thành công</th>
                                            <th class="column-title">SL mở thư</th>
                                            <th class="column-title">Tỷ lệ</th>
                                            <th class="column-title">#</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr class="even pointer">                                                   
                                            <td class=" ">1</td>
                                            <td class=" ">001</td>
                                            <td class=" ">001</td>
                                            <td class=" ">69</td>
                                            <td class=" ">60</td>
                                            <td class=" ">58</td>
                                            <td class=" ">80%</td>
                                            <td class=" last"><a href="#">chi tiết</a></td>                 
                                        </tr>
                                        <tr class="even pointer">                                                   
                                            <td class=" ">1</td>
                                            <td class=" ">001</td>
                                            <td class=" ">001</td>
                                            <td class=" ">69</td>
                                            <td class=" ">60</td>
                                            <td class=" ">58</td>
                                            <td class=" ">80%</td>
                                            <td class=" last"><a href="#">chi tiết</a></td>                 
                                        </tr>
                                        <tr class="even pointer">                                                   
                                            <td class=" ">1</td>
                                            <td class=" ">001</td>
                                            <td class=" ">001</td>
                                            <td class=" ">69</td>
                                            <td class=" ">60</td>
                                            <td class=" ">58</td>
                                            <td class=" ">80%</td>
                                            <td class=" last"><a href="#">chi tiết</a></td>                 
                                        </tr>
                                        <tr class="even pointer">                                                   
                                            <td class=" ">1</td>
                                            <td class=" ">001</td>
                                            <td class=" ">001</td>
                                            <td class=" ">69</td>
                                            <td class=" ">60</td>
                                            <td class=" ">58</td>
                                            <td class=" ">80%</td>
                                            <td class=" last"><a href="#">chi tiết</a></td>                 
                                        </tr>
                                    </tbody>

                                </table>
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
</html>
