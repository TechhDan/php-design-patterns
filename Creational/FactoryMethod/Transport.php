<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\FactoryMethod;

interface Transport
{
	public function deliver(string $address);
}
