<?php 
include_once 'updatedstring.php';

class GetAjax {

public static function getButtonValue() {
	if( $_REQUEST["selectedButtonValue"] )
  	{
    	$buttonPHP = $_REQUEST['selectedButtonValue'];
     	echo "Value button is ". $buttonPHP."<br />";
     	
     	echo GetAjax::printThis($buttonPHP)." This is in getButtonValue()<br />";
     	echo UpdatedString::printMe($buttonPHP);
  	}
}

public static function printThis($str)  
{
	return "Hey I am printThis() in GetAjax! ".$str."<br />";
}

}

GetAjax::getButtonValue();

