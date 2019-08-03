<?php

$cn = mysqli_connect("localhost", "root", "", "management");

function retrive($qry){
	global $cn;
	$sql = $qry;
	// print_r($sql);
	// die();
	$run = mysqli_query($cn, $sql);
	return $run;
}

function create($table, $data){
	global $cn;
	// $sql = "INSERT INTO info(fname, lname, contact) VALUES('$f', '$l', '$c')";
	$sql = "INSERT INTO ".$table."(".implode(",", array_keys($data)).") VALUES('".implode("','", array_values($data))."')";
	// print_r($sql);
	// die();
	$run = mysqli_query($cn, $sql);
	return $run;
}

function update($table, $data, $where){
	global $cn;
	// $sql = "UPDATE info SET fname='$f', lname='$l', contact = '$c' WHERE id = '$i'";
	$cols = array();
	foreach ($data as $k=>$v) {
		$cols[] = "$k='$v'";
	}
	$sql = "UPDATE ".$table." SET ".implode(",", $cols)." WHERE ".$where;
	// print_r($sql);
	// die();
	$run = mysqli_query($cn, $sql);
	return $run;
}

function delete($table, $where){
	global $cn;
	// $sql = "DELETE FROM info WHERE id = '$i'";
	$sql = "DELETE FROM ".$table." WHERE ".$where;
	// print_r($sql);
	// die();
	$run = mysqli_query($cn, $sql);
	return $run;
}
