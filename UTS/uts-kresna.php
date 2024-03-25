<?php 
function cetak_bintang($angka) {
    for ($i = 1; $i <= $angka; $i++) {
        for ($j=1; $j<=$i; $j++){
            echo '*';
        }
        echo "<br>";
    }
}

cetak_bintang(3);

// No 2

// Array Numerik
$nilai = array(78,85,92,67,88);

// Array Asosiatif
$siswa = array("nama" => "Kresna", "umur" => 20, "jurusan" => "Teknik Informatika" "nilai" => 90);




?>