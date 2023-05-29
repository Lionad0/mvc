    <?php 
        $user_details = $data['user_details'];
        $menu = $data['menu'];
    ?>

    <?php if(isset($_SESSION['user_status'])) : ?>
        <h2>User Profile</h2>
        <p>Username: <?= $user_details['username'] ?></p>
        <p>E-mail: <?= $user_details['email'] ?></p>
        <p>User status: <?= $_SESSION['user_status']; ?></p>

        <!-- <p><?= $user_details['user_details'] ?></p> -->

    <?php endif; ?>
    <!-- <a href="#contact">to home</a> -->
    <!-- <div class="titles"> -->
        
    <div class="merah"></div>
    <h1 class="main-title">LWD FOOD</h1>
    <h2 class="second-title">WHERE FOOD MEET TASTE</h2>
    <h1 class="shrimp">SHRIMP BURGER</h1>
    <a href="<?= BASEURL; ?>/reservation" class="order">ORDER NOW</a>
    <img class="burger" src="<?= BASEURL; ?>/assets/img/burger.png" alt="burger">
    <!-- <div class="kuning"></div> -->
    <!-- </div> -->

        
    <br><br><br>
    <br><br><br>
    <br><br><br>
    <br><br><br>
    <br><br><br>
    <br><br><br>
    <br><br><br>
    <br><br><br>
    <br><br><br>
    <br><br><br>
    <br><br><br><br><br><br>
    <br><br><br>
    <br><br><br>
    <br><br><br>
    <br><br><br>
    <br><br><br>

    <div class="about-section" id="about">
        <div class="about-inner">
            <h1>About Us</h1>
            <p>At LWD Food, we offer more than just a quick meal; our establishment is the gateway to an epicurean journey that tantalizes your palate and ignites an insatiable desire for more. Our unwavering commitment lies in delivering first-rate cuisine sourced from only premium ingredients. Boasting a varied selection of dishes, coupled with a welcoming environment and outstanding hospitality, we aim to craft an unforgettable gastronomic experience for every patron who walks through our doors. </p>
        </div>
    </div>


    <div class="menu-section" id="menu">
        <h1>OUR MENU</h1>
        <div class="swiper mySwiper slide-container ">
            <div class="card-wrapper swiper-wrapper">
                <?php foreach($menu as $m) : ?>
                    <div class="card swiper-slide " style="background-image: url('<?= BASEURL . '/menuImg//' . $m['gambar_menu']?>')">
                        <div class="image-content">
                        </div>
                        <div class="card-content">
                            <h2 class="name"><?= $m['nama_menu']; ?></h2>
                            <span class="price">Rp<?= $m['harga_menu']; ?></span>
                            <p class="desc">Lorem ipsum dolor sit amsicing elit. Earuitatibus nam, blanditiis minus id sequi. Rerum suscipi</p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="swiper-pagination"></div>

        </div>
        <a href="<?= BASEURL; ?>/menu" class="seemore">see more</a>
    </div>

    <div class="feedback">
        <h1>FEEDBACK</h1>
        
        <form action="<?= BASEURL; ?>/mailer" method="POST">
            <div class="innerForm">
                <label for="">name </label>
                <input type="text" name="sender">
                <label for="">email </label>
                <input type="text" name="email">
                <label for="">subject</label>
                <input type="text" name="subject">
                <label for="">message</label>
                <textarea name="message" id="" cols="30" rows="10"></textarea>
            </div>
            <button types="submit" name="mail">SUBMIT</button>
        </form>

    </div>

   