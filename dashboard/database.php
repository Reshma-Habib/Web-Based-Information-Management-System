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

class session{
	public static function sess_init(){
		session_start();
	}

	public static function sess_set($key, $val){
		return $_SESSION[$key] = $val;
	}

	public static function sess_get($key){
		if(isset($_SESSION[$key])){
			return $_SESSION[$key];
		}
		else{
			return false;
		}
	}

	public static function sess_destroy(){
		session_unset();
		session_destroy();
	}

	public static function check($key){
		session::sess_init();
		if(session::sess_get($key)){
			header("location:index.php");
		}
	}

	public static function login($key){
		session::sess_init();
		if(!session::sess_get($key)){
			header("location: login.php");
		}
	}
}
