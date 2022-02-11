<?php
// require './lib/functions.php';

checkstatus();
// var_dump($_SESSION);
// die();
$userdata = $_SESSION['id'];
$user = fetch_user_data($userdata);
switch($user['Roletype']){
  case 1:
    $role = 'admin';
    break;
  case 2:
    $role  ='user';
    break;
}
// var_dump($user);
// die();
$products = product_feed();
$productcount = sizeof($products);
$viewProducts = viewedProd($userdata);
$sizeProducts = sizeof($viewProducts);
// var_dump($sizeProducts);
// die();

?>
      <div class="container">
        <h2 class="main-title">User Dashboard</h2>
        <div class="row stat-cards">
          <div class="col-md-6 col-xl-3">
            <article class="stat-cards-item">
              <div class="stat-cards-icon primary">
                <i data-feather="bar-chart-2" aria-hidden="true"></i>
              </div>
              <div class="stat-cards-info">
                <p class="stat-cards-info__num"><?php echo htmlspecialchars($user['Firstname']);?>&nbsp;<?php echo htmlspecialchars($user['Lastname']);?></p>
                <p class="stat-cards-info__title"><?php echo htmlspecialchars($role);?></p>
                <p class="stat-cards-info__progress">
                  <!-- <span class="stat-cards-info__profit success">
                    <i data-feather="trending-up" aria-hidden="true"></i>4.07%
                  </span>
                  Last month -->
                </p>
              </div>
            </article>
          </div>
          <div class="col-md-6 col-xl-3">
            <article class="stat-cards-item">
              <div class="stat-cards-icon warning">
                <i data-feather="file" aria-hidden="true"></i>
              </div>
              <div class="stat-cards-info">
                <p class="stat-cards-info__num"><?php echo htmlspecialchars($sizeProducts);?></p>
                <p class="stat-cards-info__title">Total products viewed</p>
               
              </div>
            </article>
          </div>
          <div class="col-md-6 col-xl-3">
            <article class="stat-cards-item">
              <div class="stat-cards-icon purple">
                <i data-feather="file" aria-hidden="true"></i>
              </div>
              <div class="stat-cards-info">
                <p class="stat-cards-info__num"><?php echo htmlspecialchars($sizeProducts);?></p>
                <p class="stat-cards-info__title">Total AR model viewed</p>
              
              </div>
            </article>
          </div>
          <div class="col-md-6 col-xl-3">
            <article class="stat-cards-item">
              <div class="stat-cards-icon success">
                <i data-feather="feather" aria-hidden="true"></i>
              </div>
              <div class="stat-cards-info">
                <p class="stat-cards-info__num"><?php echo htmlspecialchars($productcount);?></p>
                <p class="stat-cards-info__title">Total Goods available</p>
               
              </div>
            </article>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-9">
            <!-- <div class="chart">
           <canvas id="myChart" aria-label="Site statistics" role="img"></canvas> 
            </div> -->
            <p class="white-block__title">Viewed products</p>
            <!-- products table -->
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
                  </tr>
                </thead>
                <tbody>
                <?php foreach ($viewProducts as $viewProduct) { ?>
                    <?php 
                    $pid = $viewProduct['productid'];
                    $proddata = prodget($pid);
                    // var_dump($proddata);
                    // die();
                    ?>
                  <tr>
                    <td>
                    <?php
                   $productid = $proddata["productid"];
                  echo htmlspecialchars($productid);?>
                    
                    </td>
                    <td>
                    <?php
                  echo htmlspecialchars($proddata['productname']);?>
                
                    </td>
                    <td>
                    <?php echo htmlspecialchars($proddata['productdescription']);?>
                    </td>
                    <!-- <td><span class="badge-active">FEMALE</span></td> -->
                    <td><span class="badge-active">KSH <?php echo htmlspecialchars($proddata['productprice']);?></span></td>
                    <td><span class="badge-pending"><?php 
                    if($proddata['product3dimage'] == ""){
                      $armodel = 'NO';
                    }else{
                      $armodel = 'YES';
                    }
                    echo htmlspecialchars($armodel);
                    ?></span></td>
                    <td><?php echo htmlspecialchars($proddata['productcategory']) ?></td>
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
                <h3> Some AR tips to consider</h3>
                <p><i>WebXr is a niche that has potential</i></p>
              
              </div>
              <ul class="top-cat-list">
           
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

              </ul>
            </article>
          </div>
        </div>
      </div>
