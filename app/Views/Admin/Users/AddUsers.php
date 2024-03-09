    <?php
    require './app/Views/inc/HeaderAdmin.php';

    ?>
    <div class="section__content section__content--p30">
      <h4 class="text-center"><?php echo $title; ?></h4>


      <div class="container-fluid">

        <div class="card-body" style="background-color: #fff; padding: 20px;">



          <form class="row g-3 m-3" id="insert_data_user">
            <div class="col-md-6 mb-3">
              <label class="form-label"><b>Nhập họ tên:</b></label>
              <input type="text" class="form-control" placeholder="Họ tên" id="fullname" name="fullname">
            </div>

            <div class="col-md-6 mb-3">
              <label class="form-label"><b>Nhập email:</b></label>
              <input type="email" class="form-control" placeholder="Email" id="email" name="email">
            </div>

            <div class="col-md-6 mb-3">
              <label class="form-label"><b>Chọn giới tính:</b></label><br>
              <input type="radio" name="gender" id="gender" value="Nam">
              <label for="" class="mr-3">Nam</label>
              <input type="radio" name="gender" class="ml-3" id="gender" value="Nữ">
              <label for="">Nữ</label>

            </div>

            <div class="col-md-6 mb-3">
              <label class="form-label"><b>Nhập số điện thoại:</b></label>
              <input type="number" class="form-control" placeholder="số điện thoại" id="phone" name="phone">
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label"><b>Nhập năm sinh:</b></label>
              <input type="date" class="form-control" placeholder="năm sinh" id="birthday" name="birthday">
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label"><b>Nhập bằng cấp:</b></label>
              <input type="text" class="form-control" placeholder="Bằng cấp" id="certificate" name="certificate">
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label"><b>Nhập kinh nghiệm làm việc:</b></label><br>
              <textarea name="experience" id="experience" cols="60" rows="5" placeholder="Kinh nghiệm làm việc"></textarea>
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label"><b>Nhập mô tả:</b></label><br>
              <textarea name="description" id="description" cols="60" rows="5" placeholder="Mô tả"></textarea>
            </div>


            <div class="col-md-12">
              <label for=""><b>Phân quyền cho người dùng:</b></label>
            </div>

            <?php foreach ($role as $item) {
              if ($item['id_role'] != 5) {
            ?>
                <div class="col-md-2 m-3">
                  <input class="form-check-input" type="radio" name="role" id="role<?php echo $item['id_role'] ?>" value="<?php echo $item['id_role'] ?>" onclick="toggleOptions()">
                  <label for="role<?php echo $item['id_role'] ?>"><?php echo $item['name_role'] ?></label>
                </div>
            <?php
              }
            } ?>
            <div id="department" style="display: none;">
              <select name="department" class="form-select" id="depmt">
                <option value="0">Chọn phòng ban cho bác sĩ....</option>
                <?php foreach ($department as $item) { ?>
                  <option value="<?php echo $item['id_department'] ?>"><?php echo $item['department_name'] ?></option>
                <?php } ?>
              </select>
            </div>


            <div class="col-12 text-center">
              <input type="submit" value="Thêm người dùng" class="btn btn-primary" id="addUser">

            </div>
          </form>


        </div>
      </div>
      <?php
      require './app/Views/inc/FooterAdmin.php';

      ?>


