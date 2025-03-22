<?php
if (isset($_GET['bil1']) && isset($_GET['bil2']) && isset($_GET['operator'])) {
    $bil1 = $_GET['bil1'];
    $bil2 = $_GET['bil2'];
    $operator = $_GET['operator'];
    $hasil = 0;

    switch ($operator) {
        case '+':
            $hasil = $bil1 + $bil2;
            break;
        case '-':
            $hasil = $bil1 - $bil2;
            break;
        case '*':
            $hasil = $bil1 * $bil2;
            break;
        case '/':
            if ($bil2 != 0) {
                $hasil = $bil1 / $bil2;
            } else {
                $hasil = "Tidak dapat melakukan operasi pembagian dengan angka 0";
            }
            break;
        default:
        $hasil = "Operator tidak valid";
    }
    echo "Hasil Perhitungan = " .$hasil;
} else {
    echo "Mohon masukkan bilangan dan operator";
}
?>