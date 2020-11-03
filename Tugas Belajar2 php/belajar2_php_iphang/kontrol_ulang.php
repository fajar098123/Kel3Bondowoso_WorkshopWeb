<?php
$nilai=90;
echo "CONTOH IF ELSE <br>";
if($nilai>80) { echo "Selamat anda mendapatkan nilai A <br>";}
elseif($nilai>70 && $nilai<=80) { echo "Selamat anda mendapat nilai B <br>";}
else{ echo "Maaf anda belum mendapatkan nilai A <br>";};
echo "CONTOH SWITCH <br>";
switch($nilai) {
    case 100 :echo "Nilai yang dipilih 100 <br>";
    break;
    case 90 :echo "Nilai yang dipilih 90 <br>";
    break;
    default :echo "Nilai yang dipilih $nilai <br>";
}   echo "Contoh FOR <br>";
for($i=5;$i>=1;$i--) {
    echo "Looping FOR ke : ".$i."<br>";
}
echo "Contoh WHILE <br>";
$j=5;
while($j>=1) {
    echo "Looping While ke : ".$j."<br>";
    $j--;
}
?>