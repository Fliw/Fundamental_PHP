<?php
//sy buat variabel bernama pisang dengan nilai 3, jan laper gaes
$pisang = 3;
//kita pilih yg mau kita switch, dalem hal ini, kita pilih $pisang
switch($pisang){
    //kalau pisangnya 1 eksekusi echo berikut
    //case ini bisa diganti sesuka hati, semisal case 30 dll
    case 1:
    echo "pisangnya cuma 1 nih !";
    //tiap case, wajib diakhiri dengan "break;" karna itu adalah pembatas antara case 1 dengan yg lainnya
    break;
    //kalau 2 keluarin tulisan gitu
    case 2:
    echo "pisangnya ada 2, mayann !";
    break;
    //kalau 3 keluarin kyk gini, karna pisang emg nilainya 3, maka kalimat yg keluar pasti yang dibawah ini
    case 3:
    echo "pisangnya ada 3, wuihh, auto kenyang";
    break;
    //ini adalah nilai bawaan, kalo misalkan si pisang bukan 1 2 maupun 3,
    default :
    echo "pisangnya bukan 1,2 maupun 3 :(";
    //silahkan berimprovisasi gaes !
}
?>