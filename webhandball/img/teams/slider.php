<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="initial-scale=1">
	<title>Simple Swiper App</title>
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<link rel="stylesheet" href="css/idangerous.swiper.css">
	<link rel="stylesheet" href="css/idangerous.swiper.scrollbar.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/simple-app.css">
	
	
</head>
<body style="background-color:red; margin-bottom:-1px;">
	
	<div class="swiper-pages swiper-container"  >
		<div class="swiper-wrapper">
			<div class="swiper-slide">
				<div class="swiper-container scroll-container">
					<div class="swiper-scrollbar"></div>
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<div class="page-inner" id="page-inner">
							
								<!--<div class="row firstrow" style="height:50%;">
									<a href="sliderteam.php?site=erste&type=table" class="button1  col-xs-6 col-md-6" role="button" ><h2 class="text-center" >Herren 1</h2> </a>
									<a href="sliderteam.php?site=zweite&type=table" class="button2  col-xs-6 col-md-6"  role="button"  ><h2 class="text-center" >Herren 2</h2> </a>
								</div>
								<div class="row" style="height:50%;">
									<a href="#" type="button" class="button3 col-xs-6 col-md-6" role="button"  ><h2 class="text-center" >Damen 1</h2> </a>
									<a href="#" type="button" class="button4 col-xs-6 col-md-6" role="button" ><h2 class="text-center" >Damen 2</h2> </a>
								</div>
								-->
								<div  class="container col-xs-6 col-md-6" style="background-color:#222222">
										<a href="sliderteam.php?site=erste&type=table"  >
										<div class="vertical-align-wrap">
										  <div class="vertical-align vertical-align--middle" style="background-color:#222222">
											
											<ul class="list-unstyled center-block" >
									
												<li><h1 class="text-center " id="header1">H1</h1></li>
												<li><h3 class="text-center" id="paragraphButton">Herren 1</h3></li>
											</ul>	
											
										  </div>
										</div></a>
							  </div>
							  <div  class="container col-xs-6 col-md-6" style="background-color:#333333">
								<a href="sliderteam.php?site=zweite&type=table"  >
										<div class="vertical-align-wrap" style="background-color:#333333">
										  <div class="vertical-align vertical-align--middle" style="background-color:#333333">
											
											<ul class="list-unstyled center-block" >
									
												<li><h1 class="text-center " id="header1">H2</h1></li>
												<li><h3 class="text-center" id="paragraphButton">Herren 2</h3></li>
											</ul>	
											
										  </div>
										</div></a>
							  </div>
								<div  class="container col-xs-6 col-md-6" style="background-color:#444444">
										<a href="sliderteam.php?site=damen&type=table"  >
											<div class="vertical-align-wrap">
										  <div class="vertical-align vertical-align--middle" style="background-color:#444444">
											<ul class="list-unstyled center-block" >
									
												<li><h1 class="text-center " id="header1">D1</h1></li>
												<li><h3 class="text-center" id="paragraphButton">Damen 1</h3></li>
											</ul>	
											
										  </div>
										</div></a>
							  </div>
							 	<div  class="container col-xs-6 col-md-6" style="background-color:#555555">
										<a href="sliderteam.php?site=damen2&type=table"  >
											<div class="vertical-align-wrap">
										  <div class="vertical-align vertical-align--middle" style="background-color:#555555">
											<ul class="list-unstyled center-block" >
									
												<li><h1 class="text-center " id="header1">D2</h1></li>
												<li><h3 class="text-center" id="paragraphButton">Damen 2</h3></li>
											</ul>	
											
										  </div>
										</div></a>
							  </div>
		
								
								
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="swiper-slide">
				<div class="swiper-container scroll-container">
					<div class="swiper-scrollbar"></div>
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<div class="page-inner" id="page-inner">
									<div  class="container col-xs-6 col-md-6" style="background-color:#222222">
										<div class="vertical-align-wrap">
										  <div class="vertical-align vertical-align--middle" style="background-color:#222222">
											<a href="sliderteam.php?site=js&type=table"  >
											<ul class="list-unstyled center-block" >
									
												<li><h1 class="text-center " id="header1">JS</h1></li>
												<li><h3 class="text-center" id="paragraphButton">Jungsenioren</h3></li>
											</ul>	
											</a>
										  </div>
										</div>
							  </div>
							  <div  class="container col-xs-6 col-md-6" style="background-color:#333333">
										<div class="vertical-align-wrap" style="background-color:#333333">
										  <div class="vertical-align vertical-align--middle" style="background-color:#333333">
											<a href="sliderteam.php?site=ad&type=table"  >
											<ul class="list-unstyled center-block" >
									
												<li><h1 class="text-center " id="header1">AD</h1></li>
												<li><h3 class="text-center" id="paragraphButton">Attraktive Damen</h3></li>
											</ul>	
											</a>
										  </div>
										</div>
							  </div>
								<div  class="container col-xs-12 col-md-12" style="background-color:#444444">
										<div class="vertical-align-wrap">
										  <div class="vertical-align vertical-align--middle" style="background-color:#444444">
											<a href="teams.php"  >
											<ul class="list-unstyled center-block" >
									
												<li><h1 class="text-center" id="header1">JGD</h1></li>
												<lihttp://localhost/webappneu/img/logo.png><h3 class="text-center" id="paragraphButton">Jugend</h3></li>
											</ul>	
											</a>
										  </div>
										</div>
							  </div>
							 	

							</div>
						</div>
					</div>
				</div>
			</div>		
			
			
		</div>
	</div>
	
	<div class="swiper-nav swiper-container" style="border:0px solid black;">
		<div class="swiper-wrapper">
			<div class="swiper-slide"><span></span></div>
			<div class="swiper-slide"><span></span></div>
			
		</div>
	</div>
	<script src="js/jquery.min.js"></script>
	<!-- Don't forget to get the latest Swiper and scrollbar version here-->
	<script src="js/idangerous.swiper-2.0.min.js"></script>
	<script src="js/idangerous.swiper.scrollbar-2.0.js"></script>
	<script src="js/simple-app.js"></script>
	 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/bootstrap.min.js"></script>
	
</body>
</html>