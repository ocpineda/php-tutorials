<?php 

class GetAjax {



	public static function getButtonValue(){
		if( $_REQUEST["selectedButtonValue"] )
	  	{
	     $buttonPHP = $_REQUEST['selectedButtonValue'];
	     echo "Value button is ". $buttonPHP;
	  	}
	}

}

GetAjax::getButtonValue();

