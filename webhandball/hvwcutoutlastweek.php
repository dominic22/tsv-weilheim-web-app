<?php if($_REQUEST['site']) { $teamName = $_REQUEST['site']; }; if($_REQUEST['type']) 
 { $type = $_REQUEST['type']; }; 

 $timestamp=time(); 
 

  //Dieses Skript regelt die Tabelle
  //$site = "http://www.hvw-online.org/spielbetrieb/ergebnissetabellen-verband/#/league?ogId=3&lId=";
  
 if($teamName == "erste") { $teamID = "28374"; };
 if($teamName == "zweite") { $teamID = "28386"; };
 if($teamName == "damen") { $teamID = "28402"; };
 if($teamName == "damen2") { $teamID = "28406"; };
 if($teamName == "js") { $teamID = "31754"; };
 if($teamName == "ad") { $teamID = "31750"; };
 if($type == "table") { 
 
	// is this needed???
 }

 $site = "http://spo.handball4all.de/service/if_g_json.php?ca=0&cl=$teamID&cmd=ps&og=3";

 header('Content-Type: text/xml');
 //header('Content-Type: text/plain');

	$json = file_get_contents($site); 
	$obj = json_decode($json);
	
	$games = $obj[0]->content->actualGames->games;
	
	 //Noch das vordere wegschneiden..
	$xml = simplexml_load_string("<?xml version='1.0' encoding='utf-8'?><xml />");
	
	foreach ($games as $game) {
		$node = $xml->addChild('LetzteWoche');
		$node->addChild('Liga', $league);
		$node->addChild('Datum', "$game->gDate - $game->gTime");
		$node->addChild('VereinHeim', $game->gHomeTeam);
		$node->addChild('VereinGast', $game->gGuestTeam);
		$node->addChild('ToreHeim', $game->gHomeGoals);
		$node->addChild('ToreGast', $game->gGuestGoals);
		$node->addChild('BerichtUrl', "http://spo.handball4all.de/misc/sboPublicReports.php?sGID=$game->sGID");
	}
	
   echo $xml->asXML();
 ?>