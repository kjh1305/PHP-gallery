<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>AJI</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="/~sale9/my/assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="/~sale9/my/css/styles.css" rel="stylesheet" />
		
		<link  href="/~sale9/my/css/my.css" rel="stylesheet">
		<script src="/~sale9/my/js/jquery-3.3.1.min.js"></script>
		<script src="/~sale9/my/js/popper.min.js"></script>
		<script src="/~sale9/my/js/bootstrap.min.js"></script>

		<script src="/~sale9/my/js/moment-with-locales.min.js"></script>
		<script src="/~sale9/my/js/bootstrap-datetimepicker.js"></script>		
		<link  href="/~sale9/my/css/bootstrap-datetimepicker.css" rel="stylesheet">
		<link  href="/~sale9/my/css/fontawesome-all.min.css" rel="stylesheet">

		<script src="my/js/Chart.min.js"></script>
		<script src="my/js/Chart.js"></script>
		<script src="my/js/utils.js"></script>
		
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="/~sale9/main1">AJI</a>
				
                <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu					
                    <i class="fas fa-bars"></i>
                </button>	
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">AJI보기</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">투표하기</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">그래프 보기</a></li>	
					</ul>
						<?
							if($this->session->userdata('rank')==1)
								echo("<a href='/~sale9/aji' class='btn btn-sm text-light font-weight-bold bg-primary'>강아지 추가하기</a>");
		
						?>
						&nbsp;&nbsp;
						<?
							if(!$this->session->userdata('uid'))
								echo("<a href='#exampleModal' data-toggle='modal' class='btn btn-sm text-light font-weight-bold bg-primary'>관리자 로그인</a>");
							else
								echo("<a href='login2/logout' class='btn btn-sm text-light font-weight-bold bg-primary'>로그아웃</a>");
						?>
		
		
		
		
                </div>
            </div>
        </nav>
		
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display:none;" aria-hidden="true">	
			<div class="modal-dialog modal-sm" role="document">
				<div class="modal-content">
					 <div class="modal-header bg-primary">
						  <h4 class="modal-title" id="exampleModalLabel">로그인</h4>
							 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								 <span aria-hidden="true">&times;</span>
							</button>
					 </div>
							<div class="modal-body bg-light" style="text-align:center">
								 <form name="form_login" method="post" action="login2/check">
									 <div class="form-inline">
										아이디 : &nbsp;&nbsp;
										<input type="text" name="uid" size="15" value="" class="form-control form-control-sm">
									 </div>
										 <div style="height:10px"></div>
									<div class="form-inline">
									   암 &nbsp;&nbsp; 호 : &nbsp;&nbsp;
									    <input type="password" name="pwd" size="15" value="" class="form-control from-control-sm">
									</div>
									<div class="modal-footer alert-seconday" style="text-align:center">
										 <button type="button" class="btn btn-primary" onclick="javascript:submit();">확인</button>
										  <button type="button" class="btn btn-light" data-dismiss="modal">닫기</button>							
									</div>
								 </form>
							</div>
										
				</div>
			</div>
        </div> 
	
	