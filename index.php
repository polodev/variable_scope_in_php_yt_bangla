<?php

//global 
//local
//static
// global, $GLOBALS

$name = 'polo dev'; //global

function hello() {
  // using global keyword
  // global $name;
  // echo $name;
  // using $GLOBALS super global 
  echo $GLOBALS['name'];
  $fruit = 'mango'; //local
  static $age = 10; // static
}

// echo $fruit;
hello();



function birthDay() {
  static $age = 1;
  echo '<br/>';
  $age++;
  echo $age;
}

birthDay();
birthDay();
birthDay();
birthDay();
birthDay();
birthDay();
birthDay();
birthDay();
birthDay();
birthDay();
birthDay();


