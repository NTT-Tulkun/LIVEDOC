<?php
require './app/Views/inc/HeaderAdmin.php';

?>
<div class="container-fluid">


    <div class="main-content">
        <section class="chat-section " style="margin-top: -50px;">
            <div class="chat-container" style="height: 600px;">
                <!-- start: Sidebar -->


                <div class="chat-content row" style=" height: 600px; ">
                    <!-- start: Content side -->

                    <div class="content-sidebar shadow col-4">
                        <aside class="chat-sidebar">

                            <ul class="chat-sidebar-menu">

                                <li class="chat-sidebar-profile">
                                    <button type="button" class="chat-sidebar-profile-toggle">
                                        <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OXx8cGVvcGxlfGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60"
                                            alt="">

                                    </button>
                                </li>
                            </ul>
                        </aside>
                        <div class="content-sidebar-title">Chats</div>
                        <form action="" class="content-sidebar-form">
                            <input type="search" class="content-sidebar-input" placeholder="Search...">
                            <button type="submit" class="content-sidebar-submit"><i class="ri-search-line"></i></button>
                        </form>
                        <div class="content-messages">
                            <ul class="content-messages-list">
                                <li class="content-message-title"><span>Recently</span></li>
                                <?php foreach ($message as $item) { ?>
                                    <li>
                                        <a href="<?php echo _WEB_ROOT; ?>/admin/message/<?php echo $item['id_patient'] ?>"
                                            data-conversation="#conversation-1">
                                            <img class="content-message-image"
                                                src="<?php echo _WEB_ROOT; ?>/public/img/users/<?php echo $item['image'] ?>"
                                                alt="">
                                            <span class="content-message-info">
                                                <span class="content-message-name"><?php echo $item['full_name'] ?></span>
                                                <span class="content-message-text"><?php echo $item['content'] ?></span>
                                            </span>
                                            <span class="content-message-more">
                                                <span class="content-message-unread bg-primary text-light">5</span>
                                                <span class="content-message-time">
                                                    <?php echo date("H:i", strtotime($item['send_date'])); ?>
                                                </span>
                                            </span>
                                        </a>
                                    </li>
                                <?php } ?>

                            </ul>
                        </div>
                    </div>

                    <?php foreach ($messagePatient as $item) { ?>

                        <div class="col-9" style="position: absolute; right:0px;">
                            <div class="conversation-top shadow ">
                                <button type="button" class="conversation-back"><i class="ri-arrow-left-line"></i></button>
                                <div class="conversation-user">
                                    <img class="conversation-user-image"
                                        src="<?php echo _WEB_ROOT; ?>/public/img/users/<?php echo $item['image'] ?>" alt="">
                                    <div>
                                        <div class="conversation-user-name">
                                            <?php echo $item['full_name'] ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="conversation-buttons">
                                    <a href="tel:0362449211" style="text-decoration: none;"><i
                                            class="bi bi-telephone-fill text-primary"></i></a>
                                    <a href="" style="text-decoration: none;"><i
                                            class="bi bi-info-circle text-primary"></i></a>
                                </div>
                            </div>


                            <!-- ----------------------- -->
                            <div class="conversation-main" style=" overflow-y:scroll ; height: 485px;">
                                <ul class="conversation-wrapper">
                                    <div class="coversation-divider"><span>Today</span></div>
                                    <?php
                                    foreach ($messagePatient as $item) {
                                        if ($item['sender_id'] == $id_patient) { ?>

                                        <?php }
                                    } ?>

                                    <div>
                                        <img class="conversation-item-image"
                                            src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OXx8cGVvcGxlfGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60"
                                            alt="">

                                        <span>OK</span>
                                    </div>
                                    <div>
                                        <img class="conversation-item-image"
                                            src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OXx8cGVvcGxlfGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60"
                                            alt="">

                                        <span>OK</span>
                                    </div>
                                    <div>
                                        <img class="conversation-item-image"
                                            src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OXx8cGVvcGxlfGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60"
                                            alt="">

                                        <span>OK</span>
                                    </div>
                                    <div>
                                        <img class="conversation-item-image"
                                            src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OXx8cGVvcGxlfGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60"
                                            alt="">

                                        <span>OK</span>
                                    </div>
                                    <div>
                                        <img class="conversation-item-image"
                                            src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OXx8cGVvcGxlfGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60"
                                            alt="">

                                        <span>OK</span>
                                    </div>
                                    <div>
                                        <img class="conversation-item-image"
                                            src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OXx8cGVvcGxlfGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60"
                                            alt="">

                                        <span>OK</span>
                                    </div>
                                    <div>
                                        <img class="conversation-item-image"
                                            src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OXx8cGVvcGxlfGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60"
                                            alt="">

                                        <span>OK</span>
                                    </div>
                                    <div>
                                        <img class="conversation-item-image"
                                            src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OXx8cGVvcGxlfGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60"
                                            alt="">

                                        <span>OK</span>
                                    </div>
                                    <div>
                                        <img class="conversation-item-image"
                                            src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OXx8cGVvcGxlfGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60"
                                            alt="">

                                        <span>OK</span>
                                    </div>
                                    <div>
                                        <img class="conversation-item-image"
                                            src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OXx8cGVvcGxlfGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60"
                                            alt="">

                                        <span>OK</span>
                                    </div>

                                    <li class="conversation-item me">
                                        <div class="conversation-item-side">
                                            <img class="conversation-item-image"
                                                src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OXx8cGVvcGxlfGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60"
                                                alt="">
                                        </div>
                                        <div class="conversation-item-content">
                                            <div class="conversation-item-wrapper">
                                                <div class="conversation-item-box">
                                                    <div class="conversation-item-text shadow text-dark">
                                                        <p><?php echo $item['content'] ?></p>
                                                        <div class="conversation-item-time text-dark">12:30</div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </li>
                                    <li class="conversation-item">
                                        <div class="conversation-item-side">
                                            <img class="conversation-item-image"
                                                src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OXx8cGVvcGxlfGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60"
                                                alt="">
                                        </div>
                                        <div class="conversation-item-content">
                                            <div class="conversation-item-wrapper">
                                                <div class="conversation-item-box">
                                                    <div class="conversation-item-text bg-primary text-light">
                                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                                                        <div class="conversation-item-time">12:30</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>


                                </ul>
                            </div>

                            <!-- 
                                        --------------------- -->
                            <div class="conversation-form border shadow-lg">

                                <div class="conversation-form-group rounded-2" style="border: 1px solid #ccc;">


                                    <input id="chatMes" type="text" style="width: 100%; outline: none;" class="p-1"
                                        placeholder="Nhập nội dung chat...">

                                </div>
                                <button type="button" class="conversation-form-button conversation-form-submit bg-primary"
                                    id="btn_mes"><i class="bi bi-send-fill text-light"></i></button>
                            </div>
                        </div>

                    <?php } ?>

                </div>
                <!-- end: Content -->
            </div>
        </section>
    </div>
</div>
<?php
require './app/Views/inc/FooterAdmin.php';

?>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        var button = document.querySelector('.conversation-form-button');
        var message = document.querySelector('#chatMes'); // Corrected the ID to match the HTML

        function sendMessage() {
            var inputValue = message.value.trim();
            if (inputValue !== '') {
                var listItem = document.createElement('li');
                listItem.className = 'conversation-item';

                var listItemContent = `
            <div class="conversation-item-side">
                <img class="conversation-item-image" src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OXx8cGVvcGxlfGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60" alt="">
            </div>
            <div class="conversation-item-content">
                <div class="conversation-item-wrapper">
                    <div class="conversation-item-box">
                        <div class="conversation-item-text bg-primary text-light">
                            <p>${inputValue}</p>
                            <div class="conversation-item-time">${getCurrentTime()}</div>
                        </div>
                    </div>
                </div>
            </div>
        `;

                listItem.innerHTML = listItemContent;

                var conversationList = document.querySelector('.conversation-wrapper');
                conversationList.appendChild(listItem);

                // Clear input after adding conversation item
                message.value = '';
            }
        }

        // Click event listener for button
        button.addEventListener('click', sendMessage);

        // Keydown event listener for message
        message.addEventListener('keydown', function (event) {
            // Check if the key pressed is Enter (key code 13)
            if (event.keyCode === 13) {
                event.preventDefault(); // Prevent default behavior of message (adding new line)
                sendMessage(); // Call the sendMessage function
            }
        });

        // Function to get current time in format HH:mm
        function getCurrentTime() {
            var now = new Date();
            var hours = now.getHours();
            var minutes = now.getMinutes();
            return (hours < 10 ? '0' : '') + hours + ':' + (minutes < 10 ? '0' : '') + minutes;
        }
    });


</script>

<?php
// echo "<pre>";
// print_r($messagePatient);