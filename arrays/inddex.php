<?php
//indexed array 
$cars = array("Volvo", "BMW","Toyoto", "Alone","Mitsubishi");

foreach($cars as $name){
    echo $name . " ";
}
echo "\n";

//associative array
$bio = array("name"=>"Peter", "age"=>35, "NID"=>"4567894286","DOB"=>"06-12-1997");

foreach($bio as $x => $value){
    echo $x . " = " . $value . "\n";
 }

?>