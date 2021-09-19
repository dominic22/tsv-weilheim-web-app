<?php if($_REQUEST['site']) { $teamName = $_REQUEST['site']; }; if($_REQUEST['type']) 
 	{ $type = $_REQUEST['type']; }; 

 	$timestamp=time(); 
 
	//Dieses Skript regelt die Tabelle
	//$site = "http://www.hvw-online.org/spielbetrieb/ergebnissetabellen-verband/#/league?ogId=3&lId=";
  
	// aktiv
	if($teamName == "erste") { $leaguID = "69873"; $teamID="736341"; };
	if($teamName == "zweite") { $leaguID = "69881"; $teamID="736413"; };
	if($teamName == "damen") { $leaguID = "69897"; $teamID="736613"; };
	//if($teamName == "damen2") { $leaguID = ""; $teamID=""; };
	//if($teamName == "js") { $leaguID = "31754"; $teamID="391150"; };
	//if($teamName == "ad") { $leaguID = "31750"; $teamID="391150"; };

	//jugend
	//if($teamName == "a_maennlich") { $leaguID = "49921"; $teamID="565331"; };
	if($teamName == "b_maennlich") { $leaguID = "71485"; $teamID="753285"; };
	//if($teamName == "c_maennlich") { $leaguID = "49951"; $teamID="565636"; };
	if($teamName == "d_maennlich") { $leaguID = "61866"; $teamID="671021"; };
	if($teamName == "a_weiblich") { $leaguID = "61871"; $teamID="671056"; };
	//if($teamName == "b_weiblich") { $leaguID = "50001"; $teamID="565976"; };
	if($teamName == "c_weiblich") { $leaguID = "71801"; $teamID="755049"; };
	if($teamName == "d_weiblich") { $leaguID = "71813"; $teamID="755109"; };

	if($type == "table") { 
	
		// is this needed???
	}

	$site = "http://spo.handball4all.de/service/if_g_json.php?ca=0&cl=$leaguID&cmd=ps&og=3";

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
		header("Location: http://android.handball-weilheim.de/webhandball/hvwcutout_dev.php?site=$teamName&type=table&status=ok#/league?ogId=3&lId=$leaguID");
	exit;
	}*/
 
	$json = file_get_contents($site); 
	$obj = json_decode($json);
	
	$scores = $obj[0]->content->score;
	
	 //Noch das vordere wegschneiden..
	$xml = simplexml_load_string("<?xml version='1.0' encoding='utf-8'?><xml />");
	$x = 1;
	foreach ($scores as $score) {
		
		if($x % 2 == 0) {
			$node = $xml->addChild('TabelleGerade');
		} else {
			$node = $xml->addChild('TabelleUngerade');
		}

		$node->addChild('Platz', $score->tabScore);
		$node->addChild('Verein', $score->tabTeamname);
		
		$node->addChild('Spiele', $score->numPlayedGames);
		$node->addChild('Siege', $score->numWonGames);
		$node->addChild('Unentschieden', $score->numEqualGames);
		$node->addChild('Niederlagen', $score->numLostGames);
		
		$node->addChild('ToreGeschossen', $score->numGoalsShot);
		$node->addChild('ToreErhalten', $score->numGoalsGot);
	
	
		$node->addChild('PunktePlus', $score->pointsPlus);
		$node->addChild('PunkteMinus', $score->pointsMinus);
		$x++;
	}
	
   echo $xml->asXML();
 ?>