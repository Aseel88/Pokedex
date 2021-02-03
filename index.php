<?php

declare(strict_types=1);

require __DIR__ . '/bootstrap.php';

use App\Exceptions\NotFoundHttpException;
use App\Http\Request;
use App\Http\Router;

$router = new Router([
    '' => __DIR__ . '/controllers/pokedex.php',
    'pokemon' => __DIR__ . '/controllers/pokemon.php',
]);

try {
    require $router->direct(Request::uri());
} catch (NotFoundHttpException) {
    require view('404');
}
