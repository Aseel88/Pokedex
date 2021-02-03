<?php

declare(strict_types=1);

namespace Tests;

use App\Pokemon;
use PHPUnit\Framework\TestCase;

class PokemonTest extends TestCase
{
    public function test_create_pokemon()
    {
        $monster = new Pokemon(1, 'Charizard');

        $this->assertSame(1, $monster->id);
        $this->assertSame('Charizard', $monster->name);
        $this->assertSame('https://img.pokemondb.net/sprites/bank/normal/charizard.png', $monster->getImageUrl());
    }
}
