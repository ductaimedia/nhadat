<div class="autoforyou" style="margin-top: -5px;">
    <div class="auto4u_tabs">
        <a href="/xe-dang-ban"><h2 id="auto4u" class="activetab oswaldlarge-tab">Danh sách xe đang bán tại <? echo $salon_info['TenSalon'];?></h2> </a>
        <div class="displaystyle">
            <span>Kiểu hiển thị:</span> 
            <a href="?style=list" onclick="SetFilterThumbViewCookie(false)" title="Hiển thị dạng danh sách" rel="nofollow"><img id="liststyle" src="<? echo base_url();?>style/images/list-<? if($this->session->userdata('KieuHienThi')=='list'){echo 'active';}else{echo 'deactive';} ?>.png" /></a>
            <a href="?style=grid" onclick="SetFilterThumbViewCookie(true)" title="Hiển thị dạng lưới" rel="nofollow"><img id="gridstyle" src="<? echo base_url();?>style/images/grid-<? if($this->session->userdata('KieuHienThi')=='grid'){echo 'active';}else{echo 'deactive';} ?>.png" /></a>
        </div>
    </div>
    <div class="containertab">
            <div class="auto4u box" style="display:block;">
        
          
                    <? 
$dulieu=$lienhe;
include APPPATH.'modules/dangtin/views/div_'.$this->session->userdata('KieuHienThi').'.php';
if($this->uri->segment(1)!='xe-dang-ban'){
?>     		    
                  
                  <div class="viewmore">
                    <a rel="nofollow" onclick="" href="/xe-dang-ban">» Xem thêm các xe đang bán tại Salon <? echo $salon_info['TenSalon'];?> </a>
                </div>
                <?}?>
            </div>
         </div>
         <?php echo $this->pagination->create_links();?>
    </div>   

 