<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\SimpleFactory\Tests;

use DesignPatterns\Creational\SimpleFactory\SimpleFactory;
use DesignPatterns\Creational\SimpleFactory\Car;
use PHPUnit\Framework\TestCase;

class SimpleFactoryTest extends TestCase
{
	public function testCanCreateCar()
	{
		$car = (new SimpleFactory())->createCar();
		$this->assertInstanceOf(Car::class, $car);
	}
}
