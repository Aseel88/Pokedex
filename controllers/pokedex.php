<?php

declare(strict_types=1);

use App\Pokemon;

$title = 'Pokédex';

$monsters = $database
    ->select()
    ->from('pokemon')
    ->get();

$pokemon = array_map(function ($monster) {
    return new Pokemon((int) $monster->id, $monster->name);
}, $monsters);

require view('pokedex');
