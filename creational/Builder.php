<?php
/**
 * Created by PhpStorm.
 * User: h.hosseini
 * Date: 10/3/2018
 * Time: 6:37 PM
 */

class Burger
{
    protected $size;

    protected $cheese;
    protected $pepperoni;
    protected $lettuce;
    protected $tomato;

    public function __construct(BurgerBuilder $builder)
    {
        $this->size = $builder->size;
        $this->cheese = $builder->cheese;
        $this->pepperoni = $builder->pepperoni;
        $this->lettuce = $builder->lettuce;
        $this->tomato = $builder->tomato;
    }
}

class BurgerBuilder
{
    public $size;

    public $cheese;
    public $pepperoni;
    public $lettuce;
    public $tomato;

    public function __construct(int $size)
    {
        $this->size = $size;
    }

    public function addPepperoni()
    {
        $this->pepperoni = true;
        return $this;
    }

    public function addLettuce()
    {
        $this->lettuce = true;
        return $this;
    }

    public function addCheese()
    {
        $this->cheese = true;
        return $this;
    }

    public function addTomato()
    {
        $this->tomato = true;
        return $this;
    }

    public function build(): Burger
    {
        return new Burger($this);
    }
}

$burger = (new BurgerBuilder(5))
    ->addCheese()
    ->addLettuce()
    ->addTomato()
    ->addPepperoni()
    ->build();

print_r($burger);