<? if(!isset($hidden_top)){?>
<!-- SIDEBAR - START -->
            <div class="page-sidebar ">


                <!-- MAIN MENU - START -->
                <div class="page-sidebar-wrapper" id="main-menu-wrapper"> 
<?
                if(isset($user_info)&&$user_info!=''){  ?>
                    <!-- USER INFO - START -->
                    <div class="profile-info row">

                        <div class="profile-image col-md-4 col-sm-4 col-xs-4">
                            <a target="_blank" href="/thanh-vien/doi-avatar.html">
                                <img src="<? echo show_img(str_replace('upload/images/avatar/','',$user_info['Avatar']),$thumb='150x150','/upload/images/avatar/');?>" class="img-responsive img-circle">
                            </a>
                        </div>

                        <div class="profile-details col-md-8 col-sm-8 col-xs-8">

                            <h3>
                                <a href="/thanhvien/suathanhvien/<? echo $this->session->userdata('userid');?>?region=9-1"><? echo $user_info['username'];?></a>

                                <!-- Available statuses: online, idle, busy, away and offline -->
                                <span class="profile-status online"></span>
                            </h3>

                            <p class="profile-title">Quản trị website</p>

                        </div>

                    </div>
                    <!-- USER INFO - END '/'=>'',-->
 <?}?>


                    <ul class='wraplist'>
                        <?
                        function showTotal($total){
                            if($total){
        $show_total='<span class="label label-success" style="padding: 5px;padding-top: 3px;padding-bottom:0px;font-size:14px">'.$total.'</span>';
    }else{
        $show_total=''; 
        
    }
    return $show_total;
                        } 
                        $show_total=showTotal(Modules::run('trangchu/totalRows','tinban',array()));
                        $member=showTotal(Modules::run('trangchu/totalRows','thanhvien',array()));
                        $truycap=showTotal(Modules::run('trangchu/totalRows','truycap',array()));
                        $tintuc=showTotal(Modules::run('trangchu/totalRows','baiviet',array('Loai IN(\'TinTuc\',\'TuVanXe\',\'SoSanhXe\',\'DanhGiaXe\',\'KinhNghiem\') and IDBaiViet !='=>'')));
    
                        $listMenus=array(
                            'Bảng điều khiển chính|dashboard'=>'admin',
                            'Danh mục bất động sản|folder-open'=>array(
                                  'Tạo danh mục mới'=>'baiviet/taobaiviet/0/DanhMuc?region=2-1',
                                  'Quản lý danh mục'=>'baiviet/quanlybaiviet/true/DanhMuc?region=2-2',
                            ),
                            'Quản lý tin rao|edit'=>array(
                                  'Tin đang chờ kiểm duyệt'=>'dangtin/quanlytinban_admin/true/1/0?region=3-1',
                                  'Quản lý tin rao thường'=>'dangtin/quanlytinban_admin/true/1/1/free_user?region=3-2',
                                  'Quản lý tin rao VIP'=>'dangtin/quanlytinban_admin/true/1/1/vip_user?region=3-3',
                                  'Quản lý tin rao SIÊU VIP'=>'dangtin/quanlytinban_admin/true/1/1/xsieuvip_user?region=3-4',
                                  'Quản lý tin rao HOT'=>'dangtin/quanlytinban_admin/true/1/1/hot?region=3-5',
                                  'Quản lý tất cả các tin rao'=>'dangtin/quanlytinban_admin/true/1?region=3-6',
                                  //'Quản lý thông báo lỗi'=>'dangtin/quanlygopy/true/1?region=3-6',
                            ),
                            'Dự án bất động sản|suitcase'=>array(
                                  'Thêm dự án mới'=>'salon/taosalon/0/?region=4-1',
                                  'Quản lý dự án BĐS'=>'salon/quanlysalon/true/?region=4-2', 
                            ),
                            'Banner quảng cáo|image'=>array(
                                  'Thêm Banner mới'=>'baiviet/taobaiviet/0/Banner?region=5-1',
                                  'Quản lý Banner'=>'baiviet/quanlybaiviet/true/Banner?region=5-2',
                            ),
                            'Quản lý tin tức|newspaper-o'=>array(
                                  'Viết tin tức mới'=>'baiviet/taobaiviet/0/TinTuc?region=6-1',
                                  'Quản lý tin tức'=>'baiviet/quanlybaiviet/true/TinTuc?region=6-2',
                            ),
                            'Quản lý menu|navicon'=>array(
                                  'Menu đầu trang'=>array(
                                               'Thêm menu mới'=>'baiviet/taobaiviet/0/MenuHeader?region=7-1-1',
                                               'Quản lý menu'=>'baiviet/quanlybaiviet/true/MenuHeader?region=7-1-2',
                                  ),
                                  'Menu chân trang'=>array(
                                               'Thêm menu mới'=>'baiviet/taobaiviet/0/MenuFooter?region=7-2-1',
                                               'Quản lý menu'=>'baiviet/quanlybaiviet/true/MenuFooter?region=7-2-2',
                                  ),
                            ),
                            'Thống kê truy cập|bar-chart'=>array(
                                  'Khách đang online'=>'truycap/dangonline/1/true?region=8-1',
                                  'Quản lý truy cập'=>'truycap/quanlytruycap/1/true?region=8-2',
                            ),
                            'Quản lý thành viên|user'=>array(
                                  'Tạo tài khoản mới'=>'admin/taotaikhoan?region=9-1',
                                  'Danh sách thành viên'=>'thanhvien/quanlythanhvien/1/true?region=9-2',
                            ),
                            'Quản lý email|envelope'=>array(
                                  'Gửi email'=>'email/guiemail?region=10-1',
                                  'Email đăng ký thành viên'=>'email/thietlapmauemail/EmailChaoMung/?region=10-2',
                                  'Email kích hoạt'=>'email/thietlapmauemail/EmailKichHoat?region=10-3',
                                  'Email quên mật khẩu'=>'email/thietlapmauemail/EmailQuenMatKhau?region=10-4',
                                  'Cấu hình tài khoản email'=>'email/cauhinhemail?region=10-5',
                            ),
                            'Cài đặt website|cog'=>array(
                                  'Đóng/ Mở Website'=>'admin/dongmowebsite?region=11-1',
                                  'Cấu hình chung'=>'admin/suathongtin?region=11-2',
                                  'Cấu hình nạp tiền ngân lượng'=>'admin/naptien?region=11-3',
                                  'Thông tin thanh toán'=>'admin/thanhtoan?region=11-4',
                                  'Quyền hạn thành viên'=>array(
                                               'Quyền hạn thành viên miễn phí'=>'admin/change_user/free_user?region=11-5-1',
                                               'Quyền hạn thành viên VIP'=>'admin/change_user/vip_user?region=11-5-2',
                                               'Quyền hạn thành viên SIÊU VIP'=>'admin/change_user/xsieuvip_user?region=11-5-3',
                                  ),
                            ),
                            'Quản lý liên hệ|paper-plane'=>array(
                                  'Khách hàng liên hệ'=>'lienhe/quanlylienhe/true/1?region=12-1',
                                  'Quản lý tin nhắn'=>'dangtin/quanlytinnhan/true/1?region=12-2',
                                  'Quản lý email đăng ký'=>'trangchu/quanlydangky/true/1?region=12-3',
                            ),
                            'Quản lý thanh toán|money'=>array(
                                  'Lịch sử giao dịch'=>'naptien/lichsugiaodich/true/1?region=13-1',
                                  'Quản lý thẻ nạp'=>'naptien/quanlythenap/true/1?region=13-2',
                            ),
                        );//print_r($region);
                        $region=explode('-',$_GET["region"]);
                        $stt_parent=0;
        foreach($listMenus as $name=>$link){$stt_parent++;
            $name=explode('|',$name);
            $name2=$name[0];
            $icon=$name[1];  
            $actived=$region[0]==$stt_parent||($region[0]==''&&$stt_parent==1)?'open':''; 
            
            $total1=$icon=='edit'?$show_total:'';
            $total2=$icon=='user'?$member:'';
            $total3=$icon=='bar-chart'?$truycap:'';
            $total4=$icon=='newspaper-o'?$tintuc:'';
            $total5=$icon=='dashboard'?'<span class="label label-orange" style=" padding: 5px;padding-top: 3px;padding-bottom:0px;font-size:14px">MỚI</span>':'';
            $total6=$icon=='suitcase'?'<span class="label label-orange" style=" padding: 5px;padding-top: 3px;padding-bottom:0px;font-size:14px">HOT</span>':'';
            
            if(is_array($link)){
              echo "
              <li class='$actived'><a href='javascript://;'><i class='fa fa-$icon'></i><span class='title'>$name2</span>
              <span class='arrow '></span>$total1 $total2 $total3 $total4 $total6
                            </a>
                            <ul class='sub-menu' >";
                            $stt_child=0;                            
                foreach($link as $subname=>$sublink){$stt_child++;
                    
                    
                    if(is_array($sublink)){
                        $subactived=$region[1]==$stt_child&&$region[0]==$stt_parent?'open':'';
              echo "
              <li class='$subactived'><a href='javascript://;'><span class='title'>$subname</span>
              <span class='arrow '></span></a>
                            <ul class='sub-menu' >";
                            $stt2_child=0;                            
                foreach($sublink as $sub2name=>$sub2link){$stt2_child++;
                    $sub2actived=$region[2]==$stt2_child&&$region[1]==$stt_child&&$region[0]==$stt_parent?'active':'';
                    echo " 
                       <li><a class='$sub2actived' href='/$sub2link'>$sub2name</a></li> 
                    ";
                }
              echo " 
              </ul>
              </li>
              ";
            }else{
                $subactived=$region[1]==$stt_child&&$region[0]==$stt_parent?'active':'';
              echo " 
                       <li><a class='$subactived' href='/$sublink'>$subname</a></li> 
                    ";
            }
                    
                    
                }
              echo " 
              </ul>
              </li>
              ";
            }else{
              echo "
               <li class='$actived'><a href='/$link'><i class='fa fa-$icon'></i><span class='title'>$name2</span> $total5 $total6</a></li>
              ";
            }
        }
                        ?>
                         

                    </ul>

                </div>
                <!-- MAIN MENU - END -->



                <div class="project-info">

                    <div class="block1">
                        <div class="data">
                            <span class='title'>Tin rao</span>
                            <span class='total'><? echo number_format(Modules::run('trangchu/totalRows','tinban',array()));?></span>
                        </div>
                        <div class="graph">
                            <span class="sidebar_orders">...</span>
                        </div>
                    </div>

                    <div class="block2">
                        <div class="data">
                            <span class='title'>Truy cập</span>
                            <span class='total'><? echo number_format(Modules::run('trangchu/totalRows','truycap',array()));?></span>
                        </div>
                        <div class="graph">
                            <span class="sidebar_visitors">...</span>
                        </div>
                    </div>

                </div>



            </div>
            <!--  SIDEBAR - END -->
             <?}?>