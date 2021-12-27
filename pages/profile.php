<?php
// require './lib/functions.php';
checkstatus();

$user_id = $_SESSION['id'];


// var_dump($user_email);die();
// echo $user_email ; die();
$profile_data = fetch_user_data($user_id);//Fetches db data
$profileImage= $profile_data["profile_image"]; 
$user_email = $profile_data["Email"];
// var_dump($user_email);die();
$dateofbirth = $profile_data["Dateofbirth"];
$date = str_replace('-"', '/', $dateofbirth);
$newDate = date("d/m/Y", strtotime($date));
// var_dump($newDate);die();
//  echo $profileImage;
// var_dump($_SESSION);die();


?>
      <div class="container">
        <h2 class="main-title">User Profile</h2>
    <form action="./formprocessor.php" method="POST" enctype="multipart/form-data" class="sign-up-form form">
    <div class="container mt-5 mb-5">
        <div class="row gutters">
        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
        <div class="card h-100">
            <div class="card-body">
                <div class="account-settings">
                    <div class="user-profile">
                        <span class="nav-user-img">
                            <picture class="img-resize">
                                <img class="img-resize" src="<?php echo htmlspecialchars($profileImage);?>" alt="User name">
                            </picture>
                          </span>
                        <!-- <div class="user-avatar">
                            <source srcset="./img/avatar/avatar-illustrated-02.webp" type="image/webp">
                            <img src="<?php //echo htmlspecialchars($userData['profile_image']);?>" alt="Profile image">
                        </div> -->
                        </div>
                        <br>
                        <div class="row gutters">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-4 mb-2 ">
                                <div class="text-right">
                                    <input class="form-input" type="file" id="userprofileimage" name="userprofileimage" >                                   
                                </div>
                            </div>
                        </div>
                       
                        <div>
                            <h2 class="form-label">Details</h5>
                            <h4 class="form-label" >Name: <?php echo htmlspecialchars($profile_data['Firstname']);?> <?php echo htmlspecialchars($profile_data['Lastname']);?></h4>
                            <!-- <h4 class="form-label" >Email: <?php //echo htmlspecialchars($profile_data['Email']);?></h4> -->
                            <h4 class="form-label" >D.O.B: <?php echo htmlspecialchars($newDate);?></h4>
                            <h4 class="form-label" >Gender: <?php echo htmlspecialchars($profile_data['Gender']);?></h4>
                            <h4 class="form-label" >Shopper's Interest: <?php echo htmlspecialchars($profile_data['FavCategory']);?></h4>
                         </div>
                    <br>
                    <div class="about">
                        <h2 class="form-label">About</h5>
                        <p class="sign-up__subtitle"><?php echo htmlspecialchars($profile_data['Bio']);?></p>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
        <div class="card h-100">
            <div class="card-body">
                <div class="row gutters">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <h6 class="sign-up__subtitle">Personal Details</h6>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <label class="form-label-wrapper">
                            <p class="form-label">User Name</p>
                            <input class="form-input" type="text" name="username" placeholder="<?php echo htmlspecialchars($profile_data["Username"]); ?>" >
                          </label>
                        <!-- <div class="form-group">
                            <label for="username">UserName</label>
                            <input type="text" class="form-control" name="username" placeholder="">
                        </div> -->
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <label class="form-label-wrapper">
                            <p class="form-label">First Name</p>
                            <input class="form-input" type="text" name="firstname" placeholder="<?php echo htmlspecialchars($profile_data["Firstname"]); ?>" >
                          </label>
                        <!-- <div class="form-group">
                            <label for="firstname">First Name</label>
                            <input type="text" class="form-control" name="firstname" placeholder="">
                        </div> -->
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <label class="form-label-wrapper">
                            <p class="form-label">Last Name</p>
                            <input class="form-input" type="text" name="lastname" placeholder="<?php echo htmlspecialchars($profile_data["Lastname"]); ?>" >
                          </label>
                        <!-- <div class="form-group">
                            <label for="lastname">Last Name</label>
                            <input type="text" class="form-control" name="lastname" placeholder="">
                        </div> -->
                    </div>
                 <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <label class="form-label-wrapper">
                        <p class="form-label">Email</p>
                        <input class="form-input" type="email" name="email" placeholder="<?php echo htmlspecialchars($profile_data["Email"]); ?>" >
                      </label>
                        <!-- <div class="form-group">
                            <label for="eMail">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="">
                        </div> -->
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <label class="form-label-wrapper">
                            <p class="form-label">Phone</p>
                            <input class="form-input" type="text" name="phoneno" placeholder="<?php echo htmlspecialchars($profile_data["Phonenumber"]); ?>" >
                          </label>
                      
                        <!-- <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" class="form-control" id="phone" name="phoneno" placeholder="">
                        </div> -->
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <label class="form-label-wrapper">
                            <p class="form-label">Date of Birth</p>
                            <input class="form-input" type="date" name="birthdate" placeholder="" >
                          </label>
                      
                        <!-- <div class="form-group">
                            <label for="birthdate">dateof birth</label>
                            <input type="text" class="form-control" id="birthdate" name="birthdate" placeholder="">
                        </div> -->
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <label class="form-label-wrapper">
                            <p class="form-label">Gender</p>
                            <select class="form-input" id="gender" name="gender">
                                <option value="<?php echo htmlspecialchars($profile_data["Gender"]); ?>" selected>Choose your living struggle :)</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="None of the above">None of the above</option>
                            </select>
                            <!-- <input class="form-input" type="text" name="gender" placeholder="Enter your Gender" > -->
                          </label>
                        <!-- <label class="form-label-wrapper">
                            <p class="form-label">Gender</p>
                            <input class="form-input" type="text" name="gender" placeholder="Enter your Gender" >
                          </label> -->
                        <!-- <div class="form-group">
                            <label for="gender">Gender</label>
                            <input type="text" class="form-control" id="gender" name="gender"  placeholder="<?php echo htmlspecialchars($userData["Gender"]); ?>">
                        </div> -->
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <label class="form-label-wrapper">
                            <p class="form-label">Category</p>
                            <select class="form-input" id="favcategory" name="favcategory">
                                <option value="<?php echo htmlspecialchars($profile_data["FavCategory"]); ?>" selected>Choose your favourite Category</option>
                                <option value="Furniture">Furniture</option>
                                <option value="Electronics">Electronics</option>
                                <option value="Miscelleneous">Miscelleneous</option>
                                </select>
                            <!-- <input class="form-input" type="text" name="gender" placeholder="Enter your Gender" > -->
                          </label>
                        <!-- <div class="form-group">
                            <label for="role-type">Account Type</label>
                            <select class="form-control" id="role-type" name="role-type">
                            <option value="</option>
                            <option value="Artist">Artist</option>
                            <option value="Promoter">Promoter</option>
                            <option value="Fan">Fan</option>
                            </select>
                        </div> -->
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <label class="form-label-wrapper">
                            <p class="form-label">Bio</p>
                            <textarea class="form-input" type="text" name="bio" rows="6" >
                            </textarea>
                          </label>
                            <!-- <div class="form-group">
                                <label for="bio">Bio</label>
                                <textarea class="form-control" id="bio"  name="bio" rows="4" >
                                
                                </textarea>
                            </div> -->
                    </div>
                </div>
                <div class="row gutters">
                    <!-- <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <h6 class="sign-up__subtitle">Address</h6>
                    </div> -->
                    <!-- <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <label class="form-label-wrapper">
                            <p class="form-label">Country</p>
                            <input class="form-input" type="text" name="country" placeholder="Enter your Country" >
                          </label>  -->
                        <!-- <div class="form-group">
                            <label for="Street">Country</label>
                            <input type="name" class="form-control" name="country" id="country" placeholder="<?php echo htmlspecialchars($userData["Country"]); ?>">
                        </div> -->
                    <!-- </div> -->
                    <!-- <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <label class="form-label-wrapper">
                            <p class="form-label">City</p>
                            <input class="form-input" type="text" name="city" placeholder="Enter your City" >
                          </label>  -->
                        <!-- <div class="form-group">
                            <label for="City">City</label>
                            <input type="name" class="form-control" name="city" id="city" placeholder="<?php echo htmlspecialchars($userData["City"]); ?>">
                        </div> -->
                    <!-- </div> -->
      
                </div>
                <div class="row gutters">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-4">
                        <div class="text-right">
                            <!-- <button type="button" id="submit" name="submit" class="btn btn-secondary">Cancel</button> -->
                            <div class="col-xl-3 col-lg-3 col-sm-3">
                            <button type="submit" id="submit" name="Update" class="form-btn primary-default-btn">Update</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>
</form>
<br>
<!-- password change-->
<div class=" mb-5">
            <form method="POST" action="./formprocessor.php" class="sign-up-form form">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card h-100">
                        <div class="card-body">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <h6 class="sign-up__title">Change Password</h6>
                                </div>
                            <div class="row gutters">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                  <label class="form-label-wrapper">
                                    <p class="form-label">Enter Old Password</p>
                                    <input class="form-input" type="password" name="old_password" placeholder="Enter your old password" >
                                  </label>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                  <label class="form-label-wrapper">
                                    <p class="form-label">Enter New Password</p>
                                    <input class="form-input" type="password" name="new_password" placeholder="Enter your new password" >
                                  </label>
                                </div>
                                <!-- <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="username">Enter New Password</label>
                                        <input type="password" class="form-control" name="new_password" >
                                    </div>
                                </div> -->
                            </div>
                            <div class="row gutters">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-4">
                                    
                                    <div class="text-right ">
                                    <div class="row ">
                                        <!-- <button type="button" id="submit" name="submit" class="btn btn-secondary">Cancel</button> -->
                                        <div class="col-xl-2 col-lg-2 col-sm-3">
                                        <button type="reset" class="form-btn primary-default-btn">Cancel</button>
                                        </div>
                                        <br>
                                        <div class="col-xl-2 col-lg-2 col-sm-4">
                                        <button type="submit" id="submit" name="password_update" class="form-btn primary-default-btn transparent-btn">Change Password</button>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
           
      </div>
