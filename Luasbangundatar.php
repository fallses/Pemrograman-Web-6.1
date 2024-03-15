<?php

    interface hitungLuas {
        public function hitungLuas();
    }

    class Persegi implements hitungLuas {
        private $sisi;

        public function __construct($sisi) {
            $this->sisi = $sisi;
        }

        public function hitungLuas() {
            return $this->sisi * $this->sisi;
        }
    }

    class Segitiga implements hitungLuas {
        private $alas;
        private $tinggi;

        public function __construct($alas, $tinggi) {
            $this->alas = $alas;
            $this->tinggi = $tinggi;
        }

        public function hitungLuas() {
            return (1/2) * $this->alas * $this->tinggi;
        }
    }

    class Lingkaran implements hitungLuas {
        private $radius;

        public function __construct($radius) {
            $this->radius = $radius;
        }

        public function hitungLuas() {
            return pi() * $this->radius * $this->radius;
        }
    }

    // Objek dari masing-masing kelas
    $persegi = new Persegi(5);
    $segitiga = new Segitiga(4, 6);
    $lingkaran = new Lingkaran(5);

    // Menampilkan hasil perhitungan luas
    echo "Luas Persegi: " . $persegi->hitungLuas() . "\n";
    echo "Luas Segitiga: " . $segitiga->hitungLuas() . "\n";
    echo "Luas Lingkaran: " . $lingkaran->hitungLuas() . "\n";

?>