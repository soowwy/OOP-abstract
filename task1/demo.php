<?php

require_once 'AllWork.php';
require_once 'Taskk.php';
require_once 'Employeee.php';

$allWork = new AllWork();

$task1 = new Taskk("Task1", 8);
$allWork->addTask($task1);

$task2 = new Taskk("Task2", 6);
$allWork->addTask($task2);

$task3 = new Taskk("Task3", 13);
$allWork->addTask($task3);

$task4 = new Taskk("Task4", 20);
$allWork->addTask($task4);

$task5 = new Taskk("Task5", 4);
$allWork->addTask($task5);

$task6 = new Taskk("Task6", 24);
$allWork->addTask($task6);

$task7 = new Taskk("Task7", 10);
$allWork->addTask($task7);

$task8 = new Taskk("Task8", 2);
$allWork->addTask($task8);

$task9 = new Taskk("Task9", 7);
$allWork->addTask($task9);

$task10 = new Taskk("Task10", 12);
$allWork->addTask($task10);

$employee1 = new Employeee("Gosho");
$employee2 = new Employeee("Pesho");
$employee3 = new Employeee("Tosho");

$employee1->getAllWork();