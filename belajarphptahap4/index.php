<?php 
// array
// variable yang dapat memiliki banyak nilai

// membuat array
// cara lama
$hari = array("senin", "selasa", "rabu");
// cara baru
$bulan = ["januari", "februari", "maret"];
$arr1 = [123, "satu", false];


// menampilkan array
// var_dump() / print_r()
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";


// menampilkan 1 elemen pada array
echo $arr1[0];
echo "<br>";
echo $arr1[1];
echo "<br>";
echo $arr1[2];


// menambahkan elemen baru pada array
var_dump($hari);
echo "<br>";
$hari[] = "kamis";
$hari[] = "jum'at";
var_dump($hari);
?>