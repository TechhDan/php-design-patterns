<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\SimpleFactory;

class SimpleFactory
{
	public function createCar(): Car
	{
		return new Car;
	}
}
