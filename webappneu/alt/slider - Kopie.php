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
<body >
	
	<div class="swiper-pages swiper-container" >
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
								
		<div class="row firstrow pagination-centered" style="height:50%;">
		<!--	<a href="teams.php" class="button1  col-xs-6 col-md-6" style="height: 30%;" role="button" >Berichte</a>
			<a href="slider.php" class="button2  col-xs-6 col-md-6" style="height: 30%;" role="button"  >Teams</a>
		-->
		<a href="sliderteam.php?site=erste&type=table" class="button1  col-xs-6 col-md-6" style="height: 100%;" role="button" >
		<ul class="list-unstyled center-block " >
		
		<li><h1 class="text-center " >H1</h1></li>
		<li><h3 class="text-center">Herren 1</h3></li>
		</ul>		
		</a>
		
		<a href="sliderteam.php?site=zweite&type=table" class="button2  col-xs-6 col-md-6" style="height: 100%;" role="button" >
		<ul class="list-unstyled pagination-centered" >
		
		<li><h1 class="text-center" >H2</h1></li>
		<li><h3 class="text-center">Herren 2</h3></li>
		</ul>		
		</a>
		</div>
		
		<div class="row" style="height:50%;">
			<!--	<a href="#" type="button" class="button3 col-xs-6 col-md-6" role="button">Organistaion</a>
			<a href="#" type="button" class="button4 col-xs-6 col-md-6" role="button" >Impressum</a>	-->
		<a href="teams.php" class="button3  col-xs-6 col-md-6" style="height: 100%;" role="button" >
		<ul class="list-unstyled center-block" >
		
		<li><h1 class="text-center " >H1</h1></li>
		<li><h3 class="text-center">Herren 1</h3></li>
		</ul>		
		</a>
		
		<a href="slider.php" class="button4  col-xs-6 col-md-6" style="height: 100%;" role="button" >
		<ul class="list-unstyled pagination-centered" >
		
		<li><h1 class="text-center" >H2</h1></li>
		<li><h3 class="text-center">Herren 2</h3></li>
		</ul>		
		</a>
			
			
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
									<div class="row firstrow" style="height:50%;">
									<a href="teams.php" class="button1  col-xs-6 col-md-6"  role="button" ><h2 class="text-center" >Jungsenioren</h2> </a>
									<a href="#" class="button2  col-xs-6 col-md-6"  role="button"  ><h2 class="text-center" >Attraktive Damen</h2> </a>
								</div>
									<div class="row" style="height:50%;">
										<a href="#" type="button" class="button3 col-xs-12 col-md-12" role="button" ><h2 class="text-center" >Jugend</h2></a>
										
									</div>

							</div>
						</div>
					</div>
				</div>
			</div>		
			
			
		</div>
	</div>
	
	<div class="swiper-nav swiper-container">
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