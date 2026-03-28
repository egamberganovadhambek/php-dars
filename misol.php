<?php
$massiv [44,64,23,84,13,6,22];
$a= 22;
$b= 6;
$s=0;
for ($i=0; $i <count($massiv); $i++) { 
    if ($massiv($i)==$a || $massiv($i)==$b) {
       $s +=$massiv($i);
    }
    else {
           echo  $a*$b;
    }
}
echo $s;
