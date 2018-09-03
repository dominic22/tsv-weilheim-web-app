
<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN"
"http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>TSV Weilheim - Handball</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link href="css/bootstrap.min.css" rel="stylesheet">
	 
		<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	</head>

	<body style="background-color: red;">
	<!---start-wrap---->



		<div class="container" >
							<?php
							
							if($_REQUEST['site']) { $site = $_REQUEST['site']; }; 
							if($site=="erste"){
								echo '<img src="img/teams/h1.jpg" class="img-responsive" id="MannschBild" />';	
								$title='
								<b>Saisonausblick 2018/19</b>
								<br>
								Hinter der ersten Herrenmannschaft des TSV Weilheim liegt eine enttäuschende Saison 2017/18. Am Ende bedeutet der 12. und somit vorletzte Platz den schweren Gang von der Bezirksliga in die Bezirksklasse. Für eine Bezirksligastaffel, in der sich die meisten Mannschaften personell verstärkt und konstant weiterentwickelt haben, war der Kader dieses Jahr zu schwach. Der Abstieg ist für einige die logische Folge eines Negativtrends, der sich bereits in der Spielzeit 2016/17 abzeichnete.
								<br><br>
								Während die Abwehrleistung in den meisten Spielen abgerufen werden konnte und man sich mit 663 Gegentoren in 24 Spielen (Ø 27 Gegentore/Spiel) durchaus mit den Teams in der oberen Tabellenhälfte messen konnte, fehlte es im Angriff deutlich an Effizienz (Ø 25 erzielte Tore/Spiel). Zu wenig einfache Tore aus dem Tempogegenstoß und fehlende Durchschlagskraft im positionsbezogenen Angriffsspiel waren die wohl bedeutendsten Faktoren, die dafür sorgten, dass man auch in knappen Spielen nicht als Sieger vom Platz gehen konnte und am Ende berechtigt abgestiegen ist.
								<br><br>
								Nachdem man sich in der Winterpause der abgelaufenen Saison von Trainer Martin Weiss trennte und mit Timo Klein und Sebastian Sigel die Runde beendete, wird für die kommende Spielzeit ein neuer Mann die Leitung übernehmen. Der neue Mann ist allerdings ein Altbekannter: Michael Rehkugler, zu seinen aktiven Zeiten Torwart der Roten, trainierte vergangene Saison den TSV Grabenstetten und will die Weilheimer nun schnellstmöglich zurück in die Bezirksliga führen. Schnelles und strukturiertes Umschaltspiel in der ersten und zweiten Welle und \„jeder muss wissen was er zu tun hat\“ lauten die ersten Vorgaben für dieses Vorhaben.
								<br><br>
								Das Grundgerüst des Kaders bleibt größtenteils auch für die kommende Saison in der Bezirksklasse bestehen. Mit Patrick Auweter und Sebastian Sigel ziehen sich allerdings zwei routinierte Stützen aus dem aktiven Handball zurück. Auch Timmy Hiller, der ein zweites Mal für eine letzte Saison vom HC Wernau zu den Weilheimern gewechselt war und die Mannschaft als sicherer Siebenmeterschütze oftmals im Spiel hielt, beendet seine Karriere. Komplettiert werden die Abgänge durch Christopher Allgaier, der aus beruflichen Gründen die Zeit für das Handballspielen nicht mehr aufbringen kann.
								<br><br>
								Neu im Kader hingegen sind Maximilian Müller und das Weilheimer Eigengewächs Florian Braun. Letzterer wechselt nach einem Jahr beim TSV Grabenstetten in der Landesliga wieder zurück in die Heimat und soll im linken Rückraum, sowie im Innenblock für Stabilität sorgen. Müller kommt vom TSV Owen II und bringt mit seiner Schnelligkeit und Dynamik frischen Wind ins stockende Angriffsspiel der Roten.
								Das gesamte Team freut sich trotz des Abstiegs auf einen Neustart in einer Liga mit Spielen gegen mehrere weitestgehend unbekannte Mannschaften und hofft auf eine erfolgreiche Saison mit der gewohnt zahlreichen Unterstützung der Weilheimer Anhänger.
								<br><br>
								<b>Kader:</b>
								<br>
								Bernhard Illi, Moritz Latzel, Benedikt Schmid, Dominik Klett, Patrick Seyferle, Benjamin Banzhaf, Alexander Späth, Josef Roth, Jan Stark, Timo Sigel, Luca Pfeffer, Timo Höfert, Maximilian Müller, Jakob Klein, Florian Braun.
								<br><br>
								<b>Trainer:</b>
								<br>
								Michael Rehkugler, Bernd Bierbaum (Co-Trainer)
								';
							}else if($site=="zweite"){
								echo '<img src="img/teams/h2.jpg" class="img-responsive" id="MannschBild" />';			
								$title='
								<b>Unter dem Motto:</b>
								<br>Wer B sagt muss auch A sagen, geht es diese Saison für Weilheims zweite Herrenmannschaft in der Kreisliga A zur Sache.
								<br><br>Nach der erfolgreichen Aufstiegsrelegation hat sich Trainer Marco Schill fest das Ziel gesetzt den Klassenerhalt in der Kreisliga A zu schaffen. Aus diesem Grund wurde die Vorbereitung kurzerhand 2 Wochen vor den anderen Weilheimer Teams gestartet. Der Kader wird sich folgendermaßen ändern: Andreas Klein beendet leider nach Längjähriger Zugehörigkeit seine Karriere. Aus der A-Jugend rücken Dan Stelzer und Marco Zaiser nach. Felix Kupferschmid wird nach seiner langen Verletzungspause auch wieder für Weilheims Zweite an den Start gehen. Als Neuzugang ist noch Kai Huber zu verbuchen, der vom TSV Owen den Weg unter die Limburg gefunden hat.
								<br><br>Somit gut aufgestellt und voller Willen das Ziel des Trainers umzusetzen wird die neue Saison gestartet. Auf zahlreiche Unterstützung der Weilheimer Fans wird natürlich auch stark gesetzt.
									';	
							}else if($site=="damen"){
								echo '<img src="img/teams/d1.jpg" class="img-responsive" id="MannschBild"  />';										
								$title='
								<br>Eine Saison mit Höhen und Tiefen beendete die 1. Damenmannschaft auf dem 8. Platz im sicheren Tabellenmittelfeld. Auch die 2. Damenmannschaft konnte ihr Saisonziel erreichen und hat sich den Klassenerhalt in der Bezirksklasse gesichert. Nach einem Jahr hat Martina Böhm ihr Traineramt bei der 1. Mannschaft niedergelegt. An dieser Stelle wollen wir ihr für ihr großes Engagement für die Mannschaft danken. Zudem mussten wir sowohl in der ersten als auch in der zweiten Damenmannschaft einige Abgänge hinnehmen, die menschlich und auch spielerisch Lücken hinterlassen werden.

								<br><br>Deshalb starten die beiden Mannschaften in die Vorbereitung der kommenden Saison gemeinsam unter ihrem neuen Trainerduo Andreas Klöhn und Christo Kiriakidis. Beide haben bereits in der letzten Saison jeweils eine Damenmannschaft trainiert und schließen sich nun für die kommende Spielzeit zusammen. Das neue Trainergespann setzt auch in der neuen Saison weiterhin auf den bewährten Tempohandball, wobei es gilt die Abgänge zu kompensieren. Das soll vor allem durch eine geschlossene Mannschaftsleistung der bestehenden Kräfte gelingen. Trainer und Spielerinnen fokussieren hierbei gemeinsam einen Platz im oberen Tabellendrittel in der Bezirksliga und den erneuten Klassenerhalt in der Bezirksklasse an.

								<br><br>Wir bedanken uns für die zahlreiche Unterstützung in der vergangenen Saison und freuen uns auf eine noch erfolgreichere und verletzungsfreie Saison 2018/2019. Natürlich zählen wir auch in diesem Jahr wieder auf die lautstarke Unterstützung der Weilheimer Fans!
								
								';
							}else if($site=="damen2"){
								echo '<img src="img/teams/d2.jpg" class="img-responsive" id="MannschBild"  />';										
								$title='
								<br>Eine Saison mit Höhen und Tiefen beendete die 1. Damenmannschaft auf dem 8. Platz im sicheren Tabellenmittelfeld. Auch die 2. Damenmannschaft konnte ihr Saisonziel erreichen und hat sich den Klassenerhalt in der Bezirksklasse gesichert. Nach einem Jahr hat Martina Böhm ihr Traineramt bei der 1. Mannschaft niedergelegt. An dieser Stelle wollen wir ihr für ihr großes Engagement für die Mannschaft danken. Zudem mussten wir sowohl in der ersten als auch in der zweiten Damenmannschaft einige Abgänge hinnehmen, die menschlich und auch spielerisch Lücken hinterlassen werden.

								<br><br>Deshalb starten die beiden Mannschaften in die Vorbereitung der kommenden Saison gemeinsam unter ihrem neuen Trainerduo Andreas Klöhn und Christo Kiriakidis. Beide haben bereits in der letzten Saison jeweils eine Damenmannschaft trainiert und schließen sich nun für die kommende Spielzeit zusammen. Das neue Trainergespann setzt auch in der neuen Saison weiterhin auf den bewährten Tempohandball, wobei es gilt die Abgänge zu kompensieren. Das soll vor allem durch eine geschlossene Mannschaftsleistung der bestehenden Kräfte gelingen. Trainer und Spielerinnen fokussieren hierbei gemeinsam einen Platz im oberen Tabellendrittel in der Bezirksliga und den erneuten Klassenerhalt in der Bezirksklasse an.

								<br><br>Wir bedanken uns für die zahlreiche Unterstützung in der vergangenen Saison und freuen uns auf eine noch erfolgreichere und verletzungsfreie Saison 2018/2019. Natürlich zählen wir auch in diesem Jahr wieder auf die lautstarke Unterstützung der Weilheimer Fans!
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
								
								Liebe Freunde des Handballsports,
								Sehr geehrte Sponsoren,
								Hallo Handballabteilung und Vereinsmitglieder,
								
								<br><br>wie in den Jahren zuvor heißt es auch in diesem Jahr für die Weilheimer Handballer Mitte September „Los geht’s!“. Der Spielbetrieb für die Saison 2018/19 steht vor der Tür. 
								
								<br><br>Die Saisonvorbereitungen der einzelnen Teams sind fast abgeschlossen, die Spielpläne stehen. Nun heißt es die gesteckten Ziele in die Tat umzusetzen. Der neue Vorstand wünscht allzeit – Gut SPIEL!
								
								<br><br>Der neue Vorstand das sind Gunter Zettl, Markus Meyer und Swen Dulkies.
								Gunter und Swen kümmern sich um die verwaltungstechnischen Dinge und Finanzen. Markus Hauptaugenmerk liegt im Bereich Spieltechnik (Mannschaften, Trainer etc.).  
								<br>Als am 16. März dieses Jahres die Abteilung zur Jahreshauptversammlung zusammenkam schien alles organisiert und geregelt. Aber von jetzt auf gleich stand Gunter Zettl alleine im Ring – die Abteilung ohne handlungsfähigen Vorstand. Nach einigen Unterbrechungen und intensiven Gesprächen fanden sich Markus Meyer und Swen Dulkies bereit, zusammen mit Gunter Zettl die anstehenden Aufgaben für ein Jahr anzugehen. Swen Dulkies war in der Abteilung nur eher den Würdenträgern ein Begriff, da er seit ca. 14 Jahren für die Handballabteilung nur als Schiedsrichter im Bezirk und auf HVW Ebene im Einsatz ist. 
								<br>Der Vorstand sowie alle Ressortleiter und der Förderverein haben bisher diverse Sitzungen und Telefongespräche geführt, um alles für die neue Saison vorzubereiten. Es wird mit Freude und Respekt gearbeitet.
								<br>Es sind trotzdem alle Abteilungsmitglieder und auch die, die welche werden möchten, aber außer denen, die sowieso schon jedes Wochenende in der Halle verbringen, eingeladen sich an der Vereinsarbeit zu beteiligen.
								
								<br><br>Spieltechnik:
								
								<br><br><b>Jugend: „ Back to the roots“</b>
								<br>Durch die Aufkündigung der SG Teck durch den TSV Owen in der vergangenen Saison musste sich die Jugendabteilung komplett neu gestalten. 
								An dieser Stelle gilt unser besonderer Dank der Jugendleitung sowie der Projektgruppe und deren mitwirkenden Eltern, die mit großem Engagement und Zeitaufwand, in hervorragender Art und Weise die Neustrukturierung realisiert haben.  
								
								<br><br><b>Herren I:</b>
								<br>Nach Licht und Schatten in der letzten Saison die wie bekannt, mit dem Abstieg in die Bezirksklasse endete, will die Mannschaft zusammen mit dem neuen Trainer Michael Rehkugler den direkten Wiederaufstieg schaffen. Allen Beteiligten ist jedoch bewusst, dass dies kein Selbstläufer wird. 
								
								<br><br><b>Damen I:</b>
								<br>Nach einer recht erfolgreichen Saison 2017/2018 startet das Team um das Trainergespanns Klöhn/ Kiriakidis voll motiviert in die neue Saison. Es sind zwar personelle Abgänge zu verzeichnen, aber dies sollte durch die Neuzugänge und die Geschlossenheit der Mannschaft zu kompensieren sein.  
								
								<br><br><b>Herren II:</b>
								<br>Die Mannschaft um das Trainer Duo Schill/Klein hat es geschafft, durch ihren starken Willen und Teamgeist die Saison mit dem Aufstieg in die Kreisliga A abzuschließen. An dieser Stelle nochmals herzlichen Glückwunsch! 
								
								<br><br><b>Damen II:</b>
								<br>Die Mannschafft, die sich vor Jahren selbst gefunden hat, ist aus der Abteilung nicht mehr wegzudenken. Das Team, das ebenfalls vom Duo  Klöhn/ Kiriakidis trainiert wird,  dürfte auch in dieser Saison immer für eine Überraschung gut sein.
								
								<br><br>Wir, die Vorstandschaft wünschen allen Mannschaften eine verletzungsfreie und erfolgreiche Saison 2018/2019.
								
								<br><br>Schon vor dem ersten Anpfiff möchte sich die Handballabteilung jedoch bei ihren Gönnern, Sponsoren und unermüdlichen Helfern für die Unterstützung bedanken. Ohne diese Hilfe wäre ein Spielbetrieb nicht aufrecht zu erhalten. „Last but not least“ schon jetzt ein großes Dankeschön an unser tolles Publikum für vergangene und zukünftige Unterstützung.
								
								<br><br>Es sei an dieser Stelle dringend darauf hingewiesen, dass alle Beteiligten in den Sporthallen sich mit dem nötigen Respekt begegnen. Dazu zählt auch, dass man dem Schiedsrichter/in dies entgegen bringt. 
								
								
								<br><br>Mit sportlichen Grüßen
								
								<br><br>Der Abteilungsvorstand Handball								
								
							';
							}
							else if($site=="jl"){
								echo '<img src="img/teams/jl.jpg" class="img-responsive" id="MannschBild"  />';										
								$title='
								<b>Jugend unter neuer Farbe</b>

								<br><br>seit nun im März 2018 die Saison zu Ende ging trat die Trennung der SG Teck in Kraft und die Weilheimer Handballer spielen wieder in der Farbe Rot. Die neuen Trikots, um die sich der Handball-Förderverein engagiert kümmerte erhielten bei den Bezirksspielfesten und Turnieren Gelegenheit für ihren ersten Auftritt. Ganz in Vereinsfarbe leuchtend rot erkennt jeder die Weilheimer Zugehörigkeit. Nicht nur die neuen Trikots sind Anzeichen der Veränderung unser Berthi hat kaum merklich zu allen Gelegenheiten Einzug gehalten und ist schon jetzt nicht mehr wegzudenken. Auf Trikots, im Blättle, auf der Homepage, auf der Torwand überall findet man ihn wieder. Nicht nur das, Weilheims Vielfalt ist nun auch um eine Berthi-Wurst und ein Berthi-Eis reicher. 
								<br><br>Neben der Wiederentdeckung der Weilheimer Zughörigkeit haben sich in der Handball-Jugend die Mannschaften formiert. Vor allem in den jüngeren Jugenden stieg der Zuwachs stetig an und wir können auf erfreulich große Mannschaften blicken. Im weibliche Bereich ist der TSV mit engagierten Spielerinnen gut eingedeckt. Im männlichen Bereich sind die Spieler ebenfalls engagiert, es könnten jedoch mehr sein. Die Aktionen über das Frühjahr und Sommer hinweg, wie ein Ausflug nach Rust, ein Sporttag in der Lindach-Sporthalle, Bezirksspielfeste und Turniere, Städtlesfest werden im Herbstcamp am 29. und 30. Oktober 2018 der Jahrgänge 2002 bis 2011 ihren Höhepunkt finden. Und die Weihnachtsfeier in neuem Format wird das Jahr 2018 gebührend abschließen.
								<br><br>Für die Saison 2018/2019 wünschen wir allen Spielern und Trainern viel Erfolg und faire Spiele und auch den ein oder anderen Zugang. Nicht oft genug können wir uns bei den Jugendtrainern des TSV für ihre Arbeit und ihren Einsatz bedanken, deshalb auch an dieser Stelle ein ganz herzliches Dankeschön!
								<br><br>Jugendleitung 
								<br>Annette Breuninger und Maike Sigel
								
								
								';
							}
							else if($site=="wa"){
								echo '<img src="img/teams/wa.jpg" class="img-responsive" id="MannschBild"  />';										
								$title='
								Auch in der Saison 2018/2019 kümmert sich der Wirtschaftsausschuss um die Organisation und Durchführung von sämtlichen Veranstaltungen der Handball Abteilung. 
								<br>Während der Hallenrunde müssen natürlich die Hallendienste organisiert und koordiniert werden. Aber auch außerhalb der Hallenrunde gibt es für das Team des Wirtschaftsausschusses einiges zu tun. Zu den vielen Aufgaben gehört unter anderem die Planung und Durchführung von unserem Vatertagshock und dem Städtlesfest und vieles mehr. Auch die alljährliche Weihnachtsfeier und Playersnight wird vom Team des Wirtschaftsausschusses organisiert. 
								<br>Im TSV-Jubiläumsjahr (125Jahre) gab es gleich mehrere Highlights zu organisieren. Seit langen war im Juni wieder ein Bezirksspielfest der männlichen E-Jugend in der Lindach Sporthalle.  Das Auftaktspiel des Esslinger Marktplatz Turnieres in Juli fand ebenfalls in der Lindach Sporthalle statt, zu Gast war der VfL Gummersbach und der TVB 1898 Stuttgart. Im August waren die TSG Haßloch, HBW Balingen-Weilstetten, die HSG Konstanz und FRISCH AUF! Göppingen zu Gast in Weilheim um die 1. Runde des DHB-Pokals auszutragen.
								<br><br>Der Wirtschaftsausschuss ist zwischenzeitlich ein eingespieltes Team, das sich dennoch immer über neue Gesichter freut.
								<br><br>Zum festen Team des Wirtschaftsausschusses gehören: Lena Sigel, Ulla Burkhardt, Beate Pesl, Jochen Fenske, Mark Sigel, Benjamin Banzhaf, Conny Fischer, Daniel Däschler, Alisa Schaal, Maike Sigel, Gunter Zettl, Anja Hennig, Stephanie Schwarz, Angelika Schmid, Andreas Bleher, Oliver Stelzer, Markus Mayer und Annette Breuninger
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
							else if($site=="a_maennlich" || $site=="b_maennlich"){
								echo '<img src="img/teams/jugend/a-b-maennlich.jpg" class="img-responsive" id="MannschBild"  />';										
								$title='
								<b>A-Jugend männlich TSV Weilheim Handball</b>

								<br><br>Nach der Auflösung der Spielgemeinschaft mit dem TSV Owen galt es für die Jugendleitung des TSV Weilheim zuerst einmal die Jahrgänge der Weilheimer Jugendspieler zu sortieren. Im männlichen Bereich musste die A- und B-Jugend zusammengelegt werden. Mit sechs A-Jugend Spielern, hauptsächlich Jahrgang 2001 und 5 B-Jugendspielern zwischen Jahrgang 2002-2003 stellt der TSV diese Saison eine sehr junge Weilheimer A-Jugend. Aufgrund dieser Konstellation wurdeversucht die Mannschaft in der untersten Spielklasse ins Rennen zu schicken, dies hat aber leider nicht geklappt und somit muss die männliche A-Jugend nun doch in der Bezirksliga antretten. In der Vorbereitung setzt Trainer Sebastian Sigel, wegen der zum Teil großen körperlichen Unterschiede zwischen den Spielern, viel auf Schnelligkeit und Spielverständnis in den Trainingseinheiten. Zusätzlich zum Jugendtraining trainieren einzelne Spieler des älteren Jahrgangs bereits bei den Aktiven Mannschaften mit. Geplant sind in der Vorbereitung Trainingsspiele und natürlich die Teilnahme am SV Cup.
								<br><br>Ziel für die kommende Saison ist es eine junge, konkurrenzfähige Mannschaft zu stellen die in der Lage ist ab und zu einen der Ligakonkurrenten zu ärgern.
								
								';
							} 
							else if($site=="c_maennlich" || $site=="d_maennlich"){
								echo '<img src="img/teams/jugend/c-d-maennlich.jpg" class="img-responsive" id="MannschBild"  />';										
								$title='
								<b>C-Jugend Männlich</b>
							
								';
							} 
							else if($site=="b_weiblich"){
								echo '<img src="img/teams/jugend/b-weiblich.jpg" class="img-responsive" id="MannschBild"  />';										
								$title='
								<b>Weibliche B-Jugend</b>

								<br><br>Auch in dieser Saison 2018/2019 können wir wieder mit einer weiblichen B-Jugend ins Rennen gehen. Die Mannschaft setzt sich aus den Jahrgängen 2002 und 2003 zusammen. 
								<br><br>Aufgrund der Auflösung der SG Teck besteht die Mannschaft in dieser Saison lediglich aus 8 Spielerinnen (Sabina Smaijlovic, Cindy Doll, Delia Grünzweig, Noémi Papp, Elisa Fischer, Hanna Hepperle, Jenny Schade sowie Lilien Morgenstern). Wir sind daher auf die Unterstützung einzelner Spielerinnen der weiblichen C-Jugend während der Saison angewiesen. 
								<br><br>Katrin Pöchmann und Hanna Schumacher bilden in dieser Saison das Trainergespann. 
								<br><br>Wie auch in der vergangenen Saison wurden wieder zwei Rasenturniere gespielt. Im Juni besuchte man das Turnier in Reusten und im Juli ganz traditionell in Owen den SV-Cup. 
								<br><br>Trotz der niedrigen Spieleranzahl sind wir dennoch sehr motiviert und wollen in der bevorstehenden Saison wieder neu angreifen. Unser Ziel ist das obere Tabellendrittel und wir sind uns sicher, dass wir dieses Ziel auch erreichen werden. Wir freuen uns auf viele Zuschauerinnen und Zuschauer und deren Unterstützung in den Sporthallen. 
								
								';
							} 
							else if($site=="c_weiblich"){
								echo '<img src="img/teams/jugend/c-weiblich.jpg" class="img-responsive" id="MannschBild"  />';										
								$title='
								
								<b>C-Jugend weiblich 2017/18</b>
								<br><br>Die vergangene Saison wurde mit einem erfolgreichen 3 Platz in der Bezirksliga abgeschlossen und war eine starke Leistung unserer jungen Spielerinnen. Da die Saison 2016/17 das Ende der SG Teck sein sollte hieß es nach dem letzten gemeinsamen Spiel Abschied nehmen von den liebgewonnenen Teamkameradinnen aus dem ehemaligen Partnerverein und sich als TSV Weilheim neu zu formieren und Stärke zu zeigen. So kann die C-Jugend weiblich des TSV Weilheim mit 10 handballbegeisterten Mädels der Jahrgänge 2004 und 2005 motiviert in die neue Runde starten und wird in der Kreisliga auf Torjagd gehen. Auch kann auf tatkräftige Unterstützung aus unserer D-Jugend gezählt werden worüber wir uns sehr freuen. 
								<br><br>Im Vorfeld stand ein gemeinsamer Besuch des SV-Cup in Owen auf dem Programm und es wurde zusammen gespielt, gesiegt, gelacht, verloren – vor allem wurde jedoch gezeigt, dass man ein Team ist, füreinander kämpft und der Siegeswille da ist. Jedoch musste man sich hier leider bereits nach der Gruppenphase durch sehr starke Gruppengegner geschlagen geben. 
								<br><br>In der neuen Saison 2017/18 soll die Mannschaft als Team zusammenwachsen und versuchen, sich im guten Mittelfeld der Kreisliga zu positionieren. 
								<br><br>Die Mädels freuen sich auf zahlreiche Unterstützung bei den Spielen - vor allem durch die treuen und engagierten Eltern - und werden versuchen, eine spannende und erfolgreiche Saison zu spielen.
								<br><br><b>Spielerinnen:</b>
								<br>Julia, Laura, Ina, Mara, Amelie, Alina, Angela, Rebecca, Finja, Erina, Janina


								';
							} 
							else if($site=="d_weiblich"){
								echo '<img src="img/teams/jugend/d-weiblich.jpg" class="img-responsive" id="MannschBild"  />';										
								$title='
								
								<b>Bericht Dw 2018/2019</b>
								<br><br>Nachdem wir die letzte Saison sehr erfolgreich mit dem Meistertitel abgeschlossen haben, mussten wir einige Mädels in die C-Jugend verabschieden. Gleichzeitig durften wir  aber auch sechs neue Mädels aus der E-Jugend in unseren Reihen begrüßen. So startet die D-Jugend weiblich mit 11 motivierten Mädels der Jahrgänge 2006/2007 in die neue Saison. 
								<br><br>Beim diesjährigen Bezirksspielfest konnten die Spielerinnen zum ersten Mal ihr Können unter Beweis stellen. Gemeinsam konnten sie sich einen tollen 17. Platz erkämpfen. Damit werden wir, wie im vergangenen Jahr, in der Kreisliga B auf Torejagd gehen.
								<br><br>Das Highlight der Vorbereitung war unser Übernachtungsturnier in Heiningen. Dort mussten wir leider mit einem sehr dezimierten Kader antreten. Trotz der Unterzahlsituation und dank der geschickten Turnierplanung sind wir dort erst im Viertelfinale ausgeschieden.   
								<br><br>Das Ziel der kommenden Saison ist es, dass sich jede Spielerin persönlich weiterentwickeln kann und wir zusammen eine erfolgreiche Saison mit viel Spaß haben werden. 
								<br><br>Wir freuen uns natürlich immer über zahlreiche und lautstarke Unterstützung am Spielfeldrand!
								<br><br><b>Spielerinnen:</b>
								<br>Karla Schneider, Lene Ulmer, Leni Kröll, Lina Etzel, Mia Försch, Nele Stelzer, Pia Etzel, Romy Schmid, Selina Dias, Selina Raimondo, Vivien Thiess
								<br><br><b>Trainerinnen:</b>
								<br>Tanja Bachofer und Xenia Veith



								';
							}
						echo '
						
							<p style="margin:10px;">';
								echo $title;
							?>
							</p>
		</div>

					
	<script src="js/list.js"></script>				
		<script src="js/jquery.min.js"></script>
		<!-- Don't forget to get the latest Swiper and scrollbar version here-->
		<script src="js/idangerous.swiper-2.0.min.js"></script>
		<script src="js/idangerous.swiper.scrollbar-2.0.js"></script>
		<script src="js/simple-app.js"></script>
		 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/bootstrap.min.js"></script>
		
		
	</body>
</html>


