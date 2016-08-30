<?php

//require_once 'autoload.php';
require_once 'Person.php';
require_once 'NewEmployee.php';
require_once 'Student.php';

$person1 = new Person('Pesho', 20, true);
$person2 = new Person('Gosho', 18, true);

$student1 = new Student('Minka', 13, false, 3);
$student2 = new Student('Evlogi', 16, true, 6);

$emp1 = new EmployeeTask2('Batkata', 35, true, 40);
$emp2 = new EmployeeTask2('Kiflata', 25, false, 50);



$people = [$emp1, $person1, $student1, $emp2, $person2, $student2];


foreach ($people as $person) {
    if (get_class($person) == 'Person') {
        echo $person->showPersonInfo().PHP_EOL;
    } else if(get_class($person) == 'Student') {
        echo $person->showStudentInfo().PHP_EOL;
    } else if(get_class($person) == 'EmployeeTask2') {
        echo $person->showEmployeeInfo().PHP_EOL;
    }
}

foreach ($people as $employee) {
    if (get_class($employee) == 'EmployeeTask2') {
        echo 'Employee:'.' '.$employee->getName().' '.'gets'.' '.$employee->calculateOvertime(2).'$'.' '.'extra cash'.PHP_EOL;
    }
}