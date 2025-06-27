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
        <div class="wr_page">
            
    <div class="index-page">

        <div class="content">
             
            <!-- Content Left -->
            <div class="content-left"> 
                
<div class="product">
    <div class="product-title" style="width: 450px;float: left;">
        <h1>
            <? 
                 if(isset($user_info_up)){?>
                CÁC TIN RAO ĐĂNG BỞI 
                <? echo $user_info_up['HoVaTen'];?>
                <?}else{?>   <? if(isset($phienban)){?> <? echo $phienban[1];?> <? echo $phienban[2];?> <? echo $phienban[3];?> đời 20<? echo $phienban[4];?> <?}else{?> <?
                 if($current_info['H1']!=''){
                    $ctit= $current_info['H1'];
                }elseif(isset($HangXe['H1'])&&$HangXe['H1']!=''){
                    $ctit= $HangXe['H1'];
                }else{
                 $ctit=$HangXe['TieuDe']=='BĐS bán'?'NHÀ ĐẤT BÁN':($HangXe['TieuDe']=='BĐS cho thuê'?'NHÀ ĐẤT CHO THUÊ':$HangXe['TieuDe']); 
                } 
                 echo $ctit;?> <? if(isset($DoiXe['TieuDe'])){echo $DoiXe['TieuDe'];}?> <?}?> <? if($this->session->userdata('DoiXe')!=''){?> tại <? if($this->session->userdata('PhanHang')!=''){
                    
          $city=Modules::run('trangchu/getList','tinhthanh',1,0,'Name asc','ID',array('Name'=>$this->session->userdata('DoiXe'),'Loai'=>'DoiXe'));
          $last=Modules::run('trangchu/getList','tinhthanh',1,0,'Name asc','ID',array('Name'=>$this->session->userdata('NamSX'),'Loai'=>'NamSX','Parent'=>$city[0]['Note']));
          $info_cha=$last;
          
          $info_reg=Modules::run('trangchu/getList','tinhthanh',1,0,'Name asc','ID',array('Name'=>$this->session->userdata('PhanHang'),'Loai'=>'PhanHang','Parent'=>$info_cha[0]['Note']));
          
                    ?>  <? echo $info_reg[0]['Perfix'];?> <? echo $this->session->userdata('PhanHang').' - ';}?> <? if($this->session->userdata('XuatXu')!=''){
                        
          $city=Modules::run('trangchu/getList','tinhthanh',1,0,'Name asc','ID',array('Name'=>$this->session->userdata('DoiXe'),'Loai'=>'DoiXe'));
          $last=Modules::run('trangchu/getList','tinhthanh',1,0,'Name asc','ID',array('Name'=>$this->session->userdata('NamSX'),'Loai'=>'NamSX','Parent'=>$city[0]['Note']));
          $info_cha=$last;
          
          $info_reg=Modules::run('trangchu/getList','tinhthanh',1,0,'Name asc','ID',array('Name'=>$this->session->userdata('XuatXu'),'Loai'=>'XuatXu','Parent'=>$info_cha[0]['Note']));
          
                        ?> <? echo $info_reg[0]['Perfix'];?> <? echo $this->session->userdata('XuatXu').' - ';}?> <? if($this->session->userdata('NamSX')!=''){?> <? echo $this->session->userdata('NamSX').' - ';}?> <? echo $this->session->userdata('DoiXe');?> <?}else{?>trên toàn quốc<?}?> <?}?></h1>
    </div>
    <div style="margin: 0px;padding: 0px;text-align: right;"><span class="spancount">Có <b>
            <? echo !isset($sotin)||$sotin==''?0:$sotin;?></b> tin bất động sản</span> </div>
    <?if($this->session->userdata('HangXe')!=''||$this->session->userdata('DoiXe')!=''||$this->session->userdata('NamSX')!=''||$this->session->userdata('XuatXu')!=''||$this->session->userdata('PhanHang')!=''||$this->session->userdata('TinhTrang')!=''||$this->session->userdata('NgoaiThat')!=''||$this->session->userdata('GiaTien')!=''||$this->session->userdata('HeThongNapNhienLieu')!=''||$this->session->userdata('NoiThat')!=''){?>
    <div class="lblsearchresult" style=" float: left;margin-top: 8px;">
        
        <h2>
        Tìm kiếm theo các tiêu chí:  
                        <?if($this->session->userdata('HangXe')!=''){echo '  <strong><span>'.$HangXe['TieuDe'].'</span></strong>  .  ';}?>
                        <?if($this->session->userdata('DoiXe')!=''){echo '| Tỉnh/Tp: <strong><span>'.$this->session->userdata('DoiXe').'</span></strong>.  ';}?>
                        
                        <?if($this->session->userdata('NamSX')!=''){echo '| Quận/Huyện: <strong><span>'.$this->session->userdata('NamSX').'</span></strong>.  ';}?>
                        <?if($this->session->userdata('XuatXu')!=''){echo '| Phường/Xã: <strong><span>'.$this->session->userdata('XuatXu').'</span></strong>.  ';}?>
                        <?if($this->session->userdata('PhanHang')!=''){echo '| Đường/Phố: <strong><span>'.$this->session->userdata('PhanHang').'</span></strong>.  ';}?>
                        
                        <?if($this->session->userdata('TinhTrang')!=''){$pr=explode('|',$this->session->userdata('TinhTrang')); echo '| Dự án: <strong><span>'.$pr[0].'</span></strong>.  ';}?>
                        
                        <?if($this->session->userdata('NgoaiThat')!=''){echo '| Diện tích: <strong><span>'.str_replace('-',' - ',$this->session->userdata('NgoaiThat')).' m²</span></strong>.  ';}?>
                        
                        <?if($this->session->userdata('GiaTien')!=''){echo '| Giá : <strong><span>'.str_replace('-',' - ',$this->session->userdata('GiaTien')).' '.$this->session->userdata('SoKM').'</span></strong>.  ';}?>
                        
                        <?if($this->session->userdata('HeThongNapNhienLieu')!=''){echo '| Số phòng: <strong><span>'.$this->session->userdata('HeThongNapNhienLieu').'</span></strong>. ';}?>
                         
                        <?if($this->session->userdata('NoiThat')!=''){echo '| Hướng: <strong><span>'.$this->session->userdata('NoiThat').'</span></strong>.  ';}?>
                         
            </h2>
        
    </div>
    <?}?>
    <script>
$(document).ready(function () {
    $("#cbhaveimg").on('ifChecked', function(event){ 
        window.location.href='?img=on';
    });
    $("#cbhaveimg").on('ifUnchecked', function(event){ 
        window.location.href='?img=off';
    }); 
});     
</script> 
    <?
        $arr_orders=array(
        'NgayDang-desc'=>'Ngày đăng',
        'GiaTien-asc'=>'Giá tăng dần',
        'GiaTien-desc'=>'Giá giảm dần',
        'NgoaiThat-asc'=>'Diện tích nhỏ nhất',
        'NgoaiThat-desc'=>'Diện tích lớn nhất'
        );
        ?>
        <style>
        .select-order .select2{
            margin-top: -3px;
        }
        </style>
    <div class="tab" style="background-color:#e8e8e8;border-top: 1px solid #36a445;"> 
        <div style="padding-top: 9px;float: left;padding-left: 7px;"><a class="btnall" href="/<? echo $this->uri->segment(1);?>">Xem tất cả</a>  <label for="cbhaveimg"><input type="checkbox" class="checkbox" <? if($this->session->userdata('XeCoAnh')=='on'){echo 'checked';} ?> id="cbhaveimg" onclick="check_img()"/> Xem tin rao có ảnh</label></div>
        <div class="select-order">
            <div class="option-item">
                <span class="v-drop v-drop-width" id="spanCate">Sắp xếp theo: </span> 
                <select name="" onchange="location = this.options[this.selectedIndex].value;" id="">
                <option value="?order=off">Thông thường</option>
                <? 
         foreach($arr_orders as $order=>$name){ 
         if($this->session->userdata('order')==$order){
            $selected=' selected';
         }else{
            $selected=' ';
         }
              echo '<option value="?order='.$order.'" '.$selected.'>'.$name.'</option> '; 
         }
         ?> 

</select>
            </div>
        </div>
    </div>
</div>
<div class="for-user">
    <ul>
        <? include 'div_list.php';?>
                
                
            
    </ul>
    <div class="clear"></div>
</div>
<?php echo $this->pagination->create_links();?> 


 
                <div class="clear"></div>
            </div>
            <!-- Content Right -->
            <div class="content-right">
                <!-- Box search list -->
                
<?  
include 'div_search.php';?> 
 
                <!-- Product count -->
                
<? include 'current_category.php';?>
                <!-- Banner -->
               
                <!-- Box hot -->
<? include 'tukhoanoibat.php';?>              
                <!-- Utility -->
  <? include  APPPATH.'modules/dangtin/views/div_tool.php';?>
 
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
    </div>

            <div class="clear"></div>
        </div>