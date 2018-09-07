<?php 

/*
http://android.handball-weilheim.de/webhandball/calendar.php?site=herren2

$ical = "BEGIN:VCALENDAR
VERSION:2.0
PRODID:-//hacksw/handcal//NONSGML v1.0//EN
BEGIN:VEVENT
UID:" . md5(uniqid(mt_rand(), true)) . "@yourhost.test
DTSTAMP:" . gmdate('Ymd').'T'. gmdate('His') . "Z
DTSTART:19970714T170000Z
DTEND:19970715T035959Z
SUMMARY:Bastille Day Party
END:VEVENT
END:VCALENDAR";*/

// Set correct filename
$year = "_17_18";

if($_REQUEST['site']) { $site = $_REQUEST['site']; };
if($site=="erste"){ 
	$fileName="spielplan_herren1".$year.".ics";
}else if($site=="zweite"){ 
	$fileName="spielplan_herren2".$year.".ics";
}else if($site=="damen"){ 
	$fileName="spielplan_damen1".$year.".ics";
}else if($site=="damen2"){ 
	$fileName="spielplan_damen2".$year.".ics";
}else if($site=="js"){ 
	$fileName="spielplan_js".$year.".ics";
}else if($site=="ad"){ 
	$fileName="spielplan_ad".$year.".ics";
}
//jugend
if($teamName == "a_maennlich") { 
	$fileName="spielplan_herren1".$year.".ics";
};
if($teamName == "b_maennlich") { 
	$fileName="spielplan_herren1".$year.".ics";
};
if($teamName == "c_maennlich") {
	$fileName="spielplan_herren1".$year.".ics";
};
if($teamName == "d_maennlich") { 
	$fileName="spielplan_herren1".$year.".ics";
};
//if($teamName == "a_weiblich") { $teamID = "37441"; $counter="391150"; };
if($teamName == "b_weiblich") { 
	$fileName="spielplan_herren1".$year.".ics";
};
if($teamName == "c_weiblich") { 
	$fileName="spielplan_herren1".$year.".ics";
};
if($teamName == "d_weiblich") { 
	$fileName="spielplan_herren1".$year.".ics";
};


$ical2 = file_get_contents("downloadcontent/spielplan/". $fileName);


//set correct content-type-header
header('Content-type: text/calendar; charset=utf-8');
header('Content-Disposition: attachment; filename='. $fileName);

echo $ical2;
exit;
?>