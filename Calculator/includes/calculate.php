<?php
declare(strict_types=1);

if(!isset($_POST["submit"])){
    header("Location:../index.php");
    exit();
}

require ("./classLoader.php");

$num1=$_POST["num1"];
$num2=$_POST["num2"];
$calOption=$_POST["calOption"];

$cal=new Cal((int)$num1,(int)$num2,$calOption);
$answer=$cal->operate();
header("Location:../index.php?num1=".$num1."&num2=".$num2."&answer=".$answer);