<?php

declare(strict_types=1);

namespace Tests\Http;

use App\Exceptions\NotFoundHttpException;
use App\Http\Router;
use PHPUnit\Framework\TestCase;

class RouterTest extends TestCase
{
    public function test_route_request()
    {
        $router = new Router([
            'pokemon' => __DIR__ . '/controllers/pokemon.php',
        ]);

        $this->assertSame(__DIR__ . '/controllers/pokemon.php', $router->direct('pokemon'));
    }

    public function test_route_not_found()
    {
        $this->expectException(NotFoundHttpException::class);

        $router = new Router([]);

        $router->direct('404');
    }
}
