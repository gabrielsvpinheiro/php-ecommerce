<?php

namespace App;

use Monolog\Handler\StreamHandler;
use Monolog\Level;

class Logger
{
    protected \Monolog\Logger $logger;

    public function __construct()
    {
        $this->logger = new \Monolog\Logger('app');
        $this->logger->pushHandler(
            new StreamHandler(
                stream: __DIR__ . '/../storage/logs/app.log',
                level: Level::Debug));
    }

    public function log(string $message): void
    {
        $this->logger->debug($message);
    }
}