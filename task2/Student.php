<?php

require_once 'autoload.php';

class Student extends Person {

    private $score; //chislo mejdu 2 i 6

    public function __construct($name, $age, $isMale, $score)
    {

        parent::__construct($name, $age, $isMale);
        if($score >= 2 && $score <= 6)
        {
            $this->score = $score;
        }
    }

    public function setScore($score) {

        $this->score = $score;
    }

    public function getScore() {

        return $this->score;
    }

    public function showStudentInfo() {

        parent::showPersonInfo();
        echo 'Score:'.' '.$this->score.PHP_EOL;
    }
}