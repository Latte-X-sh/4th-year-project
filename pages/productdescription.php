<?php
//product query

checkstatus();
$productid = $_GET["id"];
$product = product_specific($productid);
$productcategory = product_specific_category($product['productcategory']);
$totalproductsofcategory = sizeof($productcategory);
// var_dump($product['product3dimage'] );
  $userid = $_SESSION['id'];
  $tvalue = 1;
  viewrating($productid,$userid,$tvalue);

if($product['product3dimage'] == ""){
  $armodel = 'NO';
}else{
  $armodel = 'YES';
}
// var_dump($productcategory);
// die();
?>
      <div class="container">
        <h2 class="main-title">Product Description</h2>
        <div class="row stat-cards">
          <div class="col-md-6 col-xl-3">
            <article class="stat-cards-item">
              <div class="stat-cards-icon primary">
                <i data-feather="bar-chart-2" aria-hidden="true"></i>
              </div>
              <div class="stat-cards-info">
                <p class="stat-cards-info__num">PRODUCT-NAME</p>
                <p class="stat-cards-info__title"><?php echo htmlspecialchars($product['productname']) ?></p>
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
                <p class="stat-cards-info__num">CATEGORY</p>
                <p class="stat-cards-info__title"><?php echo htmlspecialchars($product['productcategory']) ?></p>
                <!-- <p class="stat-cards-info__progress">
                  <span class="stat-cards-info__profit success">
                    <i data-feather="trending-up" aria-hidden="true"></i>0.24%
                  </span>
                  Last month
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
                <p class="stat-cards-info__num">PRICE</p>
                <p class="stat-cards-info__title">KSH <?php echo htmlspecialchars($product['productprice']) ?></p>
                <!-- <p class="stat-cards-info__progress">
                  <span class="stat-cards-info__profit danger">
                    <i data-feather="trending-down" aria-hidden="true"></i>1.64%
                  </span>
                  Last month
                </p> -->
              </div>
            </article>
          </div>
          <div class="col-md-6 col-xl-3">
            <article class="stat-cards-item">
              <div class="stat-cards-icon success">
                <i data-feather="feather" aria-hidden="true"></i>
              </div>
              <div class="stat-cards-info">
                <p class="stat-cards-info__num">AR VIEW</p>
                <p class="stat-cards-info__title"> is it able? <?php echo htmlspecialchars($armodel) ?></p>
                <!-- <p class="stat-cards-info__progress">
                  <span class="stat-cards-info__profit warning">
                    <i data-feather="trending-up" aria-hidden="true"></i>0.00%
                  </span>
                  Last month
                </p> -->
              </div>
            </article>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-9">
            <div class="chart">
            <article class=" white-block ">
              <div class="top-cat-title">
                <h3>Product description</h3>
                <br>
                <?php echo htmlspecialchars($product['productdescription']) ?>
              </div>
              <ul class="top-cat-list">
                <li>
                 
                    <div class="top-cat-list__title">
                    <!-- index.php?page=shoppingcart -->
                    <?php if($armodel == 'YES' ) {?>
                    <a href="index.php?page=viewar&id=<?php echo $productid;?>">
                      <p class="sign-up__subtitle">VIEW PRODUCT IN AUGMENTED REALITY</p> </a><?php } ?>  <a href="https://developers.google.com/ar/devices#google_play_devices"><span>Check your Device if its Compatible</span></a>
                    </div>
                    <div class="top-cat-list__subtitle">
                      Emergence of this immersive technology has brought interactivity to the attention span of the whole world. <span class="purple">Minimum Specs</span><span class="blue">Android 7+ with ARCORE</span>
                    </div>
                 
                </li>
            
                <li>
                  <a href="##">
                    <div class="top-cat-list__title">
                      <p class="sign-up__subtitle"> PRICE OF THE PRODUCT </p>   <span>KSH <?php echo htmlspecialchars($product['productprice']) ?></span>
                    </div>
                    <div class="top-cat-list__subtitle">
                      Hassle free payment,Zero rendundant pages ,just your address and pap!, it's on your door step! This section is a scope creep,Otherwise this is demo showing the functionality of an AR-product in an E-commerce project.
                    </div>
                  </a>
                </li>
                </ul>
              </article>


            </div>
          </div>
        
          <br>
          <div class="col-lg-3">
            <br>
            <br>
            <br>
          
            <br>
           
            <!-- <article class="customers-wrapper">
              
              <div class="top-cat-title">
                <h3>Similar products</h3>
                <p>{Furniture category}, 2 products</p>
              </div>
              <ul class="top-cat-list">
                <li>
                  <a href="##">
                    <div class="top-cat-list__title">
                      Lifestyle <span>8.2k</span>
                    </div>
                    <div class="top-cat-list__subtitle">
                      Dailiy lifestyle articles <span class="purple">+472</span>
                    </div>
                  </a>
                </li>
                
              </ul>
            </article> -->
            <article class="white-block">
              <div class="top-cat-title">
                <h3>Similar products that would fit in that space</h3>
                <p><?php echo htmlspecialchars($product['productcategory']) ?>, <?php echo htmlspecialchars($totalproductsofcategory) ?> products</p>
              </div>
              <ul class="top-cat-list">
                <?php foreach ($productcategory as $singleprod) {?>
                <li>
                <?php $proid = $singleprod['productid']; $url ="./index.php?page=productdesc&id=$proid"?>
                  <a href="<?php echo htmlspecialchars( $url ); ?>">
                    <div class="top-cat-list__title">
                    <?php echo htmlspecialchars($singleprod['productname']) ?> <span>KSH <?php echo htmlspecialchars($singleprod['productprice']) ?> </span>
                    </div>
                    <div class="top-cat-list__subtitle">
                     <?php echo htmlspecialchars($singleprod['productdescription']) ?> <!-- <span class="purple"></span> -->
                    </div>
                  </a>
                </li>
                <?php } ?>
              </ul>
            </article>
          </div>
        </div>
      </div>
