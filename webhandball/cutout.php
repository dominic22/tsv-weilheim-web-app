<?php if($_REQUEST['site']) { $site = $_REQUEST['site']; }; if($_REQUEST['type']) 
 { $type = $_REQUEST['type']; }; 
 $timestamp=time(); 
 $saison="2017-2018";
 
 if($site == "erste") {$site = "http://www.handball-weilheim.de/".$year."/herren-1/spielplan.html";};
 if($site == "zweite") {$site = "http://www.handball-weilheim.de/".$year."/herren-2/spielplan.html";};
 if($site == "damen") {$site = "http://www.handball-weilheim.de/".$year."/damen-1/spielplan.html";};
 if($site == "damen2") {$site = "http://www.handball-weilheim.de/".$year."/damen-2/spielplan.html";};
 if($site == "js") {$site = "http://handball-weilheim.de/".$year."/jungesenioren/spielplan.html";};

 if($type == "table") { 

 $return = file_get_contents($site); 

 
  $return = str_replace("<tr style=\"background-color: #eecccc;\">", "<tr class=\"ungerade\">", $return);
  $return = str_replace("<tr>", "<tr class=\"ungerade\">", $return);
 
 

 $html = $return;

}; 
	
	//echo $html;
	
	
	
	
	
	//Ab WO?:
	$body = explode('<tbody>', $html);

	
    $xml = simplexml_load_string("<?xml version='1.0' encoding='utf-8'?><xml />");

    $rows = array();
	
    foreach (array_slice(explode('<tr class="ungerade">', end($body)), 1) as $row)
    {
		//Wenn bei Platz [^<] kann hier alles andere stehen..
	//	preg_match_all('/b>([^<]+)<\/b>/', $row, $platz,PREG_PATTERN_ORDER);
		
		//2014/2015 	preg_match_all('/mceVisualAid">([^<]+)<\/td>/', $row, $ver, PREG_PATTERN_ORDER);
		
		
	/*	preg_match_all('/<td.*?>([^<]+)<\/td>/', $row, $ver, PREG_PATTERN_ORDER);
		*/
		
		preg_match_all('/<td.*?>([^<]+)<\/td>/', $row, $ver, PREG_PATTERN_ORDER);	
		
		
		$node = $xml->addChild('SpielplanChild');
		
		//$node->addChild('Halle', $ver[1][0]);
		$node->addChild('Datum', $ver[1][1]);
		$node->addChild('Uhrzeit', $ver[1][2]);
		
		$node->addChild('Heim', $ver[1][3]);
		
		//<td class="xl68" width="171">- <span class="font5">TSV Weilheim</span></td>
		//preg_match_all('/<td class="xl68" width="171">\- <span class="font5">([^<]+)<\/span><\/td>/', $row, $ver2, PREG_PATTERN_ORDER);
		preg_match_all('/<td.*?>(.*?)<\/td>/si', $row, $ver2);
		
		preg_match_all('/<span.*?>(.*?)<\/span>/si', $ver2[1][4], $ver3);
		
		
		
		if($ver3[1][0]!=""){
			$node->addChild('Gast', $ver3[1][0]);
		}else{	
				
				$pos = strpos($ver[1][4], '-');
			
			if ($pos === false) {
				$node->addChild('Gast', $ver[1][4]);
			}else{
				$str = ltrim($ver[1][4], '- ');
				$node->addChild('Gast', $str);
			}
		}
	 
    }
	
	

    header('Content-Type: text/xml');
    echo $xml->asXML();
 
 ?>