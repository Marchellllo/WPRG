<?php
function Liczby($a,$b,$c,$d){
    $wynik=array();
for($i=$a;$i<=$b;$i++){
    $wynik[$i]=array();
    for($j=$c;$j<=$d;$j++){
    $wynik[$i][]=$j;
    }
}
    return $wynik;
}


$a=4;
$b=1;
$c=10;
$d=5;
$WynikFunkcji=Liczby($a,$b,$c,$d);
print_r($WynikFunkcji);

?>
