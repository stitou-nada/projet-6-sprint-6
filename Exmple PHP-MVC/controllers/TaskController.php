<?php

class TaskController extends Controller  {

public function getTasks(){
    $name = "fff";
    $this->render('index',compact('name'));
}


}

?>