<?php
require './app/Views/inc/HeaderAdmin.php';

?>
<div class="section__content section__content--p30">

    <h4 class="text-center"><?php echo $title; ?></h4>

    <div class="container-fluid">



        <div class="section__content section__content--p30">
            <div class="container-fluid">

                <div class="card-body" style="background-color: #fff; padding: 20px;">
                    <a href="<?php echo _WEB_ROOT ?>/admin/addUsers" class="btn btn-primary">Thêm nhân viên</a>

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
                                $i = 1;
                                foreach ($listStaff as $index => $staff) { ?>
                                    <tr>
                                        <td><?php echo $i++; ?></td>
                                        <td><?php echo $staff['full_name'] ?></td>
                                        <td><?php echo $staff['email'] ?></td>
                                        <td><?php echo $staff['name_role'] ?></td>

                                        <td>
                                            <a href="" class="btn btn-secondary"><i class="bi bi-pencil-square"></i></a>
                                            </button>
                                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#DeleteMedicine<?php echo $staff['id_staff'] ?>">
                                                <i class="bi bi-trash3-fill"></i>
                                            </button>

                                            <div class="modal fade" id="DeleteMedicine<?php echo $staff['id_staff'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-top: 100px;">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">

                                                        <div class="modal-body">
                                                            <h5>Bạn có chắc chắn muốn xóa nhân viên
                                                                <b><?php echo $staff['full_name'] ?></b>
                                                                 ?</h5>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                                                            <button type="button" class="btn btn-danger"><a href=""></a>Xác nhận</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <button type="button" class="btn btn-success" data-bs-target="#inforuser<?php echo $staff['id_staff'] ?>" data-bs-toggle="modal"><i class="bi bi-eye"></i></button>

                                            <div class="modal" id="inforuser<?php echo $staff['id_staff'] ?>" tabindex="-1">
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
                                                                        <th><?php echo ++$index; ?></th>
                                                                        <th><img src="<?php echo _WEB_ROOT; ?>/public/img/users/<?php echo  $staff['image']; ?>" width="50px" alt=""></th>
                                                                        <th><?php echo  $staff['full_name']; ?></th>
                                                                        <th><?php echo  $staff['name_role']; ?></th>
                                                                        <th><?php echo  $staff['department_name']; ?></th>
                                                                        <th><?php echo  $staff['email']; ?></th>
                                                                        <th><?php echo  $staff['phone']; ?></th>
                                                                        <th><?php echo $ngay_dau_ra = date("d/m/Y", strtotime($staff['birthday'])); ?></th>
                                                                        <th><?php echo  $staff['gender']; ?></th>                   
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