
    
    <section class="py-0 bg-secondary">
      <div class="bg-holder opacity-25"
        style="background-image:url(public/img/gallery/dot-bg.png);background-position:top left;margin-top:-3.125rem;background-size:auto;">
      </div>
      <!--/.bg-holder-->

      <div class="container">
        <div class="row py-3">
        
          <div class="col-12 col-sm-4 col-lg-12 mb-3 order-2 order-sm-1">
            <h5 class="lh-lg  mb-4 text-light font-sans-serif">Thông tin liên hệ</h5>
            <ul class="list-unstyled mb-md-4 mb-lg-0">
              <li class="lh-lg"><a class="footer-link" href="#!">Địa chỉ: 12 Nguyễn Văn Bảo, Phường 4, Gò Vấp, TPHCM</a></li>
              <li class="lh-lg"><a class="footer-link" href="#!">SĐT: 0362449211 - 0328316070</a></li>
              <li class="lh-lg"><a class="footer-link" href="#!">Email: minhhuan190102@gmail.com - ntthanh12a1@gmail.com</a></li>
            </ul>
          </div>
          
  
        </div>
      </div>


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-0 bg-primary">

        <div class="container">
          <div class="row justify-content-md-between justify-content-evenly py-4">
            <div class="col-12 col-sm-8 col-md-6 col-lg-auto text-center text-md-start">
              <p class="fs--1 my-2 fw-bold text-200">All rights Reserved &copy; Your Company, 2024</p>
            </div>
          
          </div>
        </div>
        <!-- end of .container-->

      </section>
     


    </section>
  </main>


  <button id="showChat" style="position: fixed; right: 20px; bottom: 30px;">
    <i class="bi bi-messenger text-success" style="font-size: 60px;"></i></button>


  <div class="col-lg-3" style="position: fixed; right: 10px; bottom: 0px; display: none; z-index: 100;" id="chatBox">
    <div class="au-card au-card--no-shadow au-card--no-pad m-b-40 au-card--border shadow">
      <div class="bg-light" style="height: 80px;">
        <div class="au-chat-info shadow-sm" style="position: relative;">
          <div class="avatar-wrap online ">
            <div class="avatar avatar--small" style="width: 40px;">
              <img src="public/img/gallery/leo-mario.png" alt="John Smith">
            </div>
          </div>
          <span class="nick">
            <a href="#">John Smith</a>
          </span>
          <button id="closeChat" class="text-primary" style="position: absolute; right: 10px; bottom: 20%"><i
              class="bi bi-x" style="font-size: 30px;"></i></button>
        </div>


      </div>
      <div class="au-inbox-wrap">
        <div class="au-chat au-chat--border">
          <div class="au-chat__title">

          </div>
          <div class="au-chat__content au-chat__content2 js-scrollbar5">
            <div class="recei-mess-wrap">
              <span class="mess-time">12 Min ago</span>
              <div class="recei-mess__inner">
                <div class="avatar avatar--tiny">
                  <img src="images/icon/avatar-02.jpg" alt="John Smith">
                </div>
                <div class="recei-mess-list">
                  <div class="recei-mess rounded-3">Lorem ipsum dolor sit amet elit</div>
                </div>
              </div>
            </div>
            <div class="send-mess-wrap">
              <span class="mess-time">30 Sec ago</span>
              <div class="send-mess__inner">
                <div class="send-mess-list">
                  <div class="send-mess rounded-3">Lorem ipsum dolor sit amet elit</div>
                </div>
              </div>

              <div class="send-mess__inner">
                <div class="send-mess-list">
                  <div class="send-mess rounded-3">Lorem ipsum dolor sit amet elit</div>
                </div>
              </div>
            </div>

            <div class="send-mess-wrap">
              <span class="mess-time">30 Sec ago</span>
              <div class="send-mess__inner">
                <div class="send-mess-list">
                  <div class="send-mess rounded-3">Lorem ipsum dolor sit amet elit</div>
                </div>
              </div>

              <div class="send-mess__inner">
                <div class="send-mess-list">
                  <div class="send-mess rounded-3">Lorem ipsum dolor sit amet elit</div>
                </div>
              </div>
            </div>

            <div class="send-mess-wrap">
              <span class="mess-time">30 Sec ago</span>
              <div class="send-mess__inner">
                <div class="send-mess-list">
                  <div class="send-mess rounded-3">Lorem ipsum dolor sit amet elit</div>
                </div>
              </div>

              <div class="send-mess__inner">
                <div class="send-mess-list">
                  <div class="send-mess rounded-3">Lorem ipsum dolor sit amet elit</div>
                </div>
              </div>
            </div>


            <div class="send-mess-wrap">
              <span class="mess-time">30 Sec ago</span>
              <div class="send-mess__inner">
                <div class="send-mess-list">
                  <div class="send-mess rounded-3">Lorem ipsum dolor sit amet elit</div>
                </div>
              </div>

              <div class="send-mess__inner">
                <div class="send-mess-list">
                  <div class="send-mess rounded-3">Lorem ipsum dolor sit amet elit</div>
                </div>
              </div>
            </div>




          </div>
          <div class="rounded-3 text-center m-3 " style=" width: 90%; margin: auto; background-color: #ccc;">
            <form class="au-form-icon">
              <input class="au-input" type="text" placeholder="Nhập nội dung"
                style="height: 40px; border: none; background-color: #ccc;">

              <button type="button" onclick="sendmessage()"><i class="bi bi-send-fill m-1 text-primary"
                  style="font-size: 16px;"></i></button>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>



  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>





  <script src="<?php echo _WEB_ROOT; ?>/public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="<?php echo _WEB_ROOT; ?>/public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  
  <script src="https://scripts.sirv.com/sirvjs/v3/sirv.js"></script>


  <script src="<?php echo _WEB_ROOT;?>/public/js/theme.js"></script>

  
  <link
    href="https://fonts.googleapis.com/css2?family=Fjalla+One&amp;family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100&amp;display=swap"
    rel="stylesheet">
</body>

</html>

<!-- CHAT BOX -->
<script>
  document.getElementById('showChat').addEventListener('click', function () {
    var chatBox = document.getElementById('chatBox');
    chatBox.style.display = (chatBox.style.display === 'none' || chatBox.style.display === '') ? 'block' : 'none';

    if (chatBox.style.display === 'block') {
      // Cuộn xuống cuối nội dung trò chuyện
      var chatContent = document.querySelector('.au-chat__content');
      chatContent.scrollTop = chatContent.scrollHeight;
    }
  });

  document.getElementById('closeChat').addEventListener('click', function () {
    var chatBox = document.getElementById('chatBox');
    chatBox.style.display = (chatBox.style.display === 'none' || chatBox.style.display === '') ? 'block' : 'none';
  });

</script>