<?php


require("config.inc.php");

//initial query
//SELECT * FROM `jos16_content` WHERE id > 59
//alt fehler
//$query = "SELECT `id`, title, introtext, `fulltext` FROM `jos16_content` WHERE id > 59 ORDER BY id DESC limit 15";// "Select * FROM comments";
$query = "SELECT `id`, `title` ,`introtext`,`fulltext` FROM `hka983_content` , `hka983_content_frontpage` where `hka983_content`.`id` = `hka983_content_frontpage`.`content_id` ORDER BY `id` DESC";
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
