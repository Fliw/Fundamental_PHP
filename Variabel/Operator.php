<?
$x=10;
$y=8;
//operator aritmatika
//operator tambah
echo "-----------------------Aritmatika-----------------------------<br>";
echo $x+$y."<br>";
//kurang
echo $x-$y."<br>";
//kali
echo $x*$y."<br>";
//bagi
echo $x/$y."<br>";
//sisa hasil bagi / modulus
echo $x%$y."<br>";
echo "------------------------Assignment----------------------------<br>";
//operator assignment/penempatan
//tambah, skrg var x bernilai 18
echo $x+=$y;
echo "<br>";
//kurang,skrg var x bernilai 10 lagi karna dikurang si y yg bernilai 8
echo $x-=$y;
echo "<br>";
//bagi, skrg var x bernilai 10, dibagi 8 menjadi 1.25
echo $x/=$y;
echo "<br>";
//kali, si x sudah menjadi 1.25 akibat pembagian tadi, skrg dikali 8 menjadi 10
echo $x*=$y;
echo "<br>";
//modulus, setelah dikali 8 tadi, skrg kita cari sisa hasil bagi dari 10 tadi dengan 8, hasilnya 2
echo $x%=$y;
echo "<br>";
//increment, digunakan untuk menambah nilai 1 untuk variabel
$x++;
echo $x;
echo "<br>";
//decrement, digunakan untuk mengurang nilai 1 untuk variabel
$x--;
echo $x;
echo"<br>";
echo "------------------------Pembanding----------------------------<br>";
//operator pembanding
//karna telah dioprek saat operator penempatan tadi, kita redeklarasi ulang lagi nilai variabelnya
$x=10;
$y=8;
//var dump adalah fungsi untuk melihat hasil dari berbagai operasi variabel (yg unvisible)

//apakah x sama dengan y?
echo var_dump($x==$y)."<br>";
//apakah x sama dengan y Termasuk tipe datanya sama?
echo var_dump($x===$y)."<br>";
//apakah x tidak sama dengan y
echo var_dump($x!=$y)."<br>";
//apakah x lebih besar dari y
echo var_dump($x>$y)."<br>";
//apakah x lebih kecil dari y
echo var_dump($x<$y)."<br>";
//apakah x lebih besar atau setara dengan y
echo var_dump($x>=$y)."<br>";
//apakah x lebih kecil atau setara dengan y
echo var_dump($x<=$y)."<br>";
echo "------------------------Logikal---------------------------------<br>";
//kita redeklarasi lagi ya, biar gk capek capek scroll keatas buat tau nilainya wkwkwk :v
$x=10;
$y=8;
//Jika x True DAN y True, maka dia akan jadi true, dan akan mengeluarkan tulisan Ntaps, Jika False Keluarkan Tulisan Hilih
//keduanya harus true agar menghasilkan nilai true
//selain AND,bisa juga pake &&
if ($x == 10 AND $y == 8) {
    echo "Ntaps<br>";
}
else {
    echo "Hilih<br>";
}
//keduanya harus true salah satu untuk menghasilkan nilai true, keduanya juga boleh
//selain OR, bisa juga pake ||
if ($x == 10 OR $y == 8) {
    echo "Ntaps<br>";
}
else {
    echo "Hilih<br>";
}
//keduanya harus ada yg true salah satu, tapi kalau 2 2 nya true, jadi false nilainya
if ($x == 10 XOR $y == 8) {
    echo "Ntaps<br>";
}
else {
    echo "Hilih<br>";
}
// ! merupakan kalimat NOT
// akan dapat nilai true ketika si x itu bukan 9, jika x 10 maka false, karna si x emg 10 :v
if ($x != 9) {
    echo "Ntaps<br>";
}
else {
    echo "Hilih<br>";
}
//silahkan berimprovisasi gaes !

?>