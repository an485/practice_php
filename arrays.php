<?php
//turn on debugging messages
ini_set('display_errors', 'On');
error_reporting(E_ALL);

	$obj = new main();
	$band = "The Beatles";
    $members = array('Paul McCartney','John Lennon','Ringo Starr','George Harrison');
    

class main {
      private $html;
	
	
    public function __construct() {
         
		$band = "The Beatles";
        $members = array('Paul McCartney','John Lennon','Ringo Starr','George Harrison');
		
		$this->html  .= printHtml::printTitleH1('Print r array');
		$this->html .= arrayFunctions::printArray($members);
		$this->html .= printHtml::horizRule();
		$this->html .= printHtml::printTitleH1('Count Elements');
		$this->html .= arrayFunctions::countArray($members);
		$this->html .= printHtml::horizRule();
		$this->html .= printHtml::printTitleH1('descending sort function then echo index 2');
		$this->html .= arrayFunctions::rsortArray($members);
		$this->html .= printHtml::horizRule();
		$this->html .= printHtml::printTitleH1('Shuffle array');
		$this->html .= arrayFunctions::shuffleArray($members);
		$this->html .= printHtml::horizRule();
		$this->html .= printHtml::printTitleH1('Reverse Array');
		$this->html .= arrayFunctions::reverseArray($members);
		$this->html .= printHtml::horizRule();
		$this->html .= printHtml::printTitleH1('Slice 2 array');
		$this->html .= arrayFunctions::sliceArray($members);
		$this->html .= printHtml::horizRule();
		$this->html .= printHtml::printTitleH1('Push Array');
		$this->html .= arrayFunctions::pushArray($members);
		$this->html .= printHtml::horizRule();
		$this->html .= printHtml::printTitleH1('Shift Array');
		$this->html .= arrayFunctions::shiftArray($members);
		$this->html .= printHtml::horizRule();
		$this->html .= printHtml::printTitleH1('Pop Array');
		$this->html .= arrayFunctions::popArray($members);
		$this->html .= printHtml::horizRule();
		$this->html .= printHtml::printTitleH1('unShift Array');
		$this->html .= arrayFunctions::unshiftArray($members);
    }
	 public function __destruct() {
         // printHtml::printTitleH1($this->html);
		  //printHtml::printTitleH1($title);
		  printHtml::horizRule($this->html);
    }
}
  
class arrayFunctions { 
	static public function printArray($members) {
      print_r($members);
    }
	  
	static public function countArray($members) {
      echo count($members);
    }
	 static public function rsortArray($members) {
       rsort($members);
		 print_r($members);
    }
	static public function shuffleArray($members) {
       shuffle($members);
		print_r($members);
    }
	static public function reverseArray($members) {
      $members = array_reverse($members);
		print_r($members);
    }
	static public function sliceArray($members) {
      $members = array_slice($members, 2);
		print_r($members);
    }
	static public function pushArray($members) {
      array_push($members, 'Bob Sagot');
		print_r($members);
    }
	static public function shiftArray($members) {
      $next = array_shift($members);
		print_r($next);
    }
	static public function popArray($members) {
      $last = array_pop($members);
		print_r($last);
    }
	static public function unshiftArray($members) {
      array_unshift($members, 'Fred Savage');
		print_r($members);
    }
	  

  } //end class 

class printHtml {
	static public function horizRule() {
      echo '<hr>';
    }
	static public function printTitleH1($text){
		echo '<h1>' . $text . '</h1>'; 
	}
	
	
}




     


?>
