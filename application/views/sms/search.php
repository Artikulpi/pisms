<?php
$json = array();
foreach ($contact as $key) {
	$json = array(
		'label'=>$key->id,
		'value'=>$key->name
		);
	echo json_encode($json);
}
?>