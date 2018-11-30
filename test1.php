<?php

//napisz 4 zmnienne z różnyumi typami danych (wy tym array
$musicType = array('metal','blues');
$Imiona = array("aa","bb",'cc');
$nazwiska = array('ab','ac');
$szczęśliwyNumerek = array('abc','abd');
$miasto = "tt";
$kraj = "zz";
//echo $kraj;
//echo $kraj.$miasto;
//echo $musicType[1];
$musicType[]='jazz';
//echo $musicType[2];


//wyświetl ile indeksów jest w zmiennej imiona
echo count($Imiona);
echo count($musicType);

