<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//poniżej zadeklaruj funkcję o nazwie hello która nie przyjmuje żadnych argumentów 
//i wyświetla na ekranie powitanie
function hello(){
    echo 'Witaj';
}

//poniżej zadeklaruj funkcję niceToMeet przujmującą jeden argunet $name i wyświetlającą tekst miło cię widzieć oraz poadne imię 
function niceToMeet($name){
    echo 'miło cię widzieć '.$name;   
}

// poniżej zadeklaruj funkcję greet przyjmującą jeden argument $personName i wywołującą po kolei
//funkcje hello
//wyświetl 1 spacje 
// funkcje niceToMeet (przekaż do niej argument $personName
function great($personName){
    hello();
    echo ' ';
    niceToMeet($personName);    
}

great('Jacek');


//wywołaj funkcje greet 