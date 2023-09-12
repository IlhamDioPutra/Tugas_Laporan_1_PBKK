<?php

//Membuat kelas dengan nama Game yang mana mengambil properties dan method dari kelas parent nya yang mana disini parent nya adalah Produk.
class Komik extends Produk {
    // Membuat properties yang khusus untuk Komik yang akan membedakan dengan kelas lainnya yaitu produk Game.
    public $jumlahHalaman;

    // Membuat method construct yang hampir sama di produk tadi,hanya saja disini menambahkan fungsi baru yaitu 
    //menambahkan properties $jumlahHalaman ke dalamnya
    public function __construct($nama, $harga, $jumlahHalaman) {
        parent::__construct($nama, $harga);
        $this->jumlahHalaman = $jumlahHalaman;
    }

    // Override method getInfo
    public function getInfo() {
        return "Komik: " . parent::getInfo() . ", Jumlah Halaman: {$this->jumlahHalaman}";
    }
}
?>
