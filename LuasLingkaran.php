<?php

namespace App\Math;

class LuasLingkaran{
    public const phi = 3.14;

    private int $jari;

    public function __construct($isiJari = 1) {
        $this->jari = $isiJari;
    }

    public function tampil($nama = 'ban') {
        $rumus = LuasLingkaran::phi * ($this->jari * $this->jari);
        echo "Lingkaran {$nama} ini hasil nya adalah: {$rumus}";
    }

    public static function testing() {
        echo "<br/>";
        echo "Ini testing static 😁";
    }

    public function __destruct() {
        echo "<br> udah ah capee malasssssss";
    }
}



// LuasLingkaran::testing(); //static method