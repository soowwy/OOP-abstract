<?php

require_once 'autoload.php';
class Person {

    private $name;
    private $age;
    private $isMale = true;

    public function __construct($name, $age, $isMale)
    {
        $this->name = $name;
        $this->age = $age;
        $this->isMale = $isMale;

    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    public function getAge() {
        return $this->age;
    }

    public function setIsMale($isMale) {
        $this->isMale = $isMale;
    }

    public function getIsMale() {
        return $this->isMale;
    }

    public function showPersonInfo() {
        echo 'The name of the person is:'.' '.$this->name.PHP_EOL;
        echo 'The age of the person is:'.' '.$this->age.PHP_EOL;
        if($this->isMale) {
            echo 'Gender: male'.PHP_EOL;
        } else {
            echo 'Gender: female'.PHP_EOL;
        }
    }


}