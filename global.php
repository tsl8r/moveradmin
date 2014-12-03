<?php
//////////////////////////////////////////
// 
//			global.php
//		General Global File for moverAdim
//
//			Mitch Facer
//			August 2014
//
//////////////////////////////////////////
session_start();
if(!isset($_SESSION['userid']) && !strpos($_SERVER['REQUEST_URI'],'welcome')){
	header('Location:/welcome');
	die;
}
error_reporting(0);
include_once "plugins/krumo/class.krumo.php";

// DB settings
if($_SERVER['REMOTE_ADDR']=='127.0.0.1' || $_SERVER['HTTP_HOST']=='localhost'){
	$db = new mysqli('localhost', 'root', '');
	$_SERVER['DOCUMENT_ROOT']='/moveradmin/';
}
elseif($_SERVER['HTTP_HOST']=='moveradmin.com'){
	$db = new mysqli('localhost', 'root', '#Mountain72');
	$_SERVER['DOCUMENT_ROOT']='/';
	//error_reporting(1);
}
else{ //other server info here
}

if($db->connect_errno > 0){
	die('Unable to connect to database [' . $db->connect_error . ']');
}

include_once "functions.php";
