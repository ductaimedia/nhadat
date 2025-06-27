  <div class="content_default">
        <div class="wr_boxSearch">
            <div class="boxsearch-content">
                
<div class="boxSearch">
    <div class="item-text wr_textsearch">
        <input name="ctl00$MainContent$Search$txtAutoComplete" type="text" id="txtAutoComplete" class="ui-autocomplete-input" placeholder="Nhập địa điểm bất động sản" autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true" />
        <div id="cleartext">
            <img onclick="ClearText();" src="/style/mobile/images/clear.png" alt="clear">
        </div>
    </div>
    <div class="item" style="display: none">
        <span id="spanCategory">Chọn giao dịch</span>
        <select id="ddlCategory" name="ddlCategory" onchange="$('#hdfType').val('-1');$('#hdfPrice').val('-1');ChangeCategory($(this).val());">
            <option value="-1">Chọn giao dịch</option>
            <option value="38">Bất động sản bán</option>
            <option value="49">Bất động sản cho thuê</option>
        </select><input type="hidden" name="ctl00$MainContent$Search$hdfCategory" id="hdfCategory" value="-1" />
    </div>
    <div class="item left">
        <span id="spanType">Chọn loại nhà đất</span>
        <select name="ddlType" id="ddlType" onchange="ChangeValue('Type', $(this).val());">
            <option value="-1">Chọn loại nhà đất</option>
        </select><input type="hidden" name="ctl00$MainContent$Search$hdfType" id="hdfType" value="-1" />
    </div>
    <div class="item right">
        <span id="spanCity">Chọn Tỉnh/TP</span>
        <select name="ddlCity" id="ddlCity" onchange="ChangeCity($(this).val())">
            <option value="-1">Chọn Tỉnh/TP</option>
        </select><input type="hidden" name="ctl00$MainContent$Search$hdfCity" id="hdfCity" value="-1" />
    </div>
    <div class="item left">
        <span id="spanDistrict">Chọn Quận/Huyện</span>
        <select name="ddlDistrict" id="ddlDistrict" onchange="ChangeDistrict($(this).val())">
            <option value="-1">Chọn Quận/Huyện</option>
        </select><input type="hidden" name="ctl00$MainContent$Search$hdfDistrict" id="hdfDistrict" value="-1" />
    </div>
    <div class="item right">
        <span id="spanArea">Chọn diện tích</span>
        <select name="ddlArea" id="ddlArea" onchange="ChangeValue('Area', $(this).val());">
            <option value="-1">Chọn diện tích</option>
        </select><input type="hidden" name="ctl00$MainContent$Search$hdfArea" id="hdfArea" value="-1" />
    </div>
    <div class="item left">
        <span id="spanPrice">Chọn mức giá</span>
        <select name="ddlPrice" id="ddlPrice" onchange="ChangeValue('Price', $(this).val());">
            <option value="-1">Chọn mức giá</option>
        </select><input type="hidden" name="ctl00$MainContent$Search$hdfPrice" id="hdfPrice" value="-1" />
    </div>
    <div class="item right">
        <span id="spanWard">Phường/Xã</span>
        <select name="ddlWard" id="ddlWard" onchange="ChangeValue('Ward', $(this).val());">
            <option value="-1">Phường/Xã</option>
        </select><input type="hidden" name="ctl00$MainContent$Search$hdfWard" id="hdfWard" value="-1" />
    </div>
    <div id="advanced" style="display: none">

        <div class="item left">
            <span id="spanStreet">Chọn Đường/Phố</span>
            <select name="ddlStreet" id="ddlStreet" onchange="ChangeValue('Street', $(this).val());">
                <option value="-1">Chọn Đường/Phố</option>
            </select><input type="hidden" name="ctl00$MainContent$Search$hdfStreet" id="hdfStreet" value="-1" />
        </div>
        <div class="item right">
            <span id="spanBedRoom">Chọn số phòng ngủ</span>
            <select name="ddlBedRoom" id="ddlBedRoom" onchange="ChangeValue('BedRoom', $(this).val());">
                <option value="-1">Chọn số phòng ngủ</option>
            </select><input type="hidden" name="ctl00$MainContent$Search$hdfBedRoom" id="hdfBedRoom" value="-1" />
        </div>
        <div class="item left">
            <span id="spanDirection">Chọn hướng nhà</span>
            <select name="ddlDirection" id="ddlDirection" onchange="ChangeValue('Direction', $(this).val());">
                <option value="-1">Chọn hướng nhà</option>
            </select><input type="hidden" name="ctl00$MainContent$Search$hdfDirection" id="hdfDirection" value="-1" />
        </div>
        <div class="item right">
            <span id="spanProject">Chọn dự án bất động sản</span>
            <select name="ddlProject" id="ddlProject" onchange="ChangeValue('Project', $(this).val());">
                <option value="-1">Chọn dự án bất động sản</option>
            </select><input type="hidden" name="ctl00$MainContent$Search$hdfProject" id="hdfProject" value="-1" />
        </div>
    </div>

</div>
<div class="search-control">
    <div class="box-search-home left">
        <a href="javascript:void(0);" id="tim" onclick="advancedSearch();" rel="nofollow">Tìm kiếm nâng cao</a>
        <a href="javascript:void(0);" id="botim" onclick="advancedSearch();" rel="nofollow" style="display: none">Bỏ tìm kiếm nâng cao</a>
    </div>
    <div class="box-search-home right">
        <a href="javascript:SearchProduct();">
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
                <a id="MainContent_Search_TitleProduct">Nhà đất bán theo khu vực</a>
            </span>
        </div>
        <div class="clear"></div>
        
                <ul>
            
                <li><a href='/nha-dat-ban-tp-hcm.htm' title='Nhà đất bán Tp HCM'>Nhà đất bán Tp HCM</a></li>
            
                <li><a href='/nha-dat-ban-ha-noi.htm' title='Nhà đất bán Hà Nội'>Nhà đất bán Hà Nội</a></li>
            
                <li><a href='/nha-dat-ban-binh-duong.htm' title='Nhà đất bán Bình Dương'>Nhà đất bán Bình Dương</a></li>
            
                <li><a href='/nha-dat-ban-da-nang.htm' title='Nhà đất bán Đà Nẵng'>Nhà đất bán Đà Nẵng</a></li>
            
                <li><a href='/nha-dat-ban-hai-phong.htm' title='Nhà đất bán Hải Phòng'>Nhà đất bán Hải Phòng</a></li>
            
                </ul>
            
    </div>
</div>
<script src="/Scripts/SearchMobile.js?v=2014085443508"></script>
<link href="/Content/jquery-ui.min.css" rel="stylesheet" />
<script src="/Scripts/jquery-ui.min.js"></script>
<script type="text/javascript">
    
    $(document).ready(function () {
        var priceId = '-1';
        if (priceId != -1) {
            $('#hdfPrice').val(priceId);
        }
        var productType = '38';
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
    var pType = 38
</script>

            </div>
        </div>
        <?
        $arr_orders=array(
        'NgayDang-desc'=>'Thông thường',
        'GiaTien-asc'=>'Giá tăng dần',
        'GiaTien-desc'=>'Giá giảm dần',
        'NgoaiThat-asc'=>'Diện tích nhỏ nhất',
        'NgoaiThat-desc'=>'Diện tích lớn nhất'
        );
        ?>
<div class="div_search default_padding">
    <div class="dropdownlist">
        <img src="/style/mobile/images/icon-order.png" />
        <span class="spanOver" id="spanOver">Thông thường
        </span>
        <select name="" onchange="location = this.options[this.selectedIndex].value;" id="ddlSortReult" class="dcate">
        <? 
         foreach($arr_orders as $order=>$name){ 
         if($this->session->userdata('order')==$order){
            $selected=' selected';
         }else{
            $selected=' ';
         }
              echo '<option value="?order='.$order.'" '.$selected.'>'.$name.'</option> '; 
         }
         ?>  

</select>
    </div>

    <a href="javascript:searchLinkSaved();">
        <div class="save">
            <img src="/style/mobile/images/icon-saveListing.png" />
            <span>Có <b style="color: green;"><? echo !isset($sotin)||$sotin==''?0:$sotin;?></b> tin rao</span>
        </div>
    </a>
    <div class="clear"></div>
</div>
<div class="content2">

    <script type="text/html">
        var pType = 38;
    </script>
    <div class="div_container">
        <div class="div_breakcum">
            <h1 class="spanresult">
                <? 
                if($current_info['H1']!=''){
                    echo $current_info['H1'];
                }elseif(isset($HangXe['H1'])&&$HangXe['H1']!=''){
                    echo $HangXe['H1'];
                }elseif(isset($DoiXe['H1'])&&$DoiXe['H1']!=''){
                    echo $DoiXe['H1'];
                }elseif(isset($user_info_up)){?>
                CÁC TIN RAO ĐĂNG BỞI 
                <? echo $user_info_up['HoVaTen'];?>
                <?}else{?>   <? if(isset($phienban)){?> <? echo $phienban[1];?> <? echo $phienban[2];?> <? echo $phienban[3];?> đời 20<? echo $phienban[4];?> <?}else{?> <? $ctit=$HangXe['TieuDe']=='BĐS bán'?'NHÀ ĐẤT BÁN':($HangXe['TieuDe']=='BĐS cho thuê'?'NHÀ ĐẤT CHO THUÊ':$HangXe['TieuDe']); echo $ctit;?> <? if(isset($DoiXe['TieuDe'])){echo $DoiXe['TieuDe'];}?> <?}?> <? if($this->session->userdata('DoiXe')!=''){?> tại <? echo $this->session->userdata('DoiXe');?> <?}else{?>trên toàn quốc<?}?> <?}?>
            </h1>
            <span class="spancount">
                  
            </span>
            <div class="clear"></div>
        </div>
        
        
        
        <div class="div_listListing">
            
                <? include 'm_list.php';?>
            
        </div>
    </div>
    <div style="text-align: center; background: #FFF;">
        <?php echo $this->pagination->create_links();?> 
    </div>
</div>
<script type="text/javascript">
    function sortchange() {
        setCookie('psortfilter', $('#ddlSortReult').val() + '$' + '/nha-dat-ban.htm', 1);
    }

    $(document).ready(function () {
        checkSaveLink();
    })
</script>
<script src="/Scripts/jquery.cookie.min.js" type="text/javascript"></script>


    </div>