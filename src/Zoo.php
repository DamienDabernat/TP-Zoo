<?php

namespace App;

use App\Interfaces\CanFly;
use App\Interfaces\CanSwim;
use App\Interfaces\CanWalk;
use Exception;

class Zoo
{

    /**
     * @var Enclosure
     */
    private Enclosure $aquarium;

    /**
     * @var Enclosure
     */
    private Enclosure $aviary;

    /**
     * @var Enclosure
     */
    private Enclosure $fence;

    public function __construct()
    {
        $this->aquarium = new Enclosure();
        $this->fence = new Enclosure();
        $this->aviary = new Enclosure();

    }


    /**
     * @return Enclosure
     */
    public function getAquarium(): Enclosure
    {
        return $this->aquarium;
    }

    /**
     * @return Enclosure
     */
    public function getAviary(): Enclosure
    {
        return $this->aviary;
    }

    /**
     * @return Enclosure
     */
    public function getFence(): Enclosure
    {
        return $this->fence;
    }

    /**
     * @throws Exception
     */
    public function addAnimal(Animal $animal) {
        switch ($animal) {
            case $animal instanceof CanFly:
                $this->aviary->addAnimal($animal);
                break;
            case $animal instanceof CanWalk:
                $this->fence->addAnimal($animal);
                break;
            case $animal instanceof CanSwim:
                $this->aquarium->addAnimal($animal);
                break;
            default:
                throw new Exception("We are not able to store this animal");
        }
    }

    public function visitZoo() {
        if(sizeof($this->getAviary()) != 0){
            echo "Available animal in Aviary : " . PHP_EOL;
            echo $this->getAviary().PHP_EOL;
        }

        if(count($this->getFence()) != 0){
            echo "Available animal in Fence : " . PHP_EOL;
            echo $this->getFence().PHP_EOL;
        }

        if(sizeof($this->getAquarium()) != 0){
            echo "Available animal in Aquarium : " . PHP_EOL;
            echo $this->getAquarium().PHP_EOL;
        }

    }
}