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

    // Mengubah objek menjadi kertas origami
    class KertasOrigami {
        private $bangunDatar;

        public function __construct(hitungLuas $bangunDatar) {
            $this->bangunDatar = $bangunDatar;
        }

        public function buatOrigami() {
            return $this->bangunDatar->hitungLuas();
        }
    }

    $kertasPersegi = new KertasOrigami($persegi);
    $kertasSegitiga = new KertasOrigami($segitiga);
    $kertasLingkaran = new KertasOrigami($lingkaran);

    // Menampilkan hasil perhitungan luas kertas origami
    echo "Luas Kertas Origami Persegi: " . $kertasPersegi->buatOrigami() . "\n";
    echo "Luas Kertas Origami Segitiga: " . $kertasSegitiga->buatOrigami() . "\n";
    echo "Luas Kertas Origami Lingkaran: " . $kertasLingkaran->buatOrigami() . "\n";

?>