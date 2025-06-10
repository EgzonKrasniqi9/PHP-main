<?php
function callCounter(){
    static $count = 0;
    $count++;
    echo "The value of count variab;e is: $count <br>"
}

callCounter()
callCounter()
callCounter()
callCounter()
callCounter()
?>