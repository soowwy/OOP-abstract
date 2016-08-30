<?php

class AllWork {

    private $tasks = array();
    private $freePlacesForTask = 10;
    private $currentUnassignetTask;


    public function addTask(Taskk $task)
    {
        if($this->freePlacesForTask > 0 )
        {
            $tasks[] = $task;
            echo $task->getName() , " has been added!", PHP_EOL;
        } else {
            echo "You can not add new task!", PHP_EOL;
        }
    }

    public function getNextTask()
    {
        return $this->tasks[$this->currentUnassignetTask];
    }

    public function isAllWorkDone($tasks)
    {
        $isDone = true;

        for($i = 0; $i < count($tasks);$i++) {
            if($tasks[$i]->getWorkingHours() != 0)
                $isDone = false;
                break;
        }
        if($isDone) {
            echo "All work is done!" , PHP_EOL;
        } else {
            echo "All work isn`t done!" , PHP_EOL;
        }

    }

}