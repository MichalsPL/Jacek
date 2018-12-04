
//<?php
//$foo = "PHP";               // Przypisz wartość "PHP" do $foo.
//$bar = &$foo;               // Przypisz referencyjnie $foo do $bar.
//$bar = "To jest $bar";      // Zmień $bar...
//echo $bar;
//echo $foo;                  // $foo też się zmieniło.
//?>


//<?php

//$tablica["imie"] = "Jan";
//$tablica["nazwisko"] = "Kowalski";
//$tablica["adres"] = "Polna 1";

//echo $tablica["imie"]." ".$tablica["nazwisko"].", ul. ".$tablica["adres"]."n";

//?>

<?php
 
$cena = array('jogurt' => '2 zł'
      , 'maslo' => '1.50 zł'
      , 'zapiekanka' => '4 zł'
      , 'gazeta'  => '5 zł');
 
foreach ($cena as $klucz => $wartosc)
   echo $klucz." -> ".$wartosc."<br>\n";
 
?>