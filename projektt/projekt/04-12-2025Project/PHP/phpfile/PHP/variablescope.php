<?php
 $x=5; //global variable
 $y=7;

//  function localVariable () {
//     $y = 10 ; //local variable
//     // echo $x;
//     echo $y;
//  }

//  localVariable ();
//  echo "$x";

// function sum(){
//     global $x,$y;
//     $y=$x+$y;
// }
// sum ();
// echo $y;

function callCounter () {
    static $count = 0;
    $count++;
    echo "The value of count variable is: $count <br>";   
}
callCounter();
callCounter();
 ?>