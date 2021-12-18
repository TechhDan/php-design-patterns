<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\FactoryMethod;

interface TransportFactory
{
	public function createTransport(): Transport;
}
