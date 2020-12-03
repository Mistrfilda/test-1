<?php

declare(strict_types = 1);

use App\Task1\Method\MAPE\MAPEAccuracyMethod;
use App\Task1\Method\PredictionAccuracyException;
use App\Task1\SalePrediction\SalePredictionDTO;
use App\Task1\SalePrediction\SalePredictionService;


require 'vendor/autoload.php';

/** Keep arrays from assignment */

$forecastMonthlyResults = [185,149,153,128,138,142,0,168,154,177,260,292];
$saleMonthlyResults = [153,147,139,131,134,143,137,155,151,161,0,269];

/** Initialization of Sale prediction service */
$MAPEPredictionMethod = new MAPEAccuracyMethod();
$salePredictionService = new SalePredictionService($MAPEPredictionMethod);


foreach ($forecastMonthlyResults as $index => $forecastMonthlyResult) {
	/** Just use simple index of array, since both arrays have same number of elements */
	$inputObject = new SalePredictionDTO($index, $forecastMonthlyResult, $saleMonthlyResults[$index]);

	try {
		$resultObject = $salePredictionService->calculate($inputObject);
	} catch (PredictionAccuracyException $e) {
		echo sprintf(
			'Exception occured for index %s (forecast %s, real %s) - error message: %s',
			$index,
			$forecastMonthlyResult,
			$saleMonthlyResults[$index],
			$e->getMessage()
		);

		echo PHP_EOL;
		continue;
	}

	echo sprintf(
		'Prediction for index %s (forecast %s, real %s) === %s',
		$index,
		$forecastMonthlyResult,
		$saleMonthlyResults[$index],
		$resultObject->getResult()
	);

	echo PHP_EOL;
}

exit();

