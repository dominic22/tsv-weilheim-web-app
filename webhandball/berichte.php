<?php
//Get Request
if($_REQUEST['site']) 
{ $site = $_REQUEST['site']; }; 

 $timestamp=time(); 
 if($site == "erste") { $site = "Bericht (Herren I)"; };
 if($site == "zweite") { $site = "Bericht (Herren II)"; };
 if($site == "damen") { $site = "Bericht (Damen I)"; };
 if($site == "damen2") { $site = "Bericht (Damen II)"; };
 if($site == "js") { $site = "Bericht (Jungsenioren)"; };
if($site == "js") { $site = "Bericht (Attraktive Damen)"; };


/*
Our "config.inc.php" file connects to database every time we include or require
it within a php script.  Since we want this script to add a new user to our db,
we will be talking with our database, and therefore,
let's require the connection to happen:
*/
require("config.inc.php");

//initial query
//SELECT * FROM `jos16_content` WHERE id > 59

//$query = "SELECT `id`, title, introtext, `fulltext` FROM `jos16_content` WHERE id > 50 AND created > '2013-09-01 00:00:00.000000' AND title LIKE '%".$site."%' ORDER BY id DESC ";// "Select * FROM comments";
//ohne ID damit jungsenioren dabei?
$year = 2017;

$query = "SELECT `id`, title, introtext, `fulltext` FROM `hka983_content` WHERE created > '2019-08-01 00:00:00.000000' AND title LIKE '%".$site."%' ORDER BY id DESC ";// "Select * FROM comments";

//execute query
try {
    $stmt   = $db->prepare($query);
    $result = $stmt->execute($query_params);
}
catch (PDOException $ex) {
    $response["success"] = 0;
    $response["message"] = "Database Error!";
    die(json_encode($response));
}

// Finally, we can retrieve all of the found rows into an array using fetchAll 
$rows = $stmt->fetchAll();


if ($rows) {
    $response["success"] = 1;
    $response["message"] = "Post Available!";
    $response["posts"]   = array();
    


 foreach ($rows as $row) {
        $post = array();
	
        //this line is new:
		$post["id"]    = $row["id"];
        $post["title"]  = $row["title"];

        $post["introtext"] = $row["introtext"];
        
        $post["fulltext"]  = $row["fulltext"];
        
		
        
        //update our repsonse JSON data
        array_push($response["posts"], $post);
    }



    
    // echoing JSON response
    echo json_encode($response);
    
    
} else {
    $response["success"] = 0;
    $response["message"] = "No Post Available!";
    die(json_encode($response));
}

?>
