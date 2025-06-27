<?
//{"PhiTruocBa":"0 VN�","PhiDangKiemLuuHanh":"0 VN�","PhiBaoTriDuongBo":"0 VN�","BaoHiemVatChatXe":"0 VN�","BaoHiemTrachNhiemDanSu":"0 VN�","PhiBienSoXe":"0 VN�","PhiSangTenDoiChu":"150,000 VN�","Tong":"150,000 VN�"}
$get=getcontent('https://batdongsantop10.net/Handler/UtilityHandler.ashx?v=1&act='.$_GET['act'].'&total='.$_GET['total'].'&borrowingTime='.$_GET['borrowingTime'].'&interestRate='.$_GET['interestRate'].'&rentTimeType='.$_GET['rentTimeType'].'&interestRateTimeType='.$_GET['interestRateTimeType'].'&paymentType='.$_GET['paymentType'].'');  
echo $get;
?>