<?php

declare(strict_types = 1);


namespace App\Task1\Method;


/**
 * Interface for result object
 */
interface IPredictionAccuracyResult
{
	public function getResult(): float;
}