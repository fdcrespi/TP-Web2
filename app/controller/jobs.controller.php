<?php

include_once 'app/model/jobs.model.php';
include_once 'app/view/jobs.view.php';

class JobsController{
    private $model;
    private $view;

    function __construct(){
        $this->model = new JobsModel();
        $this->view = new JobsView();
    }

    function listJobs(){
        $workers = $this->model->getAll();
        $this->view->showWorkers($workers);
    }

}