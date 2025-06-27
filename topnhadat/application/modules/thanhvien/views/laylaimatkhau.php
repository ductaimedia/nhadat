<div class="wr_page">
            
    <div class="index-page">
        <div class="content">
             
<form action="" method="post">             
<div class="login">
    <div class="login-title"><?php echo $this->lang->line('title_lostpass');?></div>
    <div class="login-content">
    <?php
                if($error!="")
                {
                    echo '<div class="note note-error">'.$error.'</div>';
                }
                if($sucess!="")
                {
                    echo '<div class="note note-success">'.$sucess.'</div>';
                }
            ?> 
        <div>
            <label><?php echo $this->lang->line('lable_MatKhauMoi');?></label>
            <input name="password" type="text"  />
        </div> 
        <div>
            <label><?php echo $this->lang->line('lable_NhapLaiMatKhauMoi');?></label>
            <input name="repassword" type="text"  />
        </div>  
        <div>
            <label>&nbsp;</label>
            <button id="btnLogin" class="btnLogin" type="submit"><?php echo $this->lang->line('lable_Send');?></button>
        </div> 
    </div>
</div>
</form>  
 
        </div>
    </div>

            <div class="clear"></div>
        </div>