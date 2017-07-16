<?php 
include_once 'updatedstring.php';

class GetAjax {

public static function getButtonValue() {
	if( $_REQUEST["selectedButtonValue"] )
  	{
    	$buttonPHP = $_REQUEST['selectedButtonValue'];
     	echo "Value button is ". $buttonPHP."<br />";
     	
     	//
     	GetAjax::printThis($buttonPHP)." This is in getButtonValue()<br />";
     	
     	UpdatedString::printMe($buttonPHP);
  	}
}


public static function printThis($str)  
{
	return "I am printThis() in class GetAjax! ".$str;
}

}



GetAjax::getButtonValue();

