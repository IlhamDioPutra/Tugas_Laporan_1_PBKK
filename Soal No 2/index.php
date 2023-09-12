<?php
//include kelas kelas yang dibutuhkan agar bisa menjalkan OOP dibawah ini
require_once 'Produk.php';
require_once 'Komik.php';
require_once 'Game.php';
require_once 'CetakInfoProduk.php';

// Membuat objek produk dari kelas Produk dimana disini akan terlihat jenis dari produk ini belum ada nantinya
//parameter yang digunakan adalah nama dan harga.
$produk1 = new Produk("Naruto", 50000);
$produk2 = new Produk("Resident Evil", 250000);

// Membuat objek komik dari kelas Komik dimana ketika di print nantinya menggunakan Kelas Cetak dan method cetakInfo
// akan terlihat bahwa object ini akan dianggap Komik.
// Parameter yang digunakan adalah nama harga dan jumlah halaman.
$komik1 = new Komik("One Piece", 75000, 100);
$komik2 = new Komik("Dragon Ball", 60000, 80);

// Membuat objek Game dari kelas Game dimana ketika di print nantinya menggunakan Kelas Cetak dan method cetakInfo
// akan terlihat bahwa object ini akan dianggap Game.
// Parameter yang digunakan adalah nama harga dan Waktu permainan (jam).
$game1 = new Game("GTA V", 300000, 50);
$game2 = new Game("The Witcher 3", 350000, 60);

// Membuat objek untuk mencetak informasi produk
$cetakInfo = new CetakInfoProduk();

// Memanggil method getInfo dari masing-masing objek dan akan tertampil deskripsi masing masing dari object.
echo $cetakInfo->cetak($produk1) . "<br>" . "<hr>";
echo $cetakInfo->cetak($komik1) . "<br>". "<hr>";
echo $cetakInfo->cetak($game1) . "<br>". "<hr>";
echo $cetakInfo->cetak($produk2) . "<br>". "<hr>";
echo $cetakInfo->cetak($komik2) . "<br>". "<hr>";
echo $cetakInfo->cetak($game2) . "<br>". "<hr>";
?>
