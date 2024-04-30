<?php
require_once 'Jeruk.php';
require_once 'Apel.php';
class PabrikBuah {
    public static function dapatkanBuah($jenisBuah) {
        if ($jenisBuah == null) {
            return null;
        }
        if (strcasecmp($jenisBuah, "JERUK") == 0) {
            return new Jeruk();
        } elseif (strcasecmp($jenisBuah, "APEL") == 0) {
            return new Apel();
        }
        return null;
    }
}