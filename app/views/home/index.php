    <?php if(isset($_SESSION['user_status'])) : ?>
        <h2>User Profile</h2>
        <p>Username: <?= $data['username'] ?></p>
        <p>E-mail: <?= $data['email'] ?></p>
        <p>User status: <?= $_SESSION['user_status']; ?></p>

        <!-- <p><?= $data['user_details'] ?></p> -->

    <?php endif; ?>
    
    <h1>HOME PAGE</h1>
    <p>amet consectetur adipisicing elit. Officiis animi accusamus sint illum assumenda ducimus nam accusantium distinctio, eveniet amet obcaecati tempore officia autem quia architecto sed iste nisi atque.</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis animi accusamus sint illum assumenda ducimus nam accusantium distinctio, eveniet amet obcaecati tempore officia autem quia architecto sed iste nisi atque.</p>


    <h1>CONTACT</h1>
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
