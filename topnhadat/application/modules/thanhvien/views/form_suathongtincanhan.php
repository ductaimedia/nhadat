<div class="wr_page">
        <link href="/style/css/my.css" rel="stylesheet" type="text/css" />    
    <div class="index-page">
        <div class="content">
            
            <? include(APPPATH . 'includes/divLeft_thanhvien.php');?>
            
            <!-- Content Right -->
            <div class="user-mright">
                <!-- Đăng tin -->
                <div id="ContentPlaceHolder1_pnMainContent">
	<form action="" method="post" id="frmEdit">   
<div class="module-header-profile">
    Thay đổi thông tin cá nhân
</div>
<div class="module-user module-user-bg ">
<div style="padding-top: 10px;width: 92%;"><?php $this->load->view('template/statut_thongbao');?></div>
    <div class="rc-item">
        <div class="text">Họ tên</div>
        <input name="HoVaTen" type="text" value="<?php echo $data_thanhvien['HoVaTen'];?>" id="txtTendaydu" class="textbox" /> 
    </div>
    <div class="rc-item">
        <div class="text">Tên đăng nhập</div>
        <span id="txtUserName" style="padding: 4px 0 0 0; float: left;font-weight: bold;"><?php echo $data_thanhvien['username'];?></span>
    </div>
    <div class="rc-item">
        <div class="text">Email<span>(*)</span></div>
        <input name="Email" type="text" value="<?php echo $data_thanhvien['Email'];?>" id="txtDidong" class="textbox" /><span class="null" id="spanDidong">*</span> 
    </div>
    <div class="rc-item">
        <div class="text">Điện thoại<span>(*)</span></div>
        <input name="DienThoai" type="text" value="<?php echo $data_thanhvien['DienThoai'];?>" maxlength="12" id="txtDidong" class="textbox" /><span class="null" id="spanDidong">*</span> 
    </div>
    <div class="rc-item">
        <div class="text"><?php echo $this->lang->line('lable_add');?> </div>
        <input name="DiaChi" type="text" value="<?php echo $data_thanhvien['DiaChi'];?>" id="txtDidong" class="textbox" />  
    </div>
    <div class="rc-item">
                <div class="text"><?php echo $this->lang->line('lable_TinhThanh');?></div> 
                <select name="TinhThanh" class="select-item-regis">
                <option value="">--- Chọn tỉnh thành --- </option>
             <option value="Hà Nội">Hà Nội</option>
             <?php 
             $arr = file(APPPATH . 'includes/DSTinhThanh.txt');
             foreach($arr as $row) { 
                if($data_thanhvien['TinhThanh']==trim($row))
                { 
                    $select='selected';
                }else{
                    $select='';
                }
                echo '
                     <option value="'.trim($row).'" '.$select.' >'.trim($row).'</option>
                     ';
             }
             ?>
          </select>
            </div>
    <div class="rc-item rc-item-action ">
        <div class="text">&nbsp;</div>
        <a id="btnMemberSave" onclick="document.getElementById('frmEdit').submit();" class="btnMemberSave">Lưu thay đổi</a>

    </div>
    <div class="loading-indicator" id="userUpdateLoading"></div>
</div>
</form>
</div>
            </div>
            <? include(APPPATH . 'includes/divRight.php');?>
            
            <div class="clear" style=": "></div>
        </div>
    </div>
    <script src="/Scripts/Members.min.js?v=20151126" type="text/javascript"></script>

            <div class="clear"></div>
        </div>