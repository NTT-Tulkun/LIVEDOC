<?php

class Personal extends Controller
{

    public $model;

    public $data = [];



    public function __construct()
    {
        $this->model = $this->model('PersonalModel');
    }

    function index()
    {
        $this->view("Personal/Profile");
    }

    function profile()
    {
        $this->view("Personal/Profile");
    }

    function medicalBill()
    {
        $this->data['medicine'] = $this->model->getTable('medicine');
        $this->view("Personal/MedicalBill",  $this->data);
    }

    function prescription()
    {
        $this->data['medicine'] = $this->model->getTable('medicine');
        $this->view("Personal/Prescription",  $this->data);
    }

    function workCalendar()
    {
        $this->data['medicine'] = $this->model->getTable('medicine');
        $this->view("Personal/WorkCalendar",  $this->data);
    }

    public function updateUsers(){
    //     $value = $_GET['value'];
    //     $id= $_GET['id'];
    //    echo $value;
    //    echo $id;
    echo "<pre>";
    print_r($_POST);
 
     }
}
