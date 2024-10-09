<?php

declare(strict_types=1);

namespace App;

class Greetings
{
    public function sayHello(string $name): string
    {
        return "Hello, $name!";
    }
}