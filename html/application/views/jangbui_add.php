<br>
		 <div class="alert mycolor1" role="alert">매입장</div> <!-- 제목 -->
<script>
				
				$(function() {
					$("#writeday") .datetimepicker({
						locale: 'ko',
						format: 'YYYY-MM-DD',
						defaultDate: moment()
					});
				});
				
				function select_product()
				{
					var str;
					str = form1.sel_product_no.value;
					if(str=="")
					{
						form1.product_no.value="";
						form1.price.value="";
						form1.prices.value="";
					}
					else
					{
						str=str.split("^^");
						form1.product_no.value=str[0];
						form1.price.value=str[1];
						form1.prrices.value=Number(form1.price.value)*Number(form1.numi.value);
					}
				}

				function cal_prices()
				{
					form1.prices.value=Number(form1.price.value)*Number(form1.numi.value);
					form1.bigo.focus();
				}
			</script>
		<form name="form1" method="post" action="" enctype="multipart/form-data" class="form-inline">
	
<table class="table table-bordered table-sm mymargin5">
<tr>
		<td width="20%" class="mycolor2" style="vertical-align:middle"><font color="red">*</font> 날짜
		</td>
			<td width="80%" align="left">
				<div class="form-inline">
					<div class="input-group input-group-sm date" id="writeday">
						<input  type="text" name="writeday" value="<?=set_value("writeday");?>"
								class="form-control form-control-sm">	
							<div class="input-group-append">
								<div class="input-group-addon">
								&nbsp 	<i class="far fa-calendar-alt fa-lg"></i>
								</div>
							</div>
					</div>
						 <?if(form_error("writeday")==true) echo form_error("writeday");?>
				</div>
			</td>
</tr>
<tr>
    <td width="20%" class="mycolor2" style="vertical-align:middle"><font color="red">*</font> 제품명</td>
		<td width="80%" align="left">
			<div class="form-inline">
			<input type="hidden" name="product_no" value="<?=set_value("product_no");?>">
				<select name="sel_product_no" onchange="select_product();" class="form-control form-control-sm">
					<option value="">선택하세요.</option>
						<?
							$product_no=set_value("product_no");
							foreach ($list as $row)
							{
								if($row->no9==$product_no)
									echo("<option value='$row->no9^^$row->price9' selected>$row->name9 ($row->price9)</option>");
								else
									echo("<option value='$row->no9^^$row->price9' >$row->name9 ($row->price9)</option>");
							}
						?>
						</select>
			</div>
						<?if(form_error("product_no")==TRUE) echo form_error("product_no");?>
		</td>
</tr>
<tr>
    <td width="20%" class="mycolor2" style="vertical-align:middle">
        단가
    </td>
    <td width="80%" align="left">
        <div class="form-inline">
            <input  type="text" name="price" value=""
                         class="form-control form-control-sm" size="20" maxlength="20" onChange='cal_prices();'>
						 
						
        </div>
    </td>
</tr>
<tr>
    <td width="20%" class="mycolor2" style="vertical-align:middle">
        수량
    </td>
    <td width="80%" align="left">
        <div class="form-inline">
            <input  type="text" name="numi" value=""
                         class="form-control form-control-sm" size="20" maxlength="20" onChange='cal_prices();'>
						 
        </div>
    </td>
</tr>
<tr>
    <td width="20%" class="mycolor2" style="vertical-align:middle">
         금액
    </td>
    <td width="80%" align="left">
        <div class="form-inline">
            <input  type="text" name="prices" value=""
                         class="form-control form-control-sm" size="20" maxlength="20" disabled>
						
        </div>
    </td>
</tr>

<tr>
    <td width="20%" class="mycolor2" style="vertical-align:middle">
         비고
    </td>
	 <td width="80%" align="left">
		<div class="form-inline">
			 <input type="text" name="bigo" value="" class="form-control form-control-sm" size="20" maxlength="20">
		 </div>	 
    </td>
</tr>

<tr>

</table>

	<div align="center">
		<input type="submit" value="저장" class="btn btn-sm mycolor1">&nbsp;
		<input type="button" value="이전화면" class="btn btn-sm mycolor1" onclick="history.back();">
	</div>

</form>
