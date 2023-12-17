<?php
//echo ('hello aku bintang');
// ini komen

// $nilai1 = 100;
// $nilai2 = 20;
// // echo "nilai1 - nilai 2 = " . $nilai1 - $nilai2;

// //if else
// if (($nilai1 != 10 && $nilai2 == 20) || ($nilai1 + $nilai2) == 20){
//     //code
//     echo "Nilai benar itu 30 = " . $nilai1 + $nilai2;
// }   else {
//     //code
//     echo "Nilai salah";
// }

// $nilaiAwal = 0;
// $nilaiAkhir = 10;
// // perulangan
// //while
// while ($nilaiAwal <= $nilaiAkhir){
//     echo 'nilai awal = ' . $nilaiAwal .'<br>';
//     $nilaiAwal += 1;
// }
// $nilaiAwal = 0;

// //for
// for ($i = 0; $i <= 10; $i++){
//     echo 'loop ke = '. $i.'<br>';
//     $i += 4;
// }

// //do-while
// $nilaiAwal = 0;
// $nilaiAkhir = 10;
// do {
//     echo 'jalankan sekali aja' .'<br>' . $nilaiAwal;
//     $nilaiAwal += 1;
// } while ($nilaiAwal <= $nilaiAkhir);

// //array
// $array = ["data1", "data2", "data3"];
// $array2 = array ("A", "B", "C");

// // index adalah sebuah alamat dari data yang ada di dalam array. dimulai dari 0

// /*
// echo $array[0];
// echo '<br>' . '<br>';
// echo $array2[1];
// echo '<br> <br>';
// echo $array2[2];
// */

// // perulangan for buat array

// for ($i = 1; $i < sizeof($array2); $i++){
//     echo $array2[$i];
//     echo '<br>';
// }

// // perulangan for buat array kosong
// // loop input
// $nilai = array();
// for ($i = 0; $i < 20 ; $i++){
//     $nilai[$i] = $i +24;
// }

// // loop output
// for ($i = 0; $i < sizeof($nilai); $i++){
//     echo $nilai[$i];
//     echo '<br>';
// }

// // function
// function sayHello(){
//     echo 'hello';
// }
// sayHello();

// // function dengan parameter

// function namaku($nama, $npm){
//     echo 'hello '. $nama . $npm;
// }
// namaku('Bintang', 21120016);


// // === sama dengan 3
// $variableA = 0;
// $variableB = "0";
// if($variableA == "0" || $variableB === 0){
//     echo 'benar';
// }else{
//     echo 'salah';
// }
echo "MEMBUAT FUNCTION-FUNCTION DENGAN PHP";
for ($i = 0; $i <= 2; $i++){
    echo '<br>';
    
}

//reverse string function
function balik($string) {
    $length = strlen($string);
    $stringKebalikan = '';
    
    for ($i = $length - 1; $i >= 0; $i--) {
        $stringKebalikan .= $string[$i];
    }
    
    return $stringKebalikan;
}

// Output
$string = "Aku Bintang!";

echo balik($string);

echo "<br>";

#Luas segitiga siku siku
# L = 1/2 * alas * tinggi
function luasSegitigaSikuSiku($alas, $tinggi) {
    $luas = 0.5 * $alas * $tinggi;
    return $luas;
}

#output
$alas = 10;
$tinggi = 47;

echo "Luas segitiga siku-siku dengan alas $alas dan tinggi $tinggi adalah:" . luasSegitigaSikuSiku($alas, $tinggi);

echo "<br>";

#MENCARI NILAI TERBESAR

function nilaiTerbesarr($array) {
    return max($array);
}

// Output
$array = [10, 5, 8, 20, 15];
$nilai_terbesar = nilaiTerbesarr($array);

echo "Nilai terbesar dalam array adalah: " . nilaiTerbesarr($array);

#BILANGAN GANJIL
function tampilkanBilanganGanjil($array) {
    $bilangan_ganjil = [];
    
    foreach ($array as $nilai) {
        if ($nilai % 2 !== 0) {
            $bilangan_ganjil[] = $nilai;
            echo $nilai . " ";
        }
    }
    
    return $bilangan_ganjil;
}

// Output
$array = [1, 2, 3, 4, 5, 6, 7, 8, 9];

echo "Bilangan ganjil dalam array: ";
tampilkanBilanganGanjil($array);

echo "<br>";

#BILANGAN FIBONACCI
function fibonacci($n) {
    if ($n == 0) return 0;
    elseif ($n == 1) return 1;
    else return (fibonacci($n - 1) + fibonacci($n - 2));
}

// Output
$batas = 10; // Misal batas deret Fibonacci adalah 10

echo "Deret Fibonacci hingga batas $batas: ";
for ($i = 0; $i < $batas; $i++) {
    echo fibonacci($i) . " ";
}

echo "<br>";

#GABUNG 2 ARRAY FUNCTION
function gabungDuaArray($array1, $array2) {
    $gabungan_array = array_merge($array1, $array2);
    return $gabungan_array;
}

// Output
$array_a = [1, 2, 3];
$array_b = [4, 5, 6];

$gabungan = gabungDuaArray($array_a, $array_b);

echo "Hasil penggabungan dua array: ";
print_r($gabungan);

for ($i = 0; $i <= 4; $i++){
    echo '<br>';
    
}
echo 'terimakasih banyak';
?>