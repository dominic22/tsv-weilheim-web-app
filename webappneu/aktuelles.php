
<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN"
"http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
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
           // alert("data-id:"+$(identifier).data('id')+", data-option:"+$(identifier).data('option'));           
			var data= $(identifier).data('id');
		//	alert(data);
			var header = document.getElementById("header"+data).innerHTML;
			var intro = document.getElementById("intro"+data).innerHTML ;
			var full = document.getElementById("full"+data).innerHTML ;
		//	alert(header);
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



 $url = 'http://android.handball-weilheim.de/webhandball/comments.php';


			// $jsonData = json_decode(file_get_contents("http://android.handball-weilheim.de/webhandball/cutout.php?site=zweite&type=table"));
				
			
			$content = file_get_contents($url);
			//	echo $content;
			$json = json_decode($content, true);
			
			echo '<table class="table table-hover" style="background-color: white;">';
			 
		//	 foreach($json as $i){
		//	 echo "loos:";
			 	
		//		echo $i;
		//	}
		$results = array();
		$x=0;
		foreach($json['posts'] as $chunk) {
		$title= $chunk['title'];
		$introtext=$chunk['introtext'];
		
		//echo $introtext;
		//<img src="\&quot;images\/vatertag2014.jpg\&quot;" style="\&quot;width:" 386px;="" height:="" 533px;\"="" \="" border="\&quot;0\&quot;" height="\&quot;3520\&quot;" width="\&quot;2491\&quot;">
		
		//"
		
		
		if (strpos($introtext,'<img') !== false) {
		
		$src=$introtext;
		$src=  explode('<img src=', $src);
		
		
		$src1= $src[1];
		
		$src2= explode('"', $src1);
		
		
		//echo "asdijaoidjwa BILD";
		
		//echo $src2[1];
		//	echo "asdijaoidjwa BILD";	
		$search = "/[^<img](.*)[^/>]/";
	
		$replace = '<div><img class="image-responsive col-xs-12 col-sm-6 col-md-4" src="http://handball-weilheim.de/'.$src2[1].'"/></div><p>';
		//echo $replace;

	//	$string = "<tag>i dont know w^hat is here</tag>";
		//$introtext = preg_replace($search,$replace,$introtext);
	//	$echo $introtext;
		
		$intro1= $src[0]; 
	//	echo $intro1;
	//	echo $intro2=$replace;
		$intro3 = explode('/>', $src[1]);
	//	echo $intro3[1];
		$introtext = $intro1 . $replace . $intro3[1];
		
	 }
	if (strpos($introtext,'<a') !== false) {
	
		 $introtext = str_replace("<a", "<p", $introtext);
	}
	
		
	//	echo $introtext;
		$id = $chunk['id'];
			//$header = $chunk['title'];
		//	$introtext = $chunk['introtext'];
		
		
			$fulltext = $chunk['fulltext'];
			
			
			
			//CHANGE FULLTEXT
					
			if (strpos($fulltext,'<img') !== false) {
		
		$src=$fulltext;
		$src=  explode('<img src=', $src);
		
		
		$src1= $src[1];
		
		$src2= explode('"', $src1);
		
		
		$search = "/[^<img](.*)[^/>]/";
	
		$replace = '<div><img class="image-responsive col-xs-12 col-sm-6 col-md-4" src="http://handball-weilheim.de/'.$src2[1].'"/></div><p>';
		
		
		$intro1= $src[0]; 
		$intro3 = explode('/>', $src[1]);

		$fulltext = $intro1 . $replace . $intro3[1];
		
	 }
	if (strpos($fulltext,'<a') !== false) {
	
		 $fulltext = str_replace("<a", "<p", $fulltext);
	}
			if($x%2==0){
			echo '<tr  class="active" onclick="goDoSomething(this)" data-id="'.$id .'" data-toggle="modal" data-target="#myModal">';
			echo '<td  name="id" data-id="' .$id .'"><ul class="list-unstyled">';
			echo '<li id="header'.$id .'"><h2>' .$title  . '</h2></li>';
			echo '<li id="intro'.$id .'">' . $introtext . '</p></li>';
			echo '<li id="full'.$id .'" style="display: none;">' . $fulltext . '</p></li>';
			echo '</ul></td>';
			echo "</tr>";
			}
			
			else{
			echo '<tr style="background-color:white" onclick="goDoSomething(this)" data-id="'.$id .'" data-toggle="modal" data-target="#myModal">';
			echo '<td  name="id" data-id="' .$id .'"><ul class="list-unstyled">';
			echo '<li id="header'.$id .'"><h2>' .$title  . '</h2></li>';
			echo '<li id="intro'.$id .'">' . $introtext . '</p></li>';
			echo '<li id="full'.$id .'" style="display: none;">' . $fulltext . '</p></li>';
			echo '</ul></td>';
			echo "</tr>";
			
			}
			$x++;
		}
		
		echo "</table>";
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


