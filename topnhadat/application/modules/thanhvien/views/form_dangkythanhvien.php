 <div class="wr_page">
            
    <div class="index-page">
        <div class="content">
             
            
<script src="/Scripts/Members.min.js?v=20151126"></script>
<form action="" method="post">  
<div id="ContentPlaceHolder1_Register1_pnBox">
	
    <div class="login">
        <div class="regis-title">Đăng ký</div>
        <div class="regis-content"> 
            <?php $this->load->view('template/statut_thongbao');?>
            <div class="rc-item">
                <div class="text"><?php echo $this->lang->line('lable_HoVaTen');?></div>
                <input name="HoVaTen" type="text" id="txtTendaydu" class="textbox" value="<?php echo set_value('HoVaTen');?>"/>
            </div>
            <div class="rc-item">
                <div class="text"><?php echo $this->lang->line('lable_username');?><span>(*)</span></div>
                <input name="username" type="text" id="txtUserName" class="textbox" value="<?php echo set_value('username');?>"/><span class="null" id="spanUserName">*</span>
            </div>
            <div class="rc-item">
                <div class="text"><?php echo $this->lang->line('lable_password');?> <span>(*)</span></div>
                <input name="password" type="password" id="txtMatkhau" class="textbox" /><span class="null" id="spanMatkhau">*</span>
            </div>
             <div class="rc-item">
                <div class="text"><?php echo $this->lang->line('lable_repassword');?> <span>(*)</span></div>
                <input name="repassword" type="password" id="txtNhaplaimatkhau" class="textbox" /><span class="null" id="spanMatkhau">*</span>
            </div>
            <div class="rc-item">
                <div class="text">Email<span>(*)</span></div>
                <input name="Email" type="text" id="txtEmail" class="textbox" value="<?php echo set_value('Email');?>"/><span class="null" id="spanEmail">*</span>
            </div>
            <div class="rc-item">
                <div class="text">Điện thoại<span>(*)</span></div>
                <input name="DienThoai" type="text" maxlength="12" id="txtDidong" class="textbox" value="<?php echo set_value('DienThoai');?>"/><span class="null" id="spanDidong">*</span>
            </div>

           
            <div class="rc-item">
                <div class="text">Địa chỉ</div>
                <input name="DiaChi" value="<?php echo set_value('DiaChi');?>" type="text"   class="textbox" value="<?php echo set_value('DiaChi');?>"/> 
            </div>
            
            <div class="rc-item">
                <div class="text"><?php echo $this->lang->line('lable_TinhThanh');?></div> 
                <select name="TinhThanh" class="select-item-regis">
                <option value="">--- Chọn tỉnh thành --- </option>
             <option value="Hà Nội">Hà Nội</option>
             <?php 
             $arr = file(APPPATH . 'includes/DSTinhThanh.txt');
             foreach($arr as $row) { 
                echo '
                     <option value="'.trim($row).'" '.set_select('TinhThanh', trim($row)).' >'.trim($row).'</option>
                     ';
             }
             ?>
          </select>
            </div>
            
            <div class="rc-item rc-item-break"></div>
             
            <div class="rc-item">
                <div class="text">Nhập mã an toàn <span>(*)</span></div>
                <input name="MaXacNhan" type="text" id="txtcode" class="textbox" style="width: 250px;" />
                <span class="imgCaptcha" style="padding: 5px 0 0; float: left;">
                    <img src="/maxacnhan/captcha" id="captcha" title="Mã xác nhận" style=" margin-left: 5px;margin-top: -3px; vertical-align: middle;"/><img title="Đổi mã xác nhận khác" src="/style/images/ref.gif" width="26" height="25" onclick="document.getElementById('captcha').src='/maxacnhan/captcha?'+Math.random();" style=" vertical-align: middle;"/>
                </span>
            </div>

            <div class="rc-item rc-item-action ">
                <div class="text">&nbsp;</div>
                <button onclick="return validate();" id="btnLogin" class="btnLogin" type="submit">Đăng ký</button>
            </div>

        </div>
    </div>

</div>
 </form>
        </div>
    </div>

            <div class="clear"></div>
        </div>