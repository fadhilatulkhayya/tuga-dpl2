<?php
class KeretaApiLogger {
    private $logFile;

    public function __construct($logFileName) {
        $this->logFile = fopen($logFileName, 'a');
    }

    public function catatPerjalanan($pesan) {
        $logMessage = "$pesan" . PHP_EOL;
        fwrite($this->logFile, $logMessage);
        echo $logMessage; 
    }

    public function __destruct() {
        fclose($this->logFile);
    }
}

class KeretaApi {
    private static $instance;
    private $logger;

    private function __construct($logFileName) {
        $this->logger = new KeretaApiLogger($logFileName);
    }

    public static function getInstance($logFileName) {
        if (!isset(self::$instance)) {
            self::$instance = new self($logFileName);
        }
        return self::$instance;
    }

    public function catatPerjalanan($pesan) {
        $this->logger->catatPerjalanan($pesan);
    }
}

// Contoh penggunaan singleton KeretaApi
$keretaApi = KeretaApi::getInstance('perjalanan.log');
$keretaApi->catatPerjalanan('Kereta Api mulai berangkat dari stasiun A.');
$keretaApi->catatPerjalanan('Kereta Api tiba di stasiun B.');
?>
