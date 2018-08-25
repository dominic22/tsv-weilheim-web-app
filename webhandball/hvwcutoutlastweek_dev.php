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
 
 
 // Wichtig:
 // das frontend muss dieses skript ebenfalls mit #/league?ogId=3&lId=28374 aufrufen ansonsten redirected hvw dieses weiter an #/schedule!!
 // deshalb müssen wir den client immer umleiten oder im client die url ändern, da ich die app deshalb nicht updaten möchte mache ich einen redirect..
 /*
 Ist zum glück doch nicht nötig
 $status = $_REQUEST['status'];
 
 // at the 2nd position of the array the exploded value is defined.. if it is null redirect, otherwise we have a valid id :)
 // $exploded_url = explode( "#/league?ogId=3&lId=", $requestUrl);
 if($status != "ok") {
	header("Location: http://android.handball-weilheim.de/webhandball/hvwcutout_dev.php?site=$teamName&type=table&status=ok#/league?ogId=3&lId=$teamID");
   exit;
 }*/
 
	//require('simple_html_dom.php');

	$json = file_get_contents($site); 
	$obj = json_decode($json);
	
	$games = $obj[0]->content->actualGames->games;
	
	 //Noch das vordere wegschneiden..
	$xml = simplexml_load_string("<?xml version='1.0' encoding='utf-8'?><xml />");
	
	foreach ($games as $game) {
		$node = $xml->addChild('LetzteWoche');
		$node->addChild('Liga', $league);
		$node->addChild('Datum', $game->gDate);
		$node->addChild('VereinHeim', $game->gHomeTeam);
		$node->addChild('VereinGast', $game->gGuestTeam);
		$node->addChild('ToreHeim', $game->gHomeGoals);
		$node->addChild('ToreGast', $game->gGuestGoals);
	}
	
   echo $xml->asXML();
	/*
	foreach ($games as $game) {
		echo $game->gDate;
		echo $game->gTime;
		echo $game->gHomeTeam;
		echo $game->gGuestTeam;
		echo $game->gHomeGoals;
		echo $game->gGuestGoals;
		echo $game->gHomeGoals_1;
		echo $game->gGuestGoals_1;
	}

    $xml = simplexml_load_string("<?xml version='1.0' encoding='utf-8'?><xml />");

	$node = $xml->addChild('TabelleUngerade');
	
	$node->addChild('Platz', 1);
	$node->addChild('Verein', 'I am working on it :)');
	
	$node->addChild('Spiele', 2);
	$node->addChild('Siege', 3);
	$node->addChild('Unentschieden', 2);
	$node->addChild('Niederlagen', 3);
	
	$node->addChild('ToreGeschossen', 11);
	$node->addChild('ToreErhalten', 2);


	$node->addChild('PunktePlus', 11);
	$node->addChild('PunkteMinus', 23);

    echo $xml->asXML();
 */
 ?>