<?php
 abstract class Animal{
protected string  $family;
protected  string  $food;

 public function __constuct( string $famile,string$food){
     $this->family=$famile;
     $this->food=$food;
}
    public function get_family(){
        return $this->family;
    }
    public function set_family( string$family ){
        $this->family=$family;
   }
    public function get_food(){
        return $this->food;
    }
    public function set_food( string$food ){
        $this->food=$food;
    }


}
