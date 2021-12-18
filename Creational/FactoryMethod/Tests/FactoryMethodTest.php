<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\FactoryMethod\Tests;

use DesignPatterns\Creational\FactoryMethod\CarFactory;
use DesignPatterns\Creational\FactoryMethod\BoatFactory;
use DesignPatterns\Creational\FactoryMethod\Car;
use DesignPatterns\Creational\FactoryMethod\Boat;
use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase
{
	public function testCanCreateCar()
	{
		$car = (new CarFactory)->createTransport();
		$this->assertInstanceOf(Car::class, $car);
	}

	public function testCanCreateBoat()
	{
		$boat = (new BoatFactory)->createTransport();
		$this->assertInstanceOf(Boat::class, $boat);
	}
}
