<?php
    interface hitungLuas {
        public function hitungLuasPersegi();
        public function hitungLuasSegitiga();
        public function hitungLuasLingkaran();
    }
    
    class Luas implements hitungLuas {
        public $sisi;

        public function __construct($sisi) {
            $this->sisi = $sisi;
        }

        public function hitungLuasPersegi() {
            return $this->sisi * $this->sisi;
        }

        public function hitungLuasSegitiga() {
            return (1/2) * $this->sisi * $this->sisi;
        }

        public function hitungLuasLingkaran() {
            return pi() * ($this->sisi/2) * ($this->sisi/2);
        }
    }

    // Contoh penggunaan:
    $sisi = 5;
    $luas = new Luas(5);
    echo "Luas persegi: " . $luas->hitungLuasPersegi() . "\n";
    echo "Luas segitiga: " . $luas->hitungLuasSegitiga() . "\n";
    echo "Luas lingkaran: " . $luas->hitungLuasLingkaran() . "\n";
?>