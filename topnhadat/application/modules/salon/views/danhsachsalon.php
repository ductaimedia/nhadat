 <link href="/style/css/select2.min.css" rel="stylesheet" />
<script src="/style/js/select2.full.min.js"></script>
<script src="/style/js/PostNews.min.js?v=120151126" type="text/javascript"></script>
<style>
.pjs-content .select2{
    margin-top: 4px!important;
    margin-left: 5px!important;
    width: 161px!important;
}
</style>
<script>
function __doPostBack(){
    link_cat='';link_dist='';link_city='';
    if($('#CatPJ').val()!=''){
        link_cat=UnicodeToKoDau($('#CatPJ').val().toLowerCase());
    }
    if($('#ddlDistrict2').val()!=''){
        link_dist='-'+UnicodeToKoDau($('#ddlDistrict2').val().toLowerCase());
    }
    if($('#ddlCity2').val()!=''){
        if($('#ddlDistrict2').val()!=''){
           link_city='-'+UnicodeToKoDau($('#ddlCity2').find('option:selected').attr('data-key').toLowerCase());
        }else{
           link_city='-'+UnicodeToKoDau($('#ddlCity2').val().toLowerCase());
        } 
    }
    link='/du-an/'+link_cat+link_dist+link_city;
    window.location.href=link.replace(new RegExp(' ', 'g'), '-');
}

</script>
        <div class="wr_page">
          
    <div class="index-page"> 
        <div class="content">
             
            <!-- Content Left -->
            <div class="content-left">   
        <?
        include 'divRight.php';
        ?>
                
<div class="product margin-top20">
    <div class="product-title">
        <h1><? 
                if($menu_info['H1']!=''){
                    echo $menu_info['H1'];
                }else{
                    echo 'Tất cả dự án '.$menu_info['TieuDe'].' tại '.($TinhThanh!=''?$TinhThanh:'Việt Nam');
                }
                
                ?></h1>
    </div> 
</div>

<!-- Project List -->
<div class="project-list">
     <?	
                   $stt=0;
                  if($salon_data){ 
                  foreach ($salon_data as $tintuc)
                  {$stt++;
                     
                      $region=$stt%2!=0?'pjl-item':'pjl-item pjl-right';
                             
                   $Link='/'.stripUnicode($tintuc['TenSalon']).'-pj'.$tintuc['IDSalon'].'.html';
                  echo '
                  <div class="'.$region.'">
        <div class="pjl-img">
            <a  href="'.$Link.'" title="'.$tintuc['TenSalon'].'">
                <img src="'.get_first_img($tintuc['LoGo'],$thumb='624x476').'" alt="'.$tintuc['TenSalon'].'" />
            </a>
        </div>
        <div class="pjl-desc">
            <div class="project-name">
                <h4><a href="'.$Link.'" title="'.$tintuc['TenSalon'].'">'.$tintuc['TenSalon'].'</a></h4>
            </div>
            <div class="project-address">
                <span>Địa chỉ: </span>
                <p>'.$tintuc['DiaChi'].'</p>
            </div>
            <div class="project-address">
                <span>Điện thoại: </span>
                <p>'.$tintuc['DienThoai'].'</p>
            </div>
            <div class="project-address">
                <span>Website: </span>
                <p>'.$tintuc['Website'].'</p>
            </div>
            <div class="project-address">
                <span>Email: </span>
                <p>'.$tintuc['Email'].'</p>
            </div>
        </div>
    </div>
                  
                 
                   ';
                  }
                   
                  }else{
                    echo '<div class="note note-warning" style="margin-top:20px;overflow:hidden"><div class="warning-box">'.$this->lang->line('lable_no_rows').'</div></div>';
                  }
                   
                  ?> 
      
</div>
<div class="clear"></div>
<?php echo $this->pagination->create_links();?> 
 
                <div class="clear"></div>
                </div>
            <!-- Content Right -->

            <div class="content-right">
                <!-- Box search list -->
       <? $duan=$projectName.'|'.$projectID; include  APPPATH.'modules/dangtin/views/div_search.php';?> 
                <!-- Dự án theo lĩnh vực -->
                
<div class="product-count">
                    <div class="pc-title">
                        <h3>Dự án theo lĩnh vực</h3>
                    </div>
                    <div class="pc-content pc-content-hottoppic">
                        <ul id="ulProductCount">
<? foreach ($menu as $data)
                                        {    
                                           echo '<li><a href="/'.strtolower(isset($data['Link'])&&$data['Link']!=''?$data['Link']:stripUnicode($data['TieuDe'])).'">'.$data['TieuDe'].'</a> </li>'; 
                                        }
                                        ?>	 
                        </ul>
                    </div>
                </div> 
                <!-- Tin rao liên quan -->
    <? include  APPPATH.'modules/dangtin/views/xenoibat.php';?> 
 
                <!-- Box hot -->
                <? include  APPPATH.'modules/dangtin/views/tukhoanoibat.php';?> 
 
                <!-- Tin tức liên quan -->
                <? include APPPATH.'modules/baiviet/views/hot_news.php';?> 
                 <? include APPPATH.'modules/dangtin/views/div_tool.php';?>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div> 
    </div>

            <div class="clear"></div>
        </div>
      