<div class="wr_page">
            
    <div class="index-page">

        <div class="content">
            
            <!-- Content Left -->
            <div class="content-left">

                

<script src="/style/themes/galleria-1.4.2.min.js"></script>
<script src="/style/themes/galleria.flickr.min.js"></script>
<script src="/style/js/GoogleMapControl.min.js?v=20151126"></script>
<script src="/style/js/jwplayer.js"></script>
<link href="/style/css/print1.css" rel="stylesheet" />
<script src="/style/js/ProductDetail.min.js?v=20151126" type="text/javascript"></script>
<script type="text/javascript">
    productId = '<? echo $xemtinban['IDMaTin'];?>';

    $(document).ready(function () {
        var img = new Image();
        img.src = 'https://batdongsantop10.net/Handler/Statistic.ashx?id=' + productId;
    });
$("a[rel^='prettyPhoto']").prettyPhoto({
        animation_speed: 'normal',
        theme: 'light_square',
        slideshow: 5000,
        autoplay_slideshow: false,
        social_tools: '',
        //gallery_markup: '',
        deeplinking: false,
        allow_resize: false
    });
</script> 
<?php
                            $slide=explode('|',$xemtinban['AlbumAnh']); 
                            ?>
<div class="product-detail">
    <h1>
        <? echo $xemtinban['TieuDe'];?>
    </h1>
    <div id="ContentPlaceHolder1_ProductDetail1_divlocation" class="pd-location">
    <?
    $arr_areas=array('PhanHang','XuatXu','NamSX','DoiXe');
    $stt1=0;
    $htmlarea='';
    foreach($arr_areas as $key=>$area){
      if($xemtinban[$area]!=''){$stt1++;
      
      $info_cha=Modules::run('trangchu/getList','tinhthanh',1,0,'Name asc','ID',array('Name'=>$xemtinban[$arr_areas[$key+1]],'Loai'=>$arr_areas[$key+1]));
      if(!$info_cha){
        $info_cha[0]['Note']='';
      }  
      
      if($area=='PhanHang'){
          $city=Modules::run('trangchu/getList','tinhthanh',1,0,'Name asc','ID',array('Name'=>$xemtinban['DoiXe'],'Loai'=>'DoiXe'));
          $last=Modules::run('trangchu/getList','tinhthanh',1,0,'Name asc','ID',array('Name'=>$xemtinban['NamSX'],'Loai'=>'NamSX','Parent'=>$city[0]['Note']));
          $info_cha=$last;
      }
         
      $info_reg=Modules::run('trangchu/getList','tinhthanh',1,0,'Name asc','ID',array('Name'=>$xemtinban[$area],'Loai'=>$area,'Parent'=>$info_cha[0]['Note']));; 
      
         $link='/'.stripUnicode($HangXe['TieuDe']).'-'.$info_reg[0]['Link'];
         if($stt1==1){
            $htmlarea.= '<a href="'.$link.'">'.$HangXe['TieuDe'].' tại '.$info_reg[0]['Perfix'].' '.$xemtinban[$area].'</a>';
         }else{
            $htmlarea.= ' - <a href="'.$link.'">'.$info_reg[0]['Perfix'].' '.$xemtinban[$area].'</a>';
         } 
         if(!isset($setlink)){
            $setlink=$link;
         }
      }
    }
    ?>
        <span class='spanlocation'>Khu vực:</span>  <? echo $htmlarea;?>
    </div>
    <div id="ContentPlaceHolder1_ProductDetail1_divprice" class="pd-price">
        Giá: <span class="spanprice">
            <? echo ($xemtinban['GiaTien']==0?'':$xemtinban['GiaTien']);?> <? echo $xemtinban['SoKM'];?></span>
        Diện tích:<span>
            <? echo $xemtinban['NgoaiThat'];?> m²</span>
            
        <div style="float: right;">Mã số tin: <span style="color: #36a445;"><? echo $xemtinban['IDMaTin'];?></span> | Ngày đăng tin: <span style="color: #aaa;"><? echo date('d/m/Y',strtotime($xemtinban['NgayDang']));?></span></div>
    </div>
    <div class="pd-desc">
        <h3>Thông tin mô tả</h3>
        <div class="pd-desc-content">
            <? echo nl2br($xemtinban['ThongTinMota']);?>
        </div>
    </div>
    <input type="hidden" name="" id="CountImage" value="<?  $total_img=count($slide); echo $total_img;?>" />
    <!--Video-->
    
    <div class="pd-tab">

        <div id="imageProductDetail" class="imageProductDetail-active">Hình ảnh <b id="bCountImage">(<?  $total_img=count($slide); echo $total_img;?>)</b></div>

        <div id="mapsProductDetail">Bản đồ</div>
    </div>

    <!-- Image -->
    <div class="pd-slide" id="divmyGallery">
        <ul id="myGallery" style="margin: 0 !important; ">
            <?php 
                            foreach($slide as $img){
                                if($img!=''&&$img!='undefined'&&$img!='noimage.gif'){ 
                                echo '
                    <li>
                        <a href="'.show_img($img).'" rel="'.show_img($img).'"><img src="'.show_img($img).'" style="max-width: 632px; max-height: 380px;" alt="'.$xemtinban['DongXe'].'" title="'.$xemtinban['TieuDe'].'" /></a>
                    </li> 
                            ';
                                
                                }
                                
                            }
                            ?>    
        </ul>
        <div id="imgPrint"></div>
    </div>

    <!-- Maps -->
    <div id="ContentPlaceHolder1_ProductDetail1_divmaps" class="divmaps" style="display: none; margin: 10px 0 0; float: left; width: 100%;">
        <div>
            <input type="hidden" name="" id="hddLatitude" value="<? echo $xemtinban['SoCua'];?>" />
            <input type="hidden" name="" id="hddLongtitude" value="<? echo $xemtinban['SoChoNgoi'];?>" />
            <input type="hidden" name="" id="txtPositionX" value="<? echo $xemtinban['SoCua'];?>" />
            <input type="hidden" name="" id="txtPositionY" value="<? echo $xemtinban['SoChoNgoi'];?>" />
            <input type="hidden" name="" id="hddDiadiem" value="<? echo $xemtinban['DongXe'];?>"/>
<!--            
<script type="text/javascript" src="http://maps.google.com/maps/api/js"></script>
-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8B3gzfKH-_Dt__GoFeiK_KJTZf5Q071Q"></script>
<script src="/style/js/GoogleMapControl.min.js?v=20140820" type="text/javascript"></script>

<div id="mapinfo">
    <div id="map_canvas"></div>
</div>

        </div>
    </div>



    <div class="pd-info">
        <div class="pd-dacdiem">
            <h3>Đặc điểm bất động sản</h3>
            <table id="tbl1">
                <tbody>
                     
                    <tr>
                        <td><b>Loại tin rao</b></td>
                        <td>
                            <? echo $HangXe['TieuDe'];?></td>
                    </tr>  
                    <tr>
                        <td><b>Hướng nhà</b></td>
                        <td>
                            <? echo $xemtinban['NoiThat'];?></td>
                    </tr>
                    <tr>
                        <td><b>Hướng ban công</b></td>
                        <td>
                            </td>
                    </tr>
                    <tr>
                        <td><b>Số phòng</b></td>
                        <td><? echo $xemtinban['HeThongNapNhienLieu'];?>
                            </td>
                    </tr>
                    <tr>
                        <td><b>Đường vào</b></td>
                        <td>
                            <? if($xemtinban['DanDong']!=''){echo $xemtinban['DanDong'].' m';} ?> </td>
                    </tr>
                    <tr>
                        <td><b>Mặt tiền</b></td>
                        <td>
                            <? if($xemtinban['HopSo']!=''){echo $xemtinban['HopSo'].' m';} ?></td>
                    </tr>
                    <tr>
                        <td><b>Số tầng</b></td>
                        <td>
                            <? echo $xemtinban['NhienLieu'];?></td>

                    </tr>
                    <tr>
                        <td><b>Số toilet</b></td>
                        <td>
                            <? echo $xemtinban['MucTieuThu'];?></td>
                    </tr>
                    <tr>
                        <td><b>Nội thất</b></td>
                        <td>
                            </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="pd-contact">
            <h3>Thông tin liên hệ</h3>
            <table id="tbl2">
                <tr>
                    <td><b><img style="border: 0px;width: 80px;" src="<?
                    if($xemtinban['contact']!=''){
                        $ava=array_merge($ava,json_decode($xemtinban['contact'],true)); 
                    } 
                    
                    echo show_img(str_replace('upload/images/avatar/','',$ava['Avatar']),$thumb='150x150','/upload/images/avatar/');?>" /></b></td>
                    <td style=" font-weight: bold">
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
      ?></div>

                    </td>
                </tr> 
                <tr>
                    <td><b>Địa chỉ</b></td>
                    <td>
                        <? echo $ava['DiaChi'];?></td>
                </tr>
                <tr>
                    <td><b>Tỉnh thành</b></td>
                    <td>
                        <? echo $ava['TinhThanh'];?></td>
                </tr>
                <tr>
                    <td><b>Điện thoại</b></td>
                    <td>
                        <? echo $ava['DienThoai'];?></td>
                </tr> 
                <tr>
                    <td><b>Email</b></td>
                    <td>
                        <? echo $ava['Email'];?>
</td>
                </tr>
            </table>
        </div>
    </div>
    <div class="pd-share">
        <a href="javascript:printDetail();" class="print" rel="nofollow"></a>
        <a id="saveNews" rel="nofollow" onclick="productSaved(this,'<? echo $xemtinban['IDMaTin'];?>');" class="save"></a>
        <![if !IE]>  
        <div class="share">
            <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-526b16ce15374888"></script>
            <div class="addthis_native_toolbox"></div>
        </div>
        <![endif]> 
    </div>
</div>

                <!-- Product Other -->
                <div id="ContentPlaceHolder1_ProductArea1_divArea" class="pd-other">
    <div class="pd-other-title">
        <h3>Tin rao cùng khu vực</h3>
    </div>
    <div class="pd-other-content">
        <?
$dulieu=$xecungloai;
include 'div_grid.php';
?>
                 
            
        <div class="clear"></div>
        <div class="visitall">
            <a href="<? echo $setlink;?>" title="Xem tất cả">Xem tất cả</a>
        </div>
    </div>
</div>


<div id="ContentPlaceHolder1_ProductArea1_divPrice" class="pd-other">
    <div class="pd-unit-title">
        <h3>Tin rao cùng khoảng giá</h3>
    </div>
    <div class="pd-other-content">
        
                <?
$dulieu=$xecungkhoanggia;
include 'div_grid.php';
?>
            
        <div class="clear"></div>
        <div class="visitall">
            <a href="<? echo $setlink;?>?price=<? echo $khoanggia[0].(isset($khoanggia[1])?'-'.$khoanggia[1]:'');?>&type=<? echo $xemtinban['SoKM'];?>" title="Xem tất cả">Xem tất cả</a>
        </div>
    </div>
</div> 

<div class="comment">
    <div class="comment-title">
        <h3>bình luận</h3>
    </div>
    <div class="cm-tab">
        <div class="cm-fb cm-fb-active" id="CmtFaceBook" onclick="CmtFacebook();">Facebook</div>
        <div class="cm-gp " id="CmtGooglePlus" onclick="CmtGoogle();">Google +</div>
    </div>
    <div class="cm-content ">
        <!-- Facebook -->
        <div class="cm-content-fb">
            <div id="fb-root"></div>
            
            <div class="fb-comments" data-href="<?php echo "http://" . $_SERVER['HTTP_HOST']  . $_SERVER['REQUEST_URI']; ?>" data-width="660" data-numposts="2" data-colorscheme="light"></div>

        </div>
        <!-- Google Plus -->
        <div class="cm-content-gp positionfixed">
            <script src="https://apis.google.com/js/plusone.js">
            </script>
            <div class="g-comments"
                data-href="<?php echo "http://" . $_SERVER['HTTP_HOST']  . $_SERVER['REQUEST_URI']; ?>"
                data-width="660"
                data-first_party_property="BLOGGER"
                data-view_type="FILTERED_POSTMOD">
            </div>
        </div>
    </div>
</div>
 
                <!-- Product Unit Price -->

                <!-- Comment -->

                <div class="clear"></div>
            </div>
            <!-- Content Right -->
            <div class="content-right">
                <!-- Box search list -->
 <?  
include 'div_search.php';?> 

                <!-- Product count -->
                
<? include 'current_category.php';?>

                <!-- Banner -->
                
                <!-- Box hot -->
              <? include 'tukhoanoibat.php';?> 

                <!-- Utility -->
   <? include  APPPATH.'modules/dangtin/views/div_tool.php';?>

                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
    </div>


            <div class="clear"></div>
        </div>