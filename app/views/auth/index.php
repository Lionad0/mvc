<div class="main">
        <div class="bgImage">
            <!-- <img src="bgimage.png" alt=""> -->
        </div>
        <div class="form">
            <input type="checkbox" id="chk" aria-hidden="true">
        
            <div class="login">
                <form action="" method="post">
                    <label for="chk" aria-hidden="true">Login</label>
                    <input type="text" name="username" placeholder="Username" required>
                    <input type="password" name="password" placeholder="Password" required>
                    <button type="submit" name="login">Login</button>
                </form>
            </div>
        
            <div class="signup">
                <form action="<?= BASEURL ?>/register" method="post">
                    <label for="chk" aria-hidden="true">Sign Up</label>
                    <input type="text" name="username" placeholder="Username" required>
                    <input type="text" name="email" placeholder="Email" required>
                    <input type="password" name="password" placeholder="Password" required>
                    <button type="submit" name="register">Sign Up</button>
                </form>
            </div>
        </div>
    </div>
