<?php
//turn on debugging messages
ini_set('display_errors', 'On');
error_reporting(E_ALL);


$obj = new main();
//$title = __FUNCTION__;


  class main {
         private $html;
	     
	  
    public function __construct() {
        $name = 'Paul McCartney';
		$quote = "\"Live & Let Die\"";
		//$title = print(__FUNCTION__);
		//$title = __FUNCTION__;
		//$Cap = stringFunctions::$title;
		
		//$this->html = stringFunctions::printTitle();
		$this->html  .= printHtml::printTitleH1('Print String');
		$this->html .= stringFunctions::printString($quote);
		$this->html .= printHtml::horizRule();
		$this->html .= printHtml::printTitleH1('Lower Strings');
		$this->html .= stringFunctions::lowerStrings($quote);
		$this->html .= printHtml::horizRule();
		$this->html .= printHtml::printTitleH1('Upper Strings');
		$this->html .= stringFunctions::upperStrings($name);
		$this->html .= printHtml::horizRule();
		$this->html .= printHtml::printTitleH1('Echo String');
		$this->html .= stringFunctions::echoString($name, $quote);
		$this->html .= printHtml::horizRule();
		$this->html .= printHtml::printTitleH1('Sub String Replace');
		$this->html .= stringFunctions::echoStrings($name, $quote);
		$this->html .= printHtml::horizRule();
		$this->html .= printHtml::printTitleH1('Repeat Strings');
		$this->html .= stringFunctions::lastStrings($quote);
		$this->html .= printHtml::horizRule();
		$this->html .= printHtml::printTitleH1('Reverse Strings');
		$this->html .= stringFunctions::revStrings($quote);
		$this->html .= printHtml::horizRule();
		$this->html .= printHtml::printTitleH1('Lower Case First String');
		$this->html .= stringFunctions::lcfStrings($name);
		$this->html .= printHtml::horizRule();
		$this->html .= printHtml::printTitleH1('String Length');
		$this->html .= stringFunctions::lenStrings($name);
		$this->html .= printHtml::horizRule();
		$this->html .= printHtml::printTitleH1('Shuffle String');
		$this->html .= stringFunctions::repStrings($name);
		}	 
    
	  public function __destruct() {
         // printHtml::printTitleH1($this->html);
		  //printHtml::printTitleH1($title);
		  printHtml::horizRule($this->html);
    }
  } //end class main

class stringFunctions {
      // public $title = __FUNCTION__;
	    
	//static public function printTitle($title) {
	//	echo $title;
    // }
	static public function printString($text) {
   //$title = print(__FUNCTION__);
	//	echo $title;
    print($text);
	
    }
static public function echoString($name, $quote) { 
 echo $name . ' wrote the song ' . $quote;
    }
	static  public function echoStrings($name, $quote) {
      echo $name . ' did NOT write the song ' . substr_replace($quote, ' Live', 12, 3);
    }
	static public function upperStrings($quote) {
      return print strtoupper($quote);
    }
	static public function lowerStrings($quote) {
      echo strtolower($quote);
    }
   static public function revStrings($quote) {
      echo strrev($quote);
    }
	static public function lcfStrings($name) {
      echo lcfirst($name);
    }
	static  public function repStrings($name) {
      echo str_shuffle($name);
    }
	  
	static public function lenStrings($name) {
      echo strlen($name);
    }
	static public function lastStrings($quote) {
      echo str_repeat($quote, 10);
    }
	  
} //end stringFunctions


class printHtml {
	static public function horizRule() {
      echo '<hr>';
    }
	static public function printTitleH1($text){
		echo '<h1>' . $text . '</h1>'; 
	}
	
	
}




?>
