<?php

class Personal extends Controller
{

    private $model;

    private $data = [];



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
        $this->data['medicine'] = $this->model->getListTable('medicine');
        $this->view("Personal/MedicalBill",  $this->data);
    }

    function prescription()
    {
        $this->data['medicine'] = $this->model->getListTable('medicine');
        $this->view("Personal/Prescription",  $this->data);
    }

    function workCalendar()
    {
        $this->data['medicine'] = $this->model->getListTable('medicine');
        $this->view("Personal/WorkCalendar",  $this->data);
    }

    public function updateUsers(){
  
 
     }
}
