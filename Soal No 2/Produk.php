<?php

//Membuat kelas dengan nama produk yang mana kelas ini adalah kelas dasar yang akan menginheritance anak kealsnya yaitu kelas komik dan game 
//nantinya
class Produk {
    // Membuat properties dengan nama $nama dan $harga
    public $nama;
    public $harga;

    // Membuat method constructor yang mana jika membuat objek dengan kelas ini maka akan langsung terpanggil konstruk ini sebagai setelan default
    public function __construct($nama, $harga) {
        $this->nama = $nama;
        $this->harga = $harga;
    }

    // Membuat method untuk menampilkan informasi dari Komik dengan mengoverride getInfo dari kelas parent dan kemudian ditambahkan dengan
    //dengan menampilkan Harga dari komik tersebut.
    public function getInfo() {
        return "Nama: {$this->nama}, Harga: Rp {$this->harga}";
    }
}
?>
