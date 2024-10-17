<?php

declare(strict_types=1);

if(!function_exists('base_path')) {
    function base_path(string $path = ''): string
    {
        return dirname(__DIR__) . DIRECTORY_SEPARATOR . $path;
    }
}

if(!function_exists('mix')) {
    function mix(string $path): string
    {
        if(!file_exists(base_path('public/mix-manifest.json'))) {
            throw new RuntimeException('The Mix manifest does not exist.');
        }

        $manifest = json_decode(file_get_contents(__DIR__ . '/../public/mix-manifest.json'), true);

        return $manifest[$path] ?? '';
    }
}

if(!function_exists('resource_path')) {
    function resource_path(string $path = ''): string
    {
        return base_path('resources' . DIRECTORY_SEPARATOR . $path);
    }
}

if(!function_exists('dd')) {
    function dd(...$args): void
    {
        echo '<pre>';

        foreach ($args as $arg) {
            var_dump($arg);
        }

        die();
    }
}

if(!function_exists('abort')) {
    function abort(int $code = 404): void
    {
        http_response_code($code);

        require resource_path('views/' . $code . '.php');

        die();
    }
}