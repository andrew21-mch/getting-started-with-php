<?php

include_once '../MODEL/helloModel.php';
include_once '../CONTROLLER/helloController.php';

class View {

    private $model;

    public function __construct(HelloModel $model) {

        $this->model = $model;

    }
    public function output() {

        return "<h1>". $this->model->text."<h1>";



    }
}

//initiate the triad

$model = new HelloModel();

//It is important that the controller and the view share the model

$controller = new HelloController($model);

$view = new View($model);

echo $view->output();

// 