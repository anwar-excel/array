<?php

$person_info = [
    "key" => "Value",
    "name" => "Anwar Hosen",
    "cell" => "01222222",
    "email" => "anwar@gmail.com"
];

echo $person_info['key']."</br>";
echo $person_info['name']."</br>";
echo $person_info['cell']."</br>";

foreach($person_info as $single_value){
    echo $single_value."</br>";
}

?>