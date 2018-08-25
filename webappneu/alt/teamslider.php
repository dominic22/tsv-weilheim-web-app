<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="initial-scale=1">
	<title>TSV Weilheim - Handball </title>

	<link rel="stylesheet" href="css/idangerous.swiper.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/movies-app.css">
	
	<link href="css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<?php 
										
	if($_REQUEST['site']) { $site = $_REQUEST['site']; }; if($_REQUEST['type']) 
	{ $type = $_REQUEST['type']; }; 
	if($site=="erste"){ 
		$mannschaft="Herren 1";
	}else if($site=="Herren 2"){ 
		$mannschaft="Herren 2";
	}else if($site=="damen"){ 
		$mannschaft="Damen 1";
	}else if($site=="damen2"){ 
		$mannschaft="Damen 2";
	}else if($site=="js"){ 
		$mannschaft="Jungsenioren";
	}else if($site=="ad"){ 
		$mannschaft="Attraktive Damen";
	}
	else{ 
		$mannschaft="Herren 1";
	}
	
	?>

<div class="navbar navbar-inverse navbar-fixed-top" style="background-color: #eee;border-bottom:1px solid grey ; ">
       <a href="index.html"  > <img style="height:47px;float:left;margin-left:10px;margin-right:10px; margin-top:2px;" src="img/ic_launcher.png" /></a>
      <div class="content-heading" style="background-color:#eee;margin-top:20px;"><h3 >TSV Weilheim - <?php echo $mannschaft?></h3></div>
     
    </div>


<div class="swiper-container swiper-nav navbar-fixed-top;margin-top:10px" >
		<div class="swiper-wrapper">
			<div class="swiper-slide active-nav">
				<!--<span class="angle"></span>-->
				<img src="img/team100.png" alt="" style="height:48px;">
				
			</div>
			<div class="swiper-slide">
				<!--<span class="angle"></span>-->
				<img src="img/spiele96.png" alt="" style="height:40px;margin-top:5px;">
				
			</div>
			<div class="swiper-slide">
				<!--<span class="angle"></span>-->
				<img src="img/spielplan.png" alt="" style="height:48px;margin-top:2px;">
				<!--<div class="title">Movie 3</div>-->
			</div>
			<div class="swiper-slide">
				<!--<span class="angle"></span>-->
				<img src="img/News96.png" alt="" style="height:48px;margin-top:3px;">
			
			</div>
			
	
			
		</div>
	</div>
	

	<div class="swiper-container swiper-content" style="margin-top:10px">
		<div class="swiper-wrapper">
		
			<div class="swiper-slide">
				<div class="inner">
				
				
					<h1>Movie 1</h1>
					<img class="movie-pic" src="img/1.jpg" height="150" width="150" alt="">
					<div class="movie-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, consequuntur, officiis esse assumenda corporis voluptates sunt veritatis vero ipsam veniam porro cum libero hic? Pariatur, repudiandae sunt iusorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, consequuntur, officiis esse assumenda corporis voluptates sunt veritatis vero ipsam veniam porro cum libero hic? Pariatur, repudiandae sunt iusto molorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, consequuntur, officiis esse assumenda corporis voluptates sunt veritatis vero ipsam veniam porro cum libero hic? Pariatur, repudiandae sunt iusto molorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, consequuntur, officiis esse assumenda corporis voluptates sunt veritatis vero ipsam veniam porro cum libero hic? Pariatur, repudiandae sunt iusto molorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, consequuntur, officiis esse assumenda corporis voluptates sunt veritatis vero ipsam veniam porro cum libero hic? Pariatur, repudiandae sunt iusto molorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, consequuntur, officiis esse assumenda corporis voluptates sunt veritatis vero ipsam veniam porro cum libero hic? Pariatur, repudiandae sunt iusto molorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, consequuntur, officiis esse assumenda corporis voluptates sunt veritatis vero ipsam veniam porro cum libero hic? Pariatur, repudiandae sunt iusto molorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, consequuntur, officiis esse assumenda corporis voluptates sunt veritatis vero ipsam veniam porro cum libero hic? Pariatur, repudiandae sunt iusto molorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, consequuntur, officiis esse assumenda corporis voluptates sunt veritatis vero ipsam veniam porro cum libero hic? Pariatur, repudiandae sunt iusto molorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, consequuntur, officiis esse assumenda corporis voluptates sunt veritatis vero ipsam veniam porro cum libero hic? Pariatur, repudiandae sunt iusto molorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, consequuntur, officiis esse assumenda corporis voluptates sunt veritatis vero ipsam veniam porro cum libero hic? Pariatur, repudiandae sunt iusto molorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, consequuntur, officiis esse assumenda corporis voluptates sunt veritatis vero ipsam veniam porro cum libero hic? Pariatur, repudiandae sunt iusto molorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, consequuntur, officiis esse assumenda corporis voluptates sunt veritatis vero ipsam veniam porro cum libero hic? Pariatur, repudiandae sunt iusto molorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, consequuntur, officiis esse assumenda corporis voluptates sunt veritatis vero ipsam veniam porro cum libero hic? Pariatur, repudiandae sunt iusto molorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, consequuntur, officiis esse assumenda corporis voluptates sunt veritatis vero ipsam veniam porro cum libero hic? Pariatur, repudiandae sunt iusto molorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, consequuntur, officiis esse assumenda corporis voluptates sunt veritatis vero ipsam veniam porro cum libero hic? Pariatur, repudiandae sunt iusto molorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, consequuntur, officiis esse assumenda corporis voluptates sunt veritatis vero ipsam veniam porro cum libero hic? Pariatur, repudiandae sunt iusto molorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, consequuntur, officiis esse assumenda corporis voluptates sunt veritatis vero ipsam veniam porro cum libero hic? Pariatur, repudiandae sunt iusto molorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, consequuntur, officiis esse assumenda corporis voluptates sunt veritatis vero ipsam veniam porro cum libero hic? Pariatur, repudiandae sunt iusto molorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, consequuntur, officiis esse assumenda corporis voluptates sunt veritatis vero ipsam veniam porro cum libero hic? Pariatur, repudiandae sunt iusto molorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, consequuntur, officiis esse assumenda corporis voluptates sunt veritatis vero ipsam veniam porro cum libero hic? Pariatur, repudiandae sunt iusto molorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, consequuntur, officiis esse assumenda corporis voluptates sunt veritatis vero ipsam veniam porro cum libero hic? Pariatur, repudiandae sunt iusto molorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, consequuntur, officiis esse assumenda corporis voluptates sunt veritatis vero ipsam veniam porro cum libero hic? Pariatur, repudiandae sunt iusto molorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, consequuntur, officiis esse assumenda corporis voluptates sunt veritatis vero ipsam veniam porro cum libero hic? Pariatur, repudiandae sunt iusto molorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, consequuntur, officiis esse assumenda corporis voluptates sunt veritatis vero ipsam veniam porro cum libero hic? Pariatur, repudiandae sunt iusto molorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, consequuntur, officiis esse assumenda corporis voluptates sunt veritatis vero ipsam veniam porro cum libero hic? Pariatur, repudiandae sunt iusto molorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, consequuntur, officiis esse assumenda corporis voluptates sunt veritatis vero ipsam veniam porro cum libero hic? Pariatur, repudiandae sunt iusto molorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, consequuntur, officiis esse assumenda corporis voluptates sunt veritatis vero ipsam veniam porro cum libero hic? Pariatur, repudiandae sunt iusto molorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, consequuntur, officiis esse assumenda corporis voluptates sunt veritatis vero ipsam veniam porro cum libero hic? Pariatur, repudiandae sunt iusto molorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, consequuntur, officiis esse assumenda corporis voluptates sunt veritatis vero ipsam veniam porro cum libero hic? Pariatur, repudiandae sunt iusto molto molestiae quam!</div>
					<div class="clearfix"></div>
					
					
				</div>
			</div>
			<div class="swiper-slide">
				<div class="inner">
				
				
				
					<h1>Movie 2</h1>
					<img class="movie-pic" src="img/2.jpg" height="150" width="150" alt="">
					<div class="movie-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, consequuntur, officiis esse assumenda corporis voluptates sunt veritatis vero ipsam veniam porro cum libero hic? Pariatur, repudiandae sunt iusto molestiae quam!</div>
					<div class="clearfix"></div>
					
					
					
				</div>
			</div>
			<div class="swiper-slide">
				<div class="inner">
				
				
					<h1>Movie 3</h1>
					<img class="movie-pic" src="img/3.jpg" height="150" width="150" alt="">
					<div class="movie-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, consequuntur, officiis esse assumenda corporis voluptates sunt veritatis vero ipsam veniam porro cum libero hic? Pariatur, repudiandae sunt iusto molestiae quam!</div>
					<div class="clearfix"></div>
					
					
					
				</div>
			</div>
			<div class="swiper-slide">
				<div class="inner">
				
				
				
					<h1>Movie 4</h1>
					<img class="movie-pic" src="img/4.jpg" height="150" width="150" alt="">
					<div class="movie-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, consequuntur, officiis esse assumenda corporis voluptates sunt veritatis vero ipsam veniam porro cum libero hic? Pariatur, repudiandae sunt iusto molestiae quam!</div>
					<div class="clearfix"></div>
				
				
				
				</div>
			</div>
		
			
			
			
			
		</div>
	</div>
	
	
	
	
	
	<script src="js/jquery.min.js"></script>
	<!-- Don't forget to get the latest Swiper and scrollbar version here-->
	<script src="js/idangerous.swiper-2.0.min.js"></script>
	<script src="js/movies-app.js"></script>
</body>
</html>