<?php if($_REQUEST['site']) { $teamName = $_REQUEST['site']; }; if($_REQUEST['type']) 
 { $type = $_REQUEST['type']; }; 

 $timestamp=time(); 
 
  //Dieses Skript regelt die Tabelle
  //$site = "http://www.hvw-online.org/spielbetrieb/ergebnissetabellen-verband/#/league?ogId=3&lId=";
  
 // counter kann man erzeugen, indem man bei listenansicht auf verein klickt und somit nur die jeweiligen spiele angezeigt bekommt

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
 }
 //https://spo.handball4all.de/service/if_g_json.php?ca=0&cl=28374&cmd=ps&ct=391150&og=3&p=58
 $site = "https://spo.handball4all.de/service/if_g_json.php?ca=0&cl=$teamID&cmd=ps&ct=$counter&og=3&p=58";

 header('Content-Type: text/plain');
	$json = file_get_contents($site); 
	$obj = json_decode($json);
	$futureGames = $obj[0]->content->futureGames->games;
	echo json_encode($futureGames)
 ?>