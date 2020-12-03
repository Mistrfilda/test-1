<?php

declare(strict_types = 1);


namespace App\Task1\SalePrediction;


use App\Task1\Method\IPredictionAccuracyMethod;
use App\Task1\Method\IPredictionAccuracyResult;


/**
 * Service, which takes interface of prediction method in constructor and then contains simple calculate method, this is meant to be used in DI container for example (in nette DI IPredictionAccuracyMethod should get autowired)
 */
class SalePredictionService
{
	private IPredictionAccuracyMethod $predictionAccuracyMethod;

	public function __construct(IPredictionAccuracyMethod $predictionAccuracyMethod)
	{
		$this->predictionAccuracyMethod = $predictionAccuracyMethod;
	}

	public function calculate(SalePredictionDTO $salePredictionDTO): IPredictionAccuracyResult
	{
		return $this->predictionAccuracyMethod->calculate($salePredictionDTO);
	}
}