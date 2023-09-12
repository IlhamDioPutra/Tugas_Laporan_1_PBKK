<?php

//Membuat class khusus untuk menampilkan informasi produk nantinya
class CetakInfoProduk {
    // Method untuk mencetak informasi produk yang mana diharuskan untuk memberikan objek dari kelas Produk sebagai argumen.
    public function cetak(Produk $produk) {
        $str = "{$produk->nama} | {$produk->getInfo()}";
        return $str;
    }
}
?>
