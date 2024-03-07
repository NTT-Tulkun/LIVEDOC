<?php
require './app/Views/inc/HeaderAdmin.php';

?>

<div class="section__content section__content--p30">
<h4 class="text-center"><?php echo $title; ?></h4>


    <div class="modal fade" id="DeleteMedicine" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-top: 100px;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-body">
                    <h3>Bạn có chắc chắn muốn xóa ?</h3>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                    <button type="button" class="btn btn-danger">Xác nhận</button>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="MedicineDetail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-top: 100px;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-body">
                    <table class="table table bordered">
                        <thead>
                            <tr>
                                <th>Tên thuốc</th>
                                <th>Ngày sản xuất</th>
                                <th>Hạn sử dụng</th>
                                <th>Đơn vị</th>
                                <th>Giá</th>
                            </tr>
                        </thead>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                    </table>
                </div>

            </div>
        </div>
    </div>
    <div class="section__content section__content--p30">
        <div class="container-fluid">

            <div class="card-body" style="background-color: #fff; padding: 20px;">
                <a href="<?php echo _WEB_ROOT; ?>/admin/addMedicine" class="btn btn-primary">Thêm thuốc mới</a>

                <div class="table-responsive p-3">
                    <table class="table  table table-striped table-hover" id="dataTable">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tên thuốc</th>
                                <th>Loại thuốc</th>
                                <th>Chức năng</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                                $dem=1;
                                foreach($listMedicine as $medicine){?>
                                    <tr>
                                    <td><?php echo $dem;?></td>
                                    <td><?php echo $medicine['name_medicine'];?></td>
                                    <td><?php echo $medicine['name_type_medicine'];?></td>
                                    <td>
                                    <a href="" class="btn btn-secondary"><i class="bi bi-pencil-square"></i></a>
                                    </button>
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#DeleteMedicine">
                                        <i class="bi bi-trash3-fill"></i>
                                    </button>
                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#MedicineDetail"><i class="bi bi-eye"></i></button>
                                </td>
                            </tr>
                           
                            <?php
                                $dem=$dem+1;
                                }
                            ?>
                           
                                   


                        </tbody>
                    </table>
                </div>
            </div>


        </div>
    </div>
</div>
<?php
echo "<pre>";
$dem=$listMedicine[0]['id_medicine'];
print_r($listMedicine[$dem]);
require './app/Views/inc/FooterAdmin.php';

?>