<?php
// require './lib/functions.php';
$products = product_feed();
// $products = array_reverse($products);
// var_dump($products);
// die();

 $amoutofproducts = sizeof($products);
 $i = $amoutofproducts
// $productid = $products["productid"];
// var_dump($products["productid"]);
// die();
?>

 
      <div class="container">
        <h2 class="main-title">Products Catalogue</h2>
        <div class="row stat-cards">
        <?php foreach($products as $product) {?>
          <?php
                   $productid = $product["productid"];
                  //  echo htmlspecialchars($productid);?>
        <div class="col-md-6 col-xl-3">
        <article class="stat-cards-item">
              <div class="stat-cards-icon primary"> <!--icon section -->
              <picture>
                            <!-- <source srcset="./img/categories/01.webp" type="image/webp"> -->
                            <img src=" <?php echo htmlspecialchars($product['productimage']);?>" alt="<?php echo htmlspecialchars($product['productname']);?>">
              </picture>
              </div>
              <div class="stat-cards-info">
                <p class="stat-cards-info__num">              <?php echo htmlspecialchars($product['productname']);?></p>
                <p class="stat-cards-info__title"><span class="badge-pending">  <?php echo htmlspecialchars($product['productcategory']);?></span></p>
                <p class="stat-cards-info__title"><span class="badge-active">KSH <?php echo htmlspecialchars($product['productprice']);?></span></p>
                <p class="stat-cards-info__progress">
                  <span class="stat-cards-info__profit success">
                  <?php echo htmlspecialchars($product['productdescription']);?>
                  </span>
                  <?php $url ="./index.php?page=productdesc&id=$productid"?>
                        <a href="<?php echo $url ?>">
                        <button class="primary-default-btn " type="button" title="Buy product">
                          <!-- <div class="sr-only">Buy product</div> -->
                          Buy 
                          <!-- <i data-feather="more-horizontal" aria-hidden="true"></i> -->
                        </button>
                        </a>
                </p>
              </div>
            </article>
             </div>
             <?php } ?>
           
      
          <!-- <div class="col-md-6 col-xl-3">
            <article class="stat-cards-item">
              <div class="stat-cards-icon warning">
                <i data-feather="file" aria-hidden="true"></i>
              </div>
              <div class="stat-cards-info">
                <p class="stat-cards-info__num">1478 286</p>
                <p class="stat-cards-info__title">Total visits</p>
                <p class="stat-cards-info__progress">
                  <span class="stat-cards-info__profit success">
                    <i data-feather="trending-up" aria-hidden="true"></i>0.24%
                  </span>
                  Last month
                </p>
              </div>
            </article>
          </div> -->
          <!-- <div class="col-md-6 col-xl-3">
            <article class="stat-cards-item">
              <div class="stat-cards-icon purple">
                <i data-feather="file" aria-hidden="true"></i>
              </div>
              <div class="stat-cards-info">
                <p class="stat-cards-info__num">1478 286</p>
                <p class="stat-cards-info__title">Total visits</p>
                <p class="stat-cards-info__progress">
                  <span class="stat-cards-info__profit danger">
                    <i data-feather="trending-down" aria-hidden="true"></i>1.64%
                  </span>
                  Last month
                </p>
              </div>
            </article>
          </div> -->
          <!-- <div class="col-md-6 col-xl-3">
            <article class="stat-cards-item">
              <div class="stat-cards-icon success">
                <i data-feather="feather" aria-hidden="true"></i>
              </div>
              <div class="stat-cards-info">
                <p class="stat-cards-info__num">1478 286</p>
                <p class="stat-cards-info__title">Total visits</p>
                <p class="stat-cards-info__progress">
                  <span class="stat-cards-info__profit warning">
                    <i data-feather="trending-up" aria-hidden="true"></i>0.00%
                  </span>
                  Last month
                </p>
              </div>
            </article>
          </div> -->
        </div>
        <div class="row">
          <div class="col-lg-9">
          <!-- <div class="chart" >
            
                    <div class="owl-carousel owl-theme ">
                        <div class="item ">
                          <img src="./img/tourist photos/C.jpg" class="chart "  >
                        </div>
                        <div class="item ">
                          <img src="./img/tourist photos/E.jpg" class="chart "  >
                        </div>
                        <div class="item ">
                          <img src="./img/tourist photos/H.jpg" class="chart "  >
                        </div>
                        <div class="item ">
                          <img src="./img/tourist photos/I.jpg" class="chart "  >
                        </div>
                        <div class="item ">
                          <img src="./img/tourist photos/J.jpg" class="chart "  >
                        </div>
                    </div>
                
              <canvas id="myChart" aria-label="Site statistics" role="img"></canvas> 
            </div> -->
            <!-- <br>
            <br>
            <br>
            <br> -->
            <!-- <p class="white-block__title">Products Listing</p>
            <div class="users-table table-wrapper"> -->
              <!-- <table class="posts-table">
                <thead>
                  <tr class="users-table-info">
                  <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ID</th>
                    <th>
                        Product image
                    </th>
                    <th>Product description</th>
                    <th>Product name</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                 
                         <ul class="users-item-dropdown dropdown">
                          <li><a href="##">Edit</a></li>
                          <li><a href="##">Quick edit</a></li>
                          <li><a href="##">Trash</a></li>
                        </ul> -->
                      <!-- </span> -->
              
          </div>
          <div class="col-lg-3">
            <!-- <article class="customers-wrapper"> -->
              <!-- <canvas id="customersChart" aria-label="Customers statistics" role="img"></canvas> -->
              <!--              <p class="customers__title">New Customers <span>+958</span></p>
              <p class="customers__date">28 Daily Avg.</p>
              <picture><source srcset="./img/svg/customers.svg" type="image/webp"><img src="./img/svg/customers.svg" alt=""></picture> -->
            <!-- </article> -->
            <!-- <article class="white-block">
  
            </article> -->
          </div>
        </div>
      </div>
