<?php

declare(strict_types=1);

namespace Tests\Http;

use App\Http\Request;
use PHPUnit\Framework\TestCase;

class RequestTest extends TestCase
{
    public function test_get_uri()
    {
        $_SERVER['REQUEST_URI'] = '/pokemon?id=1';

        $this->assertSame('pokemon', Request::uri());
    }
}
