<?php
/* (int)$ssoSecretKey = 129;

function decryptstring($value) {
    global $ssoSecretKey;
    $array = str_split($value);
	//print_r($array);exit;
    $return_string = "";
    foreach ($array as $char) {
        $return_string = $return_string . chr((ord($char) ^ $ssoSecretKey));
    }
    return $return_string;
}

$str = utf8_decode("ÀÍÒÕÎÌ");
$res = decryptstring($str);
echo $res; */


interface abhishek{ // NOTE *Interface can't instantiated, is has no properties only method declaration (without body) 
	function nature();
}


class aalam implements abhishek {
	function nature(){
		echo "AalamGeer is angry ";
	}
}

$obj = new aalam();
$obj->nature();
?>