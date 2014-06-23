<?php

sleep( 3 );
// no term passed - just exit early with no response
if (empty($_GET['term'])) exit ;
$q = strtolower($_GET["term"]);
// remove slashes if they were magically added
if (get_magic_quotes_gpc()) $q = stripslashes($q);

$this->load->database();
$query = ("SELECT * FROM contact where name like '%".$q."%'");


$result = array();
foreach ($query as $key) {
	if (strpos(strtolower($key), $q) !== false) {
		array_push($result, array("id"=>$key->id, "label"=>$key->phone_number, "value" => strip_tags($key->name)));
	}
	if (count($result) > 11)
		break;
}

echo json_encode($result);
?>