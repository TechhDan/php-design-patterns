<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\FactoryMethod;

class Car implements Transport
{
	public function deliver(string $address)
	{
		echo "drive to address $address";
	}
}
