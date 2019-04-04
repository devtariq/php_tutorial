<?php
$city = "Dhaka";
$$city = "13094 square mile ";

//echo $Dhaka;

echo "$city is the capital of bangladesh <br>";

echo "The size of  $city is  ${$city} <br>";

$price_for_friday = "Our Friday price 20% off";
$price_for_saturday = "Our Friday price 23%";
$price_for_sunday = "Sunday 30% off";
$today = "saturday";

$price_for_today = ${'price_for_'.$today};

echo $price_for_today;



?>