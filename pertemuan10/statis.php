<?php

class ContohStatic {
    public static $angka = 1;

    public static function halo() {
        return "Halo " . self::$angka++ . " kali. <br>";
    }
}

echo ContohStatic::$angka;
echo "<br>";
echo ContohStatic::halo();
echo "<hr>";
echo ContohStatic::halo();

// class Contoh {
//     public $angka = 1;

//     public function halo() {
//         return "Halo " . $this->angka++ . " kali. <br>";
//     }
// }

// $obj1 = new Contoh;
// echo $obj1->halo();
// echo $obj1->halo();
// echo $obj1->halo();

// echo "<hr>";

// $obj2 = new Contoh;
// echo $obj2->halo();
// echo $obj2->halo();
// echo $obj2->halo();

// class Contoh {
//     public static $angka = 1;

//     public function halo() {
//         return "Halo " . self::$angka++ . " kali. <br>";
//     }
// }

// $obj1 = new Contoh;
// echo $obj1->halo();
// echo $obj1->halo();
// echo $obj1->halo();

// echo "<hr>";

// $obj2 = new Contoh;
// echo $obj2->halo();
// echo $obj2->halo();
// echo $obj2->halo();