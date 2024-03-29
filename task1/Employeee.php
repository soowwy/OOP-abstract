<?php

class Employeee
{
    private $name;

    private $currentTask;

    private $hoursLeft;

    private $allWork;

    public function __construct($name)
    {
        $this->name = $name;
    }


    public function setName($name) {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }


    public function setCurrentTask($currentTask)
    {
        $this->currentTask = $currentTask;
    }

    public function getCurrentTask()
    {
        return $this->currentTask;
    }

    public function setHoursLeft($hoursLeft)
    {
        $this->hoursLeft = $hoursLeft;
    }

    public function getHoursLeft()
    {
        return $this->hoursLeft;
    }


    public function setAllWork($allWork)
    {
        $this->allWork = $allWork;
    }

    public function getAllWork()
    {
        return $this->allWork;
    }



    public function work()
    {
        while($this->getHoursLeft() > 0) {
            if($this->getCurrentTask() != null) {
                if($this->getHoursLeft() > $this->getCurrentTask()->getWorkingHours()) {

                    $this->hoursLeft = $this->hoursLeft - $this->currentTask->getWorkingHours();

                    echo "Your task is finished, get new task!" , PHP_EOL;
                    break;

                }  elseif ($this->hoursLeft < $this->currentTask->getWorkingHours()){
                    $this->currentTask->setWorkingHours($this->currentTask->getWorkingHours()-$this->getHoursLeft());
                    $this->setHoursLeft(0);
                }  else {
                    $this->setHoursLeft(0);
                    $this->currentTask->setWorkingHours(0);
                }
            }
            else {
                $len = $this->allWork->getTasks()->length - $this->allWork->freePlacesForTask;
                if($this->allWork->getCurrentUnsignedTask() < $len) {
                    $this->setCurrentTask($this->allWork->getNextTask());
                    $this->allWork->setCurrentUnsignedTask($this->allWork->getCurrentUnsignedTask() + 1);

                    echo "The new task is " . $this->currentTask->getName() , PHP_EOL;

                }
                else {
                    echo "Your work is finished!" , PHP_EOL;
                    $this->setHoursLeft(0);
                }
            }
        }
    }

    public function startWorkingDay()
    {
        $this->hoursLeft = 8;
        echo "It`s a new working day ! " , PHP_EOL;
    }


}