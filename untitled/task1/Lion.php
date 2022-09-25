<?php
require 'Animal.php';
class Lion extends Animal
{
    public function __constuct(string $famile, string $food)
    {
        $this->family=$famile;
        $this->food=$food;;
    }
}
$lion=new Lion();
$lion->set_food('meat');
print_r($lion->get_food());
