<?php

namespace App\Animals;

use App\Animal;
use App\Interfaces\CanSwim;

class Fish extends Animal implements CanSwim
{

    public const fishNoise = "Bloublboublbou";

    public function __construct($name="poiffon")
    {
        parent::__construct($name);
    }


    protected function getNoise(): string
    {
        return self::fishNoise;
    }
}