
<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN"
"http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Metro Tiles UI Kit webtemplate for high end mobiles, like
	samsung, nokia, lg, sony erricsson, htc mobile website templates for
	free | Home :: w3layouts</title>
<meta name="viewport"
	content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
 <link href="css/bootstrap.min.css" rel="stylesheet">
</head style="background-color: red;">
<body style="background-color: red;">
<!---start-wrap---->
<div class="wrap" >
		

			
<?php
//if($_REQUEST['site']) { $site = $_REQUEST['site']; }; if($_REQUEST['type']) 
// { $type = $_REQUEST['type']; }; 

$dom = new DomDocument();
$dom -> load("http://android.handball-weilheim.de/webhandball/hvwcutoutlastweek.php?site=zweite&type=table");

	
$data = $dom->getElementsByTagName('TabelleUngerade'); 
//$data1 = $dom->getElementsByTagName('TabelleUngerade');
//$data2 = $dom->getElementsByTagName('Verein');


echo( '<table class="table table-striped table123">');

echo '<div class="row" style="background-color:white; margin:auto;"><h3 class="text-center">Spielergebnisse</h3></div>';
echo '<tr class="active">
		<td >Datum</td>		
		<td >Verein Heim</td>
		<td >Verein Gast</td>
		<td >Spielstand</td>
		
</tr>';
$n = 0;
foreach($data as $node)
{ 
	
if($n %2 == 0) { echo '<tr class="info">'; }
else { echo '<tr class="active">'; }
foreach ($node->childNodes as $p){		
		echo '<td >'. $p->nodeValue . '</td>';	   
	
}
$n++;
echo '</tr>';
}
	
   // if(++$n % 3 == 0) { echo '</tr>'; }

echo( "</table>");

function hasChild($p) {
if ($p->hasChildNodes()) {
  foreach ($p->childNodes as $c) {
   if ($c->nodeType == XML_ELEMENT_NODE)
    return true;
  }
}
return false;
}



$dom = new DomDocument();
$dom -> load("http://android.handball-weilheim.de/webhandball/hvwcutout.php?site=zweite&type=table");

	
$data = $dom->getElementsByTagName('TabelleUngerade'); 
//$data1 = $dom->getElementsByTagName('TabelleUngerade');
//$data2 = $dom->getElementsByTagName('Verein');
echo '<div class="row" style="background-color:white; margin:auto;"><h3 class="text-center">Aktueller Tabellenstand</h3></div>';
echo( '<table class="table table-striped table123">');

echo '<tr class="active">
		<th >Platz</th>		
		<th >Mannschaft</th>
		<th >Spiele</th>
		<th >S</th>
		<th >U</th>
		<th >N</th>
		<th >Tore+</th>
		<th >Tore-</th>
		<th >Pkt+</th>
		<th >Pkt-</th>
</tr>';
$n = 0;
foreach($data as $node)
{ 
	
if($n %2 == 0) { echo '<tr class="info">'; }
else { echo '<tr class="active">'; }
foreach ($node->childNodes as $p){		
		echo '<td >'. $p->nodeValue . '</td>';	   
	
}
$n++;
echo '</tr>';
}
	
   // if(++$n % 3 == 0) { echo '</tr>'; }

echo( "</table>");



?>
		
		

	
	</div>
	<!---//End-wrap---->
	
	 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
</body>
</html>


