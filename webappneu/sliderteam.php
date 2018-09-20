
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
												<b>Hintere Reihe:</b> Alexander Späth, Patrick Auweter, Timmy Hiller, Patrick Seyferle, German Höferer, Josef Roth, Jan Stark, Karl-Friedrich Schumacher.
												<br/><b>Vordere Reihe:</b> Trainer Martin Weiss, Luca Pfeffer, Florian Klett, Dominik Klett, Bernhard Illi, Moritz Latzel, Benedikt Schmid, Benjamin Banzhaf, Christopher Allgaier, Andreas Klöhn, Co-Trainer Bernd Bierbaum.
												<br/><b>Es fehlen:</b> Timo Höfert
												
												<br/><br/>Hinter dem TSV Weilheim liegt eine durchwachsene Saison. Die Mannschaft startete mit zwei Siegen gut in die Runde, zeigte danach aber starke Leistungsschwankungen, welche ein besseres Abschneiden verhinderten. Der TSV Weilheim schloss die Spielzeit 2016/2017 auf dem insgesamt enttäuschenden siebten Tabellenplatz ab. Hauptgründe für das unbefriedigende Abschneiden waren viele verletzungsbedingte Ausfälle. Gleich zu Saisonbeginn verletzten sich Marcel Steinke und Manuel Bauer schwer und fielen für die restliche Saison aus. Mittlerweile sind die Spieler wiedergenesen. Ein Comeback ist allerdings nicht möglich, so dass beide Spieler leider ihre Karrieren beenden mussten. Als weiteren Grund nennt Weiss, dass berufsbedingt selten der gesamte Kader im Training anwesend sein konnte: „Wir waren dadurch nicht so eingespielt wie andere Mannschaften“. 
												<br/><br/>In der Vorbereitung vergrößerte Weiss den bestehenden Kader mit Spielern aus der zweiten Mannschaft. So trainieren Moritz Latzel, Andreas Klöhn, German Höferer und Karl-Friedrich Schumacher nun mit der ersten Mannschaft. Neu im Weilheimer Dress ist mit Timmy Hiller zudem ein alter Bekannter. Hiller spielte von 2011 bis 2014 drei Spielzeiten für den TSV Weilheim, wechselte dann in die Landesliga zu seinem Heimatverein HC Wernau, von dem er nun zurück nach Weilheim kehrte. Ebenfalls vom HC Wernau kam Linksaußen Luca Pfeffer und aus der eigenen A-Jugend rückte Timo Höfert auf. Dadurch stehen Weiss nun in jedem Training immer mindestens 14 Spieler zur Verfügung, berufsbedingte Trainingsausfälle können so kompensiert werden. Zudem belebte der größere Kader den Konkurrenzkampf. Mit Florian Braun verlässt allerdings ein Leistungsträger den TSV Weilheim. Braun wechselt zu Landesligist TSV Grabenstetten. Zudem beendete Fabian Zettl aufgrund immer wieder auftretender Schulterprobleme seine Handballkarriere. Im Tor beendete Markus Maier seine aktive Laufbahn. Insgesamt ist es ein deutlicher Aderlass, den der TSV Weilheim kompensieren muss. 
												<br/><br/>Ziel für die neue Saison ist es, zunächst Distanz zu den Abstiegsrängen aufzubauen. Anschließend wird man sehen müssen, welche Platzierung in der starken Bezirksligastaffel möglich sein wird. Favoriten auf den Aufstieg sind der VfL Kirchheim, der sich gut verstärken konnte und Landesligaabsteiger SV Vaihingen. Neu in der Liga ist EK Bernhausen, die Filderstädter spielten bisher in der Eichenkreuzliga des evangelischen Jugendwerks in Württemberg. Im Bezirkspokal kam die Mannschaft bis in das „Final Four“, daher zählen auch die Bernhäuser zu den Aufstiegsfavoriten. Interessant werden außerdem auch wieder die Derbys gegen den TSV Owen und die SG Lenningen.
												
												';
											}else if($site=="zweite"){
												echo '<img src="img/teams/h2.jpg" class="img-responsive" id="MannschBild" />';			
												$title='
												<b>Hintere Reihe:</b> Dan Stelzer, Marco Fiedler, Dominic Zettl, Timo Sigel, Christos Kiriakidis, Andreas Klein, Trainer Marco Schill
												<br/><b>Vordere Reihe:</b> Michael Bender, Felix Kupferschmid, Benjamin Hayler, Mark Sigel, Marco Zaiser, Samuel Braun, Timo Klein
												<br/><br/>Kreisliga ist...
												<!--
												 ____      ____      ____________
												|    |    |    |    |            |
												|    |    |    |    |_______     |
												|    |    |    |            |    |
												|    |____|    |     _______|    |
												|              |    |            |
												|     ____     |    |     _______|
												|    |    |    |    |    |
												|    |    |    |    |    |_______
												|    |    |    |    |            |
												|____|    |____|    |____________|
												-->
												';	
											}else if($site=="damen"){
												echo '<img src="img/teams/d1.jpg" class="img-responsive" id="MannschBild"  />';										
												$title='
												<b>Hintere Reihe:</b> Trainerin Martina Böhm, Monja Reichle, Eva Pflüger, Stephanie Leins, Viktoria Slavulj, Tanja Bachofer, Franziska Schmid, Nicole Sigel, Trainer Andreas Klöhn
												<br/><b>Vordere Reihe:</b> Hanna Schumacher, Carla Fischer, Lisa Attinger, Anne Heid, Stefanie Stark, Lisa-Marie Attinger, Emma Schober, Xenia Veith, Katharina Kehrer 
												<br/><b>Es fehlen:</b> Kathrin Ulmer, Anke Moll, Julia Gutbrod, Britta Braun

												<br/><br/>Die vergangene Saison beendete die 1. Damenmannschaft des TSV Weilheim auf dem 9. Tabellenplatz. Das Saisonziel, die Klasse zu halten, wurde somit erreicht. Dennoch ist dieses Ergebnis nicht zufriedenstellend, da durch die fehlende Konstanz von guten Leistungen bis zum Schluss um den Klassenerhalt gekämpft werden musste. Nach einem Jahr als Trainer der ersten Damenmannschaft wechselte Trainer Dimitrios Pasalis in den Jugendbereich zurück, um dort wieder den Handballnachwuchs zu fördern. Zudem haben mit Nicole Schmid, Heike Schrägle und Stephanie Schwarz drei wichtige Spielerinnen ihre aktive Zeit in der 1. Damenmannschaft beendet.  An dieser Stelle danken wir allen vier für ihr Engagement, das sie immer für die Mannschaft aufgebracht haben. 

												<br/><br/>Zur neuen Saison haben Martina Böhm und Andreas Klöhn die Mannschaft übernommen und bilden in der kommenden Saison das Trainerteam an der Seitenlinie. Auch der Kader unserer ersten Damenmannschaft hat sich verändert, so dürfen wir mit Monja Reichle einen ersten Neuzugang begrüßen. Monja wechselte vom Lokalrivalen SG Lenningen nach Weilheim.  Aus der zweiten Damenmannschaft rückten Nicole Sigel und Anne Heid auf und mit Xenia Veith, Carla Fischer und Eva Pflüger kann die Mannschaft zudem auf talentierte A-Jugendspielerinnen bauen. Zudem hat die Mannschaft die volle Unterstützung aus der zweiten Damenmannschaft, deren Spielerinnen in personellen Engpässen aushelfen werden. Das Trainerduo Böhm/ Klöhn hat es sich zur Aufgabe gemacht aus der neu formierten Mannschaft ein einheitliches Team zu formen und fokussieren gemeinsam mit ihren Mädels einen Platz in der oberen Tabellenhälfte. Dank dem gut aufgestellten Kader eine durchaus machbare Aufgabe.  Wir bedanken uns für die zahlreiche Unterstützung in der vergangenen Saison und freuen uns auf eine erfolgreiche und verletzungsfreie Saison 2017/18.

												
												';
											}else if($site=="damen2"){
												echo '<img src="img/teams/d2.jpeg" class="img-responsive" id="MannschBild"  />';										
												$title='
												
												<b>Hintere Reihe:</b> Isabel Hieber, Katharina Karban, Victoria Slavul, Hanna Schumacher, Laura Tremmel, Nicole Sigel
												<br/><b>Vordere Reihe:</b> Eva Pflüger, Carla Fischer, Lena Sigel, Ulla Diez, Xenia Veith
												<br/><b>Es fehlen:</b> Katja Hannig, Julia Koser, Rebecca Glaab, Anne Heid, Sabrina Fischer
												
												<br/><br/>Nach einer gut gelaufenen Saison 2016/2017 belegte die zweite Damenmannschaft des TSV Weilheim den 2. Tabellenplatz und sicherte sich somit noch den direkten Aufstieg in die Bezirksklasse. Das angestrebte Saisonziel, Tabellenplatz 3, wurde damit sogar übertroffen.
												<br/><br/>Nach dem letzten Heimspieltag wurde Trainer Andreas Klöhn in die 1. Damenmannschaft verabschiedet. Ebenfalls verabschieden musste man sich von Co-Trainerin Nicole Reehten.  
												<br/><br/>Schon in den letzten Runden hat sich die Integration der A-Jugendlichen in die Mannschaft ausgezahlt. Neben Hanna Schumacher und Viktoria Slavulj, die mittlerweile fester Bestandteil der Damen 2 sind und ihre Jugendspielzeit nun beenden, sind im Laufe der letzten Saison auch Carla Fischer und Xenia Veith zu tragenden Persönlichkeiten der Mannschaft geworden. Verstärkt werden die Damen 2 nun zusätzlich durch Eva Pflüger (A-Jugend), sowie Katja Hannig (zurück aus der Babypause).
												 
												<br/><br/>Leider startete die 2. nun trainerlos in die Vorbereitung zur Saison 2017/2018. Trotzdem wurde die Vorbereitungsphase intensiv genutzt. Mit dem neuen Saisonziel -Klassenerhalt- hat sich die 2. Weilheimer Damenmannschaft ein durchaus erreichbares Ziel gesetzt.

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
											else if($site=="vs"){
												echo '<img src="img/teams/vs.jpg" class="img-responsive" id="MannschBild"  />';										
												$title='
												
												<b>Sportliche Leitung</b></b>
												<br/><b>Roland Bendl (links)</b>
												<br/><br/><b>Wirtschaftsvorstand</b></b>
												<br/><b>Florian Mauch (mitte)</b>
												<br/><br/><b>Öffentlichkeitsarbeit und Marketing</b></b>
												<br/><b>Gunter Zettl (rechts)<span style="color: #333333; font-family: Tahoma, Helvetica, Arial, sans-serif; font-size: 12px; line-height: 1.3em;"> </span></b>
												
												<br/><br/><b><span style="line-height: 1.3em;">Saison 2014/15</span></b>
												<br/><br/>Wie in den Jahren zuvor beginnt für die Weilheimer Handballer Mitte September der Spielbetrieb für die Saison 2014/15. Nach intensiver Saisonvorbereitung der einzelnen Teams, heißt es nun die vorgenommenen Ziele in die Tat umzusetzen.
												<br/><br/>Wie im Vorjahr wird die zweite Damenmannschaft vom Trainerteam Kaufmann/Kiriakidis betreut. Hatte die Mannschaft sich im letzten Jahr einen Platz im Mittelfeld vorgenommen, so möchte man in dieser Saison einen weiteren Schritt nach vorne machen und sich in der oberen Tabellenhälfte der Kreisliga A etablieren.
												<br/><br/>Das Bezirksligateam der ersten Damenmannschaft wird weiterhin von Martin Weiss trainiert. Der Mannschaft gelang es im letzten Jahr den Weggang von Topspielerin Kim Prengel durch größere mannschaftliche Geschlossenheit zu kompensieren. Leider war das Team aber in seinen Leistungen noch zu schwankend. Wenn es der Truppe gelingt mehr Stabilität zu zeigen, ist ein Platz im oberen Drittel der Tabelle auf jeden Fall realistisch.
												<br/><br/>Erstmalig wird in diesem Jahr vom Bezirk eine AD/AH Runde für die Damen ausgetragen. Die infrage kommenden Weilheimer Spielerinnen waren sogleich dafür zu haben. Es wurde daraufhin eine Mannschaft gemeldet. Wir wünschen Ihnen in der ersten Saison viel Erfolg.
												<br/><br/>Die zweite Herrenmannschaft verpasste im letzten Jahr leider den Saisonziel Klassenerhalt. Nach einem teilweise recht unglücklichen Saisonverlauf mit einigen knappen Niederlagen, findet man sich in dieser Saison in der Kreisliga B wieder. Hier sollte aber für die Mannschaft von Trainer Florian Mauch ein guter Tabellenplatz kein Problem sein.
												<br/><br/>Die erste Herrenmannschaft startet mit einem neuen Trainer in die Saison. Mit Alen Dimitrijevic tritt kein Unbekannter dieses Amt an, war er doch vor Jahren schon einmal Trainer unter der Limburg. Personell gab es keine großen Veränderungen. Den Abgang von Timmy Hiller und Alexander Müske konnte man mit dem Heimkehrer Patrick Auweter und Markus Mayer ausgleichen. Vom Leistungsvermögen der Mannschaft sollte die Vorjahresplatzierung jedenfalls erreichbar sein.
												<br/><br/>Wie die „Erste“, so haben auch unsere Jungsenioren einen neuen Coach. Mit Hansi Pietsch ist es jedoch eine bekannte Weilheimer Handballgröße. Mit neuen Trainingsinhalten wird er versuchen das Team zu möglichst vielen Erfolgserlebnissen zu führen.
												<br/><br/>Schon vor dem ersten Anpfiff möchte sich die Handballabteilung jedoch bei ihren Gönnern, Sponsoren und unermüdlichen Helfern für die Unterstützung bedanken. Ohne diese Hilfe wäre ein Spielbetrieb nicht aufrecht zu erhalten. „Last but not least“ schon jetzt ein großes Dankeschön an unser tolles Publikum für vergangene und zukünftige Unterstützung.
												<br/><br/><strong><span style="line-height: 1.3em;">Vorstandschaft</span></strong><br /><strong>TSV Weilheim</strong><br /><strong>Abteilung Handball</strong>

												
												
											';
											}
											else if($site=="jl"){
												echo '<img src="img/teams/jl.jpg" class="img-responsive" id="MannschBild"  />';										
												$title='
												<div class="text-center" style="background-color:white;"><b>Jugendleiter/in</b></b><br>
													Annette Breuninger (rechts)<br><br>
													Friedrich Schumacher<br><br>
													<b>stellv. Jugendleiterin</b></b><br>
													Maike Sigel</div>
												
												
												';
											}
											else if($site=="wa"){
												echo '<img src="img/teams/wa.jpg" class="img-responsive" id="MannschBild"  />';										
												$title='
												
													All diese auf dem Bild zu sehenden Gesichter sind die Gesichter des Wirtschaftsausschusses der Handballabteilung des TSV Weilheim. Im Wirtschaftsausschuss befindet sich unter anderen auch jeweils ein Mannschaftsvertreter, um eventuelle Probleme oder Verbesserungsvorschläge einzubringen. 
													<br><br>Diese Gesichter kümmern sich um alles Organisatorische rund um den Sport, sei es die Einteilung der Hallendienste, das Planen verschiedener Feste, wie beispielsweise den Vatertagshock, das Hobbyturnier, Bezirksspielfest und viele mehr. Hierzu gehört vor allem das Einteilen der Helfer, das Festlegen der Preise, das Bestellen und Abholen wichtiger Dinge und natürlich das Helfen vor Ort. Diese Gesichter sind die ersten, die am Fest oder Heimspieltag anwesend sind und beim Aufbau helfen und auch die letzten, die gehen, wenn der Abbau sauber über die Bühne gebracht wurde. Auch über die Veranstaltung hinweg ist immer jemand da, der hilft, koordiniert, oder bei Bedarf auch einspringt. 
													<br><br>Und diese Gesichter haben auch einen Namen:  Florian Mauch, Mark Sigel, Jochen Fenske, Benjamin Banzhaf, Beate Pesl, Conny Fischer, Anja Hennig, Lena Sigel, Alisa Schaal, Annette Breuninger, Ulla Diez, Maike Sigel und Markus Mayer
													<br><br>All diese Namen bilden zusammen den Wirtschaftsausschuss – ein gutes Team, hilfsbereit, jederzeit ansprechbar und offen für neue Vorschläge. 

												';
											}
											else if($site=="fv"){
												echo '<img src="img/teams/fv.jpg" class="img-responsive" id="MannschBild"  />';										
												$title='
												
												Mit dem Ziel der ideellen und finanziellen Förderung der Handballabteilung des TSV Weilheim e.V. übernahm der gemeinnützige Förderverein des Handballsports im Jahr 2001 eine nicht ganz einfache Aufgabe.
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
												
												Als Hauptaufgabe in den kommenden Jahren sehen wir weiterhin unser Engagement in einer verbesserten Jugendarbeit sowie in der Koordination des „Sponsorings“.
												<br<br>Mit unserem Verein möchten wir Sie als Eltern, Ehemalige, Aktive, Freunde, Handel und Gewerbe ansprechen.
												<br><br>Werden auch Sie Mitglied im Förderverein des Handballsports des TSV Weilheim, Abt. Handball e.V. und helfen Sie mit, unsere Jugend in eine noch angenehmere Vereinsatmosphäre zu integrieren und die Handballfamilie in Weilheim zu erhalten. Der Mitgliedsbeitrag beträgt derzeit mindests 5,00 Euro pro Jahr und Person.
												<br><br><a href="http://handball-weilheim.de/images/downloads/Mitglieds_Beitrittserkl_2012.pdf" target="_blank">Download der Beitrittserklärung</a>
												<br><br>Auch über eine Spende auf das Konto des Fördervereins Konto Nr. 866 2220, BLZ 611 500 20 bei der KSK Esslingen freut sich der Förderverein und die Handballgemeinschaft des TSV Weilheim! 
												<br><br>Wir hoffen aus Sie sind von unserer Sache überzeugt, und geben uns die Chance mit Ihrer Mitgliedschaft unsere Handballabteilung zu unterstützen. Sollten noch Fragen offen sein, stehen Ihnen die Vorstandsmitglieder des Fördervereins gerne zur Verfügung!
												
												
												
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
								//$data1 = $dom->getElementsByTagName('TabelleUngerade');
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
								foreach($data as $node)
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


