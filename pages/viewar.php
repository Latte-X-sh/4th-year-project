<?php
session_start();
include "./../lib/functions.php";
$productid = $_GET["id"];
$product = product_specific($productid);
$product3durl = $product['product3dimage'];
$p2 = explode("/",$product3durl);
$arraycount  = count($p2);
if($arraycount == 2){
  $prod3durl = $p2[1];
}if($arraycount == 3){
  $prod3durl = $p2[2];
}
$userid = $_SESSION['id'];
$tvalue = 1;
arating($productid,$userid,$tvalue);

// $prod3d = explode(".",$prod3durl);
// $product3dname = $prod3d[0];
// var_dump($prod3durl);
// die();
?>
<!doctype html>

<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>I-shop - WEBAR</title>
    <link rel="stylesheet" href="./../css/material-components-web.min.css">
    <script src="./../js/material-components-web.min.js"></script>

    <link rel="stylesheet" type="text/css" href="./../css/app.css" />
   
  </head>
  <body>
    <script src="../js/fas.js"></script>
    <script type="module">
        import { App } from '../js/app.js';
        // let product = 'chair4.glb' ;
        document.addEventListener("DOMContentLoaded", function(){
            const app = new App();
            window.app = app;
        });
    </script>
    <div id="enter-ar-info" class="mdc-card demo-card">
      <h2><?php echo $product['productname'];?> view in AR</h2>
      <p>
       Clicking of the button below will display an Ar instance of the product.This implementation is in beta and it may be buggy or laggy depending on the type of phone your using
      </p>

      <!-- Starting an immersive WebXR session requires user interaction. Start the WebXR experience with a simple button. -->
      <button id="enter-ar" class="mdc-button mdc-button--raised mdc-button--accent" onclick="window.app.showProduct('<?php echo htmlspecialchars($prod3durl)?>' );"> Start augmented reality </button>
     
    </div>

    <div id="unsupported-info" class="mdc-card demo-card">
      <h2>Unsupported Browser</h2>
      <p>
        Your browser does not support AR features with WebXR.
      </p>
    </div>
    <!-- <script src="./../js/app.js"></script> -->
    <div id="stabilization"></div>
  </body>
</html>
<