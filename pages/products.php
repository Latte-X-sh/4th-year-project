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
          <!-- <div class="col-md-6 col-xl-3">
            <article class="stat-cards-item">
              <div class="stat-cards-icon primary">
                <i data-feather="bar-chart-2" aria-hidden="true"></i>
              </div>
              <div class="stat-cards-info">
                <p class="stat-cards-info__num">1478 286</p>
                <p class="stat-cards-info__title">Total visits</p>
                <p class="stat-cards-info__progress">
                  <span class="stat-cards-info__profit success">
                    <i data-feather="trending-up" aria-hidden="true"></i>4.07%
                  </span>
                  Last month
                </p>
              </div>
            </article>
          </div> -->
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
            <p class="white-block__title">Products Listing</p>
            <div class="users-table table-wrapper">
              <table class="posts-table">
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
                  <tr>
                    <?php foreach($products as $product) {?>
                  <td>
                  <?php
                   $productid = $product["productid"];
                   echo htmlspecialchars($productid);?>
                   
                    </td>
                    <td>
                      <label class="users-table__checkbox">
                        <!-- <input type="checkbox" class="check"> -->
                        <div class="categories-table-img">
                          <picture>
                            <!-- <source srcset="./img/categories/01.webp" type="image/webp"> -->
                            <img src=" <?php echo htmlspecialchars($product['productimage']);?>" alt="<?php echo htmlspecialchars($product['productname']);?>">
                          </picture>
                        </div>
                      </label>
                    </td>
                    <td>
                      <div class="pages-table-img">
                        <!-- <picture><source srcset="./img/avatar/avatar-face-04.webp" type="image/webp"><img src="./img/avatar/avatar-face-04.png" alt="User Name"></picture> -->
                        <?php echo htmlspecialchars($product['productdescription']);?>
                      </div>
                    </td>
                    <td>
                    <?php echo htmlspecialchars($product['productname']);?>
                    </td>
                    <td><span class="badge-pending">  <?php echo htmlspecialchars($product['productcategory']);?></span></td>
                    <td><span class="badge-active">KSH <?php echo htmlspecialchars($product['productprice']);?></span></td>
                    <td>
                      <!-- <span class="p-relative"> -->
                        <?php $url ="http://localhost/4th year project/index.php?page=productdesc&id=$productid"?>
                        <a href="<?php echo $url ?>">
                        <button class="primary-default-btn " type="button" title="Buy product">
                          <!-- <div class="sr-only">Buy product</div> -->
                          Buy 
                          <!-- <i data-feather="more-horizontal" aria-hidden="true"></i> -->
                        </button>
                        </a>
                        <!-- <ul class="users-item-dropdown dropdown">
                          <li><a href="##">Edit</a></li>
                          <li><a href="##">Quick edit</a></li>
                          <li><a href="##">Trash</a></li>
                        </ul> -->
                      <!-- </span> -->
                    </td>
                  </tr>
                 <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
          <div class="col-lg-3">
            <!-- <article class="customers-wrapper"> -->
              <!-- <canvas id="customersChart" aria-label="Customers statistics" role="img"></canvas> -->
              <!--              <p class="customers__title">New Customers <span>+958</span></p>
              <p class="customers__date">28 Daily Avg.</p>
              <picture><source srcset="./img/svg/customers.svg" type="image/webp"><img src="./img/svg/customers.svg" alt=""></picture> -->
            <!-- </article> -->
            <article class="white-block">
              <div class="top-cat-title">
                <h3>Product categories</h3>
                <p>28 Categories, <?php echo htmlspecialchars($amoutofproducts);?> Products</p>
              </div>
              <ul class="top-cat-list">
                <li>
                  <a href="##">
                    <div class="top-cat-list__title">
                      Furniture <span><?php echo htmlspecialchars($amoutofproducts);?> products</span>
                    </div>
                    <div class="top-cat-list__subtitle">
                      Make your home a habitable space <span class="purple">0 sold</span>
                    </div>
                  </a>
                </li>
                
              </ul>
            </article>
          </div>
        </div>
      </div>
