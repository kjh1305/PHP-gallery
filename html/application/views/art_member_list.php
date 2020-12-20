<br>
<div class="container">

	 <header class="jumbotron my-4">
      <h1 class="display-3">A Warm Welcome!</h1>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam repellat.</p>
      <a href="#" class="btn btn-primary btn-lg">Call to action!</a>
    </header>
	
				<script>
				function find_text()
				{
					if(!form1.text1.value) // 값이 없는경우, 전체 자료
						form1.action="/~sale9/art_member/lists";
					else
						form1.action="/~sale9/art_member/lists/text1/"+form1.text1.value;
					form1.submit();
				}
			</script>

	<form name="form1" action="" method="post">
    <div class="row">
        <div class="col-3" align="left">            
           <div class="input-group  input-group-sm">
    <div class="input-group-prepend">
        <span class="input-group-text">이름</span>
    </div>
    <input type="text" name="text1" value="<?=$text1?>" class="form-control" onKeydown="if (event.keyCode == 13) { find_text(); }" >
    <div class="input-group-append">
        <button class="btn  btn-sm mycolor1" type="button" onClick="find_text();">검색</button>
    </div>
</div>
        </div>
        <div class="col-9" align="right">       
		<?	$tmp=$text1 ? "/text1/$text1/page/$page" : "/page/$page"; ?>

        </div>
    </div>
</form>
<br>
<div class="row text-center">

		
	<?
		foreach($list as $row)
		{
			$no = $row->no9;
			$rank = $row->rank9;
			if($rank==0){
			$no=$row->no9;
			
			
	?>
		<div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="/~sale9/member_img/<?=$row->pic9;?>" alt=""> <!--작가이미지 넣기-->
          <div class="card-body">
            <h4 class="card-title"><?=$row->name9;?> 작가</h4>
            <p class="card-text"><?=$row->exp9;?></p><!--작가 소개 넣기-->
          </div>
          <div class="card-footer">
		  
				<a href="/~sale9/art_member/view/no/<?=$no;?>" class="btn btn-primary"><?=$row->c?> 개의 작품 보기</a>
		
          </div>
        </div>
      </div>
		
      <?
			}
		}	  
	  ?>

    </div>
    <!-- /.row -->

		<?=$pagination?>
		<br>
		</div>