 
        <div class="wr_page">
            
    <div class="index-page">
        <div class="content">
            
            <!-- Content Left -->
            <? 
            if($tinban['contact']!=''){
                    $data_user_info=json_decode($tinban['contact'],true);
            }
            if($this->session->userdata('userid')){
                $dissabled=$tinban['contact']==''?'disabled':'';
               include(APPPATH . 'includes/divLeft_thanhvien.php');
            }else{
                $dissabled='';
                
                ?> 
                <div class="mleft">
                <!-- Hướng dẫn  -->
                
<div class="huongdan">
                    <div class="hd-title" style="width: 87%;">
                        <h3><a href="#">Hướng dẫn sử dụng</a></h3>
                    </div>
                    <ul>
                    <?	
                    $menu=Modules::run('trangchu/getList','baiviet',16,0,'SapXep desc, IDBaiViet asc','IDBaiViet',array('Loai'=>'MenuFooter','TrangThai'=>1));
                    $menu=array_reverse($menu);
                  if($menu){ 
                  foreach ($menu as $tintuc)
                  {
                    if($tintuc['Link']!=''){
                        $Link=$tintuc['Link'];
                    }else{
                        $Link='/'.stripUnicode($tintuc['TieuDe']);
                    }
                  echo '
                   <li><a href="'.$Link.'" rel="nofollow">'.$tintuc['TieuDe'].'</a></li> 
                   ';
                  }
                   
                  }
                   
                  ?>  
                    </ul>
                </div> 
                <!-- Báo giá  -->
                
                <!-- Phương thức thanh toán  -->
                
            </div>
                <?
            }
            
            ?>
            <!-- Content Right -->
            <div class="mright">
                <!-- Đăng tin -->
                <div id="ContentPlaceHolder1_pnMainContent">
	<script src="/style/js/PostNews.min.js?v=120151126" type="text/javascript"></script>
<script type="text/javascript" > 
<?
                if($this->input->post('HangXe')!=''){
                                        $Xe=$this->input->post('HangXe');
                                    }elseif(isset($tinban['HangXe'])){
                                        $Xe=$tinban['HangXe'];
                                    }else{
                                        $Xe='';                            
                                    }
                                    if($Xe!=''){
                                      $HangXe=Modules::run('trangchu/getInfo','baiviet','IDBaiViet',$Xe);
                                    }else{
                                      $HangXe='';
                                    } 
                                   if($this->input->post('hddCanBan')==449||(isset($HangXe['MenuCha'])&&$HangXe['MenuCha']==449)){
                                     echo "$(document).ready(function(){ $('#hplSell').click(); $('#hplSell').addClass('hplcate-active'); });";
                                   }
                                   if($this->input->post('hddCanBan')==451||(isset($HangXe['MenuCha'])&&$HangXe['MenuCha']==451)){
                                     echo "$(document).ready(function(){ $('#hplRent').click(); $('#hplRent').addClass('hplcate-active'); });";
                                   }   
                                   
                                   $opition_nam_ban='<option value="Thỏa thuận">Thỏa thuận</option><option value="Triệu">Triệu</option><option value="Tỷ">Tỷ</option><option value="Cây vàng">Cây vàng</option><option value="USD">USD</option><option value="USD/m²">USD/m²</option><option value="Trăm nghìn/m²">Trăm nghìn/m²</option><option value="Triệu/m²">Triệu/m²</option><option value="Chỉ vàng/m²">Chỉ vàng/m²</option><option value="Cây vàng/m²">Cây vàng/m²</option>';
                                    $opition_nam_thue='<option value="Thỏa thuận">Thỏa thuận</option><option value="Trăm nghìn/tháng">Trăm nghìn/tháng</option><option value="Triệu/tháng">Triệu/tháng</option><option value="USD/tháng">USD/tháng</option><option value="USD/m²/tháng">USD/m²/tháng</option><option value="Trăm nghìn/m²/tháng">Trăm nghìn/m²/tháng</option><option value="Triệu/m²/tháng">Triệu/m²/tháng</option><option value="Nghìn/m²/tháng">Nghìn/m²/tháng</option> ';
                                    if($HangXe['MenuCha']==449){
                                        $opition_namSoKM=$opition_nam_ban;
                                    }
                                    if($HangXe['MenuCha']==451){
                                        $opition_namSoKM=$opition_nam_thue;
                                    }
                                    ?>
function getDoiXe(HangXe){
    
    $.ajax
    ({
        
       type: "POST",
       url: "/dangtin/getDoiXe/"+HangXe,
       success: function(response)
       {   
        
          $("#ddlType").html(response);
          $("#ddlType").select2('val', '<? echo $Xe;?>');   
          if(HangXe==449){
             dataSoKM='<? echo $opition_nam_ban;?>';
          }
          if(HangXe==451){
             dataSoKM='<? echo $opition_nam_thue;?>';
          }
             $("#SoKM").html('<option value="">-- Chọn Mức giá --</option>'+dataSoKM);
             $("#SoKM").select2('val','<? if($tinban['SoKM']!=''){echo $tinban['SoKM'];}else{echo set_value('SoKM');};?>'); 
       }            
    });
}
</script>
 
<link href="/style/css/select2.min.css" rel="stylesheet" />
<script src="/style/js/select2.full.min.js"></script>
<form action="" id="frmAuto" method="post">
<div class="postnews">
    <div id="ContentPlaceHolder1_ctl00_pnDangtin">
		
        <div class="pn-title">
            <h1>Đăng tin rao bán, cho thuê nhà đất</h1>
        </div>
        <div class="pn-content"> 
        <div style=" width: 99%;margin-left: -10px;"><?php $this->load->view('template/statut_thongbao');?></div>
        <? 
                           $styx='';
                           if($this->session->userdata('permission')==1):
                           $styx=' style="border-top: 1px solid #eee;padding-top: 10px;width: 98%;"';
                           ?> 
                           <script src='/style/icheck-1.x/icheck.min.js'></script> 
                           <link href="/style/icheck-1.x/skins/square/blue.css" rel="stylesheet" />
                           <script>
                           $(document).ready(function () {
$('input').iCheck({
    checkboxClass: 'icheckbox_square-blue',
    radioClass: 'iradio_square-blue',
    increaseArea: '20%' // optional
  });
});
                           </script>
                            <div class="line" style="width: 97%;overflow: hidden;padding: 10px;margin-bottom: 30px;background: #eee;text-align: center;">
                                <label style="font-weight: bold;"><?php echo $this->lang->line('lable_TrangThai');?></label>
                                <label style="color: blue;"><input required="" type="radio" name="TrangThai" value="1" <?php if($tinban['TrangThai']==1){echo 'checked';} ?> /> <?php echo $this->lang->line('lable_KichHoat');?> </label>
<label style="width: 270px!important;color: red;"><input type="radio" name="TrangThai" value="0" <?php if($tinban['TrangThai']==0){echo 'checked';} ?> /> <?php echo $this->lang->line('lable_ChuaKichHoat');?></label>
                            </div>
                            <? endif?>
            <h4 class="posth4">THÔNG TIN CƠ BẢN</h4> 
            <div class="row">
                <label>Loại tin <span>(*)</span>:</label>
                
                <div class="row-right" style="padding-top: 8px;">
                    <a href="javascript:" class="hplcate" id="hplSell" onclick="getDoiXe(449);">BĐS Bán</a>
                    <a href="javascript:" class="hplcate" id="hplRent" onclick="getDoiXe(451);">BĐS Cho Thuê</a>
                </div>
                <input type="hidden" name="hddCanBan" id="hddCanBan" value="449" />
            </div>
            <div class="row">
                <label>Loại nhà đất <span>(*)</span>:</label>
                <div class="row-right">

                    <select id="ddlType" name="HangXe" class="select-menu" style="width: 231px"> 
                                    <option value="">-- Chọn loại bất động sản --</option>
                    </select>

                </div>
            </div>
            <div class="row">
                <label>Vị trí <span>(*)</span></label>
                <div class="row-right ">
                    <div class="pncon marginright34">
                        <select id="ddlCity" name="DoiXe" class="select-menu" style="width: 231px">
                            <option value="">-- Chọn Tỉnh/Thành phố --</option> 
                            <?
$arr = file_get_contents(APPPATH . 'includes/DSTinhThanhKey.txt');
foreach(json_decode($arr,true) as $key=>$val){
    $select_ed=" ".set_select('DoiXe', $val['Text']);
                                        if($tinban['DoiXe']==$val['Text']){
                                            $select_ed=" selected='selected'";
                                        }
    echo '
    <option value="'.$val['Text'].'" data-key="'.$val['Id'].'" '.$select_ed.'>'.$val['Text'].'</option>    ';
}
?>
                        </select>
                        <input type="hidden" name="hddcboCityP" id="hddcboCityP" value="-1" />

                    </div> 
                    <div class="pncon">
                    
                        <select id="ddlDistrict" name="NamSX" class="select-menu">
                                <option value="">-- Chọn Quận/Huyện --</option>
                            </select>
                        <input type="hidden" name="hddcboDistP" id="hddcboDistP" value="-1" />

                    </div> 
                </div>
            </div>
            <div class="row">
                <label>&nbsp;</label>
                <div class="row-right">
                    <div class="pncon marginright34" id="cboWardP">
                                        
                        <select id="ddlWard" name="XuatXu" class="select-menu">
                            <option value="">-- Chọn Phường/Xã --</option>
                        </select> 
                        <input type="hidden" name="hddcboWardP" id="hddcboWardP" value="-1" />
                        <input type="hidden" name="hddWardPrefix" id="hddWardPrefix" />

                    </div>
                    <div class="pncon" id="cboStreetP">
                        <select id="ddlStreets" name="PhanHang" class="select-menu">
                            <option value="">-- Chọn Đường/Phố --</option>
                        </select> 
                        <input type="hidden" name="hddcboStreetP" id="hddcboStreetP" value="-1" />
                        <input type="hidden" name="hddStreetPrefix" id="hddStreetPrefix" />

                    </div>
                </div>
            </div>
            <div class="row">
                <label>&nbsp;</label>
                <div class="row-right">
                    <div class="select-container marginright34" id="cboProjectP">
                        <select id="ddlProjects" name="TinhTrang" class="select-menu">
                            <option value="">-- Chọn Dự án --</option>
                        </select>
                        <input type="hidden" name="hddcboProjectP" id="hddcboProjectP" value="-1" />
                        <span style="color: Red; display: none;" id="spanLocation">Bạn cần nhập loại nhà đất</span>
                    </div>
                </div>
            </div>

            <div class="row">
                <label>Giá:</label>
                <div class="row-right">
                  <div class="pncon marginright34">
                    <input name="GiaTien" type="text" id="txtGia" tabindex="10" class="input1 marginright34" onchange="ChangeMucgia(this)" value="<? if($tinban['GiaTien']!=''){echo $tinban['GiaTien'];}else{echo set_value('GiaTien');};?>" />
                  </div>
                  <div class="pncon" style="margin-left: -33px;">
                    <label style="width: 70px;">Đơn vị:</label>
                    <select id="SoKM" name="SoKM" class="select-item select-item1">
                     <option value="">-- Chọn Mức giá --</option> 
                           
                            
                    </select>
                  </div>
                    <input type="hidden" name="hddcboPriceP" id="hddcboPriceP" value="-1" />
                    <div class="clear"></div> 
                </div>
            </div>
            <div class="row">
                <label>Diện tích:</label>
                <div class="row-right">
                    <input name="NgoaiThat" type="text" id="txtDientich" tabindex="12" class="input1 input2" onchange="ChangeDientich(this)" value="<? if($tinban['NgoaiThat']!=''){echo $tinban['NgoaiThat'];}else{echo set_value('NgoaiThat');};?>" />
                    <span class="span">m2</span>
                    <div class="clear"></div>
                    <span style="color: Red; float: left; display: none;" id="spanDientich">Diện tích không hợp lệ!</span>
                </div>
            </div>
            <div class="row">
                <label>Địa điểm <span>(*)</span>:</label>
                <div class="row-right">
                    <input name="DongXe" value="<? if($tinban['DongXe']!=''){echo $tinban['DongXe'];}else{echo set_value('DongXe');};?>" type="text" id="txtDiadiem" tabindex="9" class="input1 input3" />
                    <input type="hidden" name="hddDiadiem" id="hddDiadiem" value="<? if($tinban['DongXe']!=''){echo $tinban['DongXe'];}else{echo set_value('DongXe');};?>"/>
                    <div class="clear"></div>
                    <span style="color: Red; float: left; display: none;" id="spanDiadiem">Bạn cần nhập địa điểm</span>
                </div>
            </div>
            <div class="row1"></div>
            <h4 class="posth4">THÔNG TIN KHÁC</h4>
            <div class="row">
                <label>Mặt tiền:</label>
                <div class="row-right">
                    <div class="pncon">
                        <input name="HopSo" value="<? if($tinban['HopSo']!=''){echo $tinban['HopSo'];}else{echo set_value('HopSo');};?>" type="text" id="txtMattien" tabindex="13" class="input1 input2" />
                        <span class="span marginright80">m</span>
                        <div class="clear"></div>
                        <span style="color: Red; float: left; display: none;" id="spanMattien">Mặt tiền không hợp lệ!</span>
                    </div>
                    <label style="width: 102px;">Đường trước nhà:</label>
                    <div class="pncon">
                        <input name="DanDong" value="<? if($tinban['DanDong']!=''){echo $tinban['DanDong'];}else{echo set_value('DanDong');};?>" type="text" id="txtDuongtruocnha" tabindex="14" class="input1 input4" />
                        <span class="span">m</span>
                        <div class="clear"></div>
                        <span style="color: Red; float: left; display: none;" id="spanDuongtruocnha">Đường trước nhà không hợp lệ!</span>
                    </div>

                </div>
                <span style="color: Red; display: none; float: left;" id="spantxtMattien">Bạn cần nhập loại nhà đất</span>
                <span style="color: Red; display: none; float: left;" id="spantxtDuongtruocnha">Bạn cần nhập loại nhà đất</span>
            </div>
            <div class="row">
                <label>Số tầng:</label>
                <div class="row-right">
                    <div class="pncon">
                        <input name="NhienLieu" value="<? if($tinban['NhienLieu']!=''){echo $tinban['NhienLieu'];}else{echo set_value('NhienLieu');};?>" type="text" id="txtSotang" tabindex="16" class="input1 input2 marginright95" />
                        <div class="clear"></div>
                        <span style="color: Red; float: left; display: none;" id="spanSotang">Số tầng không hợp lệ!</span>
                    </div>
                    <label style="width: 102px;">Số phòng:</label>
                    <input name="HeThongNapNhienLieu" value="<? if($tinban['HeThongNapNhienLieu']!=''){echo $tinban['HeThongNapNhienLieu'];}else{echo set_value('HeThongNapNhienLieu');};?>" type="text" id="txtSophong" tabindex="17" class="input1 input4" />
                </div>
            </div>
            <div class="row">
                <label>Hướng BĐS:</label>
                <div class="row-right">
                  <div class="pncon marginright34">
                    <select name="NoiThat" class="select-item ">
                            <option value="">-- Chọn Hướng nhà --</option>
                            <?
                                    $opition_nam='
                                    <option value="Không xác định">Không xác định</option>
                            <option value="Đông">Đông</option>
                            <option value="Tây">Tây</option>
                            <option value="Nam">Nam</option>
                            <option value="Bắc">Bắc</option>
                            <option value="Đông-Bắc">Đông-Bắc</option>
                            <option value="Tây-Bắc">Tây-Bắc</option>
                            <option value="Tây-Nam">Tây-Nam</option>
                            <option value="Đông-Nam">Đông-Nam</option> 
                                    ';
                                    preg_match_all("/<option value=\"(.*?)\">(.*?)<\/option>/is", $opition_nam, $matches);
                                    foreach($matches[2] as $key => $val){
                                        $select_ed=" ".set_select('NoiThat', $val);
                                        if($tinban['NoiThat']==$val){
                                            $select_ed=" selected='selected'";
                                        }
                                       
                                      echo "
                                      <option value='$val'$select_ed>$val</option>
                                      ";
                                    }
                                    ?>
                            
                    </select>
                  </div>
                  <div class="pncon">
                    <input type="hidden" name="hddcboDirectionP" id="hddcboDirectionP" value="-1" />
                    <label style="width: 102px;">Số toilet:</label>
                    <input name="MucTieuThu" value="<? if($tinban['MucTieuThu']!=''){echo $tinban['MucTieuThu'];}else{echo set_value('MucTieuThu');};?>" type="text" id="txtSotoilet" tabindex="18" class="input1 input4" />
                  </div>
                </div>
            </div>

            <div class="row1"></div>
            <h4 class="posth4">MÔ TẢ CHI TIẾT</h4>
            <div class="row">
                <label>Tiêu đề <span>(*)</span>:</label>
                <div class="row-right">
                    <input name="TieuDe" type="text" id="txtTieude" tabindex="19" class="input1 input3" placeholder="Vui lòng gõ tiếng Việt có dấu để tin đăng được kiểm duyệt nhanh hơn" value="<? if($tinban['TieuDe']!=''){echo $tinban['TieuDe'];}else{echo set_value('TieuDe');};?>" />
                    <div class="clear"></div>
                    <span style="color: Red; display: none;" id="spanTieude">Bạn cần nhập tiêu đề</span>
                    <span style="color: Red; display: none;" id="spanLimit">Tiêu đề phải nhập ít nhất 5 chữ!</span>
                    <span style="color: Red; display: none;" id="spanMaxCharacter">Tiêu đề không được nhập quá 99 kí tự!</span>
                </div>
            </div> 
            <div class="row">
                <label>Nội dung mô tả <span>(*)</span>:</label>
                <div class="row-right">
                    <textarea name="ThongTinMota" id="tarNoidung" rows="5" tabindex="20"><? if($tinban['ThongTinMota']!=''){echo str_replace('<br/>',"\n",$tinban['ThongTinMota']);}else{echo str_replace('<br/>',"\n",set_value('ThongTinMota'));};?></textarea>
                    <div class="clear"></div>
                    <span style="color: Red; display: none;" id="spanNoidungmota">Bạn cần nhập Nội dung mô tả</span>
                    <span style="color: Red; max-width: 500px; float: left; display: none;" id="spanLimited">Nội dung mô tả phải có tối thiểu 100 kí tự và tối đa 3000 kí tự (Không tính các kí tự trắng ở đầu, cuối và các kí tự trắng liền nhau trong đoạn văn bản)!</span>
                </div>
            </div>

            <div class="row wr_upload">
                <label>Cập nhật hình ảnh:</label>
                <div class="row-right"> 
                    <div id="fileupload">
                        <?
                        include 'upanh.php';
                        ?>
                    </div>
                    <div class="clear"></div>

                </div>
            </div> 
            <div class="row1"></div>
            <h4 class="posth4">THÔNG TIN BẢN ĐỒ</h4>
            <div class="row">
                <input type="hidden" name="hddLatitude" id="hddLatitude" value="<? if($tinban['hddLatitude']!=''){echo $tinban['hddLatitude'];}else{echo set_value('hddLatitude');};?>" />
                <input type="hidden" name="hddLongtitude" id="hddLongtitude" value="<? if($tinban['hddLongtitude']!=''){echo $tinban['hddLongtitude'];}else{echo set_value('hddLongtitude');};?>" />
                <input type="hidden" name="SoCua" id="txtPositionX" value="<? if($tinban['SoCua']!=''){echo $tinban['SoCua'];}else{echo set_value('SoCua');};?>" />
                <input type="hidden" name="SoChoNgoi" id="txtPositionY" value="<? if($tinban['SoChoNgoi']!=''){echo $tinban['SoChoNgoi'];}else{echo set_value('SoChoNgoi');};?>" />

<!--                
<script type="text/javascript" src="http://maps.google.com/maps/api/js"></script>
-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8B3gzfKH-_Dt__GoFeiK_KJTZf5Q071Q"></script>
<script src="/style/js/GoogleMapControl.min.js?v=20140820" type="text/javascript"></script>
<div id="mapinfo">
    <div id="map_canvas"></div>
</div>

            </div>
            <div class="row1"></div>
            <h4 class="posth4">THÔNG TIN LIÊN HỆ</h4>
            <div class="row">
                <label>Họ tên <span>(*)</span>:</label>
                <div class="row-right">
                    <input <? echo $dissabled;?> <?  if(isset($data_user_info)||$this->session->userdata('userid')==FALSE){?> name="contact[HoVaTen]" <?}?> type="text" value="<?  if(isset($data_user_info)){echo $data_user_info['HoVaTen'];}elseif(isset($user_info)){echo $user_info['HoVaTen'];}else{echo $_POST['contact']['HoVaTen'];};?>" id="txtHovaten" tabindex="24" class="input1 input3" />
                    <div class="clear"></div> 
                </div>
            </div>
            <div class="row">
                <label>Địa chỉ:</label>
                <div class="row-right">
                    <input <? echo $dissabled;?> <?  if(isset($data_user_info)||$this->session->userdata('userid')==FALSE){?>name="contact[DiaChi]"<?}?> type="text" value="<?  if(isset($data_user_info)){echo $data_user_info['DiaChi'];}elseif(isset($user_info)){echo $user_info['DiaChi'];}else{echo $_POST['contact']['DiaChi'];};?>" id="txtDiachi" tabindex="25" class="input1 input3" />
                </div>
            </div>
            <div class="row">
                <label>Điện thoại <span>(*)</span>:</label>
                <div class="row-right">
                    <input <? echo $dissabled;?> <?  if(isset($data_user_info)||$this->session->userdata('userid')==FALSE){?>name="contact[DienThoai]"<?}?> type="text" id="txtDienthoai" tabindex="26" class="input1 input3" value="<?  if(isset($data_user_info)){echo $data_user_info['DienThoai'];}elseif(isset($user_info)){echo $user_info['DienThoai'];}else{echo $_POST['contact']['DienThoai'];};?>" />
                    <div class="clear"></div> 
                </div>
            </div> 
            <div class="row">
                <label>Email:</label>
                <div class="row-right">
                    <input <? echo $dissabled;?> <?  if(isset($data_user_info)||$this->session->userdata('userid')==FALSE){?>name="contact[Email]"<?}?> type="text" value="<?  if(isset($data_user_info)){echo $data_user_info['Email'];}elseif(isset($user_info)){echo $user_info['Email'];}else{echo $_POST['contact']['Email'];};?>" id="txtEmail" tabindex="28" class="input1 input3" />
                </div>
            </div>
            <div class="row1"></div>  
            
                <?
            if($tinban!=''):?> 
                <div class="row row2" style="padding-left: 110px;"> 
            <a id="btnMemberSave" onclick="document.getElementById('frmAuto').submit();" class="btnMemberSave" style="margin-left: 100px;"><?php echo $this->lang->line('lable_btnCapNhap');?></a>
            </div>
            <? else:?>
            <div id="ContentPlaceHolder1_ctl00_divCaptcha" class="row">
                <label>Mã an toàn <span>(*)</span>:</label>
                <div class="row-right">
                    
                    <input name="MaXacNhan" type="text" id="txtcode" class="input1 input3" style="width: 200px!important;" />
            <span class="imgCaptcha">
                <img src="/maxacnhan/captcha" id="captcha" title="Mã xác nhận" style=" margin-left: 5px;  vertical-align: middle;"/><img title="Đổi mã xác nhận khác" src="/style/images/ref.gif" width="26" height="25" onclick="document.getElementById('captcha').src='/maxacnhan/captcha?'+Math.random();" style=" vertical-align: middle;"/>
                </div>
            </div>
            <div class="row row2" style="padding-left: 110px;">
            <a onclick="document.getElementById('frmAuto').submit();" id="lbtPost" class="btnpost" href="javascript://">Đăng tin</a>
                <a id="lbtCancel" class="btncancel" href="/dang-tin-ban-cho-thue-nha-dat">Hủy bỏ</a>
            </div>
            <? endif;?> 
                
                
            
        </div>
    
	</div>

    
    

    <input type="hidden" name="hddCusPhone" id="hddCusPhone" />
</div>
</form>
<script type="text/javascript">
    var productid = '0';
</script>
<?
                                    if($this->input->post('NamSX')!=''){
                                        $quan=$this->input->post('NamSX');
                                    }else{
                                        $quan=$tinban['NamSX'];
                                    }
                                    if($quan!=''){  
                                         echo "<script>GetArea('GetDistrict','cityCode',$('#ddlCity').find('option:selected').attr('data-key'),'ddlDistrict','Chọn Quận/Huyện','$quan');</script>";
                                    } 
                                    ?>
            <?
                                    if($this->input->post('XuatXu')!=''){
                                        $phuong=$this->input->post('XuatXu');
                                    }else{
                                        $phuong=$tinban['XuatXu'];
                                    } 
                                    ?>
            <?
                                    if($this->input->post('PhanHang')!=''){
                                        $duong=$this->input->post('PhanHang');
                                    }else{
                                        $duong=$tinban['PhanHang'];
                                    } 
                                    ?>
<?
                                    if($this->input->post('TinhTrang')!=''){
                                        $duan=$this->input->post('TinhTrang');
                                    }elseif($this->session->userdata('TinhTrang')!=''){
                                        $duan=$this->session->userdata('TinhTrang');
                                    }else{
                                        $duan=$xemtinban['TinhTrang'];
                                    }  
                                    ?>
<script type="text/javascript">

    //$(document).ready(function () {
    //    $(".various").fancybox({
    //        type: 'iframe',
    //        href: '/xem-truoc.htm',
    //        maxWidth: 800,
    //        maxHeight: 800,
    //        fitToView: true,
    //        width: '90%',
    //        height: '90%',
    //        autoSize: true,
    //        closeClick: false,
    //        openEffect: 'none',
    //        closeEffect: 'none',
    //        padding: 0
    //    });
    //});
    $('select').select2({
        matcher: function (params, data) {
            if ($.trim(params.term) === '') {
                return data;
            }
            var _keyword = UnicodeToKoDau(data.text.toLowerCase());
            var _text = UnicodeToKoDau(params.term.toLowerCase());
            if (_keyword.indexOf(_text) == 0) {
                var modifiedData = $.extend({}, data, true);
                modifiedData.text;
                return modifiedData;
            }
            return null;
        }
    });
    $('#ddlCity').on('change', function () { 
        $("#hddcboCityP").val($('option:selected', this).attr('data-key'));
        $("#hddcboDistP").val(-1);
        $("#hddcboWardP").val(-1);
        $("#hddcboStreetP").val(-1);
        $("#hddcboProjectP").val(-1); 
        GetArea('GetDistrict','cityCode',$('option:selected', this).attr('data-key'),'ddlDistrict','-- Chọn Quận/Huyện --','');
        <? if($tinban==''){echo "ShowLocation();";}?> 
    });
    $('#ddlDistrict').on('change', function (){
        $("#hddcboDistP").val($('option:selected', this).attr('data-key')); 
        GetArea('GetWard','distId',$('option:selected', this).attr('data-key'),'ddlWard','-- Chọn Phường/Xã --','<? echo $phuong;?>');   
        GetArea('GetStreet','distId',$('option:selected', this).attr('data-key'),'ddlStreets','-- Chọn Đường/Phố --','<? echo $duong;?>');
        GetArea('GetProject','distId',$('option:selected', this).attr('data-key'),'ddlProjects','-- Chọn Dự án --','<? echo $duan;?>');   
        <? if($tinban==''){echo "ShowLocation();";}?> 
    }); 
    $('#ddlWard').on('change', function () {
        $("#hddcboWardP").val($('#ddlWard').find('option:selected').attr('data-key')); 
        $("#hddWardPrefix").val($('#ddlWard').find('option:selected').attr('wardprefix')); 
        $("#hddcboStreetP").val(-1); 
        <? if($tinban==''){echo "GetDiadiem();";}?>  
        <? if($tinban==''){echo "ShowLocation();";}?> 
    }); 
    $('#ddlStreets').on('change', function () {
        $("#hddcboStreetP").val($('#ddlStreets').find('option:selected').attr('data-key')); 
        $('#hddStreetPrefix').val($('#ddlStreets').find('option:selected').attr('streetprefix')); 
        <? if($tinban==''){echo "GetDiadiem();";}?>  
        <? if($tinban==''){echo "ShowLocation();";}?> 
    }); 
    $('#ddlProjects').on('change', function () {

        $("#hddcboProjectP").val($('#ddlProjects').find('option:selected').attr('data-key'));
        <? if($tinban==''){echo "GetDiadiem();";}?>  
        <? if($tinban==''){echo "ShowLocation();";}?> 
        //loadProjectMap($('#ddlProjects').val());

        var wardId = $('#ddlProjects option:selected').attr('wardid');
        //console.log(wardId);
        if (wardId > 0) {
            $('#select2-ddlWard-container').html($('#ddlWard option[value="' + wardId + '"]').html());
            $('#ddlWard').val(wardId);
            $("#hddcboWardP").val(wardId);
        }
    });

    //// managage back button click (and backspace)
    //var count = 0; // needed for safari
    //window.onload = function () {
    //    if (typeof history.pushState === "function") {
    //        history.pushState("back", null, null);
    //        window.onpopstate = function () {
    //            history.pushState('back', null, null);
    //            if (count == 1) { window.location = window.location; }
    //        };
    //    }
    //}
    //setTimeout(function () { count = 1; }, 200);
</script>

</div>
            </div>
            
            

            <div class="clear"></div>
        </div>
    </div> 

            <div class="clear"></div>
        </div>