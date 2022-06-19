<?php

include_once '../MODEL/helloModel.php';

class HelloController {

    private $model;



    public function __construct(HelloModel $model) {

        $this->model = $model;

    }
}
