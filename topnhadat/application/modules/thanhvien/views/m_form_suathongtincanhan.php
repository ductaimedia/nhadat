 <div class="div_login">	<form action="" method="post" id="frmEdit">   
        <div id="boxRegister">
            <div class="tit">
                <h1 class="content-tit">Thay đổi thông tin cá nhân</h1>
            </div>
            <style>
            .note {
                padding: 7px!important;
            }
            </style>
            <div style="padding-top: 10px; "><?php $this->load->view('template/statut_thongbao');?></div>
            <div class="listbox">
                <div class="item">
                    <div class="text">Họ và tên</div>
                    <input name="HoVaTen" type="text" value="<?php echo $data_thanhvien['HoVaTen'];?>" id="txtTendaydu" class="textbox" /> 
                   
                </div>
                <div class="item">
                    <div class="text">Email</div>
                    <span id="txtEmailUser" class="spanemail"><?php echo $data_thanhvien['Email'];?></span><input name="Email" type="hidden" value="<?php echo $data_thanhvien['Email'];?>" id="txtDidong" class="textbox" />
                </div>
                <div class="item">
                    <div class="text">Tên đăng nhập </div>
                    <span id="txtUserName" class="spanemail"><?php echo $data_thanhvien['username'];?></span>
                </div>
                <div class="item">
                    <div class="text">Điện thoại <span>(*)</span></div>
                    <input  name="DienThoai" type="text" value="<?php echo $data_thanhvien['DienThoai'];?>" maxlength="12" id="txtDidong" class="textbox" />
                    <span id="validateFortxtDidong" class="message">Số di động sai định dạng, bạn hãy nhập lại!</span>
                </div>
                <div>
                    <div class="item">
                        <div class="text">Tỉnh / Thành phố</div>
                        <div class=""> 
                            <select id="ddlCityRegis" name="TinhThanh" class="selectn">
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
                    </div> 
                    <div class="item">
                        <div class="text"><?php echo $this->lang->line('lable_add');?></div>
                        <input name="DiaChi" type="text" value="<?php echo $data_thanhvien['DiaChi'];?>" id="txtYahoo" class="textbox" />
                    </div> 
                </div>

                <div class="item center">
                    <a id="MainContent_lbtRegister" class="button-save" href="javascript:document.getElementById('frmEdit').submit()">Lưu lại</a>
                    <a id="MainContent_btnCancel" class="button-save button2" href="/thanh-vien/sua-thong-tin-ca-nhan.html">Hủy</a>
                </div>
            </div>
        </div></form>
    </div>
    <script src="/Scripts/Register.js"></script>

