<?php
//disini saya deklarasi array berisi 3 elemen yaitu pisang jambu dan melon dengan nama array buah
$buah= array('pisang','jambu','melon');
//untuk SETIAP array buah sebagai var b
//jadi setiap element dari si array akan dikeluarkan dan digabung dengan kalimat Dibawah ini
foreach($buah as $b){
    //si var b berisi SETIAP Element dari array, Ditambah beberapa string
    echo $b." Itu Manis !<br>";
    //jadi foreach itu ialah fungsi untuk Menata array agar rapih dan dapat dimanipulasi !
}
?>