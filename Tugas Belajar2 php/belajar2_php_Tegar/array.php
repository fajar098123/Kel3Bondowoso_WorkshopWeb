<?php
$punakawan = array("Semar","Gareng","Petruk","Bagong");
echo $punakawan[0]; //Hasilnya semar
echo "<br>";
echo $punakawan[3]; //Hasilnya Bagong
echo "<br>";
$punakawan[1]="Semar";
$punakawan[2]="Gareng";
$punakawan[3]="Petruk";
$punakawan[4]="Bagong";
echo $punakawan[3]; //Hasilnya Petruk
echo "<br>";
$p=1;
while($p <=4) {
    echo "Looping while ke :" .$punakawan[$p]. "<br>";
    $p++; 
}
?>