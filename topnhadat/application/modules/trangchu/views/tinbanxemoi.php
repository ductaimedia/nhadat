<div id="ContentPlaceHolder1_pnProduct">
        <? 
        include 'Mobile_Detect.php';
$dulieu=$vip;
$detect = new Mobile_Detect;
if ( $detect->isMobile() ) {
    echo '<div class="div_listpro">';
 include APPPATH.'modules/dangtin/views/mobile_list.php'; 
 echo '</div>';
}else {
    echo '<div class="for-user">
    <div class="title">
        <h3>Tin rao dành cho bạn</h3>
    </div>
    <ul>';
   include APPPATH.'modules/dangtin/views/div_list.php'; 
}

?>
            
    </ul>
 
  <!--  <div class="extra-news">
        <div class="extra-news-l">
            Tin Nhà đất bán mới nhất:
                            <span>
                                <a href="/nha-dat-ban" title="Trang 1">1</a>
                                <a rel="nofollow" href="/nha-dat-ban/2" title="Trang 2">2</a>
                                <a rel="nofollow" href="/nha-dat-ban/3" title="Trang 3">3</a>
                                <a rel="nofollow" href="/nha-dat-ban/4" title="Trang 4">4</a>
                                <a rel="nofollow" href="/nha-dat-ban/5" title="Trang 5">5</a>
                            </span>
        </div>
        <div class="extra-news-r">
            Tin Nhà đất cho thuê mới nhất:
                            <span>
                                <a href="/nha-dat-cho-thue" title="Trang 1">1</a>
                                <a rel="nofollow" href="/nha-dat-cho-thue/2" title="Trang 2">2</a>
                                <a rel="nofollow" href="/nha-dat-cho-thue/3" title="Trang 3">3</a>
                                <a rel="nofollow" href="/nha-dat-cho-thue/4" title="Trang 4">4</a>
                                <a rel="nofollow" href="/nha-dat-cho-thue/5" title="Trang 5">5</a>
                            </span>
        </div>
    </div>-->
</div>

</div>