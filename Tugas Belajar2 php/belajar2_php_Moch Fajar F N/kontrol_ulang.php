<?php
$nilai=75;
echo "CONTOH IF ELSE <br>";
if($nilai>80) { echo "Selamat anda mendapatkan grade A <br>";}
else if($nilai>70 && $nilai<=80) {echo "Selamat anda mendapatkan grade" .$nilai. "<br>";}
else {echo "Maaf anda belum dapat grade A <br>";};
echo "CONTOH SWITCH <br>";
switch($nilai) {
    case 100 : echo "Nilai yang dipilih 100 <br>";
    break;
    case 90 : echo "Nilai yang dipilih 90 <br>";
    break;
    default: echo "Nilai yang dipilih".$nilai."<br>";
} echo "CONTOH FOR <br>";
for($i=1;$i<=5;$i++) {
    echo "Looping FOR ke : ".$i."<br>";
}
echo "CONTOH WHILE <br>";
$j=5;
while($j>=1) {
    echo "Looping While ke : ".$j."<br>";
    $j--;
}
?>