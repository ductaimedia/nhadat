<div class="content2">
   <form action="" method="post">       
<div class="div_menulogin">
    <div class="tit " style="border-color: #7d7d7d">
        <div class="content-tit">
            <a href="/thanh-vien/dang-nhap.html" class="alogin" style="border-color: #37a344">Đăng nhập</a>
            <a href="/thanh-vien/dang-ky.html" class="selected">Đăng ký</a>
            <div class="clear"></div>
        </div>
    </div>
    <div style="color: red;padding-top: 10px;"><?php $this->load->view('template/statut_thongbao');?></div>
    <div class="clear"></div>
    <div id="boxRegister" class=""> 

        <div class="listbox">  
            
            <div class="item">
                <div class="text"><?php echo $this->lang->line('lable_username');?> <span>*</span></div>
                <input name="username" type="text" id="txtUserName" class="textbox notnull" value="<?php echo set_value('username');?>"/> 
            </div>
            <div class="item">
                <div class="text">Mật khẩu <span>*</span></div>
                <input name="password" type="password" id="txtMatkhau" class="textbox notnull" /> 
            </div>
            <div class="item">
                <div class="text">Xác nhận lại mật khẩu <span>*</span></div>
                <input name="repassword" type="password" id="txtNhaplaimatkhau" class="textbox notnull" /> 
            </div>
            <div class="item">
                <div class="text">Email <span>*</span></div>
                <input name="Email" type="text" id="txtEmail" class="textbox notnull" value="<?php echo set_value('Email');?>"/><span class="null" id="spanEmail"></span> 
            </div>
            <div class="item">
                <div class="text"><?php echo $this->lang->line('lable_HoVaTen');?></div>
                <input name="HoVaTen" type="text" id="txtTendaydu" class="textbox" value="<?php echo set_value('HoVaTen');?>"/> 
            </div>
            
            <div class="item">
                <div class="text">Điện thoại <span>*</span></div>
                <input name="DienThoai" type="text" maxlength="12" id="txtDidong" class="textbox notnull" value="<?php echo set_value('DienThoai');?>"/> 
            </div>
          
            <div class="item">
                <div class="text">Địa chỉ</div>
                <input name="DiaChi" type="text" id="txtTendaydu" class="textbox" value="<?php echo set_value('DiaChi');?>"/> 
            </div>
            
            <div class="item">
                    <div class="text">Tỉnh / Thành phố</div> 
                        <select id="ddlCityRegis" class="selectn" name="TinhThanh" onchange="ChangeTinhthanhpho($(this).val())">
                            <option value="">-- Chọn Tỉnh/Thành phố --</option>
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
            <div class="item">
                <div class="text">Mã xác nhận<span>*</span></div>
                <input name="MaXacNhan" type="text" maxlength="4" id="txtcode" class="textbox notnull" />
                <span class="imgCaptcha">
                <img src="/maxacnhan/captcha" id="captcha" title="Mã xác nhận" style="width: 100px; height: 23px; vertical-align: middle;"/><img title="Đổi mã xác nhận khác" src="/style/images/ref.gif" width="26" height="25" onclick="document.getElementById('captcha').src='/maxacnhan/captcha?'+Math.random();" style=" vertical-align: middle;"/>
                     
                </span> 
                
            </div>

            <div class="item item-btn">
                <div class="content-itembtn">
                    <button type="submit" class="button btnRegister" >Đăng ký</button>
                </div>
            </div>
        </div>
    </div> 
</div>
</form> 

    </div>