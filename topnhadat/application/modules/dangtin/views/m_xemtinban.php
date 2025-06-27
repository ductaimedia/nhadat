
<link rel="stylesheet" href="/style/mobile/css/idangerous.swiper.css">
<?php
                            $slide=explode('|',$xemtinban['AlbumAnh']); 
                            ?>
<script type="text/javascript">
    productId = '<? echo $xemtinban['IDMaTin'];?>';

    $(document).ready(function () {
        var img = new Image();
        img.src = 'https://batdongsantop10.net/Handler/Statistic.ashx?id=' + productId;
    });

</script>
<div class="div_search default_padding">
    <a href="javascript:void(0);" rel="nofollow" onclick="productSaved(this,'<? echo $xemtinban['IDMaTin'];?>');" id="<? echo $xemtinban['IDMaTin'];?>">
        <div class="save-detail">
            <img src="/style/mobile/images/icon-detail-save-listing.png" />
            <span>Lưu tin</span>
        </div>
    </a>
    <a href="javascript:ShareListing();">
        <div class="share">
            <img src="/style/mobile/images/icon-share.png" />
            <span>Chia sẻ</span>
        </div>
    </a>

    <div class="clear"></div>
</div>
<div class="popupshare">
    <ul>
        <li>
            <span class="text">Chia sẻ</span>
            <a href="javascript:CloseShareListing();" class="closemenu">
                <img src="/style/mobile/images/closesearch.png" /></a>
        </li>
        <li id="facebook">

            <a rel="nofollow" data-role="none" href="http://www.facebook.com/sharer/sharer.php?u=<?php echo "http://" . $_SERVER['HTTP_HOST']  . $_SERVER['REQUEST_URI']; ?>">
                <img class="icon" src="/style/mobile/images/iconfb.png">
                <span class="text">Facebook</span>
            </a>
        </li>
        <li id="email">
            <a rel="nofollow" data-role="none" href="mailto:?subject=Bat dong san hay tren <?php echo "http://" . $_SERVER['HTTP_HOST'];?>&body=<?php echo "http://" . $_SERVER['HTTP_HOST']  . $_SERVER['REQUEST_URI']; ?>">
                <img class="icon" src="/style/mobile/images/icongmail.png">
                <span class="text">Gmail</span>
            </a>
        </li>
        <li id="google">
            <a data-role="none" rel="nofollow" href="https://plus.google.com/share?url=<?php echo "http://" . $_SERVER['HTTP_HOST']  . $_SERVER['REQUEST_URI']; ?>">
                <img class="icon" src="/style/mobile/images/icongoogle.png">
                <span class="text">Google Plus</span>
            </a>
        </li>
    </ul>
</div>
<div class="content2">
    <div class="div_detail">
        
        <div class="pdetail">
            <div class="ptitle">
                <h1>
                    <? echo $xemtinban['TieuDe'];?></h1>
            </div>
            <div class="pprice">
                <span>Giá :</span>
                <? echo ($xemtinban['GiaTien']==0?'':$xemtinban['GiaTien']);?> <? echo $xemtinban['SoKM'];?>
            </div>
            <div class="parea">
                <span>Diện tích:</span>
                <? echo $xemtinban['NgoaiThat'];?> m²
            </div>
            
            

            <div id="MainContent_ProductDetailMobile_myGallery" class="device">
                <a class="arrow-left" href="#" rel="nofollow"></a>
                <a class="arrow-right" href="#" rel="nofollow"></a>
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <?php 
                            foreach($slide as $img){
                                if($img!=''&&$img!='undefined'&&$img!='noimage.gif'){ 
                                echo ' 
                    <div class="swiper-slide">
                                    <div class="pro-img" style="background-image: url(\''.show_img($img).'\')"></div>
                                    <img src="'.show_img($img).'" alt="'.$xemtinban['TieuDe'].'" style="display: none" /></li>
                                </div>
                            ';
                                
                                }
                                
                            }
                            ?>     
                    </div>
                </div>
                <div style="clear: both;"></div>
                <div class="wr_number"><span id="index_slide">1</span><span><?  $total_img=count($slide); echo $total_img;?></span></div>
            </div>
            <script src="/style/mobile/js/idangerous.swiper-2.1.min.js"></script>
            <script>
                var mySwiper = new Swiper('.swiper-container', {
                    loop: true,
                    grabCursor: true,
                    paginationClickable: true,
                    onSlideChangeEnd: function (swiper) {
                        $('#index_slide').text(mySwiper.activeLoopIndex + 1)
                    }
                })
                $('.arrow-left').on('click', function (e) {
                    e.preventDefault()
                    mySwiper.swipePrev()
                })
                $('.arrow-right').on('click', function (e) {
                    e.preventDefault()
                    mySwiper.swipeNext()
                })
            </script>

            
            <div class="pdes">
                <div class="ptit ">
                    <h3 class="header">Thông tin mô tả</h3>
                    <div class="line">
                    </div>
                </div>
                <div class="text" id="txtdescription">
                    <div class="text-content">
                        <? echo nl2br($xemtinban['ThongTinMota']);?>
                    </div>
                </div>
                <div class="extendinfo" style="display: none">Xem thêm&nbsp;<img src="/style/mobile/images/icon-expand.png" /></div>
            </div>
       

            
            <div id="MainContent_ProductDetailMobile_divmaps" class="divmaps" style="display: none; float: left; width: 100%;">
                <div>
                    <input type="hidden" name="ctl00$MainContent$ProductDetailMobile$hddLatitude" id="hddLatitude" value="<? echo $xemtinban['SoCua'];?>" />
                    <input type="hidden" name="ctl00$MainContent$ProductDetailMobile$hddLongtitude" id="hddLongtitude" value="<? echo $xemtinban['SoChoNgoi'];?>" />
                    <input type="hidden" name="ctl00$MainContent$ProductDetailMobile$txtPositionX" id="txtPositionX" value="<? echo $xemtinban['SoCua'];?>" />
                    <input type="hidden" name="ctl00$MainContent$ProductDetailMobile$txtPositionY" id="txtPositionY" value="<? echo $xemtinban['SoChoNgoi'];?>" />
                    <input type="hidden" name="ctl00$MainContent$ProductDetailMobile$hddDiadiem" id="hddDiadiem" value="<? echo $xemtinban['DongXe'];?>" />
                    
<!--
<script type="text/javascript" src="http://maps.google.com/maps/api/js"></script>
-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8B3gzfKH-_Dt__GoFeiK_KJTZf5Q071Q"></script>
<script src="/style/js/GoogleMapControl.min.js?v=20140820" type="text/javascript"></script>
<div id="mapinfo" class="c-content-m">
    <div id="map_canvas"></div>
</div>

                    
                </div>
            </div>

            <div id="viewMap" class="view-map">
                <a href="javascript:;" onclick="LoadMap();" rel="nofollow">
                    <span class="img-v-m">
                        <i class="icon-v-m"></i>
                    </span>
                    <span class="text-blue text-vm">Xem bản đồ</span>
                </a>

                <a href="javascript:void(0);" onclick="LoadMap();" rel="nofollow" class="close-m">
                    <img src="/style/mobile/images/close.png" />
                </a>
            </div>
            <div class="clear"></div>

            <div class="pdacdiem">
                <div class="ptit">
                    <h3>Đặc điểm BĐS</h3>
                    <div class="line">
                    </div>
                </div>

                <table id="tbl1">
                <tr>
                        <td class="td_info">Mã số <span class="paddingRight">:</span></td>
                        <td>
                            <? echo $xemtinban['IDMaTin'];?></td>
                    </tr>
                    <tr>
                        <td class="td_info">Ngày đăng tin <span class="paddingRight">:</span></td>
                        <td>
                            <? echo date('d/m/Y',strtotime($xemtinban['NgayDang']));?></td>
                    </tr>  
                
                    <tr id="MainContent_ProductDetailMobile_trProject">
	<td class="td_info">Loại tin rao <span class="paddingRight">:</span></td>
	<td>
                            <? echo $HangXe['TieuDe'];?></td>
</tr>

                    <tr id="MainContent_ProductDetailMobile_trAddress">
	<td class="td_info">Hướng nhà <span class="paddingRight">:</span></td>
	<td>
                            <? echo $xemtinban['NoiThat'];?> </td>
</tr>
                <tr>
                        <td class="td_info"> Đường vào  <span class="paddingRight">:</span></td>
                        <td>
                            <? if($xemtinban['DanDong']!=''){echo $xemtinban['DanDong'].' m';} ?> </td>
                    </tr>
                    <tr>
                        <td class="td_info"> Mặt tiền  <span class="paddingRight">:</span></td>
                        <td>
                            <? if($xemtinban['HopSo']!=''){echo $xemtinban['HopSo'].' m';} ?></td>
                    </tr>
                    
                    <tr>
                        <td class="td_info"> Số phòng  <span class="paddingRight">:</span></td>
                        <td><? echo $xemtinban['HeThongNapNhienLieu'];?>
                            </td>
                    </tr>
                    
                    
                    
                    <tr>
                        <td class="td_info">Số tầng <span class="paddingRight">:</span></td>
                        <td>
                            <? echo $xemtinban['NhienLieu'];?>
                        </td>
                    </tr>
                    <tr>
                        <td class="td_info">Số toilet <span class="paddingRight">:</span></td>
                        <td><? echo $xemtinban['MucTieuThu'];?>
                            </td>
                    </tr>
                </table>

            </div>


            <div class="pcontact" id="lienhe">
                <div class="ptit">
                    <h3 class="h3">Thông tin liên hệ</h3>
                    <div class="line">
                    </div>
                </div>

                <table id="tbl2">
                    <tr id="MainContent_ProductDetailMobile_trContactName">
	<td class="td_contact"><img style="border: 0px;width: 80px;" src="<?
                    if($xemtinban['contact']!=''){
                        $ava=array_merge($ava,json_decode($xemtinban['contact'],true)); 
                    } 
                    
                    echo show_img(str_replace('upload/images/avatar/','',$ava['Avatar']),$thumb='150x150','/upload/images/avatar/');?>" /> </td>
	<td style="padding-left: 5px;font-weight: bold;">
                             <b style="color: green;"><? echo $ava['username'];?></b><br />
                        <b><? echo $ava['HoVaTen'];?></b><br />
                        <div style="margin-top: 5px;font-weight: normal;">Loại thành viên: <?php 
       
      if($ava['level']=='free_user'||$ava['level']==''){
        $Loai='<span style="color: orange;">Miễn phí</span>';
      }
      if($ava['level']=='vip_user'){
        $Loai='<span style="color: red;">VIP</span>';
      }
      if($ava['level']=='xsieuvip_user'){
        $Loai='<span style="color: red;">SIÊU VIP</span>';
      } 
      echo $Loai;
      ?></div></td>
</tr>

                    <tr>
                        <td class="td_contact">Địa chỉ <span class="paddingRight">:</span></td>
                        <td style="padding-left: 5px;">
                            <? echo $ava['DiaChi'];?></td>
                    </tr>
                    <tr id=" ">
	<td class="td_contact">Điện thoại <span class="paddingRight">:</span></td>
	<td style="padding-left: 5px;">
                            <a rel="nofollow" href="tel:<? echo $ava['DienThoai'];?>"><? echo $ava['DienThoai'];?></a></td>
</tr>

                    <tr id="MainContent_ProductDetailMobile_trContactMobile">
	<td class="td_contact">Tỉnh thành <span class="paddingRight">:</span></td>
	<td style="padding-left: 5px;">
                            <? echo $ava['TinhThanh'];?></td>
</tr>

                    <tr id="MainContent_ProductDetailMobile_trContactEmail">
	<td class="td_contact">Email <span class="paddingRight">:</span></td>
	<td style="padding-left: 5px; word-break: break-all;">
                            <? echo $ava['Email'];?>

                        </td>
</tr>

                </table>
            </div>
            <div class="otherProducts">
                
<div class="tit">
    <h1 class="content-tit">Các tin rao khác</h1>
</div>
<ul>
    <?
$dulieu=$xecungloai; 
?>
<?php   
foreach($dulieu as $tintuc){ 
?>
    <? 
                    $c_HangXe=Modules::run('baiviet/getDanhMucCha',$tintuc['HangXe']);
                    $link='/'.stripUnicode($c_HangXe['TieuDe']).'-'.stripUnicode($tintuc['NamSX']).'-'.stripUnicode($tintuc['DoiXe']).'/'.stripUnicode($tintuc['TieuDe']).'-pr'.$tintuc['IDMaTin'].'.html';
                    ?>
	 				<li><a href='<? echo $link;?>' title='<? echo $tintuc['TieuDe'];?>'>
                <? echo $tintuc['TieuDe'];?><i> (<? echo date('d/m/Y',strtotime($tintuc['NgayDang']));?>)</i></a></li>
    <?}?> 
</ul>

            </div>
        </div>
    </div>
</div>
<div class="clear"></div>
<script src="/style/mobile/js/Gallery.js"></script>
<input type="hidden" name="ctl00$MainContent$ProductDetailMobile$hdLat" id="hdLat" value="10.7872729" />
<input type="hidden" name="ctl00$MainContent$ProductDetailMobile$hdLong" id="hdLong" value="106.74981049999997" />
<input type="hidden" name="ctl00$MainContent$ProductDetailMobile$hdAddress" id="hdAddress" value="Dự án The Sun Avenue, Quận 2, Hồ Chí Minh " />

<script type="text/javascript">
    $(document).ready(function () {
        checkSaveProduct(<? echo $xemtinban['IDMaTin'];?>);
        if ($(".divmaps").length) {
            console.log($("#hddLatitude").val() + ' ' + $("#hddLongtitude").val() + ' ' + $("#hddDiadiem").val());
            $(".divmaps").show();
            initializeAddress($("#hddLatitude").val(), $("#hddLongtitude").val(), $("#hddDiadiem").val());
        }
    });
</script>
