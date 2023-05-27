<div class="menu-book">
    <h1>MENU BOOK</h1>
    <ol>
        <?php foreach($data as $menu) : ?>
            <div class="menu_item">
                <div class="menu_info">
                    <li class="menu_name"><?= $menu['nama_menu'] ?></li>
                    <p>Rp<span class="menu_price"><?= $menu['harga_menu'] ?></span></p>
                    <input type="hidden" value="<?= $menu['id_menu']?>">
                    <!-- <input type="number" value="0" min="0" name="qty">
                    <button id="removeItem">-</button> -->
                    <!--<span id="qty">0</span> -->
                </div>
                
                <button id="addItem">Add To Cart</button>
            </div>
            <br>
        <?php endforeach; ?>    
    </ol>
</div>

<div class="reservation-page">  
    <h1>RESERVATION PAGE</h1>
    <form action="" method="post">
        <label>First Name</label>
        <br>
        <input type="text" name="firstname" required>
        <br>
        <label>Last Name</label>
        <br>
        <input type="text" name="lastname" required>
        <br>
        
        <label>Phone Number</label>
        <br>
        <input type="text" name="phonenumber" required>
        <br>
        
        <label>Phone Number</label>
        <br>
        <input type="text" name="backup_num" required>
        <br>

        <label>Email</label>
        <br>
        <input type="email" name="email" required>
        <br>
        
        <label for="reservation_date">Reservation Date</label>
        <br>
        <input type="date" id="reservation_date" name="reservation_date" required>
        <br>
        <br>
        <div class="orderInfo">
            <div class="orderList">
                <h3>My Order</h3>
                <span>-</span>

            </div>
            
            <h4>Description</h4>
            <textarea name="order_desc" id="" cols="50" rows="4"></textarea>
        </div>

        <button type="submit" name="reservation">ORDER</button>
    </form>
</div>
