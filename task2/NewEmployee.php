<?php

require_once 'autoload.php';

class EmployeeTask2 extends Person {

    private $daySalary;

    public function __construct($name, $age, $isMale, $daySalary)
    {
        $this->daySalary = $daySalary;
        parent::__construct($name, $age, $isMale);
    }

    public function setDaySalary($daySalary) {
        $this->daySalary = $daySalary;
    }

    public function getDaySalary() {
        return $this->daySalary;
    }


    public function calculateOvertime($hours) {
        if ($this->getAge() < 18) {
            $overtime = 0;
        } else {
            $overtime = $this->daySalary / 8 * ($hours * 1.5);
        }
        return $overtime;
    }

    public function showEmployeeInfo() {

        parent::showPersonInfo();
        echo 'day salary:'.' '. $this->daySalary.'$'.PHP_EOL;
    }
}