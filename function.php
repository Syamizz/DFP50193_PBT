<?php
$price=0;
if ($room == "Standard chalet"){
    $price = $days * 459;
}else if ($room == "Superior chalet"){
    $price = $days * 489;
}else if ($room == "Superior pool view"){
    $price = $days * 509;
}else if ($room == "Standard beach front"){
    $price = $days * 539;
}else if ($room == "Superior beach front"){
    $price = $days * 579;
}else{
    $price=0;
}