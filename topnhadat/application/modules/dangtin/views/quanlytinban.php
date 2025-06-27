<div class="wr_page">
        <link href="/style/css/my.css" rel="stylesheet" type="text/css" />    
    <div class="index-page">
        <div class="content">
            
            <? include(APPPATH . 'includes/divLeft_thanhvien.php');?>
            
            <!-- Content Right -->
            <div class="user-mright">
                <!-- Đăng tin -->
                <div id="ContentPlaceHolder1_pnMainContent">
	



<div class="module-user">
    <div class="module-header-manage">
        Quản lý tin rao bán / cho thuê 
    </div>
    <div class="status-message" style="padding-top: 10px;"><?php $this->load->view('template/statut_thongbao');?></div>
    <div class="content-pageregister" id="divuserprofiles">
                       <div style="float:left;width:98%; padding:5px;background:#FFFFE5;border:1px dashed #FF9A4D;margin-bottom: 10px;font-size: 12px;" class="remark">
	<span style="color:red;">Ghi chú thao tác:</span>
	<span class="edit_btn2"></span><span>: Sửa tin đăng</span>
	<span class="up_btn"></span><span>: Làm mới tin (up tin )</span>
	<span style="padding-left: 10px;"><img src="<?echo base_url();?>style/images/delete.png" style="width:15px;height:15px" class="icon16 fl-space2" alt="" title="Xóa"></span><span>: Xóa tin đăng</span>
	                   </div>
                       
                       <table class="member-table-data" style="width: 100%;font-size: 12px;">
		<tbody><tr class="r_header">
			<td width="30"><?php echo $this->lang->line('lable_matin');?></td>
            <td width="40">LoGo</td>
			<td width="270"><?php echo $this->lang->line('lable_TieuDe');?></td> 
			<td width="50"><?php echo $this->lang->line('lable_thongso_batbuoc_GiaTien');?></td>
            <td>Lượt xem</td>
			<td width="40"><?php echo $this->lang->line('lable_date_creat');?></td>
			 <td width="40">Thao tác</td>
		</tr>
							<?	  
        $confirm_uptin='Bạn có chắc muốn up tin này lên đầu?';
                                if($lienhe){ 
                  foreach ($lienhe as $tintuc)
                  {  
                    $HangXe=Modules::run('baiviet/getDanhMucCha',$tintuc['HangXe']);
                    $DoiXe=Modules::run('baiviet/getDanhMucCha',$tintuc['DoiXe']);
                    $confirm="'".$this->lang->line('lable_confirm')."'";
                    $NoiDung=strip_tags($tintuc['ThongTinMota']);
                                    $NoiDung=''.substr($NoiDung,0,80).'';
                                    $NoiDung=substr($NoiDung, 0, strrpos($NoiDung, ' ')).'...';
                    
                     
                     $link=$base_url.'/'.stripUnicode($HangXe['TieuDe']).'-'.stripUnicode($tintuc['NamSX']).'-'.stripUnicode($tintuc['DoiXe']).'/'.stripUnicode($tintuc['TieuDe']).'-pr'.$tintuc['IDMaTin'].'.html';
                  echo '
                   
                    <tr class="r_item ">
			<td align="center">'.$tintuc['IDMaTin'].' 
			</td>
            <td><a target="_blank" href="'.$link.'" ><img src="'.get_first_img($tintuc['AlbumAnh']).'" style="width: 40px;height: 40px;"  border="0"/> </a></td>
			<td style="text-align: left;">
			
					<a target="_blank" href="'.$link.'" style="color:green!important"> '.$tintuc['TieuDe'].'</a>
													
				<span class="addimg_approved"></span>			
							<br>
				<!--  -->
				
			</td> 
			<td class="l_date" align="center">
			'.($tintuc['GiaTien']==0?'':giaca($tintuc['GiaTien'])).' '.$tintuc['SoKM'].'
						</td>
            <td class="l_date" align="center">
			'.$tintuc['LuotXem'].'
						</td>
			<td align="center">'.date("d-m-Y", strtotime($tintuc['NgayDang'])).'</td>
			<td style="text-align: center;">
									<a title="Sửa tin" href="'.base_url().'sua-tin-rao/'.$tintuc['IDMaTin'].' " onclick="not_edit();" class="edit_btn2 btn_enalbled">Sửa tin</a> 
								
								<a title="Up tin ( làm mới tin)" href="'.base_url().'dangtin/uptin/'.$tintuc['IDMaTin'].'" onclick="return confirm('.$confirm_uptin.')" class="up_btn">up</a> 
								<a href="'.base_url().'xoa-tin-ban-xe/'.$tintuc['IDMaTin'].'" onclick="return confirm('.$confirm.')"><img src="'.base_url().'style/images/delete.png" style="width:15px;height:15px" class="icon16 fl-space2" alt="" title="Xóa"></a>
			
				
				
			</td>
		</tr>
                  ';
                  }
                  }
                  else
                  {
                  echo '<div class="note note-warning" style="overflow: hidden;margin:0px;width:91.5%!important;"><div class="warning-box">Chưa có tin rao nào</div></div>';
                  }
                  ?>
                                
				
	</tbody></table>
                <?php echo $this->pagination->create_links();?>       
                   </div> 
</div> 

</div>
            </div>
            <? include(APPPATH . 'includes/divRight.php');?>
            
            <div class="clear" style=": "></div>
        </div>
    </div>
    <script src="/Scripts/Members.min.js?v=20151126" type="text/javascript"></script>

            <div class="clear"></div>
        </div>