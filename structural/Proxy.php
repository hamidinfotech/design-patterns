<?php
/**
 * Created by PhpStorm.
 * User: h.hosseini
 * Date: 10/10/2018
 * Time: 7:18 PM
 */

namespace proxy;

interface Door
{
    public function open();
    public function close();
}

class LabDoor implements Door
{
    public function open()
    {
        echo 'opening the lab door';
    }

    public function close()
    {
        echo 'Closing the lab door';
    }
}

class SecureDoor
{
    protected $door;

    public function __construct(Door $door)
    {
        $this->door = $door;
    }

    public function open($password)
    {
        if ($this->authenticate($password))
            $this->door->open();
        else
            echo 'You are not authorized!';
    }

    private function authenticate($password)
    {
        return $password === 'pass';
    }

    public function close()
    {
        $this->door->close();
    }
}



$secureDoor = new SecureDoor(new LabDoor());
$secureDoor->open('wrong!');
$secureDoor->open('pass');
$secureDoor->close();
