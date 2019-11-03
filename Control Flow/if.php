<?php
//disini saya deklarasi sebuah variabel bernama x
//saya isi dengan nilai 30 
$x=20;
//jika si x LEBIH DARI 30 maka keluarkan kelimat "si x lebih dari 30"
if($x>30){
    echo "si x lebih dari 30";
}
//jika si x KURANG DARI 30 maka keluarkan kalimat "si x kurang dari 30"
else if ($x<30){
    echo "si x kurang dari 30";
}
//jika si x bernilai 30 pas maka keluarkan kalimat "si x emang 30"
else if ($x==30){
    echo "si x emang 30";
}
//jika gaada yang cocok sama semua yang diatas keluarkan kalimat "si x bukan ketiga tiganya"
else {
    echo "si x bukan ketiga tiga nya";
}
//silahkan berimprovisasi !
?>