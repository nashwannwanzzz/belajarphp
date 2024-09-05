<?php
//    object
    class Buku {
        public $judul;
        public $penulis;

        public function __construct($judul, $penulis) {
            $this->judul = $judul;
            $this->penulis = $penulis;
        }
    }
    $BukuSaya = new Buku("PHP untuk prmula" , "jane done");
    echo "Buku: " . $BukuSaya->judul . " oleh " . $BukuSaya->penulis . "<br>";

?>