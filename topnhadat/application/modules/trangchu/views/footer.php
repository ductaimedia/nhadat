 <!-- Footer -->
        
<div class="footer">
<? echo Modules::run('baiviet/menufooter');?>
    
    <div class="footer_bottom">
        <div class="row_footer">
            <div class="logo_footer">
                <a href="/" title="mua bán nhà đất">
                    <img src="/style/images/logo.png" alt="mua bán nhà đất"></a>
            </div>
            <div class="info_footer">
                <p><?php echo $data->{'GiayPhep'};?></p>
                <p><?php echo $data->{'GhiChu'};?></p>
                <p class="info_ct">
                    <span>Hotline:  <?php echo $data->{'DienThoai'};?> <?php if($data->{'Fax'}!=''){ echo ' - Fax: '.$data->{'Fax'};}?></span>
                </p>
                <p class="info_ct">
                     <a style="border:none;margin:0;padding:0" rel="nofollow" href="mailto:<?php echo $data->{'ThoiGianLamViec'};?>?Subject=Liên hệ-<?php echo $data->{'ThoiGianLamViec'};?>" target="_top">Email: <?php echo $data->{'ThoiGianLamViec'};?></a>
                    <a href="skype:<?php echo $data->{'Skype'};?>?chat" rel="nofollow">Skype: <?php echo $data->{'Skype'};?></a>
                    <!--<a href="ymsgr:sendim?<?php// echo $data->{'Yahoo'};?>" rel="nofollow">Yahoo: <?php// echo $data->{'Yahoo'};?></a>-->
                </p>
                <p class="info_ct">
                    <span>Địa chỉ: <?php echo $data->{'DiaChi'};?></span>
                </p>
            </div>
          
          
   
            
            
            
            
            
            <div class="clear">
            </div>
            <div class="bd_footer"></div>
        </div>
       
    </div>
    <div class="clear"></div>
</div>

        <div id="boxProductSaved" style="">
            <div class="titlebox">
                <span class="title">Tin đã lưu</span> <span id="deleteAll" title="Xóa tất cả" onclick="deleteAllNews();"></span><span id="btn_close" class="hideAll"></span>
            </div>
            <div>
                <ul class="listbox" style="width: 100%;">
                </ul>
            </div>
        </div>
        <!-- End Footer -->
        <div id="SiteLeft" style="display: none">
            <div class="ban_scroll" id="ban_left" style="width: 100px">
                <div class="item">
                <? //print_r($banners);
    foreach($banners['A1'] as $banner){?>
        <a id="ban_l1" href="<? echo $banner['Link'];?>" target="_blank" style="width: 100px;"><? echo $banner['NoiDung'];?></a>
    <?}?> 
    <? //print_r($banners);
    foreach($banners['A2'] as $banner){?>
        <a id="ban_l2" href="<? echo $banner['Link'];?>" target="_blank" style="width: 100px;"><? echo $banner['NoiDung'];?></a>
    <?}?> 
                      
                </div>
            </div>
        </div>
        <div id="SiteRight" style="display: none">
            <div class="ban_scroll" id="ban_right" style="width: 100px">
                <div class="item">
                <? //print_r($banners);
    foreach($banners['B1'] as $banner){?>
        <a id="ban_r1" href="<? echo $banner['Link'];?>" target="_blank" style="width: 100px;"><? echo $banner['NoiDung'];?></a>
    <?}?> 
                    <? //print_r($banners);
    foreach($banners['B2'] as $banner){?>
        <a id="ban_r2" href="<? echo $banner['Link'];?>" target="_blank" style="width: 100px;"><? echo $banner['NoiDung'];?></a>
    <?}?> 
                </div>
            </div>
            
       
        </div>

    </form>
    <a href="#top" id="toTop" rel="nofollow" style="display: inline;"></a>

	</body>


	</html>