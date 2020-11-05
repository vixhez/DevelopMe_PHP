<?php

namespace App\Stuff\Things;

class Potato
{
    private $water = 0;

    public function water()
    {
        $newWater = $this->water += 1;
        dump($newWater . " water");
    }

    public function hasGrown() : bool
    {
        return $this->water >= 5 ? true : false;
    }
}