<?php
class Admin extends Controller
{

    private $model;

    private $data = [];

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

    public function listMedicine()
    {
        $this->data['title'] = 'Danh sách thuốc';
        $this->data['listMedicine'] = $this->model->getListFromTowTables('medicine', 'type_medicine', 'id_type_medicine', 'id_type_medicine');
        $this->view("Admin/Medicine/listMedicine", $this->data);
    }

    public function addMedicine()
    {
        $this->data['title'] = 'Thêm thuốc mới';
        $this->data['listTypeMedicine'] = $this->model->getListTable('type_medicine');

        if (isset($_POST['addMedicine'])) {
            $this->data['error']['nameMedicine'] = $this->checkNameMedicine();
            $this->data['error']['typeMedicine'] = $this->checkTypeMedicine();
            $this->data['error']['quantity'] = $this->checkQuantityMedicine();
            $this->data['error']['manufacture'] = $this->checkManufMedicine();
            $this->data['error']['expiry'] = $this->checkExpiryMedicine();
            $this->data['error']['price'] = $this->checkPriceMedicine();
            $this->data['error']['unit'] = $this->checkUnitMedicine();

            $listMedicine = $this->model->getListTable('medicine');
            foreach ($listMedicine as $medicine) {
                if (strcasecmp(trim($_POST['nameMedicine']) , trim($medicine['name_medicine']))==0) 
                {
                    $this->data['error']['nameMedicine'] = 'Thuốc đã tồn tại!';
                }
            }

            if (
                $this->data['error']['nameMedicine'] == '' && $this->data['error']['typeMedicine'] == '' && $this->data['error']['quantity'] == ''
                && $this->data['error']['manufacture'] == '' && $this->data['error']['expiry'] == '' && $this->data['error']['price'] == ''
                && $this->data['error']['unit'] == ''
            ) {
                $this->data['error'] = array();
            }

            if (empty($this->data['error'])) {
                // Thêm dữ liệu vào cơ sở dữ liệu
                $data = [
                    'name_medicine' => $_POST['nameMedicine'],
                    'quantity' => $_POST['quantity'],
                    'date_manufacture' => $_POST['manufacture'],
                    'expiry' => $_POST['expiry'],
                    'medicine_price' => $_POST['price'],
                    'unit' => $_POST['unit'],
                    'id_type_medicine' => $_POST['typeMedicine']
                ];
                $result = $this->model->InsertData('medicine', $data);
                if ($result) {
                    echo "<script>alert('Thêm thành công thuốc mới')</script>";

                    $redirectUrl = _WEB_ROOT . "/admin/listMedicine";
                    header("refresh:0.5; url=$redirectUrl");
                    exit();
                }
            }
        }
        $this->view("Admin/Medicine/AddMedicine", $this->data);
    }

    public function deleteMedicine()
    {
        if (isset($_POST['id_medicine'])) {
            echo $_POST['id_medicine'];
            $id_medicine = $_POST['id_medicine'];
            $this->model->DeleteData("medicine", "WHERE id_medicine = $id_medicine");
           
        }

    }

    public function updateMedicine($id_medicine){
        $this->data['Medicine'] = $this->model->getListFromTowTables('medicine', 'type_medicine', 'id_type_medicine' ,'id_type_medicine', "Where medicine.id_medicine = $id_medicine");
        $this->data['TypeMedicine'] = $this->model->getListTable('type_medicine');
        $this->data['title'] = 'Cập nhật thuốc';
        if (isset($_POST['updateMedicine'])) 
        {
            $this->data['error']['nameMedicine'] = $this->checkNameMedicine();
            $this->data['error']['typeMedicine'] = $this->checkTypeMedicine();
            $this->data['error']['quantity'] = $this->checkQuantityMedicine();
            $this->data['error']['manufacture'] = $this->checkManufMedicine();
            $this->data['error']['expiry'] = $this->checkExpiryMedicine();
            $this->data['error']['price'] = $this->checkPriceMedicine();
            $this->data['error']['unit'] = $this->checkUnitMedicine();

            $listMedicine = $this->model->getListTable('medicine');
            foreach ($listMedicine as $medicine) {
                if (strcasecmp(trim($_POST['nameMedicine']) , trim($medicine['name_medicine']))==0 && $_POST['id_medicine']!=$medicine['id_medicine']) 
                {
                    $this->data['error']['nameMedicine'] = 'Thuốc đã tồn tại!';
                }
            }

            if (
                $this->data['error']['nameMedicine'] == '' && $this->data['error']['typeMedicine'] == '' && $this->data['error']['quantity'] == ''
                && $this->data['error']['manufacture'] == '' && $this->data['error']['expiry'] == '' && $this->data['error']['price'] == ''
                && $this->data['error']['unit'] == ''
            ) {
                $this->data['error'] = array();
            }

            if (empty($this->data['error'])) {
                $data = [
                    'name_medicine' => $_POST['nameMedicine'],
                    'quantity' => $_POST['quantity'],
                    'date_manufacture' => $_POST['manufacture'],
                    'expiry' => $_POST['expiry'],
                    'medicine_price' => $_POST['price'],
                    'unit' => $_POST['unit'],
                    'id_type_medicine' => $_POST['typeMedicine']
                ];
                $id_medicine = $_POST['id_medicine'];
                $result = $this->model->UpdateData('medicine', $data, "id_medicine = $id_medicine");
                if ($result) {
                    echo "<script>alert('Cập nhật thành công thông tin thuốc')</script>";

                    $redirectUrl = _WEB_ROOT . "/admin/listMedicine";
                    header("refresh:0.5; url=$redirectUrl");
                    exit();
                }
            }


        }
        $this->view("Admin/Medicine/updateMedicine", $this->data);
    }




    public function addUsers()
    {

        $this->data['role'] = $this->model->getListTable('role');
        $this->data['department'] = $this->model->getListTable('department');

     
        $this->data['title'] = 'Thêm người dùng';
        // if($dieuken ==true){
        //     $this->view("Admin/Users/sendMailUser");

        // }
        $this->view("Admin/Users/addUsers", $this->data);
    }

  


    public function listUsersStaff()
    {
        $this->data['title'] = 'Danh sách nhân viên';
        $this->data['listStaff'] = $this->model->getListFromThreeTables('role', 'staff', 'department', 'id_role', 'id_role', 'id_department', 'id_department', 'WHERE staff.status=1');


        $this->view("Admin/Users/listUsersStaff", $this->data);
    }

    public function listUsersPatient()
    {
        $this->data['listPatient'] = $this->model->getListFromTowTables('role', 'patient', 'id_role', 'id_role');

        $this->data['title'] = 'Danh sách bệnh nhân';

        $this->view("Admin/Users/ListUsersPatient", $this->data);
    }

    public function addPosts()
    {
        $this->data['title'] = 'Thêm bài viết';


        $this->view("Admin/Posts/AddPosts", $this->data);
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
                    $posts['title'] = $value;
                }

                if (is_array($value) && strpos($key, 'addImage') === 0) {
                    $posts['con'][$i]['content'] = htmlspecialchars('<img class=\"previewImage\" src=\"' . _WEB_ROOT . '/public/img/posts/' . $value['name'] . '\" alt="\Preview\" >');
                    $posts['con'][$i]['number'] = $i;
                    move_uploaded_file($value['tmp_name'], "public/img/posts/" . $value['name']);
                }
                $i++;
            }
        }


        echo "<pre>";
        print_r($data);
        echo "<pre>";
        print_r($posts);



        $this->model->insertposts($posts);



        $this->view("Admin/Posts/AddPosts", $this->data);
    }

}
