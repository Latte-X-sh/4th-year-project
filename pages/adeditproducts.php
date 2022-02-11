<?php
// require './lib/functions.php';
$products = product_feed();
// $products = array_reverse($products);
// var_dump($products);
// die();

 $amoutofproducts = sizeof($products);
 $i = $amoutofproducts;

checkstatus();
$productData = catgeoryProd();
$categoryNumber = sizeof($productData);
// var_dump($productData[0]["productcategory"]);
// die();
?>
      <div class="container">
        <h2 class="main-title">Edit Products</h2>
        <div class="row stat-cards">
          <div class="col-md-6 col-xl-3">
            <article class="stat-cards-item">
              <div class="stat-cards-icon primary">
                <i data-feather="bar-chart-2" aria-hidden="true"></i>
              </div>
              <div class="stat-cards-info">
                <p class="stat-cards-info__num"><?php echo htmlspecialchars($amoutofproducts);?></p>
                <p class="stat-cards-info__title">Total Products</p>
                <!-- <p class="stat-cards-info__progress">
                  <span class="stat-cards-info__profit success">
                    <i data-feather="trending-up" aria-hidden="true"></i>4.07%
                  </span>
                  Last month
                </p> -->
              </div>
            </article>
          </div>
          <div class="col-md-6 col-xl-3">
            <article class="stat-cards-item">
              <div class="stat-cards-icon warning">
                <i data-feather="file" aria-hidden="true"></i>
              </div>
              <div class="stat-cards-info">
                <p class="stat-cards-info__num"><?php echo htmlspecialchars($categoryNumber);?></p>
                <p class="stat-cards-info__title">Total Categories </p>
                <!-- <p class="stat-cards-info__progress">
                  <span class="stat-cards-info__profit success">
                    <i data-feather="trending-up" aria-hidden="true"></i>0.24%
                  </span>
                  This month
                </p> -->
              </div>
            </article>
          </div>
          <div class="col-md-6 col-xl-3">
            <article class="stat-cards-item">
              <div class="stat-cards-icon purple">
                <i data-feather="file" aria-hidden="true"></i>
              </div>
              <div class="stat-cards-info">
                <p class="stat-cards-info__num"><?php echo htmlspecialchars($productData[0]["productcategory"]);?></p>
                <p class="stat-cards-info__title">Top Product Category</p>
           
              </div>
            </article>
          </div>
          <div class="col-md-6 col-xl-3">
            <article class="stat-cards-item">
              <div class="stat-cards-icon success">
                <i data-feather="feather" aria-hidden="true"></i>
              </div>
              <div class="stat-cards-info">
                <p class="stat-cards-info__num"><?php echo htmlspecialchars($productData[0]["productcategory"]);?></p>
                <p class="stat-cards-info__title">Top AR Product</p>
        
              </div>
            </article>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-9">
            <!-- <div class="chart">
              <canvas id="myChart" aria-label="Site statistics" role="img"></canvas>
            </div> -->
            <!-- for each -->
            <p class="white-block__title">List of all Products</p>
            <div class="users-table table-wrapper">
              <table class="posts-table">
                <thead>
                  <tr class="users-table-info">
                    <th>
                     ProdID
                    </th>
                    <th>Product name</th>
                    <th>Product Description</th>
                    <th>Product Price</th>
                    <th>AR ABLE</th>
                    <th>Category</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach($products as $product) {?>
                  <tr>
                    <td>
                    <?php
                   $productid = $product["productid"];
                  echo htmlspecialchars($productid);?>
                    
                    </td>
                    <td>
                    <?php
                  echo htmlspecialchars($product['productname']);?>
                
                    </td>
                    <td>
                    <?php echo htmlspecialchars($product['productdescription']);?>
                    </td>
                    <!-- <td><span class="badge-active">FEMALE</span></td> -->
                    <td><span class="badge-active">KSH <?php echo htmlspecialchars($product['productprice']);?></span></td>
                    <td><span class="badge-pending"><?php 
                    if($product['product3dimage'] == ""){
                      $armodel = 'NO';
                    }else{
                      $armodel = 'YES';
                    }
                    echo htmlspecialchars($armodel);
                    ?></span></td>
                    <td><?php echo htmlspecialchars($product['productcategory']) ?></td>
                    <td>
                      <span class="p-relative">
                        <button class="dropdown-btn transparent-btn" type="button" title="More info">
                          <div class="sr-only">More info</div>
                          <i data-feather="more-horizontal" aria-hidden="true"></i>
                        </button>
                        <ul class="users-item-dropdown dropdown">
                          <!--
                          <li><a href="##">Quick edit</a></li> -->
                          <!-- <li><a href="##">Trash</a></li> -->
                          <li><a href="index.php?page=prodprofile&id=<?php echo $productid;?>">Edit</a></li>
                          <li><a href="./pages/deleteprod.php?id=<?php echo $productid;?>">Delete</a></li>
                        </ul>
                      </span>
                    </td>
                    </tr>
                    <?php } ?>
             
                </tbody>
              </table>
            </div>
          </div>
          <div class="col-lg-3">
            <!-- <article class="customers-wrapper">
              <canvas id="customersChart" aria-label="Customers statistics" role="img"></canvas>
                          <p class="customers__title">New Customers <span>+958</span></p>
              <p class="customers__date">28 Daily Avg.</p>
              <picture><source srcset="./img/svg/customers.svg" type="image/webp"><img src="./img/svg/customers.svg" alt=""></picture> 
            </article> -->
            <p class="white-block__title">Popular AR Tips</p>
            <article class="white-block">
              <div class="top-cat-title">
                <h3> Some AR tips to consider</h3>
                <p><i>WebXr is a niche that has potential</i></p>
              </div>
              <ul class="top-cat-list">
                <li>
                  <a href="##">
                    
                    <div class="top-cat-list__title">
                      Have an android phone of atleast version <span>Android v7</span>
                    </div>
                    <div class="top-cat-list__subtitle">
                    Ar Core should be  <span class="purple">Present</span>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="##">
                    
                    <div class="top-cat-list__title">
                     Be in a wide area or environment. <span></span>
                    </div>
                    <div class="top-cat-list__subtitle">
                    Home compound ,fields or even ample space is needed  <span class="purple">Present</span>
                    </div>
                  </a>
                </li>
                <!-- <li>
                  <a href="##">
                    <div class="top-cat-list__title">
                      Tutorials <span>8.2k</span>
                    </div>
                    <div class="top-cat-list__subtitle">
                      Coding tutorials <span class="blue">+472</span>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="##">
                    <div class="top-cat-list__title">
                      Technology <span>8.2k</span>
                    </div>
                    <div class="top-cat-list__subtitle">
                      Dailiy technology articles <span class="danger">+472</span>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="##">
                    <div class="top-cat-list__title">
                      UX design <span>8.2k</span>
                    </div>
                    <div class="top-cat-list__subtitle">
                      UX design tips <span class="success">+472</span>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="##">
                    <div class="top-cat-list__title">
                      Interaction tips <span>8.2k</span>
                    </div>
                    <div class="top-cat-list__subtitle">
                      Interaction articles <span class="warning">+472</span>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="##">
                    <div class="top-cat-list__title">
                      App development <span>8.2k</span>
                    </div>
                    <div class="top-cat-list__subtitle">
                      Mobile development articles <span class="warning">+472</span>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="##">
                    <div class="top-cat-list__title">
                      Nature <span>8.2k</span>
                    </div>
                    <div class="top-cat-list__subtitle">
                      Wildlife animal articles <span class="warning">+472</span>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="##">
                    <div class="top-cat-list__title">
                      Geography <span>8.2k</span>
                    </div>
                    <div class="top-cat-list__subtitle">
                      Geography articles <span class="primary">+472</span>
                    </div>
                  </a>
                </li> -->
              </ul>
            </article>
          </div>
        </div>
      </div>
