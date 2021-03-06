<?php

require __DIR__ . "/vendor/autoload.php";

class LightSwitch
{
    private $on = false;

    public function turnOn() : void
    {
        $this->on = true;
    }

    public function turnOff() : void
    {
        $this->on = false;
    }

    public function isOn() : bool
    {
        return $this->on;
    }
}

$lightSwitch = new LightSwitch();

// you can check whether it is on or not
dump($lightSwitch->isOn()); // false

// you can turn it on
$lightSwitch->turnOn();
dump($lightSwitch->isOn()); // true

// you can turn it off
$lightSwitch->turnOff();
dump($lightSwitch->isOn()); // false