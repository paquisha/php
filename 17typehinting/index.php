<?php

class Tienda {
    /**
     * @var Logger
     */
    protected Logger $logger;

    /**
     * Tienda constructor.
     * @param Logger $logger
     */
    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    public function order() {
        $this->logger->create(
            "Nuevo pedido desde " . __CLASS__ . " a las " . date("H:i:s")
        );
    }
}

class Logger {
    public function create(string $message) {
        $file = fopen("order.txt", "w") or die("No puedo abrir el archivo");
        fwrite($file, $message);
        fclose($file);
    }
}

$logger = new Logger;
$tienda = new Tienda($logger);
$tienda->order();
