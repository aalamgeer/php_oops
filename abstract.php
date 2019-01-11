<?php 
 abstract class aalam{   // abstract class  has no object created
	public $a = 24;
	 function name(){ 	// 
		echo "My name is aalamgeer<br>";
	}
	abstract function Age(); // abstract method can not cotain body, abstract method must be declare in child class otherwise 
								//error shows
	function education(){
		echo "B.Tech <br>";
	}
}

class child extends aalam{
	function __construct(){
		
	}
	function Age(){
		echo $this->a;
	}
	function education(){  // If any same method in abstract n chld, chld mthod will call first 
		echo "B.Tech From IT  <br>";
	}
}

$obj = new child;
$obj-> name();
$obj-> education();
$obj-> Age();
?>