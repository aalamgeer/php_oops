<?php
include_once 'constant.php';
class User {
	public $con;
	function __construct(){
		$this->con = mysql_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD) or die(mysql_error());
		mysql_select_db(DB_DATABASE) or die(mysql_error());

	}
	
	public function userLogin($username,$password){
		$rows = mysql_num_rows(mysql_query("SELECT user_id FROM md_user WHERE user_name='".$username."' and password='".$password."'"));
		if($rows == 1){
			$_SESSION['user'] = $username;
			$_SESSION['login'] = true;
			return true;
		}else{
			return false;
		}
	}
	public function logout(){
		unset($_SESSION['user']);
		$_SESSION['login'] = false;
		session_unset();
		session_destroy();
	}
	
	public function register($uname,$uemail,$upass){
		
	}
}