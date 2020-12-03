<?php

declare(strict_types = 1);


namespace App\Task1\SalePrediction;

/**
 * Basic DTO
 */
class SalePredictionDTO
{
	/** Some identifier of DTO */
	private int $id;

	private int $forecast;

	private int $sale;

	public function __construct(int $id, int $forecast, int $sale)
	{
		$this->id = $id;
		$this->forecast = $forecast;
		$this->sale = $sale;
	}

	/**
	 * @return int
	 */
	public function getId(): int
	{
		return $this->id;
	}

	/**
	 * @return int
	 */
	public function getForecast(): int
	{
		return $this->forecast;
	}

	/**
	 * @return int
	 */
	public function getSale(): int
	{
		return $this->sale;
	}
}