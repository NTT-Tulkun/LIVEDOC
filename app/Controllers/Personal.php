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

    function medicalBill($id_appointment)
    {
        $this->data['id_appointment'] = $id_appointment;
        $this->data['medicine'] = $this->model->getListTable('medicine');
        $this->data['patient'] = $this->model->getListAppointment("WHERE appointment.id_appointment = $id_appointment");

        $this->view("Personal/MedicalBill", $this->data);
    }

    function prescription($id_appointment)
    {
        $this->data['id_appointment'] = $id_appointment;
        $id = $id_appointment;
        ;
        $array_medicine = array();
        if (isset ($_POST['btn_sub'])) {
            for ($i = 1; $i < 100; $i++) {
                if (isset ($_POST["tenthuoc$i"])) {
                    $name_medicine = $_POST["tenthuoc$i"];
                    $array_medicine[$i] = $this->model->getListTable('medicine', "WHERE name_medicine = '$name_medicine'");


                }
            }

            $thuocArray = [];
            $i = 1;
            while (isset ($_POST['tenthuoc' . $i])) {
                $thuoc = [
                    'tenthuoc' => $_POST['tenthuoc' . $i],
                    'soluong' => $_POST['soluong' . $i],
                    'dvt' => $_POST['dvt' . $i],
                    'cd' => $_POST['cd' . $i]
                ];
                $thuocArray[] = $thuoc;
                $i++;
            }


            $count = 1;

            $medical_bill_detail = [];
            foreach ($thuocArray as $value) {
                $medical_bill_detail[] = [
                    'id_medicine' => $array_medicine[$count][0]['id_medicine'],
                    'quantity' => $value['soluong'],
                    'instructions' => $value['cd']
                ];
                $count++;
            }



            $advice = $_POST['advice'];
            $diagnose = $_POST['diagnose'];


            $updates = [
                'check' => 1,
            ];

            $reusult = $this->model->insertMedicalBill($advice, $diagnose, $id_appointment, $medical_bill_detail);
            if ($reusult) {

                $this->model->updateData('appointment', $updates, "id_appointment = $id_appointment");
                $redirectUrl = _WEB_ROOT . "/Personal/workCalendar";
                header("refresh:0.5; url=$redirectUrl");
            }


        }


        $this->view("Personal/Prescription", $this->data);
    }

    function workCalendar()
    {
        $redirectUrl = _WEB_ROOT . "/Personal/workCalendar";

        if (isset ($_SESSION['t2'])) {
            $t2 = date('Y-m-d', strtotime(str_replace('/', '-', $_SESSION['t2'])));
            $t3 = date('Y-m-d', strtotime(str_replace('/', '-', $_SESSION['t3'])));
            $t4 = date('Y-m-d', strtotime(str_replace('/', '-', $_SESSION['t4'])));
            $t5 = date('Y-m-d', strtotime(str_replace('/', '-', $_SESSION['t5'])));
            $t6 = date('Y-m-d', strtotime(str_replace('/', '-', $_SESSION['t6'])));

            if (isset ($_POST['prev'])) {

                header("refresh:0; url=$redirectUrl");
            } else if (isset ($_POST['next'])) {
                header("refresh:0; url=$redirectUrl");
            } else if (isset ($_POST['current'])) {
                header("refresh:0; url=$redirectUrl");
            }

            $id_staff = $_SESSION['is_login']['id_account'];

            $this->data['appointment2'] = $this->model->getListAppointment("WHERE staff.id_staff = $id_staff AND appointment.date='$t2' ORDER BY appointment.hour");
            $this->data['appointment3'] = $this->model->getListAppointment("WHERE staff.id_staff = $id_staff AND appointment.date='$t3' ORDER BY appointment.hour");
            $this->data['appointment4'] = $this->model->getListAppointment("WHERE staff.id_staff = $id_staff AND appointment.date='$t4' ORDER BY appointment.hour");
            $this->data['appointment5'] = $this->model->getListAppointment("WHERE staff.id_staff = $id_staff AND appointment.date='$t5' ORDER BY appointment.hour");
            $this->data['appointment6'] = $this->model->getListAppointment("WHERE staff.id_staff = $id_staff AND appointment.date='$t6' ORDER BY appointment.hour");


        } else {
            header("refresh:0; url=$redirectUrl");

        }
        $this->view("Personal/WorkCalendar", $this->data);
    }

    public function medicalHistory()
    {
        $id_patient = $_SESSION['is_login']['id_account'];

        $this->data['medicalHistory'] = $this->model->getListFromThreeTables('staff', 'appointment', 'medical_bill', 'id_staff', 'id_staff', 'id_appointment', 'id_appointment', "where appointment.id_patient=$id_patient ORDER BY date");
        $this->data['title'] = "Lịch sử khám bệnh";
        $this->view("Personal/Medicalhistory", $this->data);

    }

    public function medicalHistoryPatient($id_patient)
    {

        $this->data['medicalHistory'] = $this->model->getListFromThreeTables('staff', 'appointment', 'medical_bill', 'id_staff', 'id_staff', 'id_appointment', 'id_appointment', "where appointment.id_patient=$id_patient ORDER BY date");
        $this->data['title'] = "Lịch sử khám bệnh";
        $this->view("Personal/Medicalhistory", $this->data);

    }

    function medicalBillPDF($id_record)
    {
        $this->data['medicalBill'] = $this->model->getListMedicalBillPDF($id_record);
        require_once './Library/PDF/vendor/autoload.php';


        $this->view("Personal/MedicalBillPDF", $this->data);

    }

    function prescriptionPDF($id_record)
    {
        $this->data['medicalBill'] = $this->model->getListMedicalBillPDF($id_record);
        require_once './Library/PDF/vendor/autoload.php';

        $this->view("Personal/PrescriptionPDF", $this->data);

    }

    function listAppointment()
    {
        $id_patient = $_SESSION['is_login']['id_account'];
        $this->data['appointment'] = $this->model->getListAppointment("WHERE patient.id_patient = $id_patient");

        $this->view("Personal/ListAppointment", $this->data);

    }

    function listAppointmentPDF($id_appointment)
    {
        $id_patient = $_SESSION['is_login']['id_account'];
        $this->data['appointment'] = $this->model->getListAppointment("WHERE patient.id_patient = $id_patient AND  id_appointment = $id_appointment");
        require_once './Library/PDF/vendor/autoload.php';

        $this->view("Personal/listAppointmentPDF", $this->data);

    }




}
