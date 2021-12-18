<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\FactoryMethod;

class Boat implements Transport
{
	public function deliver(string $address)
	{
		echo "ride the seas to address $address";
	}
}
