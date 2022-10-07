<?php

namespace App;

use Countable;

class Enclosure implements Countable
{

    private array $animals = [];

    public function addAnimal(Animal $animal) {
        $this->animals[] = $animal;
    }

    public function __toString()
    {
        $strEnclosure = "";
        foreach ($this->animals as $animal) {
            $strEnclosure .= "Animal : " . $animal->getName() . " Noise : " . $animal->noise() . PHP_EOL;
        }

        return $strEnclosure;
    }


    public function count(): int
    {
        return count($this->animals);
    }
}