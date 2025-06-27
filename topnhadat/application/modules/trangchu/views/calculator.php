<?
//{"PhiTruocBa":"0 VNĐ","PhiDangKiemLuuHanh":"0 VNĐ","PhiBaoTriDuongBo":"0 VNĐ","BaoHiemVatChatXe":"0 VNĐ","BaoHiemTrachNhiemDanSu":"0 VNĐ","PhiBienSoXe":"0 VNĐ","PhiSangTenDoiChu":"150,000 VNĐ","Tong":"150,000 VNĐ"}
$get=getcontent('https://batdongsantop10.net/Handler/UtilityHandler.ashx?v=1&act='.$_GET['act'].'&year='.$_GET['year'].'&gender='.$_GET['gender'].'&direction='.$_GET['direction'].'');
$get=str_replace('/Images/','https://batdongsantop10.net/Images/',$get);  
echo $get;
?>