<?php

function helloWorld (){
    echo 'hello world';
}

//helloWorld();

function printSomething($text,$cosWiecej){
    echo 'wypisałem '.$text;
}

//$a ='zzzzzzzz';
//printSomething($a,null);


function callOtherFunctions($input){
    helloWorld();
    printSomething($input,null);
}
$name = 'jakiś tekst';
callOtherFunctions($name);
