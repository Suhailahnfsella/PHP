<?php

// OPERATOR MATEMATIKA

$a = 2;
$b = 2;

$c = $a + $b;
echo $c . '<br>';

$c = $a - $b;
echo $c . '<br>';

$c = $a * $b;
echo $c . '<br>';

$c = $a / $b;
echo floor($c) . '<br>';

$c = $a % $b;
echo $c . '<br>';

// OPERATOR LOGIKA

$c = $a < $b;
echo $c . '<br>';

$c = $a > $b;
echo $c . '<br>';

$c = $a == $b;
echo $c . '<br>';

$c = $a != $b;
echo $c . '<br>';

// INCREMENT 
$a++;
echo $a . '<br>';

// DICREMENT
$a--;
echo $a . '<br>';

// OPERATOR STRING
$kata = 'Sura';
$kota = 'Baya';

$hasil = $kata . $kota;

$hasil .= ' Kota Pahlawan';
echo $hasil;
