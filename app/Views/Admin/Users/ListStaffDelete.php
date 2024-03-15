<?php
require './app/Views/inc/HeaderAdmin.php';

?>
<div class="section__content section__content--p30">

    <h4 class="text-center">
        <?php echo $title; ?>
    </h4>

    <div class="container-fluid">

        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="card-body" style="background-color: #fff; padding: 20px;">
            <a class="btn btn-primary" href="<?php echo _WEB_ROOT ?>/admin/listUsersStaff">Danh sách nhân viên</a>
                    
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
                                $i = 0;
                                $data_index = 0;
                                foreach ($listStaffDelete as $index => $staff) {  
                                
                                    ?>
                                    <tr>
                                        <td id="row<?php echo $staff['id_staff']; ?>"></td>
                                        <td>
                                            <?php echo $staff['full_name'] ?>
                                        </td>
                                        <td>
                                            <?php echo $staff['email'] ?>
                                        </td>
                                        <td>
                                            <?php echo $staff['name_role'] ?>
                                        </td>

                                        <td>
                                            
                                            </button>
                                            <button type="button" class="btn btn-danger" data-toggle="modal"
                                                data-target="#DeleteStaff<?php echo $staff['id_staff'] ?>">
                                                Xóa vĩnh viễn
                                            </button>
                                            <a href="<?php echo _WEB_ROOT ?>/admin/restoreStaff/<?php echo $staff['id_staff'] ?>" class="btn btn-primary">Khôi phục</a>
                                            <div class="modal fade" id="DeleteStaff<?php echo $staff['id_staff'] ?>"
                                                tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                                aria-hidden="true" style="margin-top: 100px;">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">

                                                        <div class="modal-body">
                                                            <h5>Bạn có chắc chắn muốn xóa nhân viên
                                                                <b>
                                                                    <?php echo $staff['full_name'] ?>
                                                                </b>
                                                                ?
                                                            </h5>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Hủy</button>
                                                            <button type="button"
                                                                id="confirmDelete<?php echo $staff['id_staff']; ?>"
                                                                class="btn btn-danger" data-dismiss="modal"
                                                                onclick="removeRow(<?php echo $data_index++; ?>)">Xác
                                                                nhận</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <button type="button" class="btn btn-success"
                                                data-bs-target="#inforuser<?php echo $staff['id_staff'] ?>"
                                                data-bs-toggle="modal"><i class="bi bi-eye"></i></button>

                                            <div class="modal" id="inforuser<?php echo $staff['id_staff'] ?>" tabindex="-1">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content" style="width: 1000px">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Chi tiết đơn đặt</h5>
                                                            <button type="button" class="btn-close btn-danger"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>

                                                        <div class="modal-body">
                                                            <table class="table table-bordered">
                                                                <thead>
                                                                    <tr class="text-center">
                                                                    <tr>
                                                                        <td>STT</td>
                                                                        <td>Ảnh</td>
                                                                        <td>Họ tên</td>
                                                                        <td>Bộ phận</td>
                                                                        <td>Phòng ban</td>
                                                                        <td>Email</td>
                                                                        <td>Số điện thoại</td>
                                                                        <td>Ngày sinh</td>
                                                                        <td>Giới tính</td>

                                                                    </tr>
                                                                </thead>
                                                                <tbody>

                                                                    <tr class="text-center">

                                                                    <tr>
                                                                        <th>
                                                                            <?php echo ++$index; ?>
                                                                        </th>
                                                                        <th><img src="<?php echo _WEB_ROOT; ?>/public/img/users/<?php echo $staff['image']; ?>"
                                                                                width="50px" alt=""></th>
                                                                        <th>
                                                                            <?php echo $staff['full_name']; ?>
                                                                        </th>
                                                                        <th>
                                                                            <?php echo $staff['name_role']; ?>
                                                                        </th>
                                                                        <th>
                                                                            <?php echo $staff['department_name']; ?>
                                                                        </th>
                                                                        <th>
                                                                            <?php echo $staff['email']; ?>
                                                                        </th>
                                                                        <th>
                                                                            <?php echo $staff['phone']; ?>
                                                                        </th>
                                                                        <th>
                                                                            <?php echo $ngay_dau_ra = date("d/m/Y", strtotime($staff['birthday'])); ?>
                                                                        </th>
                                                                        <th>
                                                                            <?php echo $staff['gender']; ?>
                                                                        </th>
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

        <?php foreach ($listStaffDelete as $index => $staff) { ?>
            var confirmDelete<?php echo $staff['id_staff']; ?> = "#confirmDelete<?php echo $staff['id_staff']; ?>";
            var id_staff_<?php echo $staff['id_staff']; ?> = <?php echo $staff['id_staff']; ?>;
        <?php } ?>

        <?php foreach ($listStaffDelete as $staff) { ?>
            $(confirmDelete<?php echo $staff['id_staff']; ?>).on('click', function () {
                var id_staff = id_staff_<?php echo $staff['id_staff']; ?>;

                $.ajax({
                    url: "<?php echo _WEB_ROOT ?>/admin/DeleteStaffPermanent",
                    method: "POST",
                    data: {
                        id_staff: id_staff
                    },
                    success: function (data) {
                        console.log(data);
                        alert('xóa vĩnh viên nhân viên thành công');

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