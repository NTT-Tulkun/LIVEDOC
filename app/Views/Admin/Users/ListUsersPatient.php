<?php
require './app/Views/inc/HeaderAdmin.php';

?>
<div class="section__content section__content--p30">

    <h4 class="text-center"><?php echo $title; ?></h4>

    <div class="container-fluid">



        <div class="section__content section__content--p30">
            <div class="container-fluid  p-3">

                <div class="card-body" style="background-color: #fff; padding: 20px;">
                 
                    <a href="<?php echo _WEB_ROOT ?>/admin/listPatientDelete"  class="float-right text-dark" style="position: relative; margin-right: 20px;">
                        <i class="fa-solid fa-trash-can" style="font-size: 25px;"></i>
                        <span style="font-size:12px; border-radius: 50%; padding: 0px 6px; position: absolute; top: -10px; " class="text-light bg-danger"> <?php echo count($listPatientDelete); ?></span>
                    </a>

                  
                    <div class="table-responsive p-3">
                        <table class="table  table table-striped table-hover" id="dataTable">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Họ tên</th>
                                    <th>Email</th>
                                    <th>Chức vụ</th>
                                    <th>Chức năng</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                             
                                $data_index = 0;
                                foreach ($listPatient as $index => $patient) { ?>
                                    <tr>
                                    <td id="row<?php echo $staff['id_patient']; ?>"></td>

                                        <td><?php echo $patient['full_name'] ?></td>
                                        <td><?php echo $patient['email'] ?></td>
                                        <td><?php echo $patient['name_role'] ?></td>

                                        <td>
                                            
                                            </button>
                                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#DeletePatient<?php echo $patient['id_patient'] ?>">
                                                <i class="bi bi-trash3-fill"></i>
                                            </button>

                                            <div class="modal fade" id="DeletePatient<?php echo $patient['id_patient'] ?>"
                                                tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                                aria-hidden="true" style="margin-top: 100px;">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">

                                                        <div class="modal-body">
                                                            <h5>Bạn có chắc chắn muốn xóa nhân viên
                                                                <b>
                                                                    <?php echo $patient['full_name'] ?>
                                                                </b>
                                                                ?
                                                            </h5>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Hủy</button>
                                                            <button type="button"
                                                                id="confirmDelete<?php echo $patient['id_patient']; ?>"
                                                                class="btn btn-danger" data-dismiss="modal"
                                                                onclick="removeRow(<?php echo $data_index++; ?>)">Xác
                                                                nhận</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <button type="button" class="btn btn-success" data-bs-target="#inforuser<?php echo $patient['id_patient'] ?>" data-bs-toggle="modal"><i class="bi bi-eye"></i></button>

                                            <div class="modal" id="inforuser<?php echo $patient['id_patient'] ?>" tabindex="-1">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content" style="width: 1000px">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Chi tiết đơn đặt</h5>
                                                            <button type="button" class="btn-close btn-danger" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>

                                                        <div class="modal-body">
                                                            <table class="table table-bordered">
                                                                <thead>
                                                                    <tr class="text-center">
                                                                    <tr>
                                                                        <td>STT</td>
                                                                        <td>Ảnh</td>
                                                                        <td>Họ tên</td>
                                                                        <td>Email</td>
                                                                        <td>Số điện thoại</td>
                                                                        <td>Địa chỉ</td>
                                                                        <td>Ngày sinh</td>
                                                                        <td>Giới tính</td>
                                                                        <td>Nhóm máu</td>
                                                                        <td>Cân nặng</td>
                                                                        <td>Chiều cao</td>
                                                                        <td>Chỉ số BMI</td>

                                                                    </tr>
                                                                </thead>
                                                                <tbody>

                                                                    <tr class="text-center">

                                                                    <tr>
                                                                        <th><?php echo ++$index; ?></th>
                                                                        <th><img src="<?php echo _WEB_ROOT; ?>/public/img/users/<?php echo  $patient['image']; ?>" width="50px" alt=""></th>
                                                                        <th><?php echo  $patient['full_name']; ?></th>
                                                                        <th><?php echo   $patient['email']; ?></th>
                                                                        <th><?php echo   $patient['phone']; ?></th>
                                                                        <th><?php echo   $patient['address']; ?></th>
                                                                        <th><?php echo $ngay_dau_ra = date("d/m/Y", strtotime($patient['birthday'])); ?></th>
                                                                        <th><?php echo  $patient['gender']; ?></th>
                                                                        <th><?php echo  $patient['blood_group']; ?></th>
                                                                        <th><?php echo  $patient['weight']; ?></th>
                                                                        <th><?php echo  $patient['height']; ?></th>
                                                                        <th><?php echo  $patient['BMI']; ?></th>







                                                                    </tr>





                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </td>


                                    </tr>
                                <?php } ?>


                            </tbody>
                        </table>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>


<?php
require './app/Views/inc/FooterAdmin.php';

?>

<script>
    $(document).ready(function () {

        <?php foreach ($listPatient as $index => $patient) { ?>
            var confirmDelete<?php echo $patient['id_patient']; ?> = "#confirmDelete<?php echo $patient['id_patient']; ?>";

        <?php } ?>

        <?php foreach ($listPatient as $patient) { ?>
            $(confirmDelete<?php echo $patient['id_patient']; ?>).on('click', function () {
                var id_patient = <?php echo $patient['id_patient']; ?>

                $.ajax({
                    url: "<?php echo _WEB_ROOT ?>/admin/deleteUserPatient",
                    method: "POST",
                    data: {
                        id_patient: id_patient
                    },
                    success: function (data) {
                        console.log(data);
                        alert('xóa bệnh nhân thành công');

                    }
                })
            });
        <?php } ?>
    });
</script>


<script>
    function addRowNumbers() {
        var table = document.getElementById("dataTable");
       

        var rows = table.rows.length;

        for (var i = 1; i < rows; i++) {
            var cell = table.rows[i].cells[0];
            cell.textContent = i;
        }
    }

    var count_delete = document.querySelector('.count_delete');
  

    window.onload = function () {
        addRowNumbers();
    };
</script>

<script>

    function removeRow(index) {
        var row = document.querySelector('tr[data-index="' + index + '"]');
        if (row) {
            row.parentNode.removeChild(row);
            addRowNumbers();
        }
    }


</script>