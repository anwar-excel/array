<?php

$title = $_POST['title'];


$title = $_POST['title'];
$title = $_POST['price'];
$title = $_POST['plane'];
$featurelist = $_POST['featurelist'];

$feature_count = count($featurelist);

for($i = 0; $i<$feature_count;$i++){
    echo "Feature".'<img src="add-icon.png" width="20" height="20" />'.' '.$featurelist[$i]."</br>";

}




?>

<a href="price-list.php">Price list</a>