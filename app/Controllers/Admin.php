<?php

class Admin extends Controller
{

    public $model;

    public $data = [];

    public function __construct()
    {
        $this->model = $this->model('AdminModel');
    }

    public function index()
    {
        $this->data['title'] = 'Trang Admin';
        $this->view("Admin/Home", $this->data);
    }

    public function message()
    {
        $this->data['title'] = 'Phản hồi';
        $this->view("Admin/Message", $this->data);
    }

    public function addMedicine()
    {
        if(isset($_POST['addMedicine'])){
        $this->data['error']['nameMedicine']= $this->checkNameMedicine();
        $this->data['error']['typeMedicine']= $this->checkTypeMedicine();
        $this->data['error']['quantity']= $this->checkQuantityMedicine();
        $this->data['error']['manufacture']= $this->checkManufMedicine();
        $this->data['error']['expiry']= $this->checkExpiryMedicine();
        $this->data['error']['price']= $this->checkPriceMedicine();
        $this->data['error']['unit']= $this->checkUnitMedicine();
        }
        $this->data['title'] = 'Thêm thuốc mới';
        $this->data['listTypeMedicine']=$this->model->getListTable('type_medicine');
        
        $this->view("Admin/Medicine/AddMedicine",  $this->data);
    }

    public function listMedicine()
    {
        $this->data['title'] = 'Danh sách thuốc';
        $this->view("Admin/Medicine/listMedicine",  $this->data);
    }

    public function addUsers()
    {

        $this->data['role'] = $this->model->getListTable('role');
        $this->data['department'] = $this->model->getListTable('department');

        if (!empty($_POST)) {
            $fullname = $_POST['fullname'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $birthday = $_POST['birthday'];
            $gender = $_POST['gender'];
            $certificate = $_POST['certificate'];
            $experience = $_POST['experience'];
            $description = $_POST['description'];
            $id_role = $_POST['role'];
            if (!empty($_POST['id_department'])) {
                $id_department = $_POST['id_department'];
            }else {
                $id_department = null;
            }
        
            $data = [
                'full_name' => "$fullname",
                'email' => "$email",
                'password' => md5(123456),
                'phone' => "$phone",
                'birthday' => $birthday,
                'gender' => $gender,
                'certificate' => $certificate,
                'experience' => $experience,
                'description' => $description,
                'id_role' => $id_role,
                 'id_department' => $id_department,

            ];

            $this->model->InsertData('staff', $data);
        }
        $this->data['title'] = 'Thêm người dùng';
        $this->view("Admin/Users/addUsers",  $this->data);
    }



    public function listUsersStaff()
    {
        $this->data['title'] = 'Danh sách nhân viên';
        $this->data['listStaff'] =  $this->model->getListFromThreeTables('role', 'staff', 'department', 'id_role', 'id_role', 'id_department', 'id_department', 'WHERE staff.status=1');


        $this->view("Admin/Users/listUsersStaff",  $this->data);
    }

    public function listUsersPatient()
    {
        $this->data['listPatient'] =  $this->model->getListFromTowTables('role', 'patient', 'id_role', 'id_role');

        $this->data['title'] = 'Danh sách bệnh nhân';

        $this->view("Admin/Users/ListUsersPatient",  $this->data);
    }

    public function addPosts()
    {
        $this->data['title'] = 'Thêm bài viết';


        $this->view("Admin/Posts/AddPosts",  $this->data);
    }



    public function addPostsInsert()
    {

        $data = array_merge($_POST, $_FILES);
        $posts = array();
        $i = 1;

        foreach ($data as $key => $value) {
            if (!empty($value)) {
                if (strpos($key, 'addContent') === 0) {
                    $posts['con'][$i]['content'] = htmlspecialchars('<p class=\"mb-1 textContent\">' . $value . '</p>');
                    $posts['con'][$i]['number'] = $i;
                }

                if (strpos($key, 'addTitle') === 0) {
                    $posts['con'][$i]['content'] = htmlspecialchars('<h3 class=\"fw-bolder mb-2\">' . $value . '</h3>');
                    $posts['con'][$i]['number'] = $i;
                }
                if (strpos($key, 'title') === 0) {
                    $posts['title'] =  $value;
                }

                if (is_array($value) && strpos($key, 'addImage') === 0) {
                    $posts['con'][$i]['content'] = htmlspecialchars('<img class=\"previewImage\" src=\"' . _WEB_ROOT . '/public/img/posts/' . $value['name'] . '\" alt="\Preview\" >');
                    $posts['con'][$i]['number'] = $i;
                    move_uploaded_file($value['tmp_name'], "public/img/posts/" .  $value['name']);
                }
                $i++;
            }
        }


        echo "<pre>";
        print_r($data);
        echo "<pre>";
        print_r($posts);



        $this->model->insertposts($posts);



        $this->view("Admin/Posts/AddPosts",  $this->data);
    }

}
