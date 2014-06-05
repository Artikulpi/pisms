<?php
echo $group->group_name.'<br>';
foreach ($chg as $key) {
	$cehage = $key->contact_id;
	foreach ($contact as $con) {
		if($con->id == $cehage){
			echo $con->name.'<br>';
		}
	}
}
?>