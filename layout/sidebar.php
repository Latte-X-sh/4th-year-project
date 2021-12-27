<aside class="sidebar">
    <div class="sidebar-start">
        <div class="sidebar-head">
            <a href="index.php?page=index" class="logo-wrapper" title="Home">
                <span class="sr-only">Home</span>
                <span class="icon logo" aria-hidden="true"></span>
                <div class="logo-text">
                    <span class="logo-title">I-Shop</span>
                    <span class="logo-subtitle">Sidebar Menu</span>
                </div>

            </a>
            <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
                <span class="sr-only">Toggle menu</span>
                <span class="icon menu-toggle" aria-hidden="true"></span>
            </button>
        </div>
        <div class="sidebar-body">
            <ul class="sidebar-body-menu">
                <li>
                    <?php if(isset($_SESSION['usertype']) == true && $_SESSION['usertype'] == 'admin' ) {?>
                    <a class="active" href="index.php?page=adminDash"><span class="icon home" aria-hidden="true"></span>Admin Dashboard</a>
                    <?php } ?>
                </li>
                <li>
                     <?php if(isset($_SESSION['usertype']) == true && $_SESSION['usertype'] == 'user' ) {?>
                    <a class="active" href="index.php?page=userDash"><span class="icon home" aria-hidden="true"></span>User Dashboard</a>
                     <?php } ?>
                </li>
                <li>
                    <a href="index.php?page=products"><span class="icon document" aria-hidden="true"></span>Products</a>
                </li>
                <li>
                    <a href="index.php?page=shoppingcart"><span class="icon star" aria-hidden="true"></span>Shopping Cart</a>
                </li>
                <!-- <li>
                    <a href="comments.html">
                        <span class="icon message" aria-hidden="true"></span>
                        Notifications
                    </a>
                    <span class="msg-counter">7</span>
                </li> -->
            </ul>
            <span class="system-menu__title">system</span>
            <ul class="sidebar-body-menu">
                <li>
                    <?php if(isset($_SESSION['usertype']) == true) {?>
                    <a href="index.php?page=userprofile"><span class="icon edit" aria-hidden="true"></span>Edit Profile</a>
                    <?php } ?>
                    <?php if(isset($_SESSION['usertype']) == false) {?>
                    <a href="index.php?page=signin"><i data-feather="user" aria-hidden="true"></i>&nbsp;&nbsp;Signup/Login</a>
                    <?php } ?>
                </li>
                
                <li>
                     <?php if(isset($_SESSION['usertype']) == true && $_SESSION['usertype'] == 'admin' ) {?>
                    <a href="index.php?page=adedituser"><span class="icon user-3" aria-hidden="true"></span>Edit Users</a>
                    <?php } ?>
                </li>
                <li>
                    <?php if(isset($_SESSION['usertype']) == true && $_SESSION['usertype'] == 'admin' ) {?>
                    <a href="index.php?page=adeditproducts"><span class="icon category" aria-hidden="true"></span>Edit Products</a>
                    <?php } ?>
                </li>
                <li>
                    <?php if(isset($_SESSION['usertype']) == true && $_SESSION['usertype'] == 'admin' ) {?>
                    <a href="index.php?page=adaddproducts"><span class="icon image" aria-hidden="true"></span>Add a new Product</a>
                    <?php } ?>
                </li>
                
                <li>
                    <!-- <a class="show-cat-btn" href="##">
                        <span class="icon category" aria-hidden="true"></span>Extentions
                        <span class="category__btn transparent-btn" title="Open list">
                            <span class="sr-only">Open list</span>
                            <span class="icon arrow-down" aria-hidden="true"></span>
                        </span>
                    </a> -->
                    <ul class="cat-sub-menu">
                        <!-- <li>
                            <a href="extention-01.html">Extentions-01</a>
                        </li>
                        <li>
                            <a href="extention-02.html">Extentions-02</a>
                        </li> -->
                    </ul>
                </li>
      
               
            </ul>
         
        </div>
    </div>
    <div class="sidebar-footer">
        <a href="index.php?page=emailadmin" class="sidebar-user">
            <span class="sidebar-user-img">
                <picture><source srcset="./img/avatar/avatar-illustrated-01.webp" type="image/webp"><img src="./img/avatar/avatar-illustrated-01.png" alt="User name"></picture>
            </span>
            <div class="sidebar-user-info">
                <span class="sidebar-user__title">Admin</span>
                <span class="sidebar-user__subtitle">Admin</span>
            </div>
        </a>
    </div>
</aside>