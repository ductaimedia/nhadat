<?
            $home=$this->uri->segment(1)==''?'Home':'';
            ?>
<div class="product-count">
        <div class="pc-title"> 
            <h3>Liên kết nổi bật</h3>
        </div>
        <div class="pc-content">
            <ul id="ulBoxHot<? echo $home;?>">
                
                <?
    $tintucs=Modules::run('trangchu/getList','tinban',16,0,'LuotXem desc','IDMaTin',array('IDMaTin !='=>''));
    foreach($tintucs as $tintuc){
        $HangXe2=Modules::run('baiviet/getDanhMucCha',$tintuc['HangXe']); 
        
        $city=Modules::run('trangchu/getList','tinhthanh',1,0,'Name asc','ID',array('Name'=>$tintuc['DoiXe'],'Loai'=>'DoiXe'));
          $last=Modules::run('trangchu/getList','tinhthanh',1,0,'Name asc','ID',array('Name'=>$tintuc['NamSX'],'Loai'=>'NamSX','Parent'=>$city[0]['Note']));
          $info_cha=$last;
          
          $info_reg=Modules::run('trangchu/getList','tinhthanh',1,0,'Name asc','ID',array('Name'=>$tintuc['PhanHang'],'Loai'=>'PhanHang','Parent'=>$info_cha[0]['Note']));; 
          
    ?>
            <li>
                            <h3><a href="/<? echo strtolower(isset($HangXe2['Link'])&&$HangXe2['Link']!=''?$HangXe2['Link']:stripUnicode($HangXe2['TieuDe']));?><? if($tintuc['PhanHang']!=''){ echo '-'.stripUnicode($info_reg[0]['Link']);}else{ echo '-'.stripUnicode($tintuc['NamSX']);}?>"><? echo $HangXe2['TieuDe'];?> <? echo $info_reg[0]['Perfix'];?>  <? echo $tintuc['PhanHang'];?> <? echo $tintuc['NamSX'];?></a></h3>
                        </li>
    <?}?>
     
            </ul>
            
            <div class="pc-extra" id="showBoxhot<? echo $home;?>">
                <a href="javascript:showBoxHot<? echo $home;?>();" rel="nofollow">
                    <img src="/style/images/xemtatca.png" />
                </a>
            </div>
        </div>
         <div class="pc-title"> 
            <h3>Tin Xem Nhiều</h3>
        </div>
        <div class="pc-content">
            <ul id="ulBoxHot<? echo $home;?>">
                 <? $stt1=0;
$tintucs=Modules::run('trangchu/getList','baiviet',10,0,'LuotXem desc','IDBaiViet',"Loai IN ('TinTuc') and TrangThai=1");
foreach($tintucs as $tintuc){$stt1++;
        $parent=Modules::run('trangchu/getInfo','baiviet','IDBaiViet',$tintuc['MenuCha']);
        $fir=$stt1==1?' class="first"':'';
    echo '
               <li '.$fir.'>
                        <h3><a href="/'.stripUnicode($parent['TieuDe']).'/'.stripUnicode($tintuc['TieuDe']).'-'.$tintuc['IDBaiViet'].'.html" title="'.$tintuc['TieuDe'].'">'.$tintuc['TieuDe'].'</a></h3>
                    </li>
    ';
}
?>
</ul>
</div>
    </div>
 
