<?php

$a=90;
$b=78;
$c=99;

if($a>$b && $a>$c){
    echo( "$a is the largest number");
}elseif($b>$a && $b>$c){
    echo( "$b is the largest number");
}else{
    echo ("$c is the largest number </br>");
}

function getGreaterNumber($num1,$num2,$num3){
$a=$num1;
$b=$num2;
$c=$num3;

if($a>$b && $a>$c){
    echo( "$a is the largest number");
}elseif($b>$a && $b>$c){
    echo( "$b is the largest number");
}else{
    echo( "$c is the largest number</br>");
}
}
getGreaterNumber(299,67,888);

$userName='Rafiul';
if(ctype_alpha($userName) == 1)
{
    echo("Welcome</br>");
}
else
{
    echo("Invald username");
}

$number='o';
if(is_numeric($number)==1)
{
    echo"Sucessful";
}else{
    echo"Invalid number</br>";
}

$num=0;
if($num>0)
{
    if($num%2==0)
    {
        echo("$num is a Positive even number");
    }
    else
    {
        echo("$num is a positive odd number");
    }
}elseif($num<0)
{
    echo("$num is a Negative number");
}
else
{
    echo("$num is a nutral number</br>");
}

$userName="rafiul@gmail.com";
$password=1234;
if($userName=="rafiul@gmail.com")
{
    if($password==1234){
        echo"Successfully Login</br.";
    }else{
        echo"Your password is wrong";
    }
}else{
    echo"Your email address is wrong";
}


function payPermonth($amount=0,$year=1,$i=10){
 $amount=$amount;
 $year=$year;
 $interest=$i;
 $totalInterest=($interest/100)*$year;
 $totalInterestMoney=$amount*$totalInterest;
 $totalPayable=$amount+$totalInterestMoney;
 $permonthPayable=$totalPayable/24;

 return round($permonthPayable);

}
payPermonth(20000,1,10);

function getLoan($income,$cost,$payPermonth){
$totalincome=$income;
 $totalcost=$cost;
 $totalsaving=$totalincome-$totalcost;
if($totalsaving>$payPermonth)
{
    echo("You are eligible for Loan");
}
else{
    echo("You are not eligilbe for Loan</br>");
}
}
getLoan(10000,20000,payPermonth(50000,1,10));


