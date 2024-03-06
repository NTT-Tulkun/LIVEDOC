<?php
require './app/Views/inc/HeaderPersonal.php';
?>

<?php
$ngayXemLich = (new DateTime())->format('Y-m-d');

$monday = strtotime('this week monday');
$thu2 = date('d/m/Y', $monday);

$tuesday = strtotime('this week tuesday');
$thu3  = date('d/m/Y', $tuesday);

$thursday = strtotime('this week wednesday');
$thu4  = date('d/m/Y', $thursday);

$thursday = strtotime('this week thursday');
$thu5  = date('d/m/Y', $thursday);

$friday = strtotime('this week friday');
$thu6  = date('d/m/Y', $friday);

$saturday = strtotime('this week saturday');
$thu7  = date('d/m/Y', $saturday);

$sunday = strtotime('this week sunday');
$thu8  = date('d/m/Y', $sunday);
if (!isset($_SESSION['t2'])) {

    $_SESSION['t2']  = $thu2;
    $_SESSION['t3']  = $thu3;
    $_SESSION['t4']  = $thu4;
    $_SESSION['t5']  = $thu5;
    $_SESSION['t6']  = $thu6;
    $_SESSION['t7']  = $thu7;
    $_SESSION['t8']  = $thu8;
}

if (isset($_POST['next'])) {
    $dates = ['t2', 't3', 't4', 't5', 't6', 't7', 't8'];

    foreach ($dates as $date) {
        $dateTime = DateTime::createFromFormat('d/m/Y', $_SESSION[$date]);
        $dateTime->modify('+7 days');
        $_SESSION[$date] = $dateTime->format('d/m/Y');
    }
    $ngayXemLich = DateTime::createFromFormat('d/m/Y', $_SESSION['t2'])->format('Y-m-d');
} elseif (isset($_POST['prev'])) {
    $dates = ['t2', 't3', 't4', 't5', 't6', 't7', 't8'];

    foreach ($dates as $date) {
        $dateTime = DateTime::createFromFormat('d/m/Y', $_SESSION[$date]);
        $dateTime->modify('-7 days');
        $_SESSION[$date] = $dateTime->format('d/m/Y');
    }

    $ngayXemLich = DateTime::createFromFormat('d/m/Y', $_SESSION['t2'])->format('Y-m-d');
} elseif (isset($_POST['current'])) {
    $_SESSION['t2'] = $thu2;
    $_SESSION['t3'] = $thu3;
    $_SESSION['t4'] = $thu4;
    $_SESSION['t5'] = $thu5;
    $_SESSION['t6'] = $thu6;
    $_SESSION['t7'] = $thu7;
    $_SESSION['t8'] = $thu8;
} elseif (isset($_POST['findDate'])) {

    $ngay_dau_tuan = date('Y-m-d', strtotime('monday this week', strtotime($_POST['date'])));
    $ngay_trong_tuan = array();

    $ngay_trong_tuan[] = $ngay_dau_tuan;

    for ($i = 1; $i < 7; $i++) {
        $ngay_trong_tuan[] = date('Y-m-d', strtotime("+$i day", strtotime($ngay_dau_tuan)));
    }


    $_SESSION['t2'] = date('d/m/Y', strtotime($ngay_trong_tuan[0]));
    $_SESSION['t3'] = date('d/m/Y', strtotime($ngay_trong_tuan[1]));
    $_SESSION['t4'] = date('d/m/Y', strtotime($ngay_trong_tuan[2]));
    $_SESSION['t5'] = date('d/m/Y', strtotime($ngay_trong_tuan[3]));
    $_SESSION['t6'] = date('d/m/Y', strtotime($ngay_trong_tuan[4]));
    $_SESSION['t7'] = date('d/m/Y', strtotime($ngay_trong_tuan[5]));
    $_SESSION['t8'] = date('d/m/Y', strtotime($ngay_trong_tuan[6]));
}



$t2 = $_SESSION['t2'];
$t3 = $_SESSION['t3'];
$t4 = $_SESSION['t4'];
$t5 = $_SESSION['t5'];
$t6 = $_SESSION['t6'];
$t7 = $_SESSION['t7'];
$t8 = $_SESSION['t8'];






?>


<main id="main" class="main">

    <div class="container-fluid px-4 calendar">

        <h3>Danh sách thực đơn</h3><br>
        <form action="" method="post">
            <input type="date" id="selectedDate" class="p-1 rounded-2" name="date" value="<?php if (isset($_POST['findDate'])) {
                                                                        echo $_POST['date'];
                                                                    } else {
                                                                        echo $ngayXemLich;
                                                                    }  ?>" onchange="submitForm()">
            <input type="submit" value="Trở về" id="previousWeekButton" name="prev" class="bg-info text-light border-0 rounded" style="padding: 4px 15px;">
            <input type="submit" value="Hiện Tại" id="currentDateButton" name="current" class="bg-info text-light border-0 rounded" style="padding: 4px 15px;">
            <input type="submit" value="Tiếp" id="nextWeekButton" name="next" class="bg-info text-light border-0 rounded" style="padding: 4px 15px;">
            <input type="submit" value="Tìm" id="findDate" name="findDate" style="display: none;">
        </form>

        <div>
            <table class="calendartable table table-bordered mt-3">
                <tr class="bg-primary border-3">

                    <th class="text-light bg-danger text-center">Thời gian</th>
                    <th class="text-light text-center" id="day">Thứ 2 <?php echo $t2;  ?></th>


                    <th class="text-light text-center" id="day">Thứ 3 <?php echo $t3; ?></th>


                    <th class="text-light text-center" id="day">Thứ 4 <?php echo $t4; ?></th>


                    <th class="text-light text-center" id="day">Thứ 5 <?php echo $t5; ?></th>


                    <th class="text-light text-center" id="day">Thứ 6 <?php echo $t6; ?></th>


                    <th class="text-light text-center" id="day">Thứ 7 <?php echo $t7; ?></th>


                    <th class="text-light text-center" id="day">Chủ nhật <?php echo $t8; ?></th>


                </tr>
                <tr class="border-3">
                    <td class="text-center align-middle bg-warning"><b>Sáng</b></td>
                    <td>
                        <div class="bg-info m-1 p-2" style="min-height: 100px;">
                            <h6 class="text-center text-light">7h30-8h</h6>
                            <h6>Phòng: 1</h6>
                            <h6>Bệnh nhân: Nguyễn Hồ Minh Huân</h6>
                            <p style="font-size: 12px; line-height: 1;">Ghi chú: Sốt 39 độ, Cơ thể cảm thấy đau nhức nhẹ</p>
                            <button type="button" class="btn-danger border-none rounded" data-bs-toggle="modal" data-bs-target="#exampleModal" style="font-size: 10px;">
                                Xem chi tiết
                            </button>

                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            ...
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <a href="" class="text-light  border-none rounded" style="font-size: 10px;"><button class="btn-primary rounded"> Lập phiếu khám</button></a>
                        </div>

                        <div class="bg-info m-1 p-2" style="min-height: 100px;">
                            <h6 class="text-center text-light">7h30-8h</h6>
                            <h6>Phòng: 1</h6>
                            <h6>Bệnh nhân: Nguyễn Hồ Minh Huân</h6>
                            <p style="font-size: 12px; line-height: 1;">Ghi chú: Sốt 39 độ, Cơ thể cảm thấy đau nhức nhẹ</p>
                            <button type="button" class="btn-danger border-none rounded" data-bs-toggle="modal" data-bs-target="#exampleModal" style="font-size: 10px;">
                                Xem chi tiết
                            </button>

                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            ...
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <a href="" class="text-light  border-none rounded" style="font-size: 10px;"><button class="btn-primary rounded"> Lập phiếu khám</button></a>
                        </div>

                    </td>

                    <td>
                        <div class="bg-info m-1 p-2" style="min-height: 100px;">
                            <h6 class="text-center text-light">7h30-8h</h6>
                            <h6>Phòng: 1</h6>
                            <h6>Bệnh nhân: Nguyễn Hồ Minh Huân</h6>
                            <p style="font-size: 12px; line-height: 1;">Ghi chú: Sốt 39 độ, Cơ thể cảm thấy đau nhức nhẹ</p>
                            <button type="button" class="btn-danger border-none rounded" data-bs-toggle="modal" data-bs-target="#exampleModal" style="font-size: 10px;">
                                Xem chi tiết
                            </button>

                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            ...
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <a href="" class="text-light  border-none rounded" style="font-size: 10px;"><button class="btn-primary rounded"> Lập phiếu khám</button></a>
                        </div>

                        <div class="bg-info m-1 p-2" style="min-height: 100px;">
                            <h6 class="text-center text-light">7h30-8h</h6>
                            <h6>Phòng: 1</h6>
                            <h6>Bệnh nhân: Nguyễn Hồ Minh Huân</h6>
                            <p style="font-size: 12px; line-height: 1;">Ghi chú: Sốt 39 độ, Cơ thể cảm thấy đau nhức nhẹ</p>
                            <button type="button" class="btn-danger border-none rounded" data-bs-toggle="modal" data-bs-target="#exampleModal" style="font-size: 10px;">
                                Xem chi tiết
                            </button>

                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            ...
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <a href="" class="text-light  border-none rounded" style="font-size: 10px;"><button class="btn-primary rounded"> Lập phiếu khám</button></a>
                        </div>

                    </td>


                    <td>

                    </td>

                    <td>

                    </td>

                    <td>


                    </td>

                    <td>

                    </td>

                    <td>

                    </td>

                </tr>


                <tr class="border-3">
                    <td class="text-center align-middle bg-warning"><b>Chiều</b></td>
                    <td>



                    </td>

                    <td>


                    </td>

                    <td>

                    </td>

                    <td>

                    </td>

                    <td>

                    </td>

                    <td>

                    </td>

                    <td>

                    </td>
                </tr>
            </table>

        </div>
    </div>
</main>
<?php
require './app/Views/inc/FooterPersonal.php';
?>
<script>
    function submitForm() {
        document.getElementById("findDate").click();
    }
</script>