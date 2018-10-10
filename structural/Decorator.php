<?php
/**
 * Created by PhpStorm.
 * User: h.hosseini
 * Date: 10/10/2018
 * Time: 6:33 PM
 */

interface Coffee
{
    public function getCost();

    public function getDescription();
}

class SimpleCoffee implements Coffee
{
    public function getCost()
    {
        return 10;
    }

    public function getDescription()
    {
        return 'Simple Coffee';
    }
}

class MilkCoffee implements Coffee
{
    protected $coffee;

    public function __construct(Coffee $coffee)
    {
        $this->coffee = $coffee;
    }

    public function getCost()
    {
        return $this->coffee->getCost() + 2;
    }

    public function getDescription()
    {
        return $this->coffee->getDescription() . ', milk';
    }
}

class WhipCoffee implements Coffee
{
    protected $coffee;

    public function __construct(Coffee $coffee)
    {
        $this->coffee = $coffee;
    }

    public function getCost()
    {
        return $this->coffee->getCost() + 5;
    }

    public function getDescription()
    {
        return $this->coffee->getDescription() . ', whip';
    }
}

class ValinnaCoffee implements Coffee
{
    protected $coffee;

    public function __construct(Coffee $coffee)
    {
        $this->coffee = $coffee;
    }

    public function getCost()
    {
        return $this->coffee->getCost() + 3;
    }

    public function getDescription()
    {
        return $this->coffee->getDescription() . ', vanilla';
    }
}



$someCoffee = new SimpleCoffee();
echo $someCoffee->getCost();
echo $someCoffee->getDescription();
echo PHP_EOL;

$someCoffee = new MilkCoffee($someCoffee);
echo $someCoffee->getCost();
echo $someCoffee->getDescription();
echo PHP_EOL;

$someCoffee = new WhipCoffee($someCoffee);
echo $someCoffee->getCost();
echo $someCoffee->getDescription();
echo PHP_EOL;

$someCoffee = new ValinnaCoffee($someCoffee);
echo $someCoffee->getCost();
echo $someCoffee->getDescription();
echo PHP_EOL;