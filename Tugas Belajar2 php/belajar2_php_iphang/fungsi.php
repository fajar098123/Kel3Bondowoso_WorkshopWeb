<?php
echo "Membuat Fungsi <br>";
function berhasil ($baik)
{
    echo "Selamat anda berhasil dengan nilai : $baik ";
 
}
function gagal($buruk)
{
    echo "Maaf Anda Gagal dengan nilai : $buruk ";
}
$nilai = 60;
if ($nilai>=75)
{ berhasil($nilai); }
else { gagal($nilai); };
echo "<br>";
echo "FUNGSI DENGAN PARAMETER<br>";
function jumlah($a,$b) //fungsi dengan 2 parameter
{ return $a+$b; } //nilai kembali (return value)
$nilai1=10;
$nilai2=15;
echo jumlah ($nilai1,$nilai2); //passing parameter
echo "<br>";
echo "FUNGSI BAWAAN<br>";
$sekarang = getdate();
print_r($sekarang); //hasilnya berupa array
echo "<br>"; //ambil elemen untuk menampilkan tanggal
echo "Sekarang Tanggal : " .$sekarang["mday"]. " " .$sekarang["month"]. " " .$sekarang["year"];
echo "<br>";
echo "Hari : " .$sekarang["weekday"];
echo "<br>";
echo "Bulan : " .$sekarang["month"];
echo "<br>";
echo "Tahun : " .$sekarang["year"];

?>