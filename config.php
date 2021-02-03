<?php

declare(strict_types=1);

return [
    'driver' => $_ENV['DATABASE_Driver'],
    'host' => $_ENV['DATABASE_HOST'],
    'database' => $_ENV['DATABASE_DATABASE'],
    'username' => $_ENV['DATABASE_USERNAME'],
    'password' => $_ENV['DATABASE_PASSWORD']
];
