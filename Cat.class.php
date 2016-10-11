<?php

class Cat extends Animal
{
    public function meow()
    {
        echo "Cat " . $this->name . " is sayig meow";
    }

}

?>