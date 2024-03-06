<?php
require './app/Views/inc/HeaderAdmin.php';

?>
<div class="container-fluid">


    <div class="main-content">
        <section class="chat-section " style="margin-top: -50px;">
            <div class="chat-container" style="height: 600px;">
                <!-- start: Sidebar -->


                <div class="chat-content" style="height: 600px;">
                    <!-- start: Content side -->

                    <div class="content-sidebar shadow ">
                        <aside class="chat-sidebar">

                            <ul class="chat-sidebar-menu">

                                <li class="chat-sidebar-profile">
                                    <button type="button" class="chat-sidebar-profile-toggle">
                                        <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OXx8cGVvcGxlfGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60" alt="">

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
                                <li>
                                    <a href="#" data-conversation="#conversation-1">
                                        <img class="content-message-image" src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OXx8cGVvcGxlfGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60" alt="">
                                        <span class="content-message-info">
                                            <span class="content-message-name">Someone</span>
                                            <span class="content-message-text">Lorem ipsum dolor sit amet
                                                consectetur.</span>
                                        </span>
                                        <span class="content-message-more">
                                            <span class="content-message-unread bg-primary text-light">5</span>
                                            <span class="content-message-time">12:30</span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" data-conversation="#conversation-2">
                                        <img class="content-message-image" src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OXx8cGVvcGxlfGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60" alt="">
                                        <span class="content-message-info">
                                            <span class="content-message-name">Someone</span>
                                            <span class="content-message-text">Lorem ipsum dolor sit amet
                                                consectetur.</span>
                                        </span>
                                        <span class="content-message-more">
                                            <span class="content-message-time">12:30</span>
                                        </span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>


                    <div class="conversation conversation-default active">
                        <i class="ri-chat-3-line"></i>
                        <p>Chọn trò chuyện và xem cuộc trò chuyện!</p>
                    </div>
                    <div class="conversation bg-light" id="conversation-1">
                        <div class="conversation-top shadow ">
                            <button type="button" class="conversation-back"><i class="ri-arrow-left-line"></i></button>
                            <div class="conversation-user">
                                <img class="conversation-user-image" src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OXx8cGVvcGxlfGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60" alt="">
                                <div>
                                    <div class="conversation-user-name">Someone</div>
                                </div>
                            </div>
                            <div class="conversation-buttons">
                                <a href="tel:0362449211" style="text-decoration: none;"><i class="bi bi-telephone-fill text-primary"></i></a>
                                <a href="" style="text-decoration: none;"><i class="bi bi-info-circle text-primary"></i></a>
                            </div>
                        </div>


                        <!-- ----------------------- -->
                        <div class="conversation-main">
                            <ul class="conversation-wrapper">
                                <div class="coversation-divider"><span>Today</span></div>
                                <li class="conversation-item me">
                                    <div class="conversation-item-side">
                                        <img class="conversation-item-image" src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OXx8cGVvcGxlfGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60" alt="">
                                    </div>
                                    <div class="conversation-item-content">
                                        <div class="conversation-item-wrapper">
                                            <div class="conversation-item-box">
                                                <div class="conversation-item-text bg-primary">
                                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet natus
                                                        repudiandae quisquam sequi nobis suscipit consequatur rerum alias
                                                        odio repellat!</p>
                                                    <div class="conversation-item-time ">12:30</div>
                                                </div>
                                                <div class="conversation-item-dropdown">
                                                    <button type="button" class="conversation-item-dropdown-toggle"><i class="ri-more-2-line"></i></button>
                                                    <ul class="conversation-item-dropdown-list bg-light">
                                                        <li><a href="#"><i class="ri-share-forward-line"></i> Forward</a>
                                                        </li>
                                                        <li><a href="#"><i class="ri-delete-bin-line"></i> Delete</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="conversation-item-wrapper">
                                            <div class="conversation-item-box">
                                                <div class="conversation-item-text bg-primary">
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque,
                                                        tenetur!</p>
                                                    <div class="conversation-item-time">12:30</div>
                                                </div>
                                                <div class="conversation-item-dropdown">
                                                    <button type="button" class="conversation-item-dropdown-toggle"><i class="ri-more-2-line"></i></button>
                                                    <ul class="conversation-item-dropdown-list bg-light">
                                                        <li><a href="#"><i class="ri-share-forward-line"></i> Forward</a>
                                                        </li>
                                                        <li><a href="#"><i class="ri-delete-bin-line"></i> Delete</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="conversation-item">
                                    <div class="conversation-item-side">
                                        <img class="conversation-item-image" src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OXx8cGVvcGxlfGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60" alt="">
                                    </div>
                                    <div class="conversation-item-content">
                                        <div class="conversation-item-wrapper">
                                            <div class="conversation-item-box">
                                                <div class="conversation-item-text shadow">
                                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                                                    <div class="conversation-item-time">12:30</div>
                                                </div>
                                                <div class="conversation-item-dropdown">
                                                    <button type="button" class="conversation-item-dropdown-toggle"><i class="ri-more-2-line"></i></button>
                                                    <ul class="conversation-item-dropdown-list bg-light">
                                                        <li><a href="#"><i class="ri-share-forward-line"></i> Forward</a>
                                                        </li>
                                                        <li><a href="#"><i class="ri-delete-bin-line"></i> Delete</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="conversation-item-wrapper">
                                            <div class="conversation-item-box">
                                                <div class="conversation-item-text shadow">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque eos
                                                        ab in?</p>
                                                    <div class="conversation-item-time">12:30</div>
                                                </div>
                                                <div class="conversation-item-dropdown">
                                                    <button type="button" class="conversation-item-dropdown-toggle"><i class="ri-more-2-line"></i></button>
                                                    <ul class="conversation-item-dropdown-list bg-light">
                                                        <li><a href="#"><i class="ri-share-forward-line"></i> Forward</a>
                                                        </li>
                                                        <li><a href="#"><i class="ri-delete-bin-line"></i> Delete</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="conversation-item-wrapper">
                                            <div class="conversation-item-box">
                                                <div class="conversation-item-text shadow">
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint,
                                                        debitis. Iste natus est aliquam ipsum doloremque fugiat, quidem eos
                                                        autem? Dolor quisquam laboriosam enim cum laborum suscipit
                                                        perferendis adipisci praesentium.</p>
                                                    <div class="conversation-item-time">12:30</div>
                                                </div>
                                                <div class="conversation-item-dropdown">
                                                    <button type="button" class="conversation-item-dropdown-toggle"><i class="ri-more-2-line"></i></button>
                                                    <ul class="conversation-item-dropdown-list bg-light">
                                                        <li><a href="#"><i class="ri-share-forward-line"></i> Forward</a>
                                                        </li>
                                                        <li><a href="#"><i class="ri-delete-bin-line"></i> Delete</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="conversation-item me">
                                    <div class="conversation-item-side">
                                        <img class="conversation-item-image" src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OXx8cGVvcGxlfGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60" alt="">
                                    </div>
                                    <div class="conversation-item-content">
                                        <div class="conversation-item-wrapper">
                                            <div class="conversation-item-box">
                                                <div class="conversation-item-text bg-primary">
                                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas, eos,
                                                        magni temporibus, placeat consectetur nobis incidunt dicta a culpa
                                                        vel esse. Facilis fugiat possimus eveniet accusamus dignissimos
                                                        pariatur inventore animi rem vero, eligendi obcaecati fugit quaerat?
                                                        Officia ex quod eaque maxime ipsam, tempore error laboriosam
                                                        laborum, magnam ipsum doloremque quas.</p>
                                                    <div class="conversation-item-time">12:30</div>
                                                </div>
                                                <div class="conversation-item-dropdown">
                                                    <button type="button" class="conversation-item-dropdown-toggle"><i class="ri-more-2-line"></i></button>
                                                    <ul class="conversation-item-dropdown-list bg-light">
                                                        <li><a href="#"><i class="ri-share-forward-line"></i> Forward</a>
                                                        </li>
                                                        <li><a href="#"><i class="ri-delete-bin-line"></i> Delete</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="conversation-item-wrapper">
                                            <div class="conversation-item-box">
                                                <div class="conversation-item-text bg-primary">
                                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Temporibus
                                                        debitis odio maiores perferendis ipsa repudiandae amet blanditiis
                                                        quod. Ullam, dolorum.</p>
                                                    <div class="conversation-item-time">12:30</div>
                                                </div>
                                                <div class="conversation-item-dropdown">
                                                    <button type="button" class="conversation-item-dropdown-toggle"><i class="ri-more-2-line"></i></button>
                                                    <ul class="conversation-item-dropdown-list bg-light">
                                                        <li><a href="#"><i class="ri-share-forward-line"></i> Forward</a>
                                                        </li>
                                                        <li><a href="#"><i class="ri-delete-bin-line"></i> Delete</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="conversation-item-wrapper">
                                            <div class="conversation-item-box">
                                                <div class="conversation-item-text bg-primary">
                                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium
                                                        blanditiis ea, voluptatum, eveniet at harum minima maxime enim aut
                                                        non, iure expedita excepturi tempore nostrum quasi natus voluptas
                                                        dolore ducimus!</p>
                                                    <div class="conversation-item-time">12:30</div>
                                                </div>
                                                <div class="conversation-item-dropdown">
                                                    <button type="button" class="conversation-item-dropdown-toggle"><i class="ri-more-2-line"></i></button>
                                                    <ul class="conversation-item-dropdown-list bg-light">
                                                        <li><a href="#"><i class="ri-share-forward-line"></i> Forward</a>
                                                        </li>
                                                        <li><a href="#"><i class="ri-delete-bin-line"></i> Delete</a></li>
                                                    </ul>
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

                            <div class="conversation-form-group ">
                                <textarea class="conversation-form-input border" rows="1" placeholder="Nhập nội dung chat..."></textarea>

                            </div>
                            <button type="button" class="conversation-form-button conversation-form-submit bg-primary"><i class="bi bi-send-fill text-light"></i></button>
                        </div>
                    </div>

                </div>
                <!-- end: Content -->
            </div>
        </section>
    </div>
</div>
<?php
require './app/Views/inc/FooterAdmin.php';

?>