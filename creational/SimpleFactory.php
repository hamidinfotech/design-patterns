<?php
/**
 * Created by PhpStorm.
 * User: h.hosseini
 * Date: 10/1/2018
 * Time: 5:23 PM
 */

interface Door
{
    public function getWidth(): float;
    public function getHeight(): float;
}

class WoodenDoor implements Door
{
    protected $width;
    protected $height;

    /**
     * WoodenDoor constructor.
     * @param float $width
     * @param float $height
     */
    public function __construct(float $width, float $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function getWidth(): float
    {
        return $this->width;
    }

    public function getHeight(): float
    {
        return $this->height;
    }

}

class DoorFactory
{
    public static function makeDoor($width, $height): Door
    {
        return new WoodenDoor($width, $height);
    }
}

$door = DoorFactory::makeDoor(320, 240);
echo 'Width: ' . $door->getWidth();
echo ' Height: ' . $door->getHeight();