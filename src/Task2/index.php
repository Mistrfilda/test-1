<?php

declare(strict_types = 1);


use App\Task2\NumberService;


require 'vendor/autoload.php';


$numberService = new NumberService();

for ($i = 1; $i <= 100; $i++) {
	echo $numberService->getNumberLabel($i);
	echo PHP_EOL;
}

exit();