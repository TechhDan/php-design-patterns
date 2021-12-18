<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\FactoryMethod;

class BoatFactory implements TransportFactory
{
	public function createTransport(): Transport
	{
		return new Boat;
	}
}
