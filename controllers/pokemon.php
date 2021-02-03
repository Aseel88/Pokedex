<?php

declare(strict_types=1);

use App\Exceptions\NotFoundHttpException;
use App\Pokemon;

if (isset($_GET['id']) === false) {
    throw new NotFoundHttpException();
}

$id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);

$monster = $database
    ->select()
    ->from('pokemon')
    ->where('id', '=', $_GET['id'])
    ->first();

$pokemon = new Pokemon((int) $monster->id, $monster->name);

$title = $pokemon->name;

require view('pokemon');
