
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
	
 
</head>
<body style="background-color: red; ">
<div  style="margin-top:-1px">

	<!--<div class ="row text-center" style="height:40px ;background-color:white; border-bottom:1px solid #DDD;">
		<h2 >Vorstand</h2>
	</div>
	-->
	
	<div class="navbar navbar-inverse navbar-fixed-top" style="background-color: #eee;border-bottom:1px solid grey ; ">
     <a href="index.html"  > <img style="height:47px;float:left;margin-left:10px;margin-right:10px; margin-top:2px;" src="img/ic_launcher.png" /></a>
      <?php
					$text= '<h3><b>Sportliche Leitung</b></h3>
<h4>Roland Bendl (links)</h4>
<h3><b>Wirtschaftsvorstand</b></h3>
<h4>Florian Mauch (mitte)</h4>
<h3><b>Öffentlichkeitsarbeit und Marketing</b></h3>
<h4>Gunter Zettl (rechts)<span style="color: #333333; font-family: Tahoma, Helvetica, Arial, sans-serif; font-size: 12px; line-height: 1.3em;"> </span></h4>
<p> </p>
<h2><span style="line-height: 1.3em;">Saison 2014/15</span></h2>
<p style="text-align: justify;">wie in den Jahren zuvor beginnt für die Weilheimer Handballer Mitte September der Spielbetrieb für die Saison 2014/15. Nach intensiver Saisonvorbereitung der einzelnen Teams, heißt es nun die vorgenommenen Ziele in die Tat umzusetzen.</p>
<p style="text-align: justify;">Wie im Vorjahr wird die zweite Damenmannschaft vom Trainerteam Kaufmann/Kiriakidis betreut. Hatte die Mannschaft sich im letzten Jahr einen Platz im Mittelfeld vorgenommen, so möchte man in dieser Saison einen weiteren Schritt nach vorne machen und sich in der oberen Tabellenhälfte der Kreisliga A etablieren.</p>
<p style="text-align: justify;">Das Bezirksligateam der ersten Damenmannschaft wird weiterhin von Martin Weiss trainiert. Der Mannschaft gelang es im letzten Jahr den Weggang von Topspielerin Kim Prengel durch größere mannschaftliche Geschlossenheit zu kompensieren. Leider war das Team aber in seinen Leistungen noch zu schwankend. Wenn es der Truppe gelingt mehr Stabilität zu zeigen, ist ein Platz im oberen Drittel der Tabelle auf jeden Fall realistisch.</p>
<p style="text-align: justify;">Erstmalig wird in diesem Jahr vom Bezirk eine AD/AH Runde für die Damen ausgetragen. Die infrage kommenden Weilheimer Spielerinnen waren sogleich dafür zu haben. Es wurde daraufhin eine Mannschaft gemeldet. Wir wünschen Ihnen in der ersten Saison viel Erfolg.</p>
<p style="text-align: justify;">Die zweite Herrenmannschaft verpasste im letzten Jahr leider den Saisonziel Klassenerhalt. Nach einem teilweise recht unglücklichen Saisonverlauf mit einigen knappen Niederlagen, findet man sich in dieser Saison in der Kreisliga B wieder. Hier sollte aber für die Mannschaft von Trainer Florian Mauch ein guter Tabellenplatz kein Problem sein.</p>
<p style="text-align: justify;">Die erste Herrenmannschaft startet mit einem neuen Trainer in die Saison. Mit Alen Dimitrijevic tritt kein Unbekannter dieses Amt an, war er doch vor Jahren schon einmal Trainer unter der Limburg. Personell gab es keine großen Veränderungen. Den Abgang von Timmy Hiller und Alexander Müske konnte man mit dem Heimkehrer Patrick Auweter und Markus Mayer ausgleichen. Vom Leistungsvermögen der Mannschaft sollte die Vorjahresplatzierung jedenfalls erreichbar sein.</p>
<p style="text-align: justify;">Wie die „Erste“, so haben auch unsere Jungsenioren einen neuen Coach. Mit Hansi Pietsch ist es jedoch eine bekannte Weilheimer Handballgröße. Mit neuen Trainingsinhalten wird er versuchen das Team zu möglichst vielen Erfolgserlebnissen zu führen.</p>
<p style="text-align: justify;">Schon vor dem ersten Anpfiff möchte sich die Handballabteilung jedoch bei ihren Gönnern, Sponsoren und unermüdlichen Helfern für die Unterstützung bedanken. Ohne diese Hilfe wäre ein Spielbetrieb nicht aufrecht zu erhalten. „Last but not least“ schon jetzt ein großes Dankeschön an unser tolles Publikum für vergangene und zukünftige Unterstützung.</p>
<p><strong><span style="line-height: 1.3em;">Vorstandschaft</span></strong><br /><strong>TSV Weilheim</strong><br /><strong>Abteilung Handball</strong></p> 
';
											
		//	if($_REQUEST['site']) { 
		if(isset($_GET['site'])){
				//$site = $_REQUEST['site'];
				$site = $_GET['site'];
				
			}else{
				$site ="";
			}			
					if($site=="v"){
						$bild= '<img src="img/organisation/vs.jpg" class="img-responsive" id="MannschBild" />';					
						$name = "Vorstand";			
						
					}else if($site=="jl"){
						$bild= '<img src="img/organisation/jl.jpg" class="img-responsive" id="MannschBild" />';					
						$name = "Jugendleitung";	
							$text = '<div class="text-center" style="background-color:white;"><h3><b>Jugendleiter/in</b></h3>
									Annette Breuninger (rechts)<br>
									Friedrich Schumacher
									<h3><b>stellv. Jugendleiterin</b></h3>
									Maike Sigel</div>';
									
					}else if($site=="wa"){
						$bild= '<img src="img/organisation/wa.jpg" class="img-responsive" id="MannschBild" />';					
						$name = "Wirtschaftsausschuss";			
							$text = '
							All diese auf dem Bild zu sehenden Gesichter sind die Gesichter des Wirtschaftsausschusses der Handballabteilung des TSV Weilheim. Im Wirtschaftsausschuss befindet sich unter anderen auch jeweils ein Mannschaftsvertreter, um eventuelle Probleme oder Verbesserungsvorschläge einzubringen. 
<br><br>Diese Gesichter kümmern sich um alles Organisatorische rund um den Sport, sei es die Einteilung der Hallendienste, das Planen verschiedener Feste, wie beispielsweise den Vatertagshock, das Hobbyturnier, Bezirksspielfest und viele mehr. Hierzu gehört vor allem das Einteilen der Helfer, das Festlegen der Preise, das Bestellen und Abholen wichtiger Dinge und natürlich das Helfen vor Ort. Diese Gesichter sind die ersten, die am Fest oder Heimspieltag anwesend sind und beim Aufbau helfen und auch die letzten, die gehen, wenn der Abbau sauber über die Bühne gebracht wurde. Auch über die Veranstaltung hinweg ist immer jemand da, der hilft, koordiniert, oder bei Bedarf auch einspringt. 
<br><br>Und diese Gesichter haben auch einen Namen:  Florian Mauch, Mark Sigel, Jochen Fenske, Benjamin Banzhaf, Beate Pesl, Conny Fischer, Anja Hennig, Lena Sigel, Alisa Schaal, Annette Breuninger, Ulla Diez, Maike Sigel und Markus Mayer
<br><br>All diese Namen bilden zusammen den Wirtschaftsausschuss – ein gutes Team, hilfsbereit, jederzeit ansprechbar und offen für neue Vorschläge. 

							';
					}else if($site=="fv"){
						$bild= '<img src="img/organisation/fv.JPG" class="img-responsive" id="MannschBild"  />';					
						$name = "Förderverein";			
						$text= 'Mit dem Ziel der ideellen und finanziellen Förderung der Handballabteilung des TSV Weilheim e.V. übernahm der gemeinnützige Förderverein des Handballsports im Jahr 2001 eine nicht ganz einfache Aufgabe.
<br><br>Nach einem zähen Start können wir heute einige Projekte als sehr gelungen bezeichnen, insbesondere im Jugendbereich und in der Außendarstellung unserer Handballabteilung sind einige Veränderungen durch die Unterstützung des Fördervereins entstanden.
<br><br>Unsere Aufgaben in der Förderung sehen wir in folgenden Bereichen:
<ul >
<li>
<div style="background-color:white;">Jugendtraineraus- und –weiterbildung</div>
</li>
<li>
<div style="background-color:white;">Unterstützung beim Spielzubehör (Handbälle, Trikots, Trainingsanzüge, Verbandsmaterial)</div>
</li>
<li>
<div style="background-color:white;">Zuschüsse zu Turnierbesuchen</div>
</li>
<li>
<div style="background-color:white;">Bereitstellung von Preisen bei Turnieren</div>
</li>
</ul>
</p>
<p style="margin:20px;">Als Hauptaufgabe in den kommenden Jahren sehen wir weiterhin unser Engagement in einer verbesserten Jugendarbeit sowie in der Koordination des „Sponsorings“.
<br<br>Mit unserem Verein möchten wir Sie als Eltern, Ehemalige, Aktive, Freunde, Handel und Gewerbe ansprechen.
<br><br>Werden auch Sie Mitglied im Förderverein des Handballsports des TSV Weilheim, Abt. Handball e.V. und helfen Sie mit, unsere Jugend in eine noch angenehmere Vereinsatmosphäre zu integrieren und die Handballfamilie in Weilheim zu erhalten. Der Mitgliedsbeitrag beträgt derzeit mindests 5,00 Euro pro Jahr und Person.
<br><br><a href="http://handball-weilheim.de/images/downloads/Mitglieds_Beitrittserkl_2012.pdf" target="_blank">Download der Beitrittserklärung</a>
<br><br>Auch über eine Spende auf das Konto des Fördervereins Konto Nr. 866 2220, BLZ 611 500 20 bei der KSK Esslingen freut sich der Förderverein und die Handballgemeinschaft des TSV Weilheim! 
<br><br>Wir hoffen aus Sie sind von unserer Sache überzeugt, und geben uns die Chance mit Ihrer Mitgliedschaft unsere Handballabteilung zu unterstützen. Sollten noch Fragen offen sein, stehen Ihnen die Vorstandsmitglieder des Fördervereins gerne zur Verfügung!
</p>';
							
					}else{					
						$bild= '<img src="img/organisation/vs.jpg" class="img-responsive" id="MannschBild" />';					
						$name = "Vorstand";	
					}
					
	  
		echo '  <div class="content-heading" style="background-color:#eee;margin-top:20px;"><h3 >TSV Weilheim - '. $name .'</h3></div>
     
    </div>
	
			<div class="firstrow" style="margin-top:70px;">
									
									<div class="col-xs-0 col-sd-2 col-md-2"></div>
									<div class="col-xs-12 col-sd-8 col-md-8" style="background-color:#fff;">
									<div style="background-color:#fff;">';
										
										echo $bild;
										
										
									echo '</div>
										<p style="margin:20px;">';
										
											echo $text;
											?>
										</p>
										
										
										</div>
										
										
										
										
										
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


