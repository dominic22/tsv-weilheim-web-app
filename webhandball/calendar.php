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
if($site=="herren1"){ 
	$fileName="spielplan_herren1".$year.".ics";
}else if($site=="herren2"){ 
	$fileName="spielplan_herren2".$year.".ics";
}else if($site=="damen1"){ 
	$fileName="spielplan_damen1".$year.".ics";
}else if($site=="damen2"){ 
	$fileName="spielplan_damen2".$year.".ics";
}else if($site=="js"){ 
	$fileName="spielplan_js".$year.".ics";
}else if($site=="ad"){ 
	$fileName="spielplan_ad".$year.".ics";
}


$ical2 = file_get_contents("downloadcontent/spielplan/". $fileName);


//set correct content-type-header
header('Content-type: text/calendar; charset=utf-8');
header('Content-Disposition: attachment; filename='. $fileName);

echo $ical2;
exit;
?>