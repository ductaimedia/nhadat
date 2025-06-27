<div class="wr_page"> 
        <script src="/style/js/bxhupload.js" type="text/javascript"></script>
<link href="/style/css/BXHUpload.css" rel="stylesheet" type="text/css">    
    <div class="index-page">
        <div class="content">
            
            <? include(APPPATH . 'includes/divLeft_thanhvien.php');?>
            
            <!-- Content Right -->
            <div class="user-mright">
                <!-- Đăng tin -->
                <div id="ContentPlaceHolder1_pnMainContent">
	<form name="frmEdit" id="frmEdit" action="" method="post" enctype="multipart/form-data">   
<div class="module-header-profile">
    <?php echo $this->lang->line('title_doiavatar');?>
</div>
<div class="module-user module-user-bg ">
<div style="padding-top: 10px;width: 92%;"><?php $this->load->view('template/statut_thongbao');?></div> 
    <div class="rc-item">
        <div class="text"><img style="max-width: 150px;" id="userfile_img" src="<? echo show_img(str_replace('upload/images/avatar/','',$LinkAvatar),$thumb='150x150','/upload/images/avatar/');?>" /></div>
        <div style="padding-bottom: 10px;">
                                    <?php echo $this->lang->line('lable_linkAnh');?>
                                    </div><div class="avatar" id="uploadimage"><input id="Avatar" name="Avatar" type="hidden" value="" /></div>
                 <div class=" ">
                                 
                 </div>

<script>
    $(document).ready(function () {
       $('#uploadimage').bxhupload({ token: 'umTDvyTMD2qzHH2lc/pOXsMKqlmnxOI+f3BUvClacQ4=', target: 'Avatar', maxFiles: 1 });
    }); 
</script>
    </div> 
    <div class="rc-item rc-item-action " >
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