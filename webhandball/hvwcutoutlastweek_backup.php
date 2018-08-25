<?php if($_REQUEST['site']) 
{ $site = $_REQUEST['site']; }; 
if($_REQUEST['type']) 
 { $type = $_REQUEST['type']; }; 
 $timestamp=time(); 
 //Dieses Skript regelt die Spielergebnisse der letzten Woche
 if($site == "erste") { $site = "http://www.et.hvw-online.org/?id=2820&orgGrpID=3&score=28374&nm=15"; };
 if($site == "zweite") { $site = "http://www.et.hvw-online.org/?id=2820&orgGrpID=3&score=28386&nm=15"; };
 if($site == "damen") { $site = "http://www.et.hvw-online.org/?id=2820&orgGrpID=3&score=28402&nm=15"; };
 if($site == "damen2") { $site = "http://www.et.hvw-online.org/?id=2820&orgGrpID=3&score=28406&nm=15"; };
 if($site == "js") { $site = "http://www.et.hvw-online.org/?A=g_class&id=2831&orgID=8&score=17660"; };
 
 if($type == "table") { 
 
//Anschliessend noch HTML zu XML einsetzen Siehe: http://stackoverflow.com/questions/7299699/scrape-html-table-data-and-create-xml-doc
 
 $return = file_get_contents($site); 
 
 //layout ausschneiden 
 $return = str_replace("<!--", "", $return);
 $return = str_replace("-->", "", $return);
 $return = str_replace("<?xml version=\"1.0\" encoding=\"utf-8\"?>", "<!--",$return); 
 $return = str_replace("<link rel=\"stylesheet\" type=\"text/css\" href=\"typo3temp/stylesheet_fa414124cb.css\" />", "--><link rel=\"stylesheet\" type=\"text/css\" href=\"http://www.handball-weilheim.de/templates/handballweilheimj16/css/standard.css\" /><!--", $return);
 $return = str_replace("<body>", "--><body class=\"wrapper\"><!--", $return);
 $return = str_replace("Aktueller Tabellenstand</h1>", "-->", $return);
 $return = str_replace("</div> * ScoreTableFoot()", "<!--", $return); 
 $return = str_replace("</html>", "-->", $return); //links ersetzen
 $return = str_replace("<a href=\"/", "<a target=\"blank\" href=\"http://www.hvw-online.org/", $return); 
 //Pfeiffe raus $return = str_replace("<td><a href=\"http://www.im-dienste-des-spiels.de\" target=\"_new\" border=\"0\"><img border=\"0\" src=\"/icons/idds/whistle_black.gif\" title=\"Unterst&uuml;tzer der Aktion im-dienste-des-spiels\"></a></td>", "<td></td>", $return);
 //classes anpassen $return = str_replace("<th", "<th class=\"first\"", $return); $return = str_replace("<tr class=\"rge", "<tr class=\"gerade", $return);
 $return = str_replace("<tr class=\"rug", "<tr class=\"ungerade", $return); $return = str_replace("<td class=\"gac", "<td class=\"tbl", $return);
 $return = str_replace("<td class=\"gasr", "<td class=\"tblr", $return); $return = str_replace("<td class=\"gasl", "<td class=\"tbll", $return);

 
 // $return = str_replace("<tr class=\"rge\">", "<tr class=\"ungerade\">", $return); 
  
  $return = str_replace("<td> </td>", "<!--!-->", $return); 
  
  //cutout
  
 // von
   $return2 = explode("* ScoreTable() *",  $return); 

	$return = $return2[0];

  //BIS
 $return3 = explode("<th align=\"center\">Bem.</th>",  $return); 
 
   $return = $return3[1];
   
  
 //  echo $return;
//  $return = str_replace("","", $return);
  //  echo $xml->asXML();
  $return = str_replace("<tr class=\"rge\">", "<tr class=\"ungerade\">", $return);
 // echo $return;
 $html = $return;

}; 
	
	//Noch das vordere wegschneiden..
	$body = explode('<th align="center">Bem.</th></tr>', $html);
    $xml = simplexml_load_string("<?xml version='1.0' encoding='utf-8'?><xml />");

    $rows = array();
	
    foreach (array_slice(explode('<tr class="ungerade">', end($body)), 1) as $row)
    {
		
		//preg_match_all('/b>([0-9]+)<\/b>/', $row, $platz,PREG_PATTERN_ORDER);
		
		preg_match_all('/gal">([^<]+)<\/td>/', $row, $lig,PREG_PATTERN_ORDER);
		preg_match_all('/td>([0-9]+)<\/td>/', $row, $idsA,PREG_PATTERN_ORDER);
		preg_match_all('/td>([^<]+)<\/td>/', $row, $dat,PREG_PATTERN_ORDER);
		
	//	preg_match_all('/tbll">([0-9]+)<\/td>/', $row, $erh,PREG_PATTERN_ORDER);
		
		$node = $xml->addChild('LetzteWoche');
		
	//	$node->addChild('Platz', $platz[1][0]);
		$node->addChild('Liga', $lig[1][0]);
		$node->addChild('Datum', $dat[1][1]);
	//	$node->addChild('OrtKennung', $idsA[1][0]);
	//	$node->addChild('Datum', $idsA[1][1]);
	//	$node->addChild('Link', $idsA[1][2]);
		
		$node->addChild('VereinHeim', $lig[1][1]);
		$node->addChild('VereinGast', $lig[1][2]);
		
		$node->addChild('ToreHeim', $idsA[1][1]);
		$node->addChild('ToreGast', $idsA[1][2]);
		
	/*	$node->addChild('ToreGeschossen', $ids[1][0]);
		$node->addChild('ToreErhalten', $erh[1][0]);
  
  
		$node->addChild('PunktePlus', $ids[1][1]);
		$node->addChild('PunkteMinus', $erh[1][1]);
  */
	 
    }
	
	foreach (array_slice(explode('<tr class="rge">', end($body)), 1) as $row2)
    {
		
		preg_match_all('/b>([0-9]+)<\/b>/', 	$row2, $platzGER,PREG_PATTERN_ORDER);
		
		preg_match_all('/td>([^<]+)<\/td>/', 	$row2, $verGER,PREG_PATTERN_ORDER);
		preg_match_all('/tbl">([0-9]+)<\/td>/', $row2, $idsAGER,PREG_PATTERN_ORDER);
		preg_match_all('/tblr">([^<]+)<\/td>/', $row2, $idsGER,PREG_PATTERN_ORDER);
		
		preg_match_all('/tbll">([0-9]+)<\/td>/', $row2, $erhGER,PREG_PATTERN_ORDER);
		
		$node = $xml->addChild('TabelleGerade');
		
		$node->addChild('Platz', $platzGER[1][0]);
		$node->addChild('Verein', $verGER[1][0]);
		
		$node->addChild('Spiele', $idsAGER[1][0]);
		$node->addChild('Siege', $idsAGER[1][1]);
		$node->addChild('Unentschieden', $idsAGER[1][2]);
		$node->addChild('Niederlagen', $idsAGER[1][3]);
		
		$node->addChild('ToreGeschossen', $idsGER[1][0]);
		$node->addChild('ToreErhalten', $erhGER[1][0]);
  
  
		$node->addChild('PunktePlus', $idsGER[1][1]);
		$node->addChild('PunkteMinus', $erhGER[1][1]);
  
	 
    }

   header('Content-Type: text/xml');
   echo $xml->asXML();
 
 ?>