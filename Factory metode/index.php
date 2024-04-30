<?php
require_once 'PabrikBuah.php';
$pabrikBuah = new PabrikBuah();

$buah1 = $pabrikBuah->dapatkanBuah("JERUK");
$buah1->gambar();

$buah2 = $pabrikBuah->dapatkanBuah("APEL");
$buah2->gambar();

$buah1 = $pabrikBuah->dapatkanBuah("JERUK");
$buah1->foto();

$buah2 = $pabrikBuah->dapatkanBuah("APEL");
$buah2->foto();

?>