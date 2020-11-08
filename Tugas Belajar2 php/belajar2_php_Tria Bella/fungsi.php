<?php
echo "MEMBUAT FUNGSI <br>";
function berhasil($hasil)
{
    echo "Selamat anda berhasil : $hasil" ;
}
function gagal()
{
    echo "Maaf anda gagal";
}
$nilai = 86;
if ($nilai>=75)
{
    berhasil($nilai);
}
else { gagal(); };
echo "<br>";
echo "FUNGSI DENGAN PARAMETER<br>";
function jumlah($a,$b) //fungsi dengan 2 parameter
{ return $a+$b; } //nilai kembali (return)
$nilai1=10;
$nilai2=15;
echo jumlah($nilai1,$nilai2); //passing parameter
echo "<br>";
echo "FUNGSI BAWAAN<br>";
$sekarang = getdate();
print_r($sekarang); //hasilnya berapa array
echo "<br>"; //ambil elemen untuk menampilkan tanggal
echo "sekarang Tanggal :" .$sekarang["mday"] .$sekarang["month"] .$sekarang["year"];
?>
