<?
	$no=$row->no9;
	
?>
<br>
		 <div class="alert mycolor1" role="alert">구분</div> <!-- 제목 -->

		<form name="form1" method="post" action="">
<table class="table table-bordered table-sm mymargin5">
<tr>
    <td width="20%" class="mycolor2" style="vertical-align:middle"> 번호</td>
    <td width="80%" align="left"><?=$row->no9;?></td>
</tr>
<tr>
    <td width="20%" class="mycolor2" style="vertical-align:middle">
        <font color="red">*</font> 이름
    </td>
    <td width="80%" align="left">
        <div class="form-inline">
            <input  type="text" name="name" value="<?=$row->name9;?>"
                         class="form-control form-control-sm" size="20" maxlength="20">
						 <?if(form_error("name")==true) echo form_error("name");?>
        </div>
    </td>
</tr>
<tr>

</table>

	<div align="center">
		<input type="submit" value="저장" class="btn btn-sm mycolor1"></a>&nbsp;
		<input type="button" value="이전화면" class="btn btn-sm mycolor1" onclick="history.back();">
	</div>

</form>
