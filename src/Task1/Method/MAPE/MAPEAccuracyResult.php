<?php

declare(strict_types = 1);


namespace App\Task1\Method\MAPE;


use App\Task1\Method\IPredictionAccuracyResult;


class MAPEAccuracyResult implements IPredictionAccuracyResult
{
	private float $result;

	public function __construct(float $result)
	{
		$this->result = $result;
	}

	public function getResult(): float
	{
		return $this->result;
	}
}