<?php 
$xe_view='pr';
                  if($dulieu) 
                  foreach ($dulieu as $tintuc) :
                  ?>
                  <? 
                    $c_HangXe=Modules::run('baiviet/getDanhMucCha',$tintuc['HangXe']);		
									
                    $link='/'.stripUnicode($c_HangXe['TieuDe']).'-'.stripUnicode($tintuc['NamSX']).'-'.stripUnicode($tintuc['DoiXe']).'/'.stripUnicode($tintuc['TieuDe']).'-'.$xe_view.$tintuc['IDMaTin'].'.html';
                    include 'vip.php';
                    $tieude = strtolower($tintuc['TieuDe']);
                    ?>
                    <div class="div_proitem ">
                        <a href="<? echo $link;?>" title="<? echo $tintuc['TieuDe'];?>">
                            <h1><? echo strtoupper($tieude); ?></h1>
                            <div class="padding">
                                <div class="div_itemimg">
                                    <img src="<?php echo get_first_img($tintuc['AlbumAnh']);?>" alt="<? echo $tintuc['TieuDe'];?>">
                                </div>
                                <span class="sapo">
                                    <li>Giá: <? echo ($tintuc['GiaTien']==0?'':$tintuc['GiaTien']);?> <? echo $tintuc['SoKM'];?></li>
                                    <li>Mã Tin: <? echo $tintuc['IDMaTin'];?></li>
                                    <li>Diện tích: <? echo $tintuc['NgoaiThat'];?> m².</li>
                                    <li>Vị trí: <? echo $tintuc['NamSX'];?> - <? echo $tintuc['DoiXe'];?></li>
                                </span>
                                <span class="spandate"> <? echo date('d/m/Y',strtotime($tintuc['NgayDang']));?></span>
                            </div>
                        </a>
                    </div>
                    

			
			<?php endforeach;?>
			
							     
                                <?php 
                  if($dulieu==''){
                    echo '<div class="note note-warning" style="margin:0px;margin-top: -10px;width:93.3%!important"><div class="warning-box">'.$this->lang->line('lable_no_rows').'</div></div>';
                  }
                  
                  ?>