<?php if($_REQUEST['site']) { $teamName = $_REQUEST['site']; }; if($_REQUEST['type']) 
 { $type = $_REQUEST['type']; }; 

 $timestamp=time(); 
 
  //Dieses Skript regelt die Tabelle
  //$site = "http://www.hvw-online.org/spielbetrieb/ergebnissetabellen-verband/#/league?ogId=3&lId=";
  
 // counter kann man erzeugen, indem man bei listenansicht auf verein klickt und somit nur die jeweiligen spiele angezeigt bekommt

 if($teamName == "erste") { $teamID = "28374"; $counter="391150"; };
 if($teamName == "zweite") { $teamID = "28386"; $counter="391302"; };
 if($teamName == "damen") { $teamID = "28402"; $counter="391150"; };
 if($teamName == "damen2") { $teamID = "28406"; $counter="391150"; };
 if($teamName == "js") { $teamID = "31754"; $counter="391150"; };
 if($teamName == "ad") { $teamID = "31750"; $counter="391150"; };
 if($type == "table") { 
 }
 //https://spo.handball4all.de/service/if_g_json.php?ca=0&cl=28374&cmd=ps&ct=391150&og=3&p=58
 $site = "https://spo.handball4all.de/service/if_g_json.php?ca=0&cl=$teamID&cmd=ps&ct=$counter&og=3&p=58";

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