                 
    <div class="content_default">
        <div class="content">
            
<link href="/Content/datepicker/default.css" rel="stylesheet" type="text/css" />
<link href="/Content/datepicker/default.date.css" rel="stylesheet" type="text/css" />
<link href="/Content/datepicker/default.time.css" rel="stylesheet" type="text/css" />

<div class="manage_news">
    <div class="tit">
        <h1 class="content-tit">Quản lý tin rao</h1>
    </div>
    <div class="member-search" style="display: none;">
        <div class="box_search_input">
            <span>
                <label>Từ ngày</label>
                <input name="ctl00$MainContent$ManageNewsMobile$txtTungay" type="text" id="txtTungay" class="datetimepicker" />
            </span>
            <span class="right">
                <label>Đến ngày</label>
                <input name="ctl00$MainContent$ManageNewsMobile$txtDenngay" type="text" id="txtDenngay" class="datetimepicker" />
            </span>
            <span class="left">
                <label>Trạng thái</label>
                <select name="ctl00$MainContent$ManageNewsMobile$ddlStatus" id="MainContent_ManageNewsMobile_ddlStatus">
	<option selected="selected" value="0">--Chọn--</option>
	<option value="1">Hiển thị</option>
	<option value="2">Chưa duyệt</option>
	<option value="3">Tin bị hạ</option>
	<option value="4">Tin bị x&#243;a</option>

</select>
            </span>
            <span class="right">
                <label>Loại tin</label>
                <select name="ctl00$MainContent$ManageNewsMobile$ddlVipType" id="MainContent_ManageNewsMobile_ddlVipType">
	<option selected="selected" value="-1">--Chọn--</option>
	<option value="0">Tin si&#234;u Vip</option>
	<option value="1">Tin Vip</option>
	<option value="2">Tin Hot</option>
	<option value="5">Tin thường</option>

</select>
            </span>
        </div>
        <a id="MainContent_ManageNewsMobile_lbtSearch" class="btnSearch" href="javascript:__doPostBack(&#39;ctl00$MainContent$ManageNewsMobile$lbtSearch&#39;,&#39;&#39;)"><img src="/style/mobile/images/i-btn-search.png"></a>
        
    </div>

    <div class="member-table-data">
        <div class="data-header" style="background: #eee;margin-top: 10px;">
            <div class="data-item">
                <div class="data-row" style="width:23%">Mã tin</div>
                <div class="data-row" style="text-align: left; width: 48%;">Nội dung</div>
                <div class="data-row" style="width:23%">Thao tác</div>
            </div>
        </div>
        <div class="data-body">
        <? $user=Modules::run('trangchu/getInfo','thanhvien','userid',$this->session->userdata('userid'));?>
        <?php 
       
      if($user['level']=='free_user'||$user['level']==''){
        $Loai='<span style="color: orange;">Miễn phí</span>';
      }
      if($user['level']=='vip_user'){
        $Loai='<span style="color: red;">VIP</span>';
      }
      if($user['level']=='xsieuvip_user'){
        $Loai='<span style="color: red;">SIÊU VIP</span>';
      } 
      ?>
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
                    
                     
                     $link='/'.stripUnicode($HangXe['TieuDe']).'-'.stripUnicode($tintuc['NamSX']).'-'.stripUnicode($tintuc['DoiXe']).'/'.stripUnicode($tintuc['TieuDe']).'-pr'.$tintuc['IDMaTin'].'.html';
                  echo '
                   <div class="data-item">
                        <div class="data-row" style="width:23%">'.$tintuc['IDMaTin'].' <br />
                            
                            <span style="color: #37a344; line-height: 22px;">
                                Hiển thị</span>
                            <p style="font-weight: bold; color: #006092 !important">'.$Loai.'</p>
                        </div>
                        <div class="data-row" style="width:48%">
                            <div class="product-info">
                                <p>
                                    <a href="'.$link.'" style="font-weight: bold; color: blue">
                                    '.$tintuc['TieuDe'].'
                                    </a>
                                </p>
                                <p style="font-weight: bold; color: green">
                                    '.($tintuc['GiaTien']==0?'':giaca($tintuc['GiaTien'])).' '.$tintuc['SoKM'].'
                                </p>
                                <div class="product-action">
                                    <a class="action-view" href="'.$link.'" target="_blank">Xem</a>
                                    <a class="action-edit" href="/sua-tin-rao/'.$tintuc['IDMaTin'].'">Sửa</a>
                                    <a onclick="return confirm('.$confirm.')" id="MainContent_ManageNewsMobile_rpProductManage_lbtDelete_0" class="action-del" href="xoa-tin-ban-xe/'.$tintuc['IDMaTin'].'">Xoá</a>
                                </div>
                                
                            </div>
                            <div class="clearboth"></div>
                        </div>
                        <div class="data-row" style="width:23%">
                            <div class="product-action">
                                <span class="wr-action">
                                    
                                    
                                  

                                </span>
                                <div class="pro-action">
                                    <div class="pro-action-disable-reup" runat="server" visible="True">
                                        
                                        <div class="post_tooltip">
                                            <span class="imgPost">'.date("d-m-Y", strtotime($tintuc['NgayDang'])).'</span>
                                        </div>
                                    </div>
                                    <div>
                                        <div>
                                            
                                            <a class="post_tooltip" href="/dangtin/uptin/'.$tintuc['IDMaTin'].'" onclick="return confirm('.$confirm_uptin.')">
                                                <span class="imgUp disable-upmoi" title="Up tin ( làm mới tin)">Up mới</span>
                                            </a>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                        
                    </div>
                    
                  ';
                  }
                  }
                  else
                  {
                  echo '<div class="note note-warning" style="overflow: hidden;margin:0px;width:91.5%!important;"><div class="warning-box">Chưa có tin rao nào</div></div>';
                  }
                  ?>
                    
                
        </div>
    </div>
    
    <div style="text-align: center">
        <div class="pager pager_controls">
            <span id="MainContent_ManageNewsMobile_ProductsPager"></span>
        </div>
    </div>
</div>
<script src="/Scripts/datepicker/picker.js" type="text/javascript"></script>
<script src="/Scripts/datepicker/picker.date.js" type="text/javascript"></script>
<script src="/Scripts/datepicker/picker.time.js" type="text/javascript"></script>
<script src="/Scripts/datepicker/legacy.js" type="text/javascript"></script>
<script src="/Scripts/datepicker/main_template.js" type="text/javascript"></script>

<script src="/Scripts/jquery.bt.min.js"></script>
<script type="text/javascript">
    $(function () {

        $('.imgPost').bt('Tin hết hạn mới được đăng lại.',
            {
                trigger: 'hover',
                positions: 'left',
                width: '170px',
                fill: '#ffff99',
                showTip: function (box) {
                    $(box).show();
                }
            });
        $('.imgUp').bt(
            {
                trigger: 'hover',
                positions: 'left',
                width: '170px',
                fill: '#ffff99',
                showTip: function (box) {
                    $(box).show();
                }
            });
    });
    function DeleteNews() {
        if (confirm('Bạn có chắc chắn muốn xoá tin này ?')) {
            return true;
        }
        return false;
    }

</script>

        </div>
    </div>

