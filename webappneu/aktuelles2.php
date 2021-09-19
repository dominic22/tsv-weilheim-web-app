
<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN"
"http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" style="background-color: white;">
<head>
<title>TSV Weilheim - Handball</title>
<meta name="viewport"
	content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
 <link href="css/bootstrap.min.css" rel="stylesheet">
 <link rel="stylesheet" href="css/idangerous.swiper.css">
	<link rel="stylesheet" href="css/idangerous.swiper.scrollbar.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/simple-app.css">
	<script type="text/javascript">
        function goDoSomething(identifier){     
			var data= $(identifier).data('id');
			var header = document.getElementById("header"+data).innerHTML;
			var intro = document.getElementById("intro"+data).innerHTML ;
			var full = document.getElementById("full"+data).innerHTML ;
			document.getElementById("myModalLabel").innerHTML = header;
			document.getElementById("paragraphmodel").innerHTML = intro + full;
		}			
    </script>
</head>
<body style="background-color: white;">
<div  style="width:100%;" >
<div class="navbar navbar-inverse navbar-fixed-top" style="background-color: #eee;border-bottom:1px solid grey ; ">
       <a href="index.html"  > <img style="height:47px;float:left;margin-left:10px;margin-right:10px; margin-top:2px;" src="img/ic_launcher.png" /></a>
      <div class="content-heading" style="background-color:#eee;margin-top:20px;"><h3 >TSV Weilheim - Aktuelles</h3></div>
    </div>
	<div class="" style="margin-top:70px;width:100%;">
	<?php
		error_reporting(E_ALL ^ E_WARNING);

		$url = 'https://www.handball-weilheim.de/';
		$content = file_get_contents($url);;
		$doc = new DOMDocument();
		//$json = json_decode($content, true);
		$doc->loadHTML($content);
		$divs = $doc->getElementsByTagName('div');
		$container_removed = false;
		foreach($divs as $div) {
			// Loop through the DIVs looking for one withan id of "content"
			// Then echo out its contents (pardon the pun)
			
			if ($div->getAttribute('aria-label') === 'Breadcrumb') {
				$div->parentNode->removeChild($div);
		   }
			if ($div->getAttribute('class') === 'moduletable') {
				 $div->parentNode->removeChild($div);
			}
			if ($div->getAttribute('class') === 'page-header') {
				$div->parentNode->removeChild($div);
		   }
			if ($div->getAttribute('class') === 'header') {
				$div->parentNode->removeChild($div);
		   }
		   if ($div->getAttribute('class') === 'pagination') {
			   $div->parentNode->removeChild($div);
		  }
		   
		   if ($div->getAttribute('id') === 'footer') {
			   $div->parentNode->removeChild($div);
		  }
		}
		echo $doc->saveHTML();


		
		//page-header
		//echo $doc

		/*	$json = json_decode($content, true);
		$doc = new DOMDocument();
		$temp = new DOMDocument();
		$doc->loadHTML($content);
		$divs = $doc->getElementsByTagName('div');
		foreach($divs as $div) {
			// Loop through the DIVs looking for one withan id of "content"
			// Then echo out its contents (pardon the pun)
			if ($div->getAttribute('class') === 'blog-featured') {
				 //echo $doc->saveXML($div);
				 //echo $doc->saveHtml($div);
			}
		}*/
		//echo $content
	?>
	</div>
	</div>
	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-lg" >
		<div class="modal-content">
		  <div class="modal-header" style="background-color:#fff">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			<h4 class="modal-title" id="myModalLabel">Modal title</h4>
		  </div>
		  <div class="modal-body" style="background-color:#fff">
			<p id="paragraphmodel"> 
		
			</p>

		  </div>
		  <div class="modal-footer" style="background-color:#fff; ">
			<button type="button" class="btn btn-default" data-dismiss="modal" style="width:100%;">Schließen</button>
			
		  </div>
		</div>
	  </div>
	</div>
	<!-- Ende Modal-->
	
	
	
	<script src="js/jquery.min.js"></script>
	<!-- Don't forget to get the latest Swiper and scrollbar version here-->
	<script src="js/idangerous.swiper-2.0.min.js"></script>
	<script src="js/idangerous.swiper.scrollbar-2.0.js"></script>
	<script src="js/simple-app.js"></script>
	 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/bootstrap.min.js"></script>
	
</body>
</html>


