<?php
$price=50;// integer
$score=90.58; // double

$name= "apisitjessadaapimuk"; // string
$isvalid=false;//boolean

$price = $price+100; // 50+100;=>price =150

echo $name."<br>";
echo $isvalid."<br>";
echo $price."<br>";
echo $score."<br>";

echo "<hr>"

echo gettype($name)."<br>";
echo gettype($isvalid)."<br>";
echo gettype($score)."<br>";
echo gettype($price);

echo "<hr>";
echo "ก่อนเปลี่ยน =" .gettype($score)."<br>";
settype($score,"integer")
echo "หลังเปลี่ยน =" .gettype($score)."<br>";
?>