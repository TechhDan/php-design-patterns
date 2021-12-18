<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\FactoryMethod;

class CarFactory implements TransportFactory
{
	public function createTransport(): Transport
	{
		return new Car;
	}
}
