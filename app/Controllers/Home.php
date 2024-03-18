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

    public function data()
    {
        $this->view("Home/Data");

    }

    public function main()
    {
        $this->view("Home/Main");

    }

    public function process()
    {
        require_once "./Library/Pusher/autoload.php";

        $options = array(
            'cluster' => 'ap1',
            'useTLS' => true
        );
        $pusher = new Pusher\Pusher(
            'eebe9d3e08b46e24323d',
            '4cdf7198932b028d3945',
            '1770050',
            $options
        );

        $name = $_POST['name'];
        $email = $_POST['email'];

        $data = array(
            'name' => $name,
            'email' => $email
        );
        $pusher->trigger('my-channel', 'my-event', $data);
        header("location: http://localhost/livedoc/Home/Main");

    }

    public function appointment()
    {
        $this->data['appointment'] = 'appointment';
        if (isset ($_POST['sub_appointment'])) {
            $this->data['error']['department'] = $this->checkDepartment();
            $this->data['error']['doctor'] = $this->checkDoctor();
            print_r( $this->data['error']);
            if($this->data['error']['department'] =='' &&  $this->data['error']['doctor']==''){
                  $this->data['appointment'] =  'appointmentDetail';
              

            }
        }


        $this->data['departments'] = $this->model->getListTable('department');
        $this->data['doctors'] = $this->model->getListTable('staff', 'WHERE id_role=4');


        $this->view("Home/Appointment", $this->data);
    }

    public function appointmentDetail()
    {
        if (isset ($_GET['day']) && isset ($_GET['month']) && isset ($_GET['year'])) {

            $date = $_GET['year'] . '-' . $_GET['month'] . '-' . $_GET['day'];


            $id_staff = $_SESSION['appointment']['doctor'];
            $this->data['appointment'] = $this->model->getListTable('appointment', "WHERE date='$date' AND id_staff =  $id_staff");
        }



        $this->view("Home/AppointmentDetail", $this->data);
    }


    function book()
    {


        if (isset ($_POST['sub_appointment'])) {
            $data = [
                'date' => $_POST['date'],
                'hour' => $_POST['hour'],
                'id_patient' => $_SESSION['is_login']['id_account'],
                'id_staff' => $_POST['doctor']

            ];

            require_once "./Library/Pusher/autoload.php";

            $options = array(
                'cluster' => 'ap1',
                'useTLS' => true
            );
            $pusher = new Pusher\Pusher(
                'be39c21145a308bb822e',
                'a3ac9c4ef3152b39c6a7',
                '1772586',
                $options
            );

            $hour = $_POST['hour'];
            $date = $_POST['date'];
            $doctor = $_POST['doctor'];

            $data = array(
                'hour' => $hour,
                'date' => $date,
                'doctor' => $doctor
            );
            $pusher->trigger('my-channel', 'my-event', $data);
            header("location: http://localhost/livedoc/Home/appointmentDetail");

            //$this->model->InsertData('appointment', $data);
            // $redirectUrl = _WEB_ROOT . "/Home/appointmentDetail";
            // header("refresh:0.5; url=$redirectUrl");
        }


    }

    public function posts($conditionContent = 1)
    {
        $this->data['post'] = $this->model->getListFromTowTablesCondition('posts', 'postcontents', 'id_post', 'id_post', "posts.id_post = $conditionContent");


        $this->view("Home/Posts", $this->data);
    }

}
