<?php
$numbers = array(1,2,3,4,5);
foreach($numbers as $value )
{
    echo "Value is $value <br>";
}

$numbers[0] = "one";
$numbers[1] = "two";
$numbers[2] = "three";
$numbers[3] = "four";
$numbers[4] = "five";

foreach(array_reverse($numbers) as $value )
{
    echo "Value is $value <br>";
}

foreach(array_reverse($numbers) as $key =>$value )
{
    if($key == 3) {
    break;
    }
    echo "Value is $value <br>";
}
?>