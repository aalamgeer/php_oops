<?php 
spl_autoload_register(function($class_name){
	if(file_exists($class_name)){
		include $class_name.'.php';
		return true;
	}
	return false;
});

$obj = new myclass1;
$obj2 = new myclass2;
?>