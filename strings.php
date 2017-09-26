<?php

$obj = new main();
$name = 'Paul McCartney';
$quote = "\"Live & Let Die\"";
$obj->printString($name);
$obj->echoString($name, $quote);
$obj->echoStrings($name, $quote);
$obj->upperStrings($quote);
$obj->lowerStrings($quote);
$obj->revStrings($quote);
$obj->lcfStrings($name);
$obj->repStrings($name);
$obj->lenStrings($name);
$obj->lastStrings($quote);

  

  class main {

    public function __construct() {
		echo '<h1>Construct Function.</h1>';
        echo '<hr>';
    }

    public function printString($name) {
      echo '<h1>print function demo </h1>';
      print($name);
      echo '<hr>';
    }
public function echoString($name, $quote) { 
	echo '<h1>Echo Multiple String function</h1>';
      echo $name . ' wrote the song ' . $quote;
      echo '<hr>';
    }
	  public function echoStrings($name, $quote) {
      echo '<h1>substr replace function</h1>';
      echo $name . ' did NOT write the song ' . substr_replace($quote, ' Live', 12, 3);
      echo '<hr>';
    }
	 public function upperStrings($quote) {
      echo '<h1>Make UpperCase  function</h1>';
      echo strtoupper($quote);
      echo '<hr>';
    }
	 public function lowerStrings($quote) {
      echo '<h1>Make LowerCase  function</h1>';
      echo strtolower($quote);
      echo '<hr>';
    }

   public function revStrings($quote) {
      echo '<h1>Reverse string  function</h1>';
      echo strrev($quote);
      echo '<hr>';
    }
	public function lcfStrings($name) {
      echo '<h1>Lower case First letter function</h1>';
      echo lcfirst($name);
      echo '<hr>';
    }
	  public function repStrings($name) {
      echo '<h1>Shuffle function</h1>';
      echo str_shuffle($name);
      echo '<hr>';
    }
	  
	   public function lenStrings($name) {
      echo '<h1>String Length function</h1>';
      echo strlen($name);
      echo '<hr>';
    }
	public function lastStrings($quote) {
      echo '<h1>LAST ONE- Repeat function</h1>';
      echo str_repeat($quote, 10);
      echo '<hr>';
    }
	  
	  
	  public function __destruct() {

      echo '</br> Done';

    }


  }




?>
