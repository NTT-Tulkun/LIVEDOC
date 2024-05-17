<?php
require './app/Views/inc/HeaderAdmin.php';

?>

<div class="section__content section__content--p30">
    <h4 class="text-center">
        <?php echo $title; ?>
    </h4>




    <div class="section__content section__content--p30">
        <div class="container-fluid">

            <div class="card-body" style="background-color: #fff; padding: 20px;">
                <a href="<?php echo _WEB_ROOT; ?>/admin/addMedicine" class="btn btn-primary">Thêm thuốc mới</a>

                <div class="table-responsive p-3">
                    <table class="table table table-striped table-hover" id="dataTable">

                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tên thuốc</th>
                                <th>Loại thuốc</th>
                                <th>Chức năng</th>
                            </tr>
                        </thead>

                        <tbody class="main">
                            <script> var i = 0;</script>
                            <?php


                            $data_index = 0;
                            foreach ($listMedicine as $medicine) {

                                ?>


                                <tr id="row<?php echo $medicine['id_medicine']; ?>">

                                    <td></td>
                                    <td>
                                        <?php echo $medicine['name_medicine']; ?>
                                    </td>
                                    <td>
                                        <?php echo $medicine['name_type_medicine']; ?>
                                    </td>
                                    <td>
                                        <a href="<?php echo _WEB_ROOT ?>/admin/updatemedicine/<?php echo $medicine['id_medicine']; ?>"
                                            class="btn btn-secondary"><i class="bi bi-pencil-square"></i></a>
                                        </button>
                                        <button type="button" class="btn btn-danger" data-toggle="modal"
                                            data-target="#DeleteMedicine<?php echo $medicine['id_medicine']; ?>">
                                            <i class="bi bi-trash3-fill"></i>
                                        </button>
                                        <button type="button" class="btn btn-success" data-toggle="modal"
                                            data-target="#MedicineDetail<?php echo $medicine['id_medicine']; ?>"><i
                                                class="bi bi-eye"></i></button>




                                        <div class="modal fade" id="DeleteMedicine<?php echo $medicine['id_medicine']; ?>"
                                            tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                            aria-hidden="true" style="margin-top: 100px;">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">

                                                    <div class="modal-body">
                                                        <h3>Bạn có chắc chắn muốn xóa ?</h3>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Hủy</button>
                                                        <button type="button"
                                                            id="confirmDelete<?php echo $medicine['id_medicine']; ?>"
                                                            class="btn btn-danger" data-dismiss="modal"
                                                            onclick="removeRow(<?php echo $data_index++; ?>)">Xác
                                                            nhận</button>
                                                    </div>



                                                </div>
                                            </div>
                                        </div>

                                        <div class="modal fade" id="MedicineDetail<?php echo $medicine['id_medicine']; ?>"
                                            tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                            aria-hidden="true" style="margin-top: 100px;">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content" style="width: 600px">

                                                    <div class="modal-body">
                                                        <table class="table table bordered">
                                                            <thead>
                                                                <tr>
                                                                    <td>Tên thuốc</td>
                                                                    <td>Ngày sản xuất</td>
                                                                    <td>Hạn sử dụng</td>
                                                                    <td>Đơn vị</td>
                                                                    <td>Giá</td>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <th>
                                                                        <?php echo $medicine['name_medicine']; ?>
                                                                    </th>
                                                                    <th>
                                                                        <?php echo $medicine['date_manufacture']; ?>
                                                                    </th>
                                                                    <th>
                                                                        <?php echo $medicine['expiry']; ?>
                                                                    </th>
                                                                    <th>
                                                                        <?php echo $medicine['unit']; ?>
                                                                    </th>
                                                                    <th>
                                                                        <?php echo $medicine['medicine_price']; ?>
                                                                    </th>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </td>

                    </div>
                    </tr>




                    <?php

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
require './app/Views/inc/FooterAdmin.php';
?>

<script>
    $(document).ready(function () {
        <?php foreach ($listMedicine as $medicine) { ?>
            var confirmDelete<?php echo $medicine['id_medicine']; ?> = "#confirmDelete<?php echo $medicine['id_medicine']; ?>";
            var id_medicine_<?php echo $medicine['id_medicine']; ?> = <?php echo $medicine['id_medicine']; ?>;
        <?php } ?>

        <?php foreach ($listMedicine as $medicine) { ?>
            $(confirmDelete<?php echo $medicine['id_medicine']; ?>).on('click', function () {
                var id_medicine = id_medicine_<?php echo $medicine['id_medicine']; ?>;

                $.ajax({
                    url: "<?php echo _WEB_ROOT ?>/admin/deletemedicine",
                    method: "POST",
                    data: {
                        id_medicine: id_medicine
                    },
                    success: function (data) {
                        console.log(data);

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