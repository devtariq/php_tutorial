<?php

$need = "I need help <br>";
$a = 12;
$b = 13;
function variableScope(){

    $ab = "Abdul Baten";
   echo $ab;
    echo $GLOBALS['need'];
    echo $GLOBALS['a'] + $GLOBALS['b'];

}
    variableScope();


function testStatic(){
   static $a = 0;
    echo $a;
    $a++;
}
testStatic();
testStatic();
testStatic();
testStatic();
?>