<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use App\Models\Product;

$products = Product::all();
$title = 'My Webstore';

require __DIR__ . '/../resources/views/index.phtml';



