<!--  -->
<div class="reservation-section">
    <div class="kuning"></div>
    <div class="merah"></div>
    <div class="reservation-page">  
        <h1 class="title">RESERVATION</h1>
        <form action="" method="post">
            <div class="form-container">
                <div class="flexSamting">
                    <div class="flexed">
                        <div class="flex">
                            <label>First Name</label>
                            <input type="text" name="firstname" required>
                        </div>
                        <div class="flex">
                            <label>Last Name</label>
                            <input type="text" name="lastname" required>        
                        </div>
                    </div>
    
                    <div class="flexed">
                        <div class="flex">
                            <label>Phone Number</label>
                            <input type="text" name="phonenumber" required>
                        </div>
        
                        <div class="flex">
                            <label>Phone Number</label>
                            <input type="text" name="backup_num" required>
                        </div>              
                    </div>
                </div>

                <div class="asideFlexed">
                    <div class="email">
                        <label>Email</label>
                        <input type="email" name="email" <?php if(isset($data['user_details'])) echo ($_SESSION['user_status'] == 'user' ? 'value=".' . $data['user_details']['email']. '"' : '') ?> required>    
                    </div>
        
                    <div class="reserve-date">
                        <label for="reservation_date">Reservation Date</label>
                        <input type="date" id="reservation_date" name="reservation_date" required>
                    </div>
                    
                    
                    
                    <div class="orderInfo">
                        <h3>My Order</h3>
                        <div class="orderList">
                           
                        </div>
                        
                        <div class="desc">
                            <h4>Description</h4>
                            <textarea name="order_desc" id="" cols="50" rows="4"></textarea>
                        </div>
                    </div>
                </div>
    
            </div>
    
            <button type="submit" name="reservation" class="orderBtn">ORDER</button>
        </form>
    </div>
    
    <div class="menu-book">
        <div class="title">
            <h1>MENU BOOK</h1>
        </div>
        <div class="menu-data">
            <?php foreach($data['menu'] as $menu) : ?>
                <div class="menu_item">
                    <div class="ymm">
                        <div class="image">
                            <img src="<?= BASEURL . '/menuImg//' . $menu['gambar_menu']?>" class='menuImage' alt="">
                        </div>
                        <div class="menu_info">
                            <h4 class="menu_name"><?= $menu['nama_menu'] ?></h4>
                            <p>Rp<span class="menu_price"><?= $menu['harga_menu'] ?></span></p>
                            <input type="hidden" value="<?= $menu['id_menu']?>">
                            <!-- <input type="number" value="0" min="0" name="qty">
                            <button id="removeItem">-</button> -->
                            <!--<span id="qty">0</span> -->
                        </div>
                    </div>
                    
                    <button id="addItem">Add To Cart</button>
                </div>
            <?php endforeach; ?>    
        </div>
    </div>
</div>
