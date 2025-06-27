<!DOCTYPE html>
<?php
     
    $data=json_decode($info['GiaTri']);
    error_reporting(0);
	
    ?>
<html xmlns="https://www.w3.org/1999/xhtml">
<head><meta charset="utf-8" />


<title>
	<?php echo $title;?> 
</title>
    <link href="<? echo base_url();?>style/images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <link href="/style/css/reset.css" rel="stylesheet" />
    <link href="/style/css/Styles.min.css?v=20151126" rel="stylesheet" />
    <link href="/style/css/jquery-ui.min.css" />
    <link href="/style/css/shop-icon.css" rel="stylesheet" /> 
    <!-- Scripts -->

    <script src="/style/js/jquery-1.7.1.min.js"></script>
    <script src="/style/js/jquery-ui.js"></script>
    <script src="/style/js/jquery.excoloSlider.js"></script>
    <link href="/style/css/jquery.excoloSlider.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="/style/css/jquery.fancybox.css" media="all" />
    <script src="/style/js/jquery.scrollToTop.min.js"></script> 
    <script type="text/javascript" src="/style/js/jquery.fancybox.js"></script>
    <script src="/style/js/Common.min.js?v=20151126"></script>
    <script type="text/javascript" src="/style/js/jquery.placeholder.min.js"></script>
    <script src="/style/js/jquery.cookie-1.4.1.js" type="text/javascript"></script>
     

    <script type="text/javascript">
        var domainCookie = '<? echo $_SERVER['HTTP_HOST'];?>'
        var productId = '<? echo $xemtinban['IDMaTin'];?>';
        var userId = '<? echo $user_info['userid'];?>';
        var base_url='<? echo base_url();?>';
    </script>

    <meta name="keywords" content="<?php if($keyword!=''){echo $keyword;}else{echo $data->{'MoTa'};} ?>" />
    <meta name="description" content="<?php echo $description;?>" />
    <meta http-equiv="content-language" content="vi" />
    <link rel="alternate" href="http://alothodia.net" hreflang="vi-vn" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php echo $data->{'google_analytics'};?>
    <?php echo $data->{'webmaster_tool'};?>
    
<link media="only screen and (max-width: 640px)" rel="alternate" href="m.<? echo $_SERVER['HTTP_HOST'];?>/" /><link media="handheld" rel="alternate" href="<? echo $_SERVER['HTTP_HOST'];?>/" />



</head>
<body>  
        <!-- Header -->
        
<div id="wr_header" class="header">
    
<div class="header-register" id="headerregister">
    <div class="action">
        
        <? if($this->session->userdata('userid')==FALSE):?>
        <div class="logon">
            <a href="/thanh-vien/dang-nhap.html" rel="nofollow" title="Đăng nhập">
                <span>Đăng nhập</span>
            </a>
        </div>
        <div class="register">
            <a href="/thanh-vien/dang-ky.html" rel="nofollow" title="Đăng ký">
                <span>Đăng ký</span>
            </a>
        </div>
            <? else:?>
            <div id="pnUser" class="boxuser">
	
            <div class="logout">
                <a onclick="return confirm('<?php echo $this->lang->line('lable_confirm_logout');?>');" href="/thanh-vien/thoat.html" rel="nofollow">
                    <span>Thoát</span>
                </a>
            </div>
            <div class="logon">
               <span>Chào </span> <a href="/thanh-vien/quan-ly-tin-rao" rel="nofollow"><span style="font-weight: bold;"><? echo $user_info['username'];?></span></a>
            </div>
        
</div> 
            <? endif?>
        

        
    </div>
</div>

    <div class="header-logo">
        <div class="hdcontent">
            <div class="content-logo">
                <a href="/" title="mua bán nhà đất">
                    <img src="/style/images/logo.png" alt="mua bán nhà đất"></a>
            </div>
            <? //print_r($banners);
            $stt_top=0;
    foreach($banners['TOP'] as $banner){$stt_top++?>
        <div class="MultiBanner<? echo $stt_top;?> content-banner" style="display: none;">
           <a href="<? echo $banner['Link'];?>" target="_blank"><? echo $banner['NoiDung'];?></a>
        </div> 
    <?}?> 
             
        </div>
    </div>
    <script type="text/javascript">
        var indexBanner = Math.ceil(Math.random() * 3);//alert(indexBanner);
        $('.MultiBanner' + indexBanner).show();
        setInterval(function () {
            $('.content-banner').hide();
            indexBanner = indexBanner <= 2 ? indexBanner + 1 : 1;
            $('.MultiBanner' + indexBanner).toggle();
        }, 8000);
    </script>
</div>

        <!-- End Header -->
        <!-- Me nú -->
        
<div class="menu">
    <div class="menu-content">
        <ul class="nav-menu">
            <li class="lv0 <? echo $this->uri->segment(1)==""?'active':"";?>">
                <a href="/" title="Trang chủ">Trang chủ
                </a>
            </li>
            <? //ford 
  //echo Modules::run('baiviet/menu','MenuHeader');
  $menucats=Modules::run('trangchu/getList','baiviet',4000,0,'SapXep asc, NgayGui asc','IDBaiViet',"Loai IN('DanhMuc','MenuHeader') and TrangThai=1");
  include_once(APPPATH . 'includes/chuyendau.php');
  $newmenus=dataWidthKeyID($menucats,array('IDBaiViet',array('Loai','DanhMuc'),array('MenuCha','')),'IDBaiViet');    //print_r($newmenus);
  $danhmucs=dataWidthKeyID($newmenus['MenuCha'][0],array(array('Loai','DanhMuc')),'IDBaiViet'); 
  $menuheaders=dataWidthKeyID($newmenus['MenuCha'][0],array(array('Loai','MenuHeader')),'IDBaiViet');
  $stt=0;  
  foreach(array_merge($danhmucs['Loai'],$menuheaders['Loai']) as $val){ 
        $activeTab=$val['IDBaiViet']==$HangXe['MenuCha']||$HangXe['IDBaiViet']==$val['IDBaiViet']||$cha_info['MenuCha']==$val['IDBaiViet']||$cha_info['IDBaiViet']==$val['IDBaiViet']||$this->uri->segment(1)==stripUnicode($val['TieuDe'])||$cat_info['MenuCha']==$val['IDBaiViet']?' active':''; 
        if(isset($newmenus['MenuCha'][$val['IDBaiViet']])){
            $sub2='
            <ul class="dropdown-menu">
            ';
            foreach($newmenus['MenuCha'][$val['IDBaiViet']] as $submenu){
                $subactiveTab=$submenu['IDBaiViet']==$HangXe['MenuCha']||$HangXe['IDBaiViet']==$submenu['IDBaiViet']||$cha_info['IDBaiViet']==$submenu['IDBaiViet']||$this->uri->segment(1)==stripUnicode($submenu['TieuDe'])?' active':''; 
                $sub2.='<li class="lv1 '.$subactiveTab.'"><a href="/'.strtolower(isset($submenu['Link'])&&$submenu['Link']!=''?$submenu['Link']:stripUnicode($submenu['TieuDe'])).'" title="'.$submenu['TieuDe'].'">'.$submenu['TieuDe'].'</a></li>';
            }
            
            $sub2.='            
            </ul>
            ';
        }else{
            $sub2='';
        }
        echo' <li class="lv0 '.$activeTab.'"><a href="/'.strtolower(isset($val['Link'])&&$val['Link']!=''?$val['Link']:stripUnicode($val['TieuDe'])).'" title="'.$val['TieuDe'].'">'.$val['TieuDe'].'</a> 
                    '.$sub2.'
                </li>'; 
  }
  ?>
             
            <li class="postnew lv0 <? echo $this->uri->segment(1)=="dang-tin-ban-cho-thue-nha-dat"?'active':"";?>"><a href="/dang-tin-ban-cho-thue-nha-dat" title="Đăng tin">ĐĂNG TIN</a></li>
            
        </ul>
    </div>
</div>
<script type="text/javascript">
    var href = window.location.pathname;
    var a_return = new Array(); // Danh sách Url được active
    var AllUrl = new Array(); // arr Url
    var ElementUrl = $(".nav-menu li a");

    var arrHref = href.split("/"); // phân tích current url 

    for (var i = 0; i < ElementUrl.length; i++) {
        var abc = ElementUrl[i].toString().split("/");
        if (abc.length > 3) {
            AllUrl.push(abc[3].replace(".htm", "")); // lấy được arr url
        }
    }

    if (arrHref.length >= 2) {
        var currentUrl = arrHref[1];
        for (var i = 0; i < AllUrl.length; i++) {
            var _index = currentUrl.search(AllUrl[i]); //Duyet chuoi danh sach Url de so sanh voi Current Url
            if (_index != -1) {
                a_return.push(AllUrl[i]); //Neu la tap con cua URL thi add vao array 
            }
        }
    }

    var return_data = "";
    var return_index = 0;
    for (x in a_return) {
        if (a_return[x].length > return_index) {//so sanh do dai lon nhat trung` voi URL thi lay gia tri
            return_index = a_return[x].length;
            return_data = a_return[x]; //gia tri can lay (duy nhat 1 gia tri)
        }
    }
    var taga = $('.nav-menu,.dropdown-menu').find('a[href=\'/' + return_data + '.htm\']');

    if (taga.length > 0) {
        setActiveClass(taga, 0);
    }

    function setActiveClass(tag, interval) {
        $(".lv0").removeClass('active');
        tag.addClass('active');
        if (tag.hasClass('lv0')) {
            return;
        }
        interval++;
        if (interval <= 3) { // Menu dothi chỉ có 2 cấp, ul > li > ul > li. ra 3 cấp mới set được parrent
            setActiveClass(tag.parent(), interval);
        } else {
        }
    }
</script>