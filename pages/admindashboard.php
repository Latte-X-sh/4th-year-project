<?php
// require './lib/functions.php';

checkstatus();
$prod = trendingProd();

// var_dump($prod);
// die();

// $ids = $prod[0]['IDs'];
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
$users =  user_Count();
$products = product_feed();
$userCount =  sizeof($users);
$productcount = sizeof($products);
// var_dump($userCount);
// die();
// require('./fpdf184/fpdf.php');
// $pdf = new FPDF();
// $pdf->AddPage();
// $pdf->SetFont('Arial','B',16);
// $pdf->Cell(40,10,'Hello World !',1);
// $pdf->Ln();
// $pdf->Cell(40,10,'Powered by FPDF.',0,1,'C');
// $pdf->Output();

// // Instanciation of inherited class
// $pdf = new PDF();
// $pdf->AliasNbPages();
// $pdf->AddPage();
// $pdf->SetFont('Times','',12);
// for($i=1;$i<=40;$i++)
// 	$pdf->Cell(0,10,'Printing line number '.$i,0,1);
// $pdf->Output();

?>
     <div class="container">
        <h2 class="main-title">Admin Dashboard</h2>
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
                <p class="stat-cards-info__num"><?php echo htmlspecialchars($userCount);?></p>
                <p class="stat-cards-info__title">Total users</p>
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
              <p class="stat-cards-info__num"><?php echo htmlspecialchars($productcount);?></p>
                <p class="stat-cards-info__title">Total Products</p>
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
                <p class="stat-cards-info__num">Download Report</p>
                <a href="index.php?page=print">
                <p class="stat-cards-info__title">Click Here!</p>
                </a>
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
            <!-- <div class="chart">
              <canvas id="myChart" aria-label="Site statistics" role="img"></canvas>
            </div> -->
            <p class="white-block__title">Trending products (Monthly)</p>
            <!-- products table -->
   
            <div class="users-table table-wrapper">
              <table class="posts-table">
                <thead>

                  <tr class="users-table-info">
                    <th>Product name</th>
                    <th>Product Category</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach($products as $produ){ ?>
                  <tr>
                    
                    <td>
                    <?php echo htmlspecialchars($produ['productname']); ?>
                    </td>
                   
                    <td><span class="badge-active"><?php echo htmlspecialchars($produ['productcategory']); ?></span></td>
                  
                    <td>
                      <span class="p-relative">
                        <button class="dropdown-btn transparent-btn" type="button" title="More info">
                          <div class="sr-only">More info</div>
                          <i data-feather="more-horizontal" aria-hidden="true"></i>
                        </button>
                        <ul class="users-item-dropdown dropdown">
                        <li><a href="index.php?page=prodprofile&id=<?php $productid = $produ['productid']; echo $productid;?>">Edit</a></li>
                       
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
            <!-- <article class="white-block">
              <div class="top-cat-title">
                <h3>Active Users (Monthly)</h3>
                <p>Top 5 Active Users</p>
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
                <li>
                  <a href="##">
                    <div class="top-cat-list__title">
                      Geography <span>8.2k</span>
                    </div>
                    <div class="top-cat-list__subtitle">
                      Geography articles <span class="primary">+472</span>
                    </div>
                  </a>
                </li>
              </ul>
            </article> -->
          </div>
        </div>
      </div>
