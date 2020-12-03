<?php

declare(strict_types = 1);


namespace App\Task1\Method\MAPE;


use App\Task1\Method\IPredictionAccuracyMethod;
use App\Task1\Method\IPredictionAccuracyResult;
use App\Task1\SalePrediction\SalePredictionDTO;


class MAPEAccuracyMethod implements IPredictionAccuracyMethod
{
	public function calculate(SalePredictionDTO $salePredictionDTO): IPredictionAccuracyResult
	{
		if ($salePredictionDTO->getSale() <= 0 || $salePredictionDTO->getForecast() <= 0) {
			throw new MAPEAccuracyException('Invalid input values, forecast or sale is 0');
		}

		$calculatedResult = ($salePredictionDTO->getSale() - $salePredictionDTO->getForecast()) / $salePredictionDTO->getSale();
		return new MAPEAccuracyResult($calculatedResult);
	}
}