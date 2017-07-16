<?php

class GetAjax {

  public static function getButtonValue()
  {
    if( isset($_REQUEST["selectedButtonValue"]) ) {
      $buttonPHP = $_REQUEST['selectedButtonValue'];
      echo "Value button is ". $buttonPHP;
    }
  }

}

GetAjax::getButtonValue();
