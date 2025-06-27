


<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head><title>

</title><link href="/Styles/reset.css" rel="stylesheet" />
    <script src="/style/js/Common.min.js?v=20151126"></script>
</head>
<body>
    <form method="post" action="InterestResult.aspx" id="form2"> 

<div class="aspNetHidden">

	<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="803AD769" />
</div>
        <div class="fengshui-fc">
            <div class="ff-title-lx">
                <h1>Tính lãi suất ngân hàng</h1>
            </div>

            <div class="ff-interest-search">
                <div class="ff-interest-search1">
                    <div class="search1-title">Tìm lãi suất ngân hàng</div>

                    <div class="ff-item">
                        <div class="ff-item">
                            <span>
                                <input id="rdvndForm" type="radio" name="rdUnit" value="rdvndForm" checked="checked" style="width: 16px;" />
                                <label for="rdvndForm" style="width: 45px;">&nbsp;&nbsp;VNĐ</label></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <span>
                                    <input id="rdusdForm" type="radio" name="rdUnit" value="rdusdForm" style="width: 16px;" />
                                    <label for="rdusdForm" style="width: 45px;">&nbsp;&nbsp;USD</label></span>
                            <input type="hidden" name="hddMoneyForm" id="hddMoneyForm" value="0" />
                        </div>
                    </div>
                    <div class="ff-item">
                        <label style="width: 75px; margin: 2px 0 0;">Ngân hàng:</label>
                        <select name="ddlBankForm" id="ddlBankForm" style="width: 194px; height: 24px;">
	<option value="SEABANK">SEABANK</option>
	<option value="ACB">ACB</option>
	<option value="KienlongBank">KienlongBank</option>
	<option value="HDBANK">HDBANK</option>
	<option value="TienPhongBank">TienPhongBank</option>
	<option value="SouthernBank">SouthernBank</option>
	<option value="OCB">OCB</option>
	<option value="ABBank">ABBank</option>
	<option value="BAOVIETBank">BAOVIETBank</option>
	<option value="VPBANK">VPBANK</option>
	<option value="SCB">SCB</option>
	<option value="OCEANBANK">OCEANBANK</option>
	<option value="VIB">VIB</option>
	<option value="MDB">MDB</option>
	<option value="BIDV">BIDV</option>
	<option value="VIETCOMBANK">VIETCOMBANK</option>
	<option value="VietinBank">VietinBank</option>
	<option value="Techcombank">Techcombank</option>
	<option value="AGRIBANK">AGRIBANK</option>
	<option value="VietCapitalBank">VietCapitalBank</option>
	<option value="VinasiamBank">VinasiamBank</option>
	<option value="TrustBank">TrustBank</option>
	<option value="MaritimeBank">MaritimeBank</option>
	<option value="WesternBank">WesternBank</option>
	<option value="VRB">VRB</option>
	<option value="SVB">SVB</option>
	<option value="VIETABANK">VIETABANK</option>
	<option value="NAMABANK">NAMABANK</option>
	<option value="VIETBANK">VIETBANK</option>
	<option value="SAIGON">SAIGON</option>
	<option value="DAIABANK">DAIABANK</option>
	<option value="NAVIBANK">NAVIBANK</option>
	<option value="LienvietPostBank">LienvietPostBank</option>
	<option value="PGBANK">PGBANK</option>
	<option value="MB">MB</option>
	<option value="DONGABANK">DONGABANK</option>
	<option value="SHB">SHB</option>
	<option value="GP.Bank">GP.Bank</option>
	<option value="Bac A Bank">Bac A Bank</option>

</select>
                    </div>
                    <div class="ff-item">
                        <label style="width: 75px; margin: 2px 0 0;">Kỳ hạn:</label>
                        <select name="ddlTermForm" id="ddlTermForm" style="width: 194px; height: 24px;">
	<option value="0">Kh&#244;ng kỳ hạn</option>
	<option value="1">1 th&#225;ng</option>
	<option value="2">2 th&#225;ng</option>
	<option value="3">3 th&#225;ng</option>
	<option value="6">6 th&#225;ng</option>
	<option value="9">9 th&#225;ng</option>
	<option value="12">12 th&#225;ng</option>
	<option value="18">18 th&#225;ng</option>
	<option value="24">24 th&#225;ng</option>
	<option value="36">36 th&#225;ng</option>

</select>
                    </div>
                    <div class="ff-item">
                        <label style="width: 75px; margin: 5px 0 0;">Lãi xuất:</label>
                        <input type="text" id="txtInterestForm" style="width: 182px; margin: 4px 0 0 0; padding: 0 5px; color:red;" />
                    </div>
                </div>
                
                <div class="ff-interest-search2">
                    <div class="search2-title">Tính lãi suất</div>
                    <p>Bảng này giúp bạn tính toán số tiền cần trả khi vay ngân hàng để mua nhà trả góp.</p>
                    <div class="ff-item">
                        <label style="width: 110px; margin: 2px 0 0;">Số tiền vay (VND):</label>
                        <input name="txtTotalForm" type="text" maxlength="18" id="txtTotalForm" onkeyup="javascript:SeparateMoney(this.value);" style="width: 142px; padding: 0 5px;" />
                    </div>
                    <div id="diverrorTotalForm" style="display: none;">
                        <span style="color: red;">Số tiền không hợp lệ</span>
                    </div>
                    <div class="ff-item">
                        <label style="width: 84px; margin: 5px 0 0;">Thời gian vay:</label>
                        <input name="txtTimeForm" type="text" id="txtTimeForm" style="width: 66px; margin: 4px 0 0 0; padding: 0 5px;" />
                        <select name="cmbTimeForm" id="cmbTimeForm" style="width: 98px; margin: 4px 0 0 5px; height: 24px; padding-left: 5px;">
	<option value="0">Th&#225;ng</option>
	<option value="1">Năm</option>

</select>
                    </div>
                    <div id="diverrorTimeForm" style="display: none;">
                        <span style="color: red;">Thời gian không hợp lệ</span>
                    </div>
                    <div class="ff-item">
                        <label style="width: 84px; margin: 5px 0 0;">Lãi suất:</label>
                        <input name="txtInterestRateForm" type="text" id="txtInterestRateForm" style="width: 66px; margin: 4px 0 0 0; padding: 0 5px;" />
                        <span style="float: left; padding: 10px 5px 0;">%</span>
                        <select name="cmbInterestRateForm" id="cmbInterestRateForm" style="width: 82px; margin: 4px 0 0 1px; height: 24px; padding-left: 5px;">
	<option value="0">Th&#225;ng</option>
	<option value="1">Năm</option>

</select>
                    </div>
                    <div id="diverrorRateForm" style="display: none;">
                        <span style="color: red;">Lãi suất không hợp lệ</span>
                    </div>
                    <div class="ff-item">
                        <label style="width: 84px; margin: 5px 0 0;">Loại hình:</label>
                        <select name="cmbTypeForm" id="cmbTypeForm" style="width: 181px; margin: 4px 0 0 0px; height: 24px; padding-left: 5px;">
	<option value="0">Trả l&#227;i chia đều</option>
	<option value="1">Trả l&#227;i giảm dần(vốn h&#224;ng th&#225;ng)</option>
	<option value="2">Trả l&#227;i giảm dần(vốn h&#224;ng qu&#253;)</option>

</select>
                    </div>
                    <div class="ff-item">
                        <label style="width: 84px;">&nbsp;</label>
                        <a id="InterestRateForm" class="hpldirect">Xem kết quả</a>
                    </div>
                </div>
                <div class="clear"></div>
            </div>

            <div class="ff-interest-break"></div>
            <div class="clear"></div>
            <div class="ff-interest-content" id="ff_interest_content">
            </div>

        </div>
    </form>
</body>
</html>
