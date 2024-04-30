<?php
require_once 'Buah.php';
class Jeruk implements Buah {
    public function gambar() {
        echo "Buah duren rasanya enak sekalii <br>" ;
    }
    public function foto() {
        echo "Buah manggis sangat manis <br>";
    }
}