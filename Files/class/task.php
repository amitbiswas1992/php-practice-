<?php

// class Task{
//
// public $desc;
//   public function __construct($desc){
//
//     $this->desc = $desc;
//   }
// }
//
// $object = new Task('Hello MazeGeek');
//
// var_dump($object->desc);

class Task {
public $completed = false;

public function __construct($desc, $title ){

$this->toll = $desc;
$this->boll = $title;

}

public function complete(){
$this->completed = true;

}

}

$task2 = new Task('hello Laravel','Hello I am Title');

// $task2->complete();
var_dump($task2->boll);
