<?php


 // warunki 

$condition = 1;

if ($condition ===1){
    echo 'jakaś wartość';
}elseif ($condition ===2) {
    echo 'jakaś inna wartość';
}else{
    echo 'coś jeszcze innego';
}

//porównania zwracają zawsze true albo false

// == dąży do sprawdzenia czy wartości są jednakowe nie sprawdza typu

// 1 == '1' TRUE
// 1 == 2 FALSE
// 3 == 3 TRUE

// === dąży do sprawdzenia czy wartość i typ są jednakowe 
 //2 === 2 TRUE
// 3 === '3' FALSE


// > porówanie stsouj tylko do warośći liczbowych bo wynik może być różny 
// 1 > 2 FALSE
// 3 > 1 TRUE
// 'aaa' > 'bbb' ??? NIE RÓB TAK
//  
// < jak wyżej tyko w drugą strone 

//<= //jak wyżej + wartość równa 

//>=

//!= jak na początku tylko na odwrót 

// !== jw
