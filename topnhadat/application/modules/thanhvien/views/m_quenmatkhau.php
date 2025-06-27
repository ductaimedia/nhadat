<div class="content2">
<form action="" method="post">        
<div class="div_menulogin">
    <div class="tit">
        <div class="content-tit">
            <a href=""><?php echo $this->lang->line('title_lostpass');?></a>
            <div class="clear"></div>
        </div>
    </div>
<div style="color: red;padding-top: 10px;"><?php $this->load->view('template/statut_thongbao');?></div>
    <div id="boxLogin">
        <div class="item">
            <div class="text">Địa chỉ <?php echo $this->lang->line('lable_email');?> của bạn <span>*</span></div>
            <input name="Email" type="text" id="txtUserName" class="textbox" autocomplete="off" />
        </div> 
        
        <div class="item item-btn">
            <div class="content-itembtn">
                <button class="btnLogin button" type="submit"><?php echo $this->lang->line('lable_Send');?></button> 
            </div>
        </div>
    </div>
</div>
</form> 
<script type="text/javascript">
    $('input[type="text"]').bind("keypress", function (e) {
        if (e.keyCode == 13) {
            $(this).parent().next().find('input').focus()
        }
    });
    $('#txtPassword').bind("keypress", function (e) {
        // enter key code is 13button
        if (e.which === 13) {
            __doPostBack('ctl00$MainContent$LoginMobile$btnLogin', '');
        }
    })
</script>

    </div>