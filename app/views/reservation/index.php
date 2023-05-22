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
    
    <!-- <div class="menu_item">
        <div class="menu_info">
            <li class="menu_name">Kangkung Terasi</li>
            <p>Rp<span class="menu_price">12.000</span></p>
        </div>
        <button id="removeItem">-</button>
        <span id="qty">0</span> 
         <input type="number" value="0" min="0" name="qty"> 
        <button id="addItem">Add To Cart</button>
    </div> -->

</ol>


<h1>RESERVATION PAGE</h1>
<form action="" method="post">
    <label for="">First Name</label>
    <br>
    <input type="text" name="firstname">
    <br>
    <label for="">Last Name</label>
    <br>
    <input type="text" name="lastname">
    <br>
    
    <label for="">Phone Number</label>
    <br>
    <input type="text" name="phonenumber">
    <br>
    
    <label for="">Phone Number</label>
    <br>
    <input type="text" name="backup_num">
    <br>
    
    <label for="reservation_date">Reservation Date</label>
    <br>
    <input type="date" id="reservation_date" name="reservation_date">
    <br>
    
    <div class="orderInfo">
        <h3>My Order</h3>

    </div>

    <br><br>
    <button type="submit" name="reservation">ORDER</button>
</form>
