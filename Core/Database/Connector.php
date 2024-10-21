<?php

declare(strict_types=1);

namespace Core\Database;

use PDO;

class Connector
{
    public function connect(): PDO
    {
        $dsn = 'mysql:host=' . $_ENV['DB_HOST'] . ';dbname=' . $_ENV['DB_NAME'] . ';charset=utf8';
        return new \PDO($dsn, $_ENV['DB_USER'], $_ENV['DB_PASS']);
    }
}