<?php

declare(strict_types = 1);


namespace App\Task2;


class NumberService
{
	public function getNumberLabel(int $number): string
	{
		if ($number <= 1) {
			return (string) $number;
		}

		$result = '';

		if ($this->isDivisibleBy3($number)) {
			$result = 'Logio';
		}

		if ($this->isDivisibleBy5($number)) {
			$result = $result . 'Rulezzz';
		}

		if ($result !== '') {
			return $result;
		}

		return (string) $number;
	}

	private function isDivisibleBy3(int $number): bool
	{
		return $number % 3 === 0;
	}

	private function isDivisibleBy5(int $number): bool
	{
		return $number % 5 === 0;
	}
}