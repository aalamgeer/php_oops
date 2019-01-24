<?php
trait hello{  //In Traits trait method ovrride the base class method, And class method ovrride trairs method
	public function sayhello(){
		echo "Hello ";
		parent::sayworld();
	}
}
trait world{
	public function sayworld(){
		echo "World ";
	}
	
}

class base{
	public function sayworld(){
		echo "World ";
	}
}

class myworld extends base {
	use hello, world;  // Multiple trait can be used by comma seprated in a class
	public function sayExclamationMark() {
        echo '!';
    }
	
}

$obj = new myworld;
$obj->sayhello();
?>