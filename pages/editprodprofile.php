<?php
// require './lib/functions.php';
checkstatus();
// var_dump($_GET);
// die();
$id = $_GET['id'];
$prodData = product_specific($id);
   
// if($_SERVER['REQUEST_METHOD'] == 'POST'){
//     var_dump($_POST);
//     die();
// }



?>
      <div class="container">
        <h2 class="main-title">Edit Specific Product Data</h2>
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
                                <img class="img-resize" src="<?php echo htmlspecialchars($prodData["productimage"]);?>" alt="Product Image">
                            </picture>
                          </span>
                        
                        </div>
                       
                        <div class="row gutters">
                            <div class="about">
                                <h2 class="form-label">Disclaimer</h5>
                                <p class="sign-up__subtitle">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                            </div>
                        </div>
                       
                    <br>
                   
                </div>
            </div>
        </div>
        </div>
        <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
        <div class="card h-100">
            <div class="card-body">
                <div class="row gutters">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <h6 class="sign-up__subtitle">Edit Product Details</h6>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <label class="form-label-wrapper">
                            <p class="form-label">Product Name</p>
                            <input class="form-input" type="text" name="productid" id="productid" value="<?php echo htmlspecialchars($prodData["productid"]);?>" placeholder="<?php echo htmlspecialchars($prodData["productid"]);?>" hidden >
                            <input class="form-input" type="text" name="productname" id="productname" placeholder="<?php echo htmlspecialchars($prodData["productname"]);?>" >
                          </label>
                        
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <label class="form-label-wrapper">
                            <p class="form-label">Product Price</p>
                            <input class="form-input" type="text" name="productprice" placeholder="<?php echo htmlspecialchars($prodData["productprice"]);?>" >
                          </label>
                       
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <label class="form-label-wrapper">
                            <p class="form-label">Product Category</p>
                            <select class="form-input" id="prodcategory" name="prodcategory">
                                <option value="<?php echo htmlspecialchars($prodData["productcategory"]);?>" selected><?php echo htmlspecialchars($prodData["productcategory"]);?></option>
                                <option value="Furniture">Furniture</option>
                                <option value="Electronics">Electronics</option>
                                <option value="Miscelleneous">Miscelleneous</option>
                                </select>
                        
                          </label>
                      
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <label class="form-label-wrapper">
                            <p class="form-label">Size</p>
                            <select class="form-input" id="size" name="size">
                                <option value="<?php echo htmlspecialchars($prodData["productsize"]);?>" selected><?php echo htmlspecialchars($prodData["productsize"]);?></option>
                                <option value="Small">Small</option>
                                <option value="Medium">Medium</option>
                                <option value="Large">Large</option>
                            </select>
                           
                          </label>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <label class="form-label-wrapper">
                            <p class="form-label">Upload Product Image</p>
                            <input class="form-input" type="file" id="productimage" name="productimage" >  
                          </label>
                      
                        
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <label class="form-label-wrapper">
                            <p class="form-label">Upload AR 3d file Image</p>
                            <input class="form-input" type="file" id="ar3dimage" name="ar3dimage" >  
                          </label>
                   
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <label class="form-label-wrapper">
                            <p class="form-label">Product Description</p>
                            <textarea class="form-input" type="text" name="desc" rows="6" >
                            <?php echo htmlspecialchars($prodData["productdescription"]);?>
                            </textarea>
                          </label>
                       
                    </div>
                </div>
                <div class="row gutters">
              
      
                </div>
                <div class="row gutters">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-4">
                        <div class="text-right">
                        
                            <div class="col-xl-3 col-lg-3 col-sm-3">
                            <button type="submit" id="submit" name="updateProduct" class="form-btn primary-default-btn">Update</button>
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
           
      </div>
