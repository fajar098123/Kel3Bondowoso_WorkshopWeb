<?php
$punakawan = array("Semar","Gareng","Petruk","Bagong");
echo $punakawan[0];
echo "<br>";
echo $punakawan[3];
echo "<br>";

$punakawan[1]="Semar";
$punakawan[2]="Gareng";
$punakawan[3]="Petruk";
$punakawan[4]="Bagong";
$p=0;
while($p<5) {
    echo "Index ke ".$p." adalah :".$punakawan[$p]."<br>";
    $p++;
}
foreach ($punakawan as $index => $value) {
    echo $value;
}
?>