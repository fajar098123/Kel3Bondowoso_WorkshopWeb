<?php
/*First method to create array.*/
$numbers = array(1, 2, 3, 4, 5);
foreach( $numbers as $value )
{
    echo "Values is $value <br />";
}
echo "<br>";
/*Second method to create array.*/
$numbers[0] = "one";
$numbers[1] = "two";
$numbers[2] = "three";
$numbers[3] = "four";
$numbers[4] = "five";

foreach(Array_Reverse ( $numbers ) as $key => $value )
{
    echo "Values is $key = $value <br />";
    if ($key==4) {
    break;
    }
}
?>