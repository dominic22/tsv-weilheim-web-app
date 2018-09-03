<?php if($_REQUEST['site']) { $teamName = $_REQUEST['site']; }; if($_REQUEST['type']) 
 { $type = $_REQUEST['type']; }; 

 $timestamp=time(); 
 

  //Dieses Skript regelt die Tabelle
  //$site = "http://www.hvw-online.org/spielbetrieb/ergebnissetabellen-verband/#/league?ogId=3&lId=";
  
  // aktiv
  if($teamName == "erste") { $teamID = "35309"; $counter="443321"; };
  if($teamName == "zweite") { $teamID = "35312"; $counter="443357"; };
  if($teamName == "damen") { $teamID = "35327"; $counter="443495"; };
  if($teamName == "damen2") { $teamID = "35330"; $counter="443531"; };
  if($teamName == "js") { $teamID = "31754"; $counter="391150"; };
  if($teamName == "ad") { $teamID = "31750"; $counter="391150"; };
 
  //jugend
  if($teamName == "a_maennlich") { $teamID = "37078"; $counter="466438"; };
  if($teamName == "b_maennlich") { $teamID = "37078"; $counter="466438"; };
  if($teamName == "c_maennlich") { $teamID = "37048"; $counter="466624"; };
  if($teamName == "d_maennlich") { $teamID = "37048"; $counter="466624"; };
  //if($teamName == "a_weiblich") { $teamID = "37441"; $counter="391150"; };
  if($teamName == "b_weiblich") { $teamID = "37441"; $counter="466888"; };
  if($teamName == "c_weiblich") { $teamID = "37453"; $counter="466978"; };
  if($teamName == "d_weiblich") { $teamID = "37462"; $counter="467041"; };

  
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