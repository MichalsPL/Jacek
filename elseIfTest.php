<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//uwórz zmienną o nazwie condition i przypisz jej dowolną wartośc liczbową;
// w zależności od wartości zmiennej $condition wyświetl następujące litery 
//jeśl rowne 0 wypisz a
//jeśli mniejsze od 0 wypisz b
//jeśli jeśli większe lub równe 10 wypisz c
// w innym przypadku wypisz d
$condition = 3;
if ($condition == 0) {
    echo 'a';
} elseIf ($condition < 0) {
    echo 'b';
} elseif ($condition >= 0) {
    echo 'c';
} elseIf ($condition == 0) {
    echo 'd';
}
    

    
    


