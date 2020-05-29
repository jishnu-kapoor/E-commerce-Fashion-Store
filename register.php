<?php
include 'header.php';
?>
    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="#"><i class="fa fa-home"></i> Home</a>
                        <span>Register</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Form Section Begin -->

    <!-- Register Section Begin -->
    <div class="register-login-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="register-form">
                        <h2>Register</h2>
                       

                        <form action="databaseinsertusers.php" method=post>
                          
                            <div class="group-input">
                                <label for="First Name">Enter your Firstname</label>
                                <input type="text" id="username" name='fname'>
                            </div>
                              <div class="group-input">
                                <label for="Last Name">Enter your Lastname</label>
                                <input type="text" id="username" name='lname'>
                            </div>
                            <div class="group-input">
                                <label for="Phone Number">Enter your Phone number</label>
                                <input type="text" id="username" name='uid'>
                            </div>
                              <div class="group-input">
                                <label for="Username">Username or email address *</label>
                                <input type="text" id="username" name='username'>
                            </div>
                            
                            <div class="group-input">
                                <label for="Password">Password *</label>
                                <input type="password" id="pass" name='password'>
                            </div>
                            
                            <div class="group-input">
                                <label for="Rpassword">Confirm Password *</label>
                                <input type="password" id="pass" name='rpassword'>
                            </div>
                            <div class="group-input">
                                
                                <select name="RoleType">

                                <option value="regular user">Regular User</option>

                                

                                </select>
                            </div>

                            <button type="submit" class="site-btn register-btn" name=Submit>REGISTER</button>
                        </form>
                        

                        <div class="switch-login">
                            <a href="./login.html" class="or-login">Or Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Register Form Section End -->
    
    <!-- Partner Logo Section Begin -->
    <div class="partner-logo">
        <div class="container">
            <div class="logo-carousel owl-carousel">
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-1.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-2.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-3.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-4.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-5.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Partner Logo Section End -->

 <?php
include 'footer.php';
?>   