<?php 
$xe_view='pr';
                  if($dulieu) 
                  foreach ($dulieu as $tintuc) :
                  ?>
                  <? 
                    $c_HangXe=Modules::run('baiviet/getDanhMucCha',$tintuc['HangXe']);
                    $link='/'.stripUnicode($c_HangXe['TieuDe']).'-'.stripUnicode($tintuc['NamSX']).'-'.stripUnicode($tintuc['DoiXe']).'/'.stripUnicode($tintuc['TieuDe']).'-'.$xe_view.$tintuc['IDMaTin'].'.html';
                    include 'vip.php';
                    ?>     
			<div class="div_proitem">
                        <a title="<? echo $tintuc['TieuDe'];?>" class="avatar" href="<? echo $link;?>">
                            <h1>
                                <a class="<? echo $divType;?>" title="<? echo $tintuc['TieuDe'];?>" href="<? echo $link;?>"><? echo $tintuc['TieuDe'];?> <span style="color:#858585;font-size:14px;font-weight:normal;"></span></a></h1>
                            <div class="padding">
                                <div class="div_itemimg">
                                    <img src="<?php echo get_first_img($tintuc['AlbumAnh']);?>" />
                                </div>
                                <table>
                                    <tr>
                                        <td class="label" style="width:30px">Giá: </td>
                                        <td>
                                            <strong style="color: #37a344;"><? echo ($tintuc['GiaTien']==0?'':$tintuc['GiaTien']);?> <? echo $tintuc['SoKM'];?></strong>
                                        </td>
                                    </tr>
                                    </table>
                                <table>
                                    <tr>
                                        <td class="label" style="width:67px">Diện tích: </td>
                                        <td><? echo $tintuc['NgoaiThat'];?> m²</td>
                                    </tr>
                                    </table>
                                <table>
                                    <tr>
                                        <td class="label" style="width:40px">Vị trí: </td>
                                        <td><? echo $tintuc['NamSX'];?> - <? echo $tintuc['DoiXe'];?></td>
                                    </tr>
                                </table>
                                <span class="sp-info-date">
                                    <? echo date('d/m/Y',strtotime($tintuc['NgayDang']));?></span></span>
                            </div>
                        </a>
                    </div>
			<?php endforeach;?>
			
							     
                                <?php 
                  if($dulieu==''){
                    echo '<div class="note note-warning" style="margin:0px;margin-top: -10px;width:93.3%!important"><div class="warning-box">'.$this->lang->line('lable_no_rows').'</div></div>';
                  }
                  
                  ?>