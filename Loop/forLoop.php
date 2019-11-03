<?php
//loop adalah kode yang diulang terus menerus selama true sampe ketemu kondisi yang false, dia akan berhenti
//ketika loop terus terusan true gk ketemu false,dia akan jadi infinite loop, akan menjadi bahaya jika dibiarkan
//apalagi yang RAM nya kecil :v
//harus exit browser secepat mungkin

//ini contoh loop yang benar
//untuk var x diberi nilai 0, ketika si x kurang dari 10, maka x tambah 1 terus menerus
for($x=0;$x<=10;$x++){
//kita echo var x nya yg bertambah 1 per 1 tadi ditambah break, agar rapih ae
echo $x."<br>";
//silahkan berimprovisasi !
}
?>