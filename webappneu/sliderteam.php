
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
 
</head style="background-color: red;">
<body style="background-color: red;">
<!---start-wrap---->
<div class="wrap" >

<?php 
										
	if($_REQUEST['site']) { $site = $_REQUEST['site']; }; if($_REQUEST['type']) 
	{ $type = $_REQUEST['type']; }; 
	if($site=="erste"){ 
		$mannschaft="Herren 1";
		$spielplanTeam = "erste"; // _teamName + "_spielplan.ics"
	}else if($site=="zweite"){ 
		$mannschaft="Herren 2";
		$spielplanTeam = "zweite";
	}else if($site=="damen"){ 
		$mannschaft="Damen 1";
		$spielplanTeam = "damen";
	}else if($site=="damen2"){ 
		$mannschaft="Damen 2";
		$spielplanTeam = "damen2";
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

	<div class="swiper-nav swiper-container" style="margin-top:52px;height:50px; background-color: #fff; " >

		<div class="swiper-wrapper"  style="height:50px; background-color: #fff;">
			<div class="swiper-slide active" style=" background-color: #fff; "><img src="img/team100.png" class="img-responsive iconsSlider" style="padding-left:5px;margin-right:5px; width:54px;"/></div>
			<div class="swiper-slide" style="background-color: #fff;"><img src="img/spiele96.png" class="img-responsive iconsSlider" style="margin-top: 3px; margin-left:5px;margin-right:5px; width:54px;" /></div>
			<div class="swiper-slide" style="background-color: #fff;"><img src="img/spielplan.png" class="img-responsive iconsSlider" style="margin-top: 3px;padding-left:5px;padding-right:5px; width:58px;"/></div>
			<div class="swiper-slide" style="background-color: #fff;"><img src="img/News96.png" class="img-responsive iconsSlider" style="margin-top: 3px;margin-left:5px;padding-right:5px; width:52px; "/></div>
			
		</div>
	</div>
		
		

	<div class="swiper-pages swiper-container" >
		<div class="swiper-wrapper " >
			<div class="swiper-slide" >
				<div class="swiper-container scroll-container" >
					<!--<div class="swiper-scrollbar" style="margin-bottom:100px;"></div>-->
					<div class="swiper-wrapper" style="margin-bottom:100px;">
						<div  ><!-- class="swiper-slide" style="margin-bottom:100px;" der ists...-->
							<div class="page-inner" >
								
								<div class="firstrow" style="height:50%;">
									
									<div class="col-xs-0 col-sd-2 col-md-2"></div>
									<div class="col-xs-12 col-sd-8 col-md-8" style="padding-left:0px; padding-right:0px;background-color:white;">
									<div style="background-color:white">
										
									<?php
										
										if($_REQUEST['site']) { $site = $_REQUEST['site']; }; 
											if($site=="erste"){
												echo '<img src="img/teams/h1.jpg" class="img-responsive" id="MannschBild" />';	
												$title='
												<b>Hinten:</b> Co-Trainer Manuel Bauer, Johannes Negwer, Sebastian Martin, Calvin Hartmann, Patrick Seyferle, Josef Roth, Benjamin Banzhaf, Dan Stelzer.
												<br>
												<b>Vorne:</b> Trainer Michael Rehkugler, Timo Sigel, Jan Stark, Bernhard Illi, Oliver Latzel, Moritz Latzel, Andreas Klöhn, Dominik Klett, Co-Trainer Bernd Bierbaum.
												<br>
												<b>Es fehlt:</b> Leander Banzhaf.
												<br><br>
												<b>Saisonausblick 2019/20</b>
												<br><br>Die erste Herrenmannschaft des TSV Weilheim beendete die erste Bezirksklassesaison 2018/19 nach dem Abstieg aus der Bezirksliga auf einem ernüchternden sechsten Tabellenplatz. Nach einem vielversprechenden Start in die Runde mit deutlichen Siegen gegen Mannschaften, die jedoch am Ende der Saison eher am Tabellenende zu finden waren, leistete sich die Mannschaft von Trainer Michael Rehkugler zu viele Leistungsschwankungen im weiteren Saisonverlauf. Auch der Ausfall von Spielmacher Maximilian Müller (Oberarmbruch) bereits nach dem zweiten Saisonspiel wog schwer. Der flinke Mittelmann überzeugte in der Saisonvorbereitung und machte mit seiner Schnelligkeit und Dynamik das Angriffsspiel deutlich variabler. Mit durchschnittlich 30 geworfenen Toren pro Spiel hat die Mannschaft sich in der Offensive im Gegensatz zu den vorherigen Spielzeiten zwar deutlich gesteigert. Allerdings musste man mit 28 Gegentoren im Durchschnitt auch mehr Treffer hinnehmen. Das war mitunter sicher auch dem verletzungsbedingten Ausfall von Torhüter Bernhard Illi geschuldet, der wegen einer Hüft-Op die erste Saisonhälfte verpasste. Am Ende musste man sich so mit einem Platz im Mittelfeld zufrieden geben.
												
												<br><br>Vier Abgänge müssen die Roten nach der Saison kompensieren. Florian Braun (TSV Denkendorf) und Jakob Klein (VfL Kirchheim) suchen mit ihren neuen Vereinen in der Landesliga eine neue Herausforderung. Jakob Ulmer und Benedikt Schmid müssen aus beruflichen Gründen eine Handballpause einlegen.
												Trotzdem stehen die Zeichen für die kommende Spielzeit auf Angriff. Mit vielversprechenden Neuzugängen will die Mannschaft um Kapitän Patrick Seyferle das Ziel Wiederaufstieg in die Bezirksliga möglich machen. Für Verstärkung im Rückraum sowie im Abwehrzentrum soll Sebastian Martin sorgen. Martin wechselt vom TSV Grabenstetten unter die Limburg und soll der Abwehr und dem Angriffsspiel mehr Stabilität und Durchschlagskraft verleihen. Außerdem konnte mit Johannes Negwer ein Oberligaerfahrener Spieler für die Halbrechts- sowie für die Rechtsaußenposition gewonnen werden. Er kommt vom TV Altbach zu den Weilheimern und wird die Mannschaft mit seiner Erfahrung und Qualität auf der rechten Seite verstärken.
												
												<br><br>Der dritte Neuzugang ist Torhüter Oliver Latzel vom VfL Kirchheim. Eigentlich wollte Latzel nach der letzten Saison beim VfL seine aktive Handballkarriere beenden. Er hat sich jedoch bereiterklärt den Roten während der Vorbereitung, auf Grund einer erneuten OP von Bernhard Illi, zwischen den Pfosten auszuhelfen. Das hat nicht nur sportlich, sondern auch menschlich so gut gepasst, dass man ihn überzeugen konnte die Mannschaft auch während der Saison dauerhaft zu unterstützen. Komplettiert werden die Neuzugänge durch Dan Stelzer und Andreas Klöhn aus dem eigenen Verein. Stelzer kommt aus der A-Jugend zur ersten Mannschaft nachdem er in der letzten Saison bereits bei der zweiten Mannschaft Erfahrungen im aktiven Handball sammeln konnte. Er soll langsam in die Mannschaft integriert werden und in der kommenden Runde im Rückraum weitere Spielpraxis sammeln. Andreas Klöhn wird aus der zweiten Mannschaft hochgezogen und wird das Team auf Linksaußen unterstützen.
												Die Saisonvorbereitung verläuft bisher sehr positiv mit vielen erfolgreichen Testspielen, die vor allem dafür genutzt werden um die neuen Spieler in die Mannschaft und in die Abläufe zu integrieren. Auch abseits des Spielfelds stimmt es in der Mannschaft. Die neuen Spieler haben sich in kürzester Zeit eingelebt und passen perfekt ins Team. Die komplette Mannschaft freut sich auf eine erfolgreiche Runde mit einem großen gemeinsamen Ziel, das durch Einstellung, Kampf und mit dem vorhandenen Zusammenhalt und vor allem der gewohnt zahlreichen Unterstützung der Weilheimer Anhänger, möglich zu sein scheint.

												<br><br>Kader:
												<br>Tor: Bernhard Illi, Moritz Latzel, Oliver Latzel
												<br>Feld: Patrick Seyferle, Calvin Hartmann, Dominik Klett, Benjamin Banzhaf, Josef Roth, Jan Stark, Andreas Klöhn, Timo Sigel, Sebastian Martin, Johannes Negwer, Dan Stelzer, Leander Banzhaf.

												<br><br>Trainer und Co–Trainer:
												<br>Michael Rehkugler, Bernd Bierbaum, Manuel Bauer.

												<br><br>Abgänge:
												<br>Florian Braun (TSV Denkendorf), Jakob Klein (VfL Kirchheim), Alexander Späth, Timo Höfert (beide zweite Mannschaft), Maximilian Müller (verletzungsbedingte Pause), Jakob Ulmer, Benedikt Schmid (beide berufsbedingte Pause).

												<br><br>Zugänge:
												<br>Sebastian Martin (TSV Grabenstetten), Johannes Negwer (TV Altbach), Oliver Latzel (VfL Kirchheim), Andreas Klöhn (zweite Mannschaft), Dan Stelzer (eigene Jugend).
												';
											}else if($site=="zweite"){
												echo '<img src="img/teams/h2.jpg" class="img-responsive" id="MannschBild" />';			
												$title='
												<b>Hinten:</b> Co-Trainer Timo Klein, Leander Banzhaf, Timo Höfert, Jakob Ulmer, Christo Kiriakidis, Marco Zaiser, Felix Kupferschmid, Trainer Marco Schill.
												<br>
												<b>Vorne:</b> Dan Stelzer, Kai Huber, Andreas Klöhn, Mark Sigel, Benedikt Schmid, Dominic Zettl, Karl-Friedrich Schumacher, Marco Fiedler.

												<br><br>
												<b>Saisonausblick 2019/20</b>
												<br><br>
												Der Saisonstart für Weilheims Zweite rückt näher. Um gut gerüstet in das zweite Jahr Kreisliga A zu starten, hat Trainer Marco Schill mit seinen Jungs Ende Juni die Vorbereitung eingeläutet. Unter anderem standen Laufeinheiten für die Ausdauer, Kräftigungsübungen aber auch Ballsicherheit auf dem Programm.
												Da man in der vorigen Saison im letzten Spiel noch den Klassenerhalt sichern konnte, liegt das Ziel dieses Jahr ganz klar darin, gar nicht erst ins hintere Drittel zu rutschen. Durch Verstärkung aus den eigenen Reihen der Weilheimer A-Jugend sollte diese Ziel durchaus möglich sein. Personelle Engpässe aufgrund der Urlaubszeit haben leider nur ein Testspiel zugelassen. Es zeigte sich aber das sehr viel Potenzial für die neue Saison da ist, welches durch weitere Trainingseinheiten auch abgerufen werden kann.
												Über reichlich Unterstützung der Weilheimer Fans würde sich die Zweite bei den bald anstehenden Rundenspielen freuen.
												';	
											}else if($site=="damen"){
												echo '<img src="img/teams/d1.jpg" class="img-responsive" id="MannschBild"  />';										
												$title='
												<b>Hintere Reihe:</b> Britta Braun, Tanja Bachofer, Elisa Fischer, Eva Pflüger, Anne Heid, Monja Reichle, Nicole Sigel, Trainer Christoph Drüke.
												<br>
												<b>Vordere Reihe:</b> Xenia Veith, Carla Fischer, Lisa Attinger, Kathrin Ulmer, Lisa-Marie Attinger, Rebecca Glaab, Emma Schober.
												<br><br>
												<b>Saisonausblick 2019/20</b>
												<br><br>Eine Saison mit Höhen und Tiefen beendete die 1. Damenmannschaft leider nur im hinteren Tabellenfeld der Bezirksliga. Dennoch kann man positiv hervorheben, dass die Mannschaft im Abstiegskampf Moral bewiesen hat und sich gemeinsam den Klassenerhalt gesichert hat.
												Ende Mai hat dann Chris Drüke das Traineramt der 1.Damenmannschaft übernommen, der damit das alte Trainerduo Andi Klöhn und Christo Kiriakidis ablöst. Die beiden legen, nach mehreren Jahren Trainer Dasein in verschiedenen Mannschaften, ihr Amt vorerst nieder. An dieser Stelle möchten wir uns bei euch für euer großes Engagement für die Mannschaft bedanken. Zudem mussten wir auch dieses Jahr wieder Abgänge hinnehmen, die auf und neben dem Platz Lücken hinterlassen werden. Deshalb freuen wir uns sehr, dass Lisa-Marie Attinger den Weg wieder zurück nach Weilheim gefunden hat. Mit ihr kehrt eine vielseitig einsetzbare Spielerin zurück, die dem Team sowohl sportlich als auch menschlich weiterhelfen wird. Gemeinsam haben sich Trainer und Spielerinnen für die kommende Runde Ziele gesetzt und möchten mit dem Abstiegskampf definitiv nichts mehr zu tun haben. In der Vorbereitung wird der Fokus darauf gelegt, dass die Mannschaft zu einer Einheit zusammen wächst und neue Spielinhalte schnell verinnerlicht werden. Außerdem sollen auch die Jugendspielerinnen aus den eigenen Reihen langsam an den aktiven Bereich herangeführt und in der Mannschaft integriert werden. Neben schweißtreibenden Trainingseinheiten in und vor der Halle wurden auch einige Trainingsspiele und Turniere bestritten, bei denen die Mannschaft ihr Können schon unter Beweis stellen konnte und wichtige Erkenntnisse gesammelt wurden.
												<br><br>Wenn man es schafft über die ganze Saison hinweg mannschaftlich aufzutreten und konstante Leistungen abzurufen, sollte eine gute Platzierung durchaus möglich sein.
												Wir bedanken uns für die zahlreiche Unterstützung in der vergangenen Saison und freuen uns auf eine erfolgreiche und verletzungsfreie Saison 2019/2020. Natürlich zählen wir auch in diesem Jahr wieder auf die lautstarke Unterstützung der Weilheimer Fans!
												';
											}else if($site=="damen2"){
												echo '<img src="img/teams/d2.jpg" class="img-responsive" id="MannschBild"  />';										
												$title='
												<b>Hinten:</b> Noémi Papp, Jenny Schade, Elisa Fischer, Eva Pflüger, Carla Fischer, Lilien Morgenstern, Cindy Doll.
												<br>
												<b>Vorne:</b> Xenia Veith, Cindy Braun, Viktoria Slavulj, Celine Schmid, Katharina Karban, Trainer Manuel Bauer.
												<br>
												<b>Es fehlen:</b> Julia Koser, Hanna Schumacher
												
												<br>
												<br>
												<b>Saisonausblick 2019/20</b>
												<br><br>
												Die zweite Damenmannschaft des TSV Weilheims schloss die letzte Saison mit dem 11. Tabellenplatz ab. Leider war dies keine erfolgreiche Saison, was teilweise an personellen Bedingungen lag. Allerdings startet die Mannschaft schon seit Juni 2019 motiviert und mit neuen Jugendspielerinnen in der Vorbereitung durch.
												In die aktuelle Saison 19/20 durften die Damen mit neuem Trainer starten. Manuel Bauer erklärte sich dazu bereit, die Vorbereitung mit anzutreten. Das Training, welches zweimal pro Woche stattfand, ging dabei auf grundlegende Merkmale des Handballs ein. Dadurch wurde sichergestellt, dass die Jugendspieler an den aktiven Bereich herangeführt und gleichzeitig nicht mit reinem Athletiktraining überstrapaziert werden. Auch bei Hallenschließung fand ein Lauf- oder Krafttraining in der Natur statt. Leider ist schon im Voraus klar, dass Manuel uns Ende September aufgrund des Studiums als Trainer wieder verlassen wird. Jedoch hat er uns in dieser kurzen Zeit schon einiges für die kommende Saisonmitgegeben und somit sich ein großes Dankeschön verdient.
												<br><br>Durch die vielen Neuzugänge aus der Jugend hat die Zweite Damenmannschaft an viel Wert gewonnen. Die Jugendspielerinnen müssen nun viel Spielpraxis sammeln und sich auf die härtere Spielweise der Damen vorbereiten. Das Ziel ist es nun, zusammen als junge gemischte Mannschaft zu zeigen, was alles möglich ist. Mit viel Biss und Anstrengung wird es uns gelingen, das erste Spiel am 14. September 2019 gegen Vaihingen 2 erfolgreich anzutreten. Man darf sich auf eine spannende und hoffentlich siegreiche Saison freuen.
												
												<br><br>Wir hoffen auf eine verletzungsfreie Runde und eine großartige Unterstützung der Weilheimer Fans.
												';
											}else if($site=="js"){
												echo '<img src="img/teams/js.jpg" class="img-responsive" id="MannschBild"  />';										
												$title='
												<b>Jungsenioren / Senioren – Ü40</b>

												<br><br>The same procedure as every year: Die Ü40-Runde schlossen wir wieder als Dritter im Bezirk ab – wieder war es knapp und wieder die Erkenntnis, dass wir auch mit den beiden besser platzierten Mannschaften gut mithalten können.
												<br><br>Nach erfolgreicher Integration unserer ‚Nachwuchsspieler‘ konnten wir über große Strecken der Runde eine kompakte Abwehrleistung und ein flexibles und druckvolles Angriffsspiel präsentieren – auch neu einstudierte und alt bekannte Spielzüge konnten erfolgreich abgeschlossen werden. Auch wenn wir bei Ausflügen zu anderen Sportarten (Indiaka- und Volleyball-Freizeit-Turnier in Erkenbrechtsweiler) sehr erfolgreich abgeschnitten hatten (1x Erster und 2x Zweiter), werden wir weiterhin dem Handball-Sport frönen und eine hoffentlich wieder erfolgreiche Runde spielen.
												<br><br>Auch außerhalb des Trainings- und Spielbetriebs haben wir einiges zu bieten – diese Saison waren wir u.a. auf einem Mannschafts-Ausflug in Leermoos und neben (und während) diversen Arbeitsdiensten kam der Spaß auch nie zu kurz!
												<br><br>Daher freuen wir uns auch weiterhin über jeden „Neuzugang“ und Quer- oder Wieder-Einsteiger, der unsere lustige und erfolgshungrige Truppe verstärken möchte – gerne auch solche, die das Schwabenalter noch nicht erreicht haben! Trainiert wird wieder freitags in der Lindachhalle um 20:00 Uhr.
												';
											}else if($site=="ad"){
												echo '<img src="img/teams/ad.jpg" class="img-responsive" id="MannschBild"  />';										
												$title='
												
												<b>Wir sind "Atemlos!!!" ...</b>

												<br><br>... und haben trotzdem immer im Kopf: "Die Hölle morgen früh ist mir egal".
												<br><br>Unter diesem Motto hat sich diese Saison seit langem wieder eine AD-Mannschaft ("Attraktive Damen", Ü30) zusammengefunden.
												<br><br>Der Mix der Spielerinnen ist super: Neben Wiedereinsteigerinnen und aktiven Spielerinnen sind auch schon Youngsters mit dabei - denn wir wissen alle, dass Nachwuchsarbeit sehr wichtig ist. Bereits in den ersten Trainingseinheiten hat sich gezeigt, dass zwar der Spaß eindeutig im Vordergrund steht, aber es trotzdem Jede noch wissen will und es geht immer mit Ehrgeiz zur Sache.
												<br><br>Die Trainingszeit am Freitagabend macht ein anschließendes Zusammensitzen, auch mit den Jungsenioren, möglich und es bleibt zum Glück das ganz Wochenende, um sich von der Anstrengung zu erholen.
												<br><br>Leider kommt aufgrund zu weniger Mannschaftsmeldungen keine offizielle Spielrunde 2014/15 zustande. Wir werden deshalb versuchen den ein oder anderen Gegner für ein Trainingsspiel oder ein kleines Turnier zu finden. 

												<br><br>Wir freuen uns natürlich über Jede, die Spaß am Handball und der 3. Halbzeit hat und gerne bei uns dabei sein möchte!
													
												';
											}
										echo '</div>
										<p style="margin:20px;">';
											echo $title;
										?>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="swiper-slide">
				<div class="swiper-container scroll-container">
				<!--	<div class="swiper-scrollbar"></div>-->
					<div class="swiper-wrapper">
						<div ><!--class="swiper-slide"-->
							<div class="page-inner" >
																				
								<?php
								if($_REQUEST['site']) { $site = $_REQUEST['site']; }; if($_REQUEST['type']) 
								 { $type = $_REQUEST['type']; }; 

								 
								$dom = new DomDocument();
								if($site != "" && $site != "ad"){
								$dom -> load("http://android.handball-weilheim.de/webhandball/hvwcutoutlastweek.php?site=". $site ."&type=table");
								}
								else{
								//$dom -> load("http://android.handball-weilheim.de/webhandball/hvwcutoutlastweek.php?site=erste&type=table");
								}
									
								$data = $dom->getElementsByTagName('LetzteWoche'); 
								//$data1 = $dom->getElementsByTagName('TabelleUngerade');
								//$data2 = $dom->getElementsByTagName('Verein');


								//echo( '<table class="table table-striped table123" > ');

								//echo '<div class="row" style="background-color:white; margin:auto;"><h3 class="text-center">Spielergebnisse</h3></div>';

								echo '<div class="container" style="background-color:white; margin:auto; width:100%;"><h3 class="text-center">Spielergebnisse ' .$mannschaft.'</h3></div>';
								echo( '<table class="table table-striped table123">');

								echo '<tr class="active" style="font-color:black;">
										<th >Datum</th>		
										<th >Verein Heim</th>
										<th >Verein Gast</th>
										<th class="text-center">Spielstand</th>
										<th >SPO</th>
								</tr>';
								$n = 0;
								foreach($data as $node)
								{ 
									
								if($n %2 == 0) { echo '<tr class="info">'; }
								else { echo '<tr class="active">'; }
								$toreHeim=0;
								$toreGast=0;

								foreach ($node->childNodes as $p){		
										
										if($p->nodeName=="ToreHeim"){
													$toreHeim= $p->nodeValue; 
										}else if($p->nodeName=="ToreGast"){
											$toreGast = $p->nodeValue; 
											echo '<td class="text-center">'. $toreHeim .':'.$toreGast  . '</td>';	   
										}
										else if($p->nodeName=="BerichtUrl"){
											if ($p->nodeValue !="http://spo.handball4all.de/misc/sboPublicReports.php?sGID=0") {
												echo '<td><a href="'.$p->nodeValue.'"  target="_blank"><img src="img/News96.png" width="24" height="24"/></a></td>';	   
											} else {
												echo '<td></td>';
											}
										}
										else if($p->nodeName!="Liga"){
											echo '<td >'. $p->nodeValue . '</td>';	   
										}
										
										
									
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
								//$dom -> load("http://android.handball-weilheim.de/webhandball/hvwcutout.php?site=zweite&type=table");
								if($site != "" && $site != "ad"){
								$dom -> load("http://android.handball-weilheim.de/webhandball/hvwcutout.php?site=". $site ."&type=table");
								}
								else{
								//$dom -> load("http://android.handball-weilheim.de/webhandball/hvwcutout.php?site=erste&type=table");
								}
								$data = $dom->getElementsByTagName('TabelleUngerade'); 
								$dataGerade = $dom->getElementsByTagName('TabelleGerade');
								$resultingData = array();

								foreach($data as $node)
								{ 
									array_push($resultingData, $node);
								}
								$counter = 1;
								foreach($dataGerade as $node1)
								{ 
									array_splice($resultingData, $counter, 0, array($node1));
									$counter = $counter + 2;
								}
								
								//$data2 = $dom->getElementsByTagName('Verein');
								echo '<div class="container" style="background-color:white; margin:auto; width:100%;"><h3 class="text-center">Aktueller Tabellenstand ' .$mannschaft.'</h3></div>';
								echo( '<table class="table table-striped table123">');

								echo '<tr class="active text-center">
										<th class="text-center">Platz</th>		
										<th >Mannschaft</th>
										<th class="text-center" style="padding-left:-53px;">Spiele</th>
										<th class="text-center">S</th>
										<th class="text-center">U</th>
										<th class="text-center" >N</th>
										<th class="text-center">Tore</th>		
										<th class="text-center">Punkte</th>
										
								</tr>';
								$n = 0;
								$toreP=22;
								$toreM=22;
								$punkteP=22;
								$punkteM=22;
								foreach($resultingData as $node)
								{ 
									
								if($n %2 == 0) { echo '<tr class="info " >'; }
								else { echo '<tr class="active">'; }
								foreach ($node->childNodes as $p){		
									if($p->nodeName=="Verein"){
										echo '<td >'. $p->nodeValue . '</td>';	   
									}
									else if($p->nodeName=="ToreGeschossen"){
										$toreP= $p->nodeValue; 
									}
									else if($p->nodeName=="ToreErhalten"){
										$toreM=$p->nodeValue;
										echo '<td class="text-center" >'. $toreP .":". $toreM . '</td>';	   
									}
									else if($p->nodeName=="PunktePlus"){
										$punkteP=$p->nodeValue;
										
									}
									else if($p->nodeName=="PunkteMinus"){
										$punkteM=$p->nodeValue;
										echo '<td class="text-center">'. $punkteP .":". $punkteM . '</td>';	   
									}
									else{
										echo '<td class="text-center">'. $p->nodeValue . '</td>';	 
									}
									
								}
								$n++;
								echo '</tr>';
								}
									
								   // if(++$n % 3 == 0) { echo '</tr>'; }

								echo( "</table>");



								?>

							</div>
						</div>
					</div>
				</div>
			</div>		
			
			
			<div class="swiper-slide">
				<div class="swiper-container scroll-container ">
			<!--		<div class="swiper-scrollbar"></div>-->
					<div class="swiper-wrapper">
						<div >
							<div class="page-inner" >
								<?php 
								if($_REQUEST['site']) { $site = $_REQUEST['site']; }; if($_REQUEST['type']) 
								 { $type = $_REQUEST['type']; }; 



								$dom2 = new DomDocument();
								//$dom2 -> load("http://android.handball-weilheim.de/webhandball/spielplancutout.php?site=erste&type=table");
								if($site != "" & $site != "ad"){
								//echo $site;
								$dom -> load("http://android.handball-weilheim.de/webhandball/spielplancutout.php?site=". $site ."&type=table");
								}
								else{
								//dom -> load("http://android.handball-weilheim.de/webhandball/cutout.php?site=erste&type=table");
								}

								//$dom -> load("http://android.handball-weilheim.de/webhandball/cutout.php?site=erste&type=table");
									
								$data = $dom->getElementsByTagName('SpielplanChild'); 
								//$data1 = $dom->getElementsByTagName('TabelleUngerade');
								//$data2 = $dom->getElementsByTagName('Verein');

								echo '<div class="container" style="background-color:white; margin:auto; width:100%;"><h3 class="text-center">Spielplan ' .$mannschaft.'</h3></div>';
								echo( '<table class="table table-striped table123" >');

								echo '<tr class="active" style="font-color:black;">
										<th >Datum</th>		
										<th >Uhrzeit</th>
										<th >Heim</th>
										<th >Gast</th>	
										<th >SPO</th>
								</tr>';


								$n = 0;
								foreach($data as $node)
								{ 
									
								if($n %2 == 0) { echo '<tr class="info " >'; }
								else { echo '<tr class="active">'; }
								foreach ($node->childNodes as $p){	
									
									if($p->nodeName=="Verein"){
										echo '<td >'. $p->nodeValue . '</td>';	   
									}
									else if($p->nodeName=="BerichtUrl"){
										if ($p->nodeValue != "http://spo.handball4all.de/misc/sboPublicReports.php?sGID=0") {
											echo '<td><a href="'.$p->nodeValue.'"  target="_blank"><img src="img/News96.png" width="24" height="24"/></a></td>';	   
										} else {
											echo '<td></td>';
										}
									}
									else{
										echo '<td>'. $p->nodeValue . '</td>';	 
									}
									
								}
								$n++;
								echo '</tr>';
								}
									
								   // if(++$n % 3 == 0) { echo '</tr>'; }

								echo( "</table>");

								if($spielplanTeam != NULL){
									$calendarUri = "http://android.handball-weilheim.de/webhandball/calendar.php?site=" . $spielplanTeam;
								}

								echo "<a href=\"$calendarUri\" style=\"width: 100%;text-decoration:none;\"><div style=\"height:48px;background:#333333\"><p class=\"text-center\" style=\"padding-top:16px; font-size:16px; color:#FFFFFF;\">Spielplan herunterladen</p></div></a>";
								?>
							</div>
						</div>
					</div>
				</div>
			</div>	
			
			<div class="swiper-slide">
				<div class="swiper-container scroll-container">
				<!--	<div class="swiper-scrollbar"></div>-->
					<div class="swiper-wrapper">
						<div >
							<div class="page-inner" style="padding-bottom:100px;">
								<div >
									<?php

									if($_REQUEST['site']) { $site = $_REQUEST['site']; }; if($_REQUEST['type']) 
									 { $type = $_REQUEST['type']; }; 

									 
									if($site != "" && $site != "ad"){
									 $url = 'http://android.handball-weilheim.de/webhandball/berichte.php?site='. $site .'&type=table';

									}
									else{
									 //$url = 'http://android.handball-weilheim.de/webhandball/berichte.php?site=erste&type=table';
										$url="";
									}
												// $jsonData = json_decode(file_get_contents("http://android.handball-weilheim.de/webhandball/cutout.php?site=zweite&type=table"));
													
												if($url != ""){
												$content = file_get_contents($url);
												//	echo $content;
												$json = json_decode($content, true);
												
												echo '<table class="table table-hover">';
												 
											//	 foreach($json as $i){
											//	 echo "loos:";
													
											//		echo $i;
											//	}
											$results = array();
											$x=0;
											if(count($json['posts']) > 0){
												
											foreach($json['posts'] as $chunk) {
												$id = $chunk['id'];
												$header = $chunk['title'];
												$introtext = $chunk['introtext'];
												$fulltext = $chunk['fulltext'];
												
												
												if($x%2==0){
												echo '<tr  class="active" onclick="goDoSomething(this)" data-id="'.$id .'" data-toggle="modal" data-target="#myModal">';
												echo '<td  name="id" data-id="' .$id .'"><ul class="list-unstyled">';
												echo '<li id="header'.$id .'"><h2>' .$header  . '</h2></li>';
												echo '<li id="intro'.$id .'">' . $introtext . '</p></li>';
												echo '<li id="full'.$id .'" style="display: none;">' . $fulltext . '</p></li>';
												echo '</ul></td>';
												echo "</tr>";
												}
												
												else{
												echo '<tr style="background-color:white" onclick="goDoSomething(this)" data-id="'.$id .'" data-toggle="modal" data-target="#myModal">';
												echo '<td  name="id" data-id="' .$id .'"><ul class="list-unstyled">';
												echo '<li id="header'.$id .'"><h2>' .$header  . '</h2></li>';
												echo '<li id="intro'.$id .'">' . $introtext . '</p></li>';
												echo '<li id="full'.$id .'" style="display: none;">' . $fulltext . '</p></li>';
												echo '</ul></td>';
												echo "</tr>";
												
												}
												$x++;
											}
											
												
											}
												echo "</table>";
									}else{
										echo '<div class="container" style="background-color:white; margin:auto; width:100%;"><h3 class="text-center">Keine Berichte vorhanden!</h3></div>';



									}
											
									?>
								</div>
								
								<!-- 	<a href="#openModal">Open Modal</a>

								Modal 
							
								
								<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
								  Launch demo modal
								</button>-->
								 
								<!--Ende Dialog-->
							</div>
						</div>
					</div>
				</div>
			</div>	
			
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
	
	
	<!--

	<div class="modal fade bs-example-modal-lg "  tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" >
    <div class="modal-content"  >
      <div class="modal-header" style="background-color:#fff">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel" >Bericht Herren I gegen AWDJAWIODJ hat gewonnen</h4>
      </div>
      <div class="modal-body" style="background-color:#fff">
      <p> Duis porta mattis leo, nec sodales mauris eleifend quis. Praesent ultrices vel mauris vitae ultricies. Donec mattis turpis non velit tincidunt laoreet. Nunc quis pharetra est, ac luctus leo. Phasellus mauris risus, ullamcorper sed gravida nec, blandit id risus. Suspendisse dapibus mi nisl, in tristique mi blandit posuere. Nullam condimentum felis ultricies tristique imperdiet. Sed et lacus ultricies, tempor sem nec, pulvinar lorem. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam fermentum luctus ornare.

      </div>
      <div class="modal-footer" style="background-color:#fff ;position:absolute; bottom:0; width:100%;">
        <button type="button" style="width:100%" class="btn btn-default" data-dismiss="modal">Schliessen</button>
        
      </div>
    </div>
  </div>
</div>
		-->
		<!--
	<div id="openModal" class="modalDialog">
								<div>
									<a href="#close" title="Schließen" class="close">X</a>
									<h2>Box</h2>
									</div>
									</div>
								
									-->
				
<script src="js/list.js"></script>				
	<script src="js/jquery.min.js"></script>
	<!-- Don't forget to get the latest Swiper and scrollbar version here-->
	<script src="js/idangerous.swiper-2.0.min.js"></script>
	<script src="js/idangerous.swiper.scrollbar-2.0.js"></script>
	<script src="js/simple-app.js"></script>
	 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/bootstrap.min.js"></script>
	<script>
		$(".swiper-slide").click(function(){
			// $(this).siblings().removeClass('swiper-slide-visible');
			// $(this).addClass('swiper-slide-visible')
		});
	</script>
	
</body>
</html>


