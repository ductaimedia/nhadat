        <div class="wr_page">
            
    <div class="index-page">
        <div class="content">
    <form name="frmEdit" id="frmEdit" action="" method="post" enctype="multipart/form-data">        
<div id="boxContact">

    <h1 class="h1">Liên hệ</h1>
    <div class="listbox">
    <?php $this->load->view('template/statut_thongbao');?>
        <div class="item">
            <div class="lable">
                Họ tên <span class="request">(*)</span>
            </div>
            <input name="name" value="<?php echo set_value('name');?>" type="text" id="txtName" class="textbox" />
        </div>
        <div class="item">
            <div class="lable">
                Email <span class="request">(*)</span>
            </div>
            <input name="email" value="<?php echo set_value('email');?>" type="text" id="txtEmail" class="textbox" />
        </div>
        <div class="item">
            <div class="lable">
                Điện thoại <span class="request">(*)</span>
            </div>
            <input name="DienThoai"  value="<?php echo set_value('DienThoai');?>" type="text" id="txtPhone" class="textbox" />
        </div>
        <div class="item">
            <div class="lable">
                Địa chỉ <span class="request">(*)</span>
            </div>
            <input name="DiaChi" value="<?php echo set_value('DiaChi');?>" type="text" id="txtAddress" class="textbox" />
        </div> 
        <div class="item">
            <div class="lable">
                Nội dung <span class="request">(*)</span>
            </div>
            <textarea name="message" rows="2" cols="20" id="txtContent" class="txtContent"><?php echo set_value('message');?>
</textarea>
        </div>
        <div class="item">
            <div class="lable">
                Mã an toàn <span class="request">(*)</span>
            </div>
            <input name="MaXacNhan" type="text" id="txtcode" class="txtcode" />
            <span class="imgCaptcha">
                <img src="/maxacnhan/captcha" id="captcha" title="Mã xác nhận" style=" margin-left: 5px;  vertical-align: middle;"/><img title="Đổi mã xác nhận khác" src="/style/images/ref.gif" width="26" height="25" onclick="document.getElementById('captcha').src='/maxacnhan/captcha?'+Math.random();" style=" vertical-align: middle;"/>
            </span>
        </div>
        <div class="item">
            <div class="lable">
            </div>
            <a id="btContact" onclick="document.getElementById('frmEdit').submit();" style="cursor: pointer;" class="button">Gửi liên hệ</a>      <a href="/" class="cancel">Hủy</a>
        </div>
    </div>
    <script src="/Scripts/Contact.min.js"></script>
    <div class="loading_contact">
        <img src="/Images/loading.gif" />
    </div>
    <div class="clear"></div>
</div>
</form>
        </div>
    </div>

            <div class="clear"></div>
        </div>