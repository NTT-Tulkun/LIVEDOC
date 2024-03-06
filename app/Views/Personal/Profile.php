<?php
require './app/Views/inc/HeaderPersonal.php';
?>
<main id="main" class="main">
    <section style="background-color: #eee; ">
        <div class="container" style="margin-top: -100px;">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <img src="<?php echo _WEB_ROOT; ?>/public/img/users/<?php echo $_SESSION['is_login']['image'] ?>" alt="avatar" class="rounded-circle img-fluid" style="width: 150px; height: 150px;">
                            <h5 class="m-2"><?php echo $_SESSION['is_login']['fullname'] ?></h5>
                            <p class="text-muted mb-1"><?php echo $_SESSION['is_login']['name_role'] ?></p>

                        </div>
                    </div>
                    <div class="card mb-4 mb-lg-0">
                        <div class="card-body p-0">

                            <ul class="list-group list-group-flush rounded-3">
                                <h5 class="text-center m-3">Lịch khám</h5>
                                <table class="table table-striped mt-3" style="font-size: 12px;">
                                    <tr>
                                        <th>STT</th>
                                        <th>Ngày khám</th>
                                        <th>Khoa khám</th>
                                        <th>Chi tiết</th>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>12/12/2024</td>
                                        <td>Mắt</td>
                                        <td><a href="" class="text-danger">Xem</a></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>12/12/2024</td>
                                        <td>Mắt</td>
                                        <td><a href="" class="text-danger">Xem</a></td>
                                    </tr>
                                </table>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Họ và tên:</p>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" name="fullname" id="fullname" class="border-0" value="<?php echo $_SESSION['is_login']['fullname'] ?>" width="100%">

                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Giới tính:</p>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" name="" id="" class="border-0" value="<?php echo $_SESSION['is_login']['gender'] ?>">

                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Email:</p>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" name="" id="" class="border-0" value="<?php echo $_SESSION['is_login']['email'] ?>">

                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Số điện thoại:</p>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" name="" id="" class="border-0" value="<?php echo $_SESSION['is_login']['phone'] ?>">

                                </div>
                            </div>

                            <hr>

                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Bằng cấp:</p>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" name="" id="" class="border-0" value="<?php echo $_SESSION['is_login']['certificate'] ?>" style="width: 100%;">

                                </div>
                            </div>

                            <hr>

                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Kinh nghiệm:</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?php
                                                                $string = $_SESSION['is_login']['experience'];
                                                                $segments = explode(".", $string);
                                                                foreach ($segments as $segment) {
                                                                    echo $segment . "<br>";
                                                                }   ?></p>
                                </div>
                            </div>

                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Mô tả:</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?php
                                                                $string = $_SESSION['is_login']['description'];
                                                                $segments = explode(".", $string);
                                                                foreach ($segments as $segment) {
                                                                    echo $segment . "<br>";
                                                                }   ?></p>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card mb-4 mb-md-0">
                                <div class="card-body" style="height: 350px; overflow-y: scroll;">
                                    <span class="">Lịch sử khám bệnh</span> <a href="" class="text-danger" style="font-size: 10px;">(Xem chi tiết)</a>

                                    <table class="table table-striped mt-3" style="font-size: 12px;">
                                        <tr>
                                            <th>STT</th>
                                            <th>Ngày khám</th>
                                            <th>Khoa khám</th>
                                            <th>Chi tiết</th>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>12/12/2024</td>
                                            <td>Mắt</td>
                                            <td><a href="" class="text-danger">Xem</a></td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>12/12/2024</td>
                                            <td>Mắt</td>
                                            <td><a href="" class="text-danger">Xem</a></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card mb-4 mb-md-0">
                                <div class="card-body" style="height: 350px; overflow-y: scroll;">
                                    <span class="">Đơn thuốc</span> <a href="" class="text-danger" style="font-size: 10px;">(Xem chi tiết)</a>

                                    <table class="table table-striped mt-3" style="font-size: 12px;">
                                        <tr>
                                            <th>STT</th>
                                            <th>Ngày khám</th>
                                            <th>Khoa khám</th>
                                            <th>Chi tiết</th>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>12/12/2024</td>
                                            <td>Mắt</td>
                                            <td><a href="" class="text-danger">Xem</a></td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>12/12/2024</td>
                                            <td>Mắt</td>
                                            <td><a href="" class="text-danger">Xem</a></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
require './app/Views/inc/FooterPersonal.php';
?>

