<?php

declare(strict_types=1);

require __DIR__ . "/../../vendor/autoload.php";

use Framework\App;
use App\Controllers\HomeController;

$app = new App();

// add routes
$app->get('/', [HomeController::class, 'home']);


return $app;