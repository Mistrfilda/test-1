<?php

declare(strict_types = 1);


namespace App\Task1\Method;


use App\Task1\SalePrediction\SalePredictionDTO;


/**
 * Interface for prediction all prediction accuracy methods (EG. MAPE)
 */
interface IPredictionAccuracyMethod
{
	public function calculate(SalePredictionDTO $salePredictionDTO): IPredictionAccuracyResult;
}