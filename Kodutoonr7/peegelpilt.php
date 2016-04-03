<?php

$string = "Minu nimi on Polina";
echo "Minu tekst on: $string";
echo "</br>";
$len = strlen($string);//Return the length of the string
for($i=0; $i < $len/2; $i++) {
list($string[$i],$string[$len-$i-1]) = array($string[$len-$i-1],$string[$i]);//Assign variables as if they were an array:
}
echo "Minu tagurpidi tekst on: $string";
?>