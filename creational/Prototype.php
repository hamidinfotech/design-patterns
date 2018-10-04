<?php
/**
 * Created by PhpStorm.
 * User: h.hosseini
 * Date: 10/4/2018
 * Time: 10:20 AM
 */

class Sheep
{
    protected $name;
    protected $category;

    /**
     * Sheep constructor.
     * @param string $name
     * @param string $category
     */
    public function __construct(string $name, string $category = 'Mountain Sheep')
    {
        $this->name = $name;
        $this->category = $category;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getCategory(): string
    {
        return $this->category;
    }

    /**
     * @param string $category
     */
    public function setCategory(string $category)
    {
        $this->category = $category;
    }

}


$original = new Sheep('Dolly');
echo $original->getName();
echo $original->getCategory();

$cloned = clone $original;
$cloned->setName('Jolly');
echo $cloned->getName();
echo $cloned->getCategory();