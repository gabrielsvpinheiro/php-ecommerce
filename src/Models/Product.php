<?php

namespace App\Models;

class Product
{

    public static function all(): array {
        return [
            [
                'name' => 'Xbox',
                'price' => 500,
                'is_available' => true,
            ],
            [
                'name' => 'PlayStation',
                'price' => 600,
                'is_available' => false,
            ],
            [
                'name' => 'Nintendo Switch',
                'price' => 300,
                'is_available' => true,
            ],
        ];
    }
}