        <div class="wr_page">
            
    <!-- Box Search -->
     
<link href="/style/css/select2.min.css" rel="stylesheet" />
<script src="/style/js/select2.full.min.js"></script>


<style>
.option-item{
    text-align: left!important;
}
</style>
<script type="text/javascript" > 
<? 
                                   $opition_nam_ban='<option value="Thỏa thuận">Thỏa thuận</option><option value="Triệu">Triệu</option><option value="Tỷ">Tỷ</option><option value="Cây vàng">Cây vàng</option><option value="USD">USD</option><option value="USD/m²">USD/m²</option><option value="Trăm nghìn/m²">Trăm nghìn/m²</option><option value="Triệu/m²">Triệu/m²</option><option value="Chỉ vàng/m²">Chỉ vàng/m²</option><option value="Cây vàng/m²">Cây vàng/m²</option>';
                                    $opition_nam_thue='<option value="Thỏa thuận">Thỏa thuận</option><option value="Trăm nghìn/tháng">Trăm nghìn/tháng</option><option value="Triệu/tháng">Triệu/tháng</option><option value="USD/tháng">USD/tháng</option><option value="USD/m²/tháng">USD/m²/tháng</option><option value="Trăm nghìn/m²/tháng">Trăm nghìn/m²/tháng</option><option value="Triệu/m²/tháng">Triệu/m²/tháng</option><option value="Nghìn/m²/tháng">Nghìn/m²/tháng</option> ';
                                    if($HangXe['MenuCha']==449){
                                        $opition_namSoKM=$opition_nam_ban;
                                    }
                                    if($HangXe['MenuCha']==451){
                                        $opition_namSoKM=$opition_nam_thue;
                                    }
                                    ?>
function getDoiXe(HangXe){
    
    $.ajax
    ({
        
       type: "POST",
       url: "/dangtin/getDoiXe/"+HangXe,
       success: function(response)
       {   
        
          $("#ddlType").html('<option value="">Loại bất động sản</option>'+response);
          $("#ddlType").select2('val', '<? echo $Xe;?>');   
          if(HangXe==449){
             dataSoKM='<? echo $opition_nam_ban;?>';
          }
          if(HangXe==451){
             dataSoKM='<? echo $opition_nam_thue;?>';
          }
             $("#SoKM").html('<option value="">Đơn vị tính</option>'+dataSoKM);
             $("#SoKM").select2(); 
       }            
    });
}
function autoSearch(){
    if($("#divSell").hasClass('tab-active')){
        $("#adminForm2").attr('action','/bds-ban');  
    }else{
        $("#adminForm2").attr('action','/bds-cho-thue');  
    }
    document.getElementById('adminForm2').submit();
}




</script>

<!--POPUP-->



<!---END-->
<!-- Box Search -->
<div class="search">
    
    <div class="search-tab">
        <div class="search-tab-content">
            <div class="tab-sell tab-active" id="divSell" onclick="getDoiXe(449);">
                <h1>bất động sản bán</h1>
            </div>
            <div class="tab-rent " id="divRent" onclick="getDoiXe(451);">
                <h2>bất động sản cho thuê</h2>
            </div>
             <div class="clear"></div>
        </div>
    </div>
    <div class="search-content">
      <form method="post" name="adminForm2" id="adminForm2">
        <div class="search-content-input"> 
            <div class="input1" id="KeyDownEnterHome">
                <input name="TieuDe" type="text" class="ui-autocomplete-input" placeholder="Bạn muốn tìm bất động sản gì? Ví dụ: Bán nhà triều khúc thanh xuân..." autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true" />

            </div>
            <div class="input1 paddingleft0">
                <select id="ddlType" name="HangXe" class="option-item "> 
                                    <option value="">Loại bất động sản</option>
                </select> 
                <select id="ddlCity" name="DoiXe" class="option-item">
                            <option value="">Tỉnh/Thành phố</option> 
                            <?
$arr = file_get_contents(APPPATH . 'includes/DSTinhThanhKey.txt');
foreach(json_decode($arr,true) as $key=>$val){
    $select_ed=" ".set_select('DoiXe', $val['Text']);
                                        if($tinban['DoiXe']==$val['Text']){
                                            $select_ed=" selected='selected'";
                                        }
    echo '
    <option value="'.$val['Text'].'" data-key="'.$val['Id'].'" '.$select_ed.'>'.$val['Text'].'</option>    ';
}
?>
                        </select> 
                <select id="ddlDistrict" name="NamSX" class="option-item">
                                <option value="">Quận/Huyện</option>
                </select> 
                <select id="NgoaiThat" name="NgoaiThat" class="option-item">
                                <option value="">Diện tích</option>
                                <?
                                    $opition_nam_area='
                            <option value="<30">Dưới 30 m²</option>
                            <option value="30-50">Từ 30 đến 50 m²</option>
                            <option value="50-80">Từ 50 đến 80 m²</option>
                            <option value="80-100">Từ 80 đến 100 m²</option>
                            <option value="100-150">Từ 100 đến 150 m²</option>
                            <option value="150-200">Từ 150 đến 200 m²</option>
                            <option value="200-250">Từ 200 đến 250 m²</option>
                            <option value="250-300">Từ 250 đến 300 m²</option>
                            <option value="300-500">Từ 300 đến 500 m²</option> 
                            <option value=">500">Trên 500 m²</option> 
                                    ';
                                    preg_match_all("/<option value=\"(.*?)\">(.*?)<\/option>/is", $opition_nam_area, $matches);
                                    foreach($matches[2] as $key => $val){
                                        $select_ed=" ".set_select('NgoaiThat', $val); 
                                      echo "
                                      <option value='".$matches[1][$key]."'$select_ed>$val</option>
                                      ";
                                    }
                                    ?>
                </select> 
                <select id="GiaTien" name="GiaTien" class="option-item">
                                <option value="">Mức giá</option>
                                <?
                                    $opition_nam_price='
                            <option value="1-2">Từ 1 đến 2</option>
                            <option value="2-3">Từ 2 đến 3</option>
                            <option value="3-5">Từ 3 đến 5</option>
                            <option value="5-7">Từ 5 đến 7</option>
                            <option value="7-10">Từ 7 đến 10</option>
                            <option value="10-20">Từ 10 đến 20</option>
                            <option value="20-30">Từ 20 đến 30</option>
                            <option value=">30">Lớn hơn 30</option>
                            <option value="<500">Nhỏ hơn 500</option>
                            <option value="500-800">Từ 500 đến 800</option>
                            <option value="800-1000">Từ 800 đến 1000</option>
                                    ';
                                    preg_match_all("/<option value=\"(.*?)\">(.*?)<\/option>/is", $opition_nam_price, $matches);
                                    foreach($matches[2] as $key => $val){
                                        $select_ed=" ".set_select('GiaTien', $val); 
                                      echo "
                                      <option value='".$matches[1][$key]."'$select_ed>$val</option>
                                      ";
                                    }
                                    ?>
                </select> 
                <select id="SoKM" name="SoKM" class="option-item">
                     
                    </select>
                


            </div>
            <div class="input1 paddingleft0 line2"> 
                <select id="ddlWard" name="XuatXu" class="option-item" >
                            <option value="">Phường/Xã</option>
                        </select> 
                <select id="ddlStreets" name="PhanHang" class="option-item">
                            <option value="">Đường/Phố</option>
                        </select>  
                <select id="HeThongNapNhienLieu" name="HeThongNapNhienLieu" class="option-item" >
                            <option value="">Số phòng ngủ</option>
                            <?
                                    $opition_nam='
                            <option value="1">1+</option>
                            <option value="2">2+</option>
                            <option value="3">3+</option>
                            <option value="4">4+</option>
                            <option value="5">5+</option> 
                                    ';
                                    preg_match_all("/<option value=\"(.*?)\">(.*?)<\/option>/is", $opition_nam, $matches);
                                    foreach($matches[2] as $key => $val){
                                        $select_ed=" ".set_select('HeThongNapNhienLieu', $val); 
                                      echo "
                                      <option value='".$matches[1][$key]."'$select_ed>$val</option>
                                      ";
                                    }
                                    ?>
                        </select>  
                <select name="NoiThat" class="option-item ">
                            <option value="">Hướng nhà</option>
                            <?
                                    $opition_nam='
                                    <option value="Không xác định">Không xác định</option>
                            <option value="Đông">Đông</option>
                            <option value="Tây">Tây</option>
                            <option value="Nam">Nam</option>
                            <option value="Bắc">Bắc</option>
                            <option value="Đông-Bắc">Đông-Bắc</option>
                            <option value="Tây-Bắc">Tây-Bắc</option>
                            <option value="Tây-Nam">Tây-Nam</option>
                            <option value="Đông-Nam">Đông-Nam</option> 
                                    ';
                                    preg_match_all("/<option value=\"(.*?)\">(.*?)<\/option>/is", $opition_nam, $matches);
                                    foreach($matches[2] as $key => $val){
                                        $select_ed=" ".set_select('NoiThat', $val);
                                        if($tinban['NoiThat']==$val){
                                            $select_ed=" selected='selected'";
                                        }
                                       
                                      echo "
                                      <option value='$val'$select_ed>$val</option>
                                      ";
                                    }
                                    ?>
                            
                    </select> 
                <select id="TinhTrang" name="TinhTrang" class="option-item" >
                            <option value="">Dự án</option>
                        </select> 
                <a id="ContentPlaceHolder1_BoxSearch1_lbtSearch" class="btnsearch" onclick="autoSearch()" href="javascript://">
                        <img src="/style/images/search.png" />
                </a>
            </div>

        </div>
       </form>
    </div>
    <div class="clear"></div>
</div>
<!-- End Box Search -->
<script src="/style/js/BoxSearch.min.js?v=20151126" type="text/javascript"></script>
<script type="text/javascript">
    $(function () {
        var cnt = 0;
        $("#KeyDownEnterHome").keyup(function (event) {
            if (event.keyCode == 13) { 
                autoSearch();
            } 
        });
    });
</script>

    <div class="clear"></div>
    <!-- End Box Search -->
   <!-- Index Page -->
    <div class="index-page">
        <div class="content">
            

<div class="mid-banner" id="Banner_KM_Mid">
<!-- ads -->
</div>

           
            <!-- Content Right -->
            <div class="content-right">
                
          
       <? include APPPATH.'modules/trangchu/views/project.php';?> 
		
				<!--ads adsense-->
				
		
                <!--Lien ket noi bat-->
                
<? include APPPATH.'modules/dangtin/views/tukhoanoibat.php';?> 

          


                
            </div>

            
            <!-- Content Left -->
            <div class="content-left" style="margin-top: 0px;">
                <? echo Modules::run('trangchu/tinbanxemoi');?>
                <? 
 $thongbao=Modules::run('trangchu/getList','baiviet',6,0,'NgayGui desc','IDBaiViet',"Loai IN ('TinTuc') and TrangThai=1");
 $fl='fl';
 include APPPATH.'modules/baiviet/views/div_hot.php';?> 


        <? include APPPATH.'modules/baiviet/views/hot_news.php';?> 
    
 
                
                <!-- Banner -->
                 
              
                <div class="clear"></div>
                
                <? 
                //include APPPATH.'modules/baiviet/views/div_group.php';
                $arrtops=array('SoSanhXe'=>array('fengshui','Phong thủy','',42),
                               'DanhGiaXe'=>array('living','Không gian sống','living_space',27)
                );
                ?>
                <?  
foreach($arrtops as $type=>$val_top){
    $addIN=1;
    $dieukien=array('Loai'=>'TinTuc','TrangThai'=>1);
    $MenuChaID=$val_top[3];
            $set_dk=1;
            include(APPPATH . 'modules/dangtin/controllers/HangXe.php');
            $dieukien["MenuCha IN ($MenuChaID $addIN) and IDBaiViet !="]='';
$tintucs=Modules::run('trangchu/getList','baiviet',8,0,'NgayGui desc','IDBaiViet',$dieukien);
$tintuc['Loai']=$type;
$parent=Modules::run('trangchu/getInfo','baiviet','IDBaiViet',$tintucs[0]['MenuCha']);
$links='/'.stripUnicode($parent['TieuDe']).'/'.stripUnicode($tintucs[0]['TieuDe']).'-'.$tintucs[0]['IDBaiViet'].'.html';
?>
   <div class="home_fengshui <? echo $val_top[2];?>">
                    

<div class="fengshui">
    <div class="<? echo $val_top[0];?>-title">
        <h3><a href="/<? echo stripUnicode($val_top[1]);?>" title="<? echo $val_top[1];?>"><? echo $val_top[1];?></a></h3>
    </div>
    <div class="list_news">
        <? if(isset($tintucs[0])){?>
        <div class="news-hot">
            <a href="<? echo $links;?>" title="<? echo $tintucs[0]['TieuDe'];?>">
                <img src="<? echo img_thumb_blog($tintucs[0]['NoiDung'],'400x250');?>" alt="<? echo $tintucs[0]['TieuDe'];?>">
            </a>
            <h4>
                <a href="<? echo $links;?>" title="<? echo $tintucs[0]['TieuDe'];?>"><? echo $tintucs[0]['TieuDe'];?></a>
            </h4>
        </div>
        <? unset($tintucs[0]);} ?> 
        <div class="list_top">
            <ul>
                
                        <?php 
            
                  if($tintucs){  
                  foreach ($tintucs as $tintuc)
                  {  
                   $parent=Modules::run('trangchu/getInfo','baiviet','IDBaiViet',$tintuc['MenuCha']);
                   $link='/'.stripUnicode($parent['TieuDe']).'/'.stripUnicode($tintuc['TieuDe']).'-'.$tintuc['IDBaiViet'].'.html'; 
                  echo '
                 <li>
                            <a href="'.$link.'" title="'.$tintuc['TieuDe'].'">'.$tintuc['TieuDe'].'</a>
                        </li>
                  '; 
                  }
                  } 
                  ?> 
                    
            </ul>
        </div>
        <div class="clear"></div>
    </div>
</div>

                </div>
     
   <?   
   }?>  
              
                <!-- I News -->
                 <div class="inews">
                <? 
                //include APPPATH.'modules/baiviet/views/div_group.php';
                $arrtops=array('KinhNghiem'=>array('l','Tư vấn luật',15),
                               'TuVanXe'=>array('r','Thiết kế kiến trúc',25)
                );
                ?>
                <?  
foreach($arrtops as $type=>$val_top){
    $addIN=1;
    $dieukien=array('Loai'=>'TinTuc','TrangThai'=>1);
    $MenuChaID=$val_top[2];
            $set_dk=1;
            include(APPPATH . 'modules/dangtin/controllers/HangXe.php');
            $dieukien["MenuCha IN ($MenuChaID $addIN) and IDBaiViet !="]='';//print_r($dieukien);
$tintucs=Modules::run('trangchu/getList','baiviet',6,0,'NgayGui desc','IDBaiViet',$dieukien);
$tintuc['Loai']=$type;  
$parent=Modules::run('trangchu/getInfo','baiviet','IDBaiViet',$tintucs[0]['MenuCha']);
$links='/'.stripUnicode($parent['TieuDe']).'/'.stripUnicode($tintucs[0]['TieuDe']).'-'.$tintucs[0]['IDBaiViet'].'.html';
?>

<div class="inews-<? echo $val_top[0];?>">
                        <div class="inews-<? echo $val_top[0];?>-title">
                            <h3><a href="/<? echo stripUnicode($val_top[1]);?>" title="<? echo $val_top[1];?>"><? echo $val_top[1];?></a></h3>
                        </div>
                        <div class="inews-l-content">
                        <? if(isset($tintucs[0])){?>
                            <div class="inews-l-content-hot">
                                <a href="<? echo $links;?>" title="<? echo $tintucs[0]['TieuDe'];?>">
                                    <img src="<? echo img_thumb_blog($tintucs[0]['NoiDung'],'400x250');?>" alt="<? echo $tintucs[0]['TieuDe'];?>" />
                                </a>
                                <h3>
                                    <a href="<? echo $links;?>" title="<? echo $tintucs[0]['TieuDe'];?>"><? echo $tintucs[0]['TieuDe'];?></a>
                                </h3>
                                
                            </div>
                            <div class="clear"></div>
                            <? unset($tintucs[0]);} ?> 
                            <ul>
                                <?php 
            
                  if($tintucs){  
                  foreach ($tintucs as $tintuc)
                  {  
                   $parent=Modules::run('trangchu/getInfo','baiviet','IDBaiViet',$tintuc['MenuCha']);
                   $link='/'.stripUnicode($parent['TieuDe']).'/'.stripUnicode($tintuc['TieuDe']).'-'.$tintuc['IDBaiViet'].'.html'; 
                  echo '
                 <li>
                            <a href="'.$link.'" title="'.$tintuc['TieuDe'].'">'.$tintuc['TieuDe'].'</a>
                        </li>
                  '; 
                  }
                  } 
                  ?>  
                            </ul>
                            <div class="clear"></div>
                        </div> 
                    </div> 
   <?   
   }?>   
                </div>
            </div>

            <div class="clear"></div>
        </div>
    </div>
    <!-- End Index Page -->
   
<script src="/style/js/PostNews.min.js?v=120151126" type="text/javascript"></script>
<script type="text/javascript">

    //$(document).ready(function () {
    //    $(".various").fancybox({
    //        type: 'iframe',
    //        href: '/xem-truoc.htm',
    //        maxWidth: 800,
    //        maxHeight: 800,
    //        fitToView: true,
    //        width: '90%',
    //        height: '90%',
    //        autoSize: true,
    //        closeClick: false,
    //        openEffect: 'none',
    //        closeEffect: 'none',
    //        padding: 0
    //    });
    //});
    $('select').select2({
        matcher: function (params, data) {
            if ($.trim(params.term) === '') {
                return data;
            }
            var _keyword = UnicodeToKoDau(data.text.toLowerCase());
            var _text = UnicodeToKoDau(params.term.toLowerCase());
            if (_keyword.indexOf(_text) == 0) {
                var modifiedData = $.extend({}, data, true);
                modifiedData.text;
                return modifiedData;
            }
            return null;
        }
    });
    $('#ddlCity').on('change', function () {  
        GetArea('GetDistrict','cityCode',$('option:selected', this).attr('data-key'),'ddlDistrict','Quận/Huyện',''); 
    });
    $('#ddlDistrict').on('change', function () { 
        GetArea('GetWard','distId',$('option:selected', this).attr('data-key'),'ddlWard','Phường/Xã','');   
        GetArea('GetStreet','distId',$('option:selected', this).attr('data-key'),'ddlStreets','Đường/Phố',''); 
        GetArea('GetProject','distId',$('option:selected', this).attr('data-key'),'TinhTrang','-- Chọn Dự án --','');
    }); 
    $('#ddlWard').on('change', function () {
        $("#hddcboWardP").val($('#ddlWard').find('option:selected').attr('data-key')); 
        $("#hddWardPrefix").val($('#ddlWard').find('option:selected').attr('wardprefix')); 
        $("#hddcboStreetP").val(-1);  
    }); 
    $('#ddlStreets').on('change', function () {
        $("#hddcboStreetP").val($('#ddlStreets').find('option:selected').attr('data-key')); 
        $('#hddStreetPrefix').val($('#ddlStreets').find('option:selected').attr('streetprefix'));  
    });  

    //// managage back button click (and backspace)
    //var count = 0; // needed for safari
    //window.onload = function () {
    //    if (typeof history.pushState === "function") {
    //        history.pushState("back", null, null);
    //        window.onpopstate = function () {
    //            history.pushState('back', null, null);
    //            if (count == 1) { window.location = window.location; }
    //        };
    //    }
    //}
    //setTimeout(function () { count = 1; }, 200);
    $("#divSell").click();
</script>

            <div class="clear"></div>
        </div>