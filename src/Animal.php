<?php

namespace App;

abstract class Animal
{

    private string $name;

    /**
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    abstract protected function getNoise() : String;

    public function noise(): string {
        return $this->getNoise();
    }

}