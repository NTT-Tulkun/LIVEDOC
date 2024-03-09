<?php



class Home extends Controller
{

    private $model;

    private $data = [];



    public function __construct()
    {
        $this->model = $this->model('HomeModel');
    }
    public function index()
    {
        $this->view("Home/Home");
    }



    public function appointment()
    {
        $this->view("Home/Appointment");
    }

    public function  appointmentDetail()
    {
        $this->view("Home/AppointmentDetail");
    }
   
    public function posts($conditionContent=1)
    {
        $this->data['post'] =   $this->model->getListFromTowTablesCondition('posts', 'postcontents', 'id_post', 'id_post', "posts.id_post = $conditionContent");

    
        $this->view("Home/Posts", $this->data);
    }

}
