<div class="wr_page">    
    <div class="index-page">
        <div class="content">
            
            <? include(APPPATH . 'includes/divLeft_thanhvien.php');?>
            
            <!-- Content Right -->
            <div class="user-mright">
                <!-- Đăng tin -->
                <div id="ContentPlaceHolder1_pnMainContent">
	<form action="" method="post" id="frmEdit">   
<div class="module-header-profile">
    <?php echo $this->lang->line('title_doimatkhau');?>
</div>
<div class="module-user module-user-bg ">
<div style="padding-top: 10px;width: 92%;"><?php $this->load->view('template/statut_thongbao');?></div> 
    <div class="rc-item">
        <div class="text"><?php echo $this->lang->line('lable_MatKhauCu');?> <span>(*)</span></div>
        <input name="MatKhauCu" type="password" value="<?php echo $data_thanhvien['MatKhauCu'];?>" id="txtDidong" class="textbox" /><span class="null" id="spanDidong">*</span> 
    </div>
    <div class="rc-item">
        <div class="text"><?php echo $this->lang->line('lable_MatKhauMoi');?> <span>(*)</span></div>
        <input name="MatKhauMoi" type="password" value="<?php echo $data_thanhvien['lable_MatKhauMoi'];?>" id="txtDidong" class="textbox" /><span class="null" id="spanDidong">*</span> 
    </div>
    <div class="rc-item">
        <div class="text"><?php echo $this->lang->line('lable_NhapLaiMatKhauMoi');?> <span>(*)</span></div>
        <input name="NhapLaiMatKhauMoi" type="password" value="<?php echo $data_thanhvien['NhapLaiMatKhauMoi'];?>" id="txtDidong" class="textbox" /> <span class="null" id="spanDidong">*</span>  
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