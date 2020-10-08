<?php if($_REQUEST['site']) { $teamName = $_REQUEST['site']; }; if($_REQUEST['type']) 
    { $type = $_REQUEST['type']; }; 

    $timestamp=time(); 
    
    //Dieses Skript regelt die Tabelle
    //$site = "http://www.hvw-online.org/spielbetrieb/ergebnissetabellen-verband/#/league?ogId=3&lId=";
    
    // counter kann man erzeugen, indem man bei listenansicht auf verein klickt und somit nur die jeweiligen spiele angezeigt bekommt

    // aktiv
    if($teamName == "erste") { $leaguID = "59481"; $teamID="664961"; };
    if($teamName == "zweite") { $leaguID = "59491"; $teamID="665856"; };
    if($teamName == "damen") { $leaguID = "59511"; $teamID="665016"; };
    //if($teamName == "damen2") { $leaguID = ""; $teamID=""; };
    //if($teamName == "js") { $leaguID = "31754"; $teamID="391150"; };
    //if($teamName == "ad") { $leaguID = "31750"; $teamID="391150"; };
    
    //jugend
    //if($teamName == "a_maennlich") { $leaguID = "49921"; $teamID="565331"; };
    if($teamName == "b_maennlich") { $leaguID = "61816"; $teamID="670476"; };
    //if($teamName == "c_maennlich") { $leaguID = "49951"; $teamID="565636"; };
    if($teamName == "d_maennlich") { $leaguID = "61866"; $teamID="671021"; };
    if($teamName == "a_weiblich") { $leaguID = "61871"; $teamID="671056"; };
    //if($teamName == "b_weiblich") { $leaguID = "50001"; $teamID="565976"; };
    if($teamName == "c_weiblich") { $leaguID = "61916"; $teamID="671751"; };
    if($teamName == "d_weiblich") { $leaguID = "61936"; $teamID="671916"; };



    if($type == "table") { 
    }
    //https://spo.handball4all.de/service/if_g_json.php?ca=0&cl=28374&cmd=ps&ct=391150&og=3&p=58
    $site = "https://spo.handball4all.de/service/if_g_json.php?ca=0&cl=$leaguID&cmd=ps&ct=$teamID&og=3&p=58";

     header('Content-Type: text/xml');

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