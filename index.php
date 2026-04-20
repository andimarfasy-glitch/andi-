<?php
$nama = "andi m arfasy randika hidayat";
echo "andi m arfasy randika hidayat";

echo "<br><br>===================<br><br>";

//OPERATOR
$nilai1 = 5;
$nilai2 = 98;
$nilai3 = 9;
$nilai4 = 10;
$nilai5 = 12;

$hasil = $nilai1 + $nilai2 - $nilai3 * $nilai4 / $nilai5;

echo "Hasil dari $nilai1 + $nilai2 - $nilai3 * $nilai4 / $nilai5 adalah $hasil";


echo "<br><br>===================<br><br>";

//Percabangan 
$nilai = 70;

if($nilai >= 85){
    echo "Grade A";
} else if($nilai >= 70){
    echo "Grade B";
} else if($nilai >=50){
    echo "Grade C";
} else if($nilai >=30){
    echo "Grade D";
} else {
    echo "Grade E";
}

echo "<br><br>==========================<br><br>";

 //PERCABANGAN GANJIL GENAP
 $nilai1 = 5;
 $nilai2 = 7;
 $nilai3 = 13;
 $nilai4 = 20;
 $nilai5 = 13;
 
 $hasil = $nilai1 + $nilai2 - $nilai3  * $nilai4 /$nilai5;

 echo "hasil: $hasil <br>";
 $bulat = (int) $hasil;
 if ($bulat % 2 == 0) {
   echo "genap";
 }else{
   echo "ganjil";
 }


?>
