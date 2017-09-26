<?php

	$obj = new main();
	$band = "The Beatles";
    $members = array('Paul McCartney','John Lennon','Ringo Starr','George Harrison');
    
	$obj->printArray($members);
    $obj->rsortArray($members);
    $obj->countArray($members);
    $obj->shuffleArray($members);
    $obj->reverseArray($members);
    $obj->sliceArray($members);
    $obj->pushArray($members);
    $obj->shiftArray($members);
    $obj->popArray($members);
    $obj->unshiftArray($members);

class main {

    public function __construct() {
		echo '<h1>Construct Function. Arrays</h1>';
        echo '<hr>';
    }

   
	public function printArray($members) {
      echo '<h1>Print_r function</h1>';
      print_r($members);
		
      echo '<hr>';
    }
	  
	public function countArray($members) {
      echo '<h1>count elements function</h1>';
      echo count($members);
      echo '<hr>';
    }
	  public function rsortArray($members) {
      echo '<h1>descending sort function then echo index 2</h1>';
       rsort($members);
		echo $members[2];
      echo '<hr>';
    }
	public function shuffleArray($members) {
      echo '<h1>Shuffle function</h1>';
       shuffle($members);
		print_r($members);
      echo '<hr>';
    }
	public function reverseArray($members) {
      echo '<h1>Reverse function</h1>';
      $members = array_reverse($members);
		print_r($members);
      echo '<hr>';
    }
	public function sliceArray($members) {
      echo '<h1>Slice 2 function</h1>';
      $members = array_slice($members, 2);
		print_r($members);
      echo '<hr>';
    }
	public function pushArray($members) {
      echo '<h1>Push function</h1>';
      array_push($members, 'Bob Sagot');
		print_r($members);
      echo '<hr>';
    }
	public function shiftArray($members) {
      echo '<h1>Shift function</h1>';
      $next = array_shift($members);
		print_r($next);
      echo '<hr>';
    }
	 public function popArray($members) {
      echo '<h1>Pop function</h1>';
      $last = array_pop($members);
		print_r($last);
      echo '<hr>';
    }
	public function unshiftArray($members) {
      echo '<h1>unShift function</h1>';
      array_unshift($members, 'Fred Savage');
		print_r($members);
      echo '<hr>';
    }
	  
	  public function __destruct() {

      echo '</br> Done';
	

    }


  }




     


?>
