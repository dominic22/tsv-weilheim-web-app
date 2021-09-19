<?php if($_REQUEST['site']) { $teamName = $_REQUEST['site']; }; if($_REQUEST['type']) 
 { $type = $_REQUEST['type']; }; 

    $timestamp=time(); 
 
    //Dieses Skript regelt die Tabelle
    //$site = "http://www.hvw-online.org/spielbetrieb/ergebnissetabellen-verband/#/league?ogId=3&lId=";
  
    // teamID kann man erzeugen, indem man bei listenansicht auf verein klickt und somit nur die jeweiligen spiele angezeigt bekommt

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
    }
    //https://spo.handball4all.de/service/if_g_json.php?ca=0&cl=28374&cmd=ps&ct=391150&og=3&p=58
    $site = "https://spo.handball4all.de/service/if_g_json.php?ca=0&cl=$leaguID&cmd=ps&ct=$teamID&og=3&p=58";

    header('Content-Type: text/plain');
        $json = file_get_contents($site); 
        $obj = json_decode($json);
        $futureGames = $obj[0]->content->futureGames->games;
        echo json_encode($futureGames)
 ?>