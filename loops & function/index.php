<?php

for ($i=0; $i < 10; $i++) { 
    echo $i . " ";
}
echo "\n";

function addNumbers($x, $y){
    return $x+$y;
}

echo addNumbers(6,4);
echo "\n";
echo addNumbers(65,4);
echo "\n";
echo addNumbers(6,24);

?>