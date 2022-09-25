<?php
require 'person.php';
class English_person implements person{
    public function greet()
    {
        echo 'Hi everyone';
    }

}
