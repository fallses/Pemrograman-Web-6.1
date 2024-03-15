<?php
    // membuat interfase Tanah
    interface Tanah
    {
        public function hitungLuas();
    }

    // membuat abstract class Bibit
    abstract class Bibit
    {
        abstract public function ditanami();
    }

    // extends Bibit dan implements Tanah
    class Lingkaran extends Bibit implements Tanah
    {
        private $jariJari;
        private $phi = 3.14;

        public function __construct($jariJari) {
            $this->jariJari = $jariJari;
        }
        // menghitung luar tanah berbentuk lingkaran
        // implements method dari interface tanah
        public function hitungLuas() {
            return $this->jariJari * $this->jariJari * $this->phi;
        }
        // tanah ditanami kopi
        // extends method dari abstract class Bibit
        public function ditanami() {
            return "Ditanami Kopi";
        }
    }
    class PersegiPanjang extends Bibit implements Tanah {
        private $panjang;
        private $lebar;
    
        public function __construct($panjang, $lebar) {
            $this->panjang = $panjang;
            $this->lebar = $lebar;
        }
    
        public function hitungLuas() {
            return $this->panjang * $this->lebar;
        }
    
        public function ditanami() {
            return "Ditanami Padi";
        }
    }
    
    $tanahAgus = new Lingkaran(3);
    $tanahChandra = new PersegiPanjang(3, 4);
    
    echo "Tanah Agus seluas " . $tanahAgus->hitungLuas() . " m2 <br>";
    echo $tanahAgus->ditanami() . "<br><br>";
    
    echo "Tanah Chandra seluas " . $tanahChandra->hitungLuas() . " m2 <br>";
    echo $tanahChandra->ditanami() . "<br>";
?>