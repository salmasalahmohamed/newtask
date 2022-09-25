<?php
require 'Animal.php';
class Cow extends Animal {
    private $owner;
    public function __constuct(string $famile, string $food)
    {
        $this->family=$famile;
        $this->food=$food; ;
    }
    public function set_owner(string $owner){
     $this->owner=$owner;
    }
    public function get_owner(){
        return $this->owner;
    }

}
$cow2=new Cow();
$cow2->set_family('pets');
print_r($cow2->get_family());
echo '<br>';
$cow2->set_food('grass');
print_r($cow2->get_food());
echo '<br>';
$cow2->set_owner('farmer');
print_r($cow2->get_owner());