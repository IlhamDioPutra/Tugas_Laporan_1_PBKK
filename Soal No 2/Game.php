<?php

//Membuat kelas dengan nama Game yang mana mengambil properties dan method dari kelas parent nya yang mana disini parent nya adalah Produk.
class Game extends Produk {
    // Membuat properties yang khusus untuk game yang akan membedakan dengan kelas lainnya yaitu Komik.
    public $waktuMain;

    // Membuat method construct yang hampir sama di produk tadi,hanya saja disini menambahkan fungsi baru yaitu 
    //menambahkan properties $waktuMain ke dalamnya

    public function __construct($nama, $harga, $waktuMain) {
        parent::__construct($nama, $harga);
        $this->waktuMain = $waktuMain;
    }

    // Membuat method untuk menampilkan informasi dari Game dengan mengoverride getInfo dari kelas parent dan kemudian ditambahkan dengan
    //dengan menampilkan waktu permainan game.
    public function getInfo() {
        return "Game: " . parent::getInfo() . ", Waktu Main: {$this->waktuMain} Jam";
    }
}
?>
