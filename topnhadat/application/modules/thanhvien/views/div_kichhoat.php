<div id="dangki">
       		 <div class="dangki_title"><a href="<? echo base_url();?>" title="<?php echo $this->lang->line('lable_home');?>"><?php echo $this->lang->line('lable_home');?></a><a href="<? echo base_url();?>thanh-vien" title="<?php echo $this->lang->line('lable_Member');?>"><?php echo $this->lang->line('lable_Member');?></a> <b style="color: black;"><?php echo $this->lang->line('title_dangkythanhcong');?></b> </div>
                <div class="dangnhap_box">
                	 
                 <form action="" method="post" class="josForm form-validate" name="com_login">
                    <div class="dangnhap_box1">
                  
                    <?php echo sprintf($this->lang->line('thongbao_dangkythanhcong'),$username);?>
                    </div>
                    
                 	<input type="hidden" name="deb761e715948bc6a5dc64aaa8f0bcfb" value="1" /></form>
             </div>
           </div>
           

<div class="register_right"><?php echo Modules::run('divhotro');?></div>      
 
  </div>