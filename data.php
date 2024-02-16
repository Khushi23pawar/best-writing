<?php
    $data = $_POST;  //$data will contain the_id
    //do some processing
    $jsond = array("success" => $data);

	$jsonData = json_encode($jsond);

	// Output JSON string
	echo $jsonData;


?>