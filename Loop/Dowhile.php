<?php
//kita deklarasi variabel  x bernilai 1
$x=1;
//do while adalah loop YANG DIJALANKAN SETIDAKNYA 1 KALI Walaupun Kondisinya tidak terpenuhi.
do {
    //kan tadi var x bernilai 1, ditambah 1 lagi jadi 2
    //seengaknya perintahnya dijalanin SEKALI AJA Walau kondisi tidak terpenuhi
    $x++;
} 
//ini adalah kondisi, walaupun si x nggk lebih dari 4, operasi loop dijalanin minimal sekali
while($x>=4);
//kita output nilai var x yg udah di do while tadi
echo $x;
?>