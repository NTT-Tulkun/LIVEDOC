<?php
require './app/Views/inc/Header.php';

?>

<section class="py-6">

<div class="container">
  <div class="row py-5 align-items-center justify-content-center justify-content-lg-evenly">
    <div class="col-auto col-md-4 col-lg-auto text-xl-start">
      <div class="d-flex flex-column align-items-center">
        <div class="icon-box text-center"><a class="text-decoration-none" href="#!"><img
              class="mb-3 deparment-icon" src="<?php  echo _WEB_ROOT; ?>/public/img/icons/neurology.png" alt="..." /><img
              class="mb-3 deparment-icon-hover" src="<?php echo _WEB_ROOT; ?>/public/img/icons/neurology.svg" alt="..." />
            <p class="fs-1 fs-xxl-2 text-center">Thần kinh</p>
          </a></div>
      </div>
    </div>
    <div class="col-auto col-md-4 col-lg-auto text-xl-start">
      <div class="d-flex flex-column align-items-center">
        <div class="icon-box text-center"><a class="text-decoration-none" href="#!"><img
              class="mb-3 deparment-icon" src="<?php echo _WEB_ROOT; ?>/public/img/icons/eye-care.png" alt="..." /><img
              class="mb-3 deparment-icon-hover" src="<?php echo _WEB_ROOT; ?>/public/img/icons/eye-care.svg" alt="..." />
            <p class="fs-1 fs-xxl-2 text-center">Mắt</p>
          </a></div>
      </div>
    </div>
    <div class="col-auto col-md-4 col-lg-auto text-xl-start">
      <div class="d-flex flex-column align-items-center">
        <div class="icon-box text-center"><a class="text-decoration-none" href="#!"><img
              class="mb-3 deparment-icon" src="<?php echo _WEB_ROOT; ?>/public/img/icons/cardiac.png" alt="..." /><img
              class="mb-3 deparment-icon-hover" src="<?php echo _WEB_ROOT; ?>/public/img/icons/cardiac.svg" alt="..." />
            <p class="fs-1 fs-xxl-2 text-center">Hô hấp</p>
          </a></div>
      </div>
    </div>
    <div class="col-auto col-md-4 col-lg-auto text-xl-start">
      <div class="d-flex flex-column align-items-center">
        <div class="icon-box text-center"><a class="text-decoration-none" href="#!"><img
              class="mb-3 deparment-icon" src="<?php echo _WEB_ROOT; ?>/public/img/icons/heart.png" alt="..." /><img
              class="mb-3 deparment-icon-hover" src="<?php echo _WEB_ROOT; ?>/public/img/icons/heart.svg" alt="..." />
            <p class="fs-1 fs-xxl-2 text-center">Tim mạch</p>
          </a></div>
      </div>
    </div>
    <div class="col-auto col-md-4 col-lg-auto text-xl-start">
      <div class="d-flex flex-column align-items-center">
        <div class="icon-box text-center"><a class="text-decoration-none" href="#!"><img
              class="mb-3 deparment-icon" src="<?php echo _WEB_ROOT; ?>/public/img/icons/osteoporosis.png" alt="..." /><img
              class="mb-3 deparment-icon-hover" src="<?php echo _WEB_ROOT; ?>/public/img/icons/osteoporosis.svg" alt="..." />
            <p class="fs-1 fs-xxl-2 text-center">Xương khớp</p>
          </a></div>
      </div>
    </div>
    <div class="col-auto col-md-4 col-lg-auto text-xl-start">
      <div class="d-flex flex-column align-items-center">
        <div class="icon-box text-center"><a class="text-decoration-none" href="#!"><img
              class="mb-3 deparment-icon" src="<?php echo _WEB_ROOT; ?>/public/img/icons/ent.png" alt="..." /><img
              class="mb-3 deparment-icon-hover" src="<?php echo _WEB_ROOT; ?>/public/img/icons/ent.svg" alt="..." />
            <p class="fs-1 fs-xxl-2 text-center">Tai mũi họng</p>
          </a></div>
      </div>
    </div>
  </div>
</div>


</section>

<section class="py-1">
    <h1 class="text-center">ĐẶT LỊCH KHÁM</h1>
    <div class="container">
        <div class="row">

            <div class="col-lg-6 z-index-2"><img class="w-100" src="<?php echo _WEB_ROOT; ?>/public/img/gallery/appointment.png" alt="..." /></div>
            <div class="col-lg-6 z-index-2" style="margin-top:70px;">
                <form class="row g-3" action="<?php echo _WEB_ROOT; ?>/Home/appointmentDetail" method="POST">

                    <div class="col-md-12">
                        <label class="form-label text-dark">Chọn phòng khám:</label>
                        <select class="form-select border border-primary">
                            <option selected="selected">Chọn phòng khám</option>
                            <option> Category One</option>
                            <option> Category Two</option>
                            <option> Category Three</option>
                        </select>
                    </div>

                    <div class="col-md-12">
                        <label class="form-label text-dark">Chọn bác sĩ:</label>
                        <select class="form-select border border-primary">
                            <option selected="selected">Chọn bác sĩ</option>
                            <option> Category One</option>
                            <option> Category Two</option>
                            <option> Category Three</option>
                        </select>
                    </div>

                    <div class="col-12 text-center ">
        
                        <input type="submit" value="Tiếp theo" class="btn btn-primary rounded-pill">



                    </div>
                </form>


            </div>
        </div>
    </div>
</section>
<?php
require './app/Views/inc/Footer.php';
?>