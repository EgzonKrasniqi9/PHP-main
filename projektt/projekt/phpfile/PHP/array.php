<?php

// $dogs=array(
//     array('chiuaua','mexico',20),
//     array('husky','siberia',15),
//     array('bulldog','england',10)
// );

// echo $dogs[0][0] . ": origin: " . $dogs[0][1] . ", life span: " . $dogs[0][2];

// for($row=0;$row<3;$row++){
//     echo "<p> <b> Row number $row </b> </p>";
//     echo "<ul>";
//     for($col=0;$col<3;$col++){
//         echo"<li>" . $dogs[$row][$col] . "</li>";
//     }
//     echo"</ul>";
// }

// $arrays=array(
//     array(1,2,3),
//     array(1,2,3),
//     array(1,2,3)
// );

// for($i=1;$i<4;$i++){
//     for($j=1;$j<4;$j++){
//         echo "array: $i element $j <br>";
//     }
// }

// for($i=1;$i<5;$i++){
//     for($j=1;$j<=$i;$j++){
//         echo "*";
//     }
//     echo '<br>';
// }

$grade=array(
    'math'=> '3' ,
     'art'=>'5' , 
     'history' => '4' , 
     'music' => '4'
);
// echo "math grade is " . $grade ['math'];

foreach ($grade as $subject=>$grade){
    echo "subject: " . $subject . ", grade: " . $grade;
    echo "<br>";
}
?>