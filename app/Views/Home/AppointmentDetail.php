<?php
require './app/Views/inc/Header.php';




?>







<section class="py-7" style="margin-bottom: 200px;">
  <h1 class="text-center">CHỌN THỜI GIAN KHÁM</h1>
  <div class="container">
    <div class="row">

      <div class="col-lg-6 z-index-2">
        <?php require 'Calendar.php'; ?>
      </div>
      <div class="col-lg-6 z-index-2" style="margin-top:70px;">
        <form class="row g-3">
          <div class="col-md-12 bg-primary p-2 rounded">
            <p class="text-center text-light display-5"><?php
                                                        if (isset($_GET['day']) && isset($_GET['month']) && isset($_GET['year'])) {
                                                          $year = $_GET['year'];
                                                          $month = $_GET['month'];
                                                          $day = $_GET['day'];

                                                          echo "Ngày $day/$month/$year";
                                                        }
                                                        ?></p>
          </div>
          <div class="col-md-5">

            <div class="col-md-12 row ">
              <table class="table">
                <tr>
                  <td>
                    <div class="border rounded p-1 " style="pointer-events: none;">
                      <input class="form-check-input" type="radio" name="appointment">
                      <span><del>7:30</del></span>

                    </div>
                  </td>
                  <td>
                    <div class="border border-primary rounded p-1 " style="cursor: pointer;">
                      <input class="form-check-input" type="radio" name="appointment">
                      <spa class="fw-bold">8:00</span>
                    </div>
                  </td>
                </tr>

                <tr>
                  <td>
                    <div class="border border-primary rounded p-1 " style="cursor: pointer;">
                      <input class="form-check-input" type="radio" name="appointment">
                      <span class="fw-bold">8:30</span>
                    </div>
                  </td>
                  <td>
                    <div class="border border-primary rounded p-1" style="cursor: pointer;">
                      <input class="form-check-input" type="radio" name="appointment">
                      <span class="fw-bold">9:00</span>
                    </div>
                  </td>
                </tr>

                <tr>
                  <td>
                    <div class="border border-primary rounded p-1" style="cursor: pointer;">
                      <input class="form-check-input" type="radio" name="appointment">
                      <span class="fw-bold">9:30</span>
                    </div>
                  </td>
                  <td>
                    <div class="border border-primary rounded p-1 " style="cursor: pointer;">
                      <input class="form-check-input" type="radio" name="appointment">
                      <span class="fw-bold">10:00</span>
                    </div>
                  </td>
                </tr>

                <tr>

                  <td>
                    <div class="border border-primary rounded p-1 " style="cursor: pointer;">
                      <input class="form-check-input" type="radio" name="appointment">
                      <span class="fw-bold">10:30</span>
                    </div>
                  </td>
                  <td>
                    <div class="border border-primary rounded p-1" style="cursor: pointer;">
                      <input class="form-check-input" type="radio" name="appointment">
                      <span class="fw-bold">11:00</span>
                    </div>
                  </td>
                </tr>

                <tr>
                  <td>
                    <div class="border border-primary rounded p-1" style="cursor: pointer;">
                      <input class="form-check-input" type="radio" name="appointment">
                      <span class="fw-bold">13:30</span>
                    </div>
                  </td>
                  <td>
                    <div class="border border-primary rounded p-1" style="cursor: pointer;">
                      <input class="form-check-input" type="radio" name="appointment">
                      <span class="fw-bold">14:00</span>
                    </div>
                  </td>
                </tr>

                <tr>

                  <td>
                    <div class="border border-primary rounded p-1" style="cursor: pointer;">
                      <input class="form-check-input" type="radio" name="appointment">
                      <span class="fw-bold">14:30</span>
                    </div>
                  </td>
                  <td>
                    <div class="border border-primary rounded p-1" style="cursor: pointer;">
                      <input class="form-check-input" type="radio" name="appointment">
                      <span class="fw-bold">15:00</span>
                    </div>
                  </td>
                </tr>


                <tr>
                  <td>
                    <div class="border border-primary rounded p-1" style="cursor: pointer;">
                      <input class="form-check-input" type="radio" name="appointment">
                      <span class="fw-bold">15:30</span>
                    </div>
                  </td>
                  <td>
                    <div class="border border-primary rounded p-1 " style="cursor: pointer;">
                      <input class="form-check-input" type="radio" name="appointment">
                      <span class="fw-bold">16:00</span>
                    </div>
                  </td>
                </tr>

                <tr>

                  <td>
                    <div class="border border-primary rounded p-1" style="cursor: pointer;">
                      <input class="form-check-input" type="radio" name="appointment">
                      <span class="fw-bold">16:30</span>
                    </div>
                  </td>
                  <td>
                    <div class="border border-primary rounded p-1" style="cursor: pointer;">
                      <input class="form-check-input" type="radio" name="appointment">
                      <span class="fw-bold">17:00</span>
                    </div>
                  </td>
                </tr>
              </table>
            </div>
          </div>
          <div class="col-sm-12 col-md-7 text-center">

            <textarea name="" id="" cols="45" class="rounded border" rows="3" placeholder=" Nhập vấn đề hiện tại của bạn..."></textarea>

            <div class="" style="margin-top: 5%; ">
              <input type="submit" value="Đặt lịch" class="btn btn-primary rounded-pill">

            </div>
          </div>



        </form>


      </div>
    </div>
  </div>
</section>


<?php
require './app/Views/inc/Footer.php';
?>