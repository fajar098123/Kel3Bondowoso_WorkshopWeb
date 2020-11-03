<?php
$punakawan = array("Semar","Gareng","Petruk","Bagong");
echo $punakawan[0]; //hasilnya semar
echo "<br>";
echo $punakawan[3]; //hasinya bagong

$punakawan[1]="Semar";
$punakawan[2]="Gareng";
$punakawan[3]="Petruk";
$punakawan[4]="Bagong";
echo "<br>";
echo $punakawan[3]; //hasilnya petruk
echo "<br>";
$a=1;
while ($a<5) {
    echo "Urutan Setelah : ".$punakawan[$a]."<br>";
    $a++;
}

?>