<?php

abstract class User {
    public function __construct(protected string $name){

    }

    public function getName() {
        return $this->name;
    }
    public function setName($name){
        $this->name = $name;
    }

    abstract public function __toString();
}