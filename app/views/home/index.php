    <?php if(isset($_SESSION['user_status'])) : ?>
        <h2>User Profile</h2>
        <p>Username: <?= $data['username'] ?></p>
        <p>E-mail: <?= $data['email'] ?></p>
        <p>User status: <?= $_SESSION['user_status']; ?></p>

        <!-- <p><?= $data['user_details'] ?></p> -->

    <?php endif; ?>
    <!-- <a href="#contact">to home</a> -->
    <!-- <div class="titles"> -->
        
        <!-- <div class="merah"></div> -->
        <h1 class="main-title">LWD FOOD</h1>
        <h2 class="second-title">WHERE FOOD MEET TASTE</h2>
        <h1 class="shrimp">SHRIMP BURGER</h1>
        <a href="<?= BASEURL; ?>/reservation"class="order">ORDER NOW</a>
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

    <div class="about" id="about">
        <h1>About Us</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, voluptatibus fugiat? Pariatur quod blanditiis nemo. Suscipit accusantium libero doloribus tempora culpa explicabo autem est! Ad harum eaque error eligendi quasi.</p>
    </div>

    <div class="menu" id="menu">
        <h1>Our Menu</h1>
        <h2>Shrimp Burger</h2>
        <p>blabla balabla blalba bal laab l blaaalal </p>
        <a href="<?= BASEURL; ?>/menu">see more</a>
    </div>

    <div class="contact">
        <h1>Contact Us</h1>
    
        <form action="<?= BASEURL; ?>/mailer" method="POST">
            <label for="">name </label><br>
            <input type="text" name="sender"><br>
            <label for="">email </label><br>
            <input type="text" name="email"><br>
            <label for="">subject</label><br>
            <input type="text" name="subject"><br>
            <label for="">message</label><br>
            <textarea name="message" id="" cols="30" rows="10"></textarea><br>
            <button types="submit" name="mail">SEND</button>
        </form>

    </div>

    <br><br><br>
    <br><br><br>
    <br><br><br>
    <br><br><br>
    <br><br><br>
    <br><br><br>
    <br><br><br>
    <br><br><br>
