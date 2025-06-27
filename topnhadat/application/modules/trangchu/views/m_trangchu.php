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
          if(HangXe==449){
             dataSoKM='<? echo $opition_nam_ban;?>';
          }
          if(HangXe==451){
             dataSoKM='<? echo $opition_nam_thue;?>';
          }
             $("#SoKM").html('<option value="">Đơn vị tính</option>'+dataSoKM); 
       }            
    });
}
function autoSearch(){
    if($("#divSell").hasClass('active')){
        $("#adminForm2").attr('action','/bds-ban');  
    }else{
        $("#adminForm2").attr('action','/bds-cho-thue');  
    }
    document.getElementById('adminForm2').submit();
}
</script>
                    
    <form method="post" name="adminForm2" id="adminForm2">   
	





        <div class="header-text">Tìm kiếm BĐS cho riêng bạn!</div>
        
        <div class="sale">
		
		
		
		
		
		
            <div id="bds-ban">
                <div class="sales active" id="divSell" onclick="getDoiXe(449);">
                    Bất động sản bán
                </div>
            </div>
            <div id="bds-cho-thue">
                <div class="rent" id="divRent" onclick="getDoiXe(451);">
                    Bất động sản cho thuê
                </div>
            </div>
			
        </div>
        <div class="content">
            
            
<div class="boxSearch">
    <div class="item-text wr_textsearch">
        <input name="TieuDe" type="text" id="txtAutoComplete" class="ui-autocomplete-input" placeholder="Nhập địa điểm bất động sản" autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true" />
        <div id="cleartext">
            <img onclick="ClearText();" src="/style/mobile/images/clear.png" alt="clear">
        </div>
    </div> 
    <select name="HangXe" id="ddlType" class="item left">
            <option value="">Chọn loại nhà đất</option>
        </select>
    <select name="DoiXe" class="item right" id="ddlCity">
            <option value="">Chọn Tỉnh/Thành phố</option> 
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
    <select name="NamSX" id="ddlDistrict" class="item left">
            <option value="">Chọn Quận/Huyện</option>
        </select>
    <select name="NgoaiThat" id="ddlArea" class="item right">
            <option value="">Chọn diện tích</option>
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
    <select name="GiaTien" id="ddlPrice" class="item left">
            <option value="">Chọn mức giá</option>
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
   <select id="SoKM" name="SoKM" class="item right">
                     
                    </select>
    
    <div id="advanced" style="display: none">
<select name="XuatXu" id="ddlWard" class="item left">
            <option value="">Chọn Phường/Xã</option>
        </select>
        <select name="PhanHang" id="ddlStreets" class="item right">
                <option value="">Chọn Đường/Phố</option>
            </select>
        <select name="HeThongNapNhienLieu" id="ddlBedRoom" class="item left">
                <option value="">Chọn số phòng ngủ</option>
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
        <select name="NoiThat" id="ddlDirection" class="item right">
                <option value="">Chọn hướng nhà</option>
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
        <select name="TinhTrang" id="TinhTrang" class="item left" style="width: 100%;">
                <option value="">Chọn dự án bất động sản</option>
            </select>
    </div>

</div>
<div class="search-control">
    <div class="box-search-home left">
        <a href="javascript:void(0);" id="tim" onclick="advancedSearch();" rel="nofollow">Tìm kiếm nâng cao</a>
        <a href="javascript:void(0);" id="botim" onclick="advancedSearch();" rel="nofollow" style="display: none">Bỏ tìm kiếm nâng cao</a>
    </div>
    <div class="box-search-home right">
        <a href="javascript:autoSearch();">
            <div class="btnSearch">
                <img src="/style/mobile/images/iconsearch-w.png" />
                Tìm kiếm
            </div>
        </a>
        
    </div>
</div>
<div class="clear"></div>
<div class="clear fix-search-new" style="display:none">
    <div class="p-d-m box-link">
        <div class="header-ul-home">
            <span class="text-blue">
                <a id="MainContent_Search_TitleProduct"></a>
            </span>
        </div>
        <div class="clear"></div>
        
    </div>
</div>
</form>

 <link href="/style/mobile/css/jquery-ui.min.css" rel="stylesheet" />
<script src="/style/mobile/js/jquery-ui.min.js"></script>
<script type="text/javascript">
    
    $(document).ready(function () {
        var priceId = '-1';
        if (priceId != -1) {
            $('#hdfPrice').val(priceId);
        }
        var productType = '-1';
        $('#ddlCategory').val(productType);
        //ChangeCategory(productType);
        


        var areaId = '-1';
        if (areaId != -1) {
            $('#hdfArea').val(areaId);
        }
        GetArea(1);
        GetRoom(1);
        GetDirection(1);

        var cityCode = '';
        GetCity(cityCode);
        if (cityCode != -1) {
            $('#ddlCity').val(cityCode);
            $('#hdfCity').val(cityCode);

            var districtId = '-1';
            if (districtId != -1) {
                $('#hdfDistrict').val(districtId);
            }
        }
    });
    var pType = -1
</script>

              <!-- Content Left -->
              <style>
              .tieude {
    color: #fff;
    float: left;
    font-size: 16px;
    height: 37px;
    line-height: 37px;
    margin: 0;
    text-align: center;
    width: 100%;
    background-color: #37a344;
              }
              </style>
<center><div class="tieude">TIN RAO CHO BẠN</div></center>
                <? echo Modules::run('trangchu/tinbanxemoi');?>
          
                
            <div class="tit mb9">
                <h1 class="content-tit">Các chuyên mục khác</h1>
            </div>
            <div class="menu">
                <a href="/tin-tuc">
                    <div class="menu-item">
                        <div class="div_icon">
                            <img src="/style/mobile/images/tintuc3.png" class="icon" />
                        </div>
                        <span class="span">Tin tức</span>
                        <img src="/style/mobile/images/arrow_right1234.png" class="arrow" />

                    </div>
                </a>
                <a href="/thiet-ke-kien-truc">
                    <div class="menu-item">
                        <div class="div_icon">
                            <img src="/style/mobile/images/thietkekientruc3.png" class="icon" />
                        </div>
                        <span class="span">Thiết kế kiến trúc</span>
                        <img src="/style/mobile/images/arrow_right1234.png" class="arrow" />

                    </div>
                </a>
                <a href="/khong-gian-song">
                    <div class="menu-item">
                        <div class="div_icon">
                            <img src="/style/mobile/images/khonggiansong3.png" class="icon" />
                        </div>
                        <span class="span">Không gian sống</span>
                        <img src="/style/mobile/images/arrow_right1234.png" class="arrow" />

                    </div>
                </a>
                <a href="/phong-thuy">
                    <div class="menu-item">
                        <div class="div_icon">
                            <img src="/style/mobile/images/phongthuy3.png" class="icon" />
                        </div>
                        <span class="span">Phong thủy</span>
                        <img src="/style/mobile/images/arrow_right1234.png" class="arrow" />

                    </div>
                </a>
                <a href="/tu-van-luat">
                    <div class="menu-item">
                        <div class="div_icon">
                            <img src="/style/mobile/images/tuvanluat3.png" class="icon" />
                        </div>
                        <span class="span">Tư vấn luật</span>
                        <img src="/style/mobile/images/arrow_right1234.png" class="arrow" />

                    </div>
                </a>
                <a href="/du-an">
                    <div class="menu-item">
                        <div class="div_icon">
                            <img src="/style/mobile/images/duan3.png" class="icon" />
                        </div>
                        <span class="span">Dự án</span>
                        <img src="/style/mobile/images/arrow_right1234.png" class="arrow" />
						
						
						
						
						
						
						

                    </div>
                </a>
                <a href="/dang-tin-ban-cho-thue-nha-dat">
                    <div class="menu-item">
                        <div class="div_icon">
                            <img src="/style/mobile/images/icon-dangtin3.png" class="icon" />
                        </div>
                        <span class="span">Đăng tin</span>
                        <img src="/style/mobile/images/arrow_right1234.png" class="arrow" />

                    </div>
                </a>
                <? if($this->session->userdata('userid')==FALSE):?>
                       <a href="/thanh-vien/dang-nhap.html">
                    <div class="menu-item menu-item-end">
                        <div class="div_icon">
                            <img src="/style/mobile/images/dangnhap3.png" class="icon" />
                        </div>
                        <span class="span">Đăng nhập/Đăng ký</span>
                        <img src="/style/mobile/images/arrow_right1234.png" class="arrow" />

                    </div>
                </a>
                <? else:?>
                 
                <a href="/trang-ca-nhan">
                    <div class="menu-item menu-item-end">
                        <div class="div_icon">
                            <img src="/style/mobile/images/dangnhap3.png" class="icon" />
                        </div>
                        <span class="span">Trang cá nhân</span>
                        <img src="/style/mobile/images/arrow_right1234.png" class="arrow" />

                    </div>
                </a>
                <? endif?>
               
                
            </div>
            <div class="clear fix-search-new">
                <div class="p-d-m box-link">
                    <div class="">
                        <span class="tit">
                            <a id="MainContent_Search_TitleProduct" class="content-tit">Nhà đất bán theo khu vực</a>
                        </span>
                    </div>
                    <div class="clear"></div>

                    <ul>

                        <li><a href="/nha-dat-ban-ho-chi-minh" title="Nhà đất bán Tp HCM">Nhà đất bán Tp HCM</a></li>

                        <li><a href="/nha-dat-ban-ha-noi" title="Nhà đất bán Hà Nội">Nhà đất bán Hà Nội</a></li>

                        <li><a href="/nha-dat-ban-binh-duong" title="Nhà đất bán Bình Dương">Nhà đất bán Bình Dương</a></li>

                        <li><a href="/nha-dat-ban-da-nang" title="Nhà đất bán Đà Nẵng">Nhà đất bán Đà Nẵng</a></li>

                        <li><a href="/nha-dat-ban-hai-phong" title="Nhà đất bán Hải Phòng">Nhà đất bán Hải Phòng</a></li>

                    </ul>

                </div>
            </div>
        </div>


    

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
                


