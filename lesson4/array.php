<?php
// $sport1= "Football";
// $sport2= "Voleyball";
// $sport3= "Basketball";
// $sport4= "Handball";

// $sports=array ('Football','Voleyball','Basketball','Handball');

$sports=['Football','Voleyball','Basketball','Handball'];
// echo $sports[0];
// echo end($sports);
// echo count($sports);

// for($i =0; $i<4; $i++){
//     echo $sports[$i], "\n";
// }

$len = count($sports);

for($i =0; $i < $len; $i++){
    echo $sports[$i], "\n";
}

?>