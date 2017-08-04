<?php
//function to connect to db
function doDB() {
	global $mysqli;
	//load configuration for u/pw
	$config = parse_ini_file('../config.ini');

	//try to connect to db
	$mysqli = mysqli_connect('localhost',$config['username'],$config['password'],$config['dbname']);

	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}
}
//function to check email address
function emailChecker($email) {
	global $mysqli, $safe_email, $check_res;

	//check that email is not already in list
	$safe_email = mysqli_real_escape_string($mysqli, $email);
	$check_sql = "SELECT id FROM subscribers WHERE email = '".$safe_email."'";
	$check_res = mysqli_query($mysqli, $check_sql)
		or die(mysqli_error($mysqli));
}

?>




