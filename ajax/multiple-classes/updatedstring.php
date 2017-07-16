<?php 
include_once 'anotherClass.php';
$anotherClass = new AnotherClass();

class UpdatedString {

public static function printMe($str){
	return "I am in UpdatedString! ".$str."<---";
}

public function anotherClass(){
	return $anotherClass->printAnotherClass();
}

}

