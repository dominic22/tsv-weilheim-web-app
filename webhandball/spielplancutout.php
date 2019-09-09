<?php if($_REQUEST['site']) { $teamName = $_REQUEST['site']; }; if($_REQUEST['type']) 
 { $type = $_REQUEST['type']; }; 

 $timestamp=time(); 
 
  //Dieses Skript regelt die Tabelle
  //$site = "http://www.hvw-online.org/spielbetrieb/ergebnissetabellen-verband/#/league?ogId=3&lId=";
  
 // counter kann man erzeugen, indem man bei listenansicht auf verein klickt und somit nur die jeweiligen spiele angezeigt bekommt

  // aktiv
  if($teamName == "erste") { $leaguID = "46741"; $teamID="527641"; };
  if($teamName == "zweite") { $leaguID = "46746"; $teamID="527701"; };
  if($teamName == "damen") { $leaguID = "46771"; $teamID="527991"; };
  if($teamName == "damen2") { $leaguID = "46776"; $teamID="528011"; };
  if($teamName == "js") { $leaguID = "31754"; $teamID="391150"; };
  if($teamName == "ad") { $leaguID = "31750"; $teamID="391150"; };
 
  //jugend
  if($teamName == "a_maennlich") { $leaguID = "49921"; $teamID="565331"; };
  //if($teamName == "b_maennlich") { $leaguID = "49921"; $teamID="565331"; };
  if($teamName == "c_maennlich") { $leaguID = "49951"; $teamID="565636"; };
  //if($teamName == "d_maennlich") { $leaguID = "49951"; $teamID="565636"; };
  //if($teamName == "a_weiblich") { $leaguID = "37441"; $teamID="391150"; };
  if($teamName == "b_weiblich") { $leaguID = "50001"; $teamID="565976"; };
  if($teamName == "c_weiblich") { $leaguID = "50021"; $teamID="566126"; };
  if($teamName == "d_weiblich") { $leaguID = "50031"; $teamID="566201"; };



 if($type == "table") { 
 }
 //https://spo.handball4all.de/service/if_g_json.php?ca=0&cl=28374&cmd=ps&ct=391150&og=3&p=58
 $site = "https://spo.handball4all.de/service/if_g_json.php?ca=0&cl=$leaguID&cmd=ps&ct=$teamID&og=3&p=58";

 header('Content-Type: text/xml');
 // header('Content-Type: text/plain');

	$json = file_get_contents($site); 
	$obj = json_decode($json);
	
	$futureGames = $obj[0]->content->futureGames->games;
	
	 //Noch das vordere wegschneiden..
	$xml = simplexml_load_string("<?xml version='1.0' encoding='utf-8'?><xml />");
	$x = 1;
	foreach ($futureGames as $game) {
		$node = $xml->addChild('SpielplanChild');
		
		$node->addChild('Datum', $game->gDate);
		$node->addChild('Uhrzeit', $game->gTime);
		$node->addChild('Heim', $game->gHomeTeam);
		$node->addChild('Gast', $game->gGuestTeam);
		$node->addChild('BerichtUrl', "http://spo.handball4all.de/misc/sboPublicReports.php?sGID=$game->sGID");
		
		$x++;
	}
	// echo json_encode($futureGames)
   	echo $xml->asXML();
 ?>