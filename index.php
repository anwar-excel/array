<?php
$person_name = "Anwar";
$person_cell = "01788888";
$person_email = "Anwar@gmail.com";

echo $person_name.$person_email.$person_cell;

$person_infos = ['hadi jaman','9999','fa@gmail.com'];
 echo "<br/>".count($person_infos);
var_dump($person_infos);
;


// array তিন প্রকার;
// 1. Indexed array
// 2.Associative array
// 3.Multidimensional array


$person_info = ["Anwar Hosen","01888888","da@gmail.com"];
 var_dump($person_info);
 $info_count = count($person_info);
 echo "<br/>".$info_count;

 echo "Person Name is".$person_info[0]."<br/>";
 echo "Person Email is".$person_info[1]."<br/>";
 echo "Person Cell is".$person_info[2]."<br/>";



?>