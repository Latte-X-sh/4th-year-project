<!doctype html>

<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>I-shop - WEBAR</title>
    <link rel="stylesheet" href="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css">
    <script src="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.js"></script>

    <link rel="stylesheet" type="text/css" href="./../css/app.css" />
   
  </head>
  <body>
    <script src="../js/fas.js"></script>
    <script type="module">
        import { App } from '../js/app.js';

        document.addEventListener("DOMContentLoaded", function(){
            const app = new App();
            window.app = app;
        });
    </script>
    <div id="enter-ar-info" class="mdc-card demo-card">
      <h2>{Product name} view in AR</h2>
      <p>
       Clicking of the button below will display an Ar instance of the product.This implementation is in beta and it may be buggy or laggy depending on the type of phone your using
      </p>

      <!-- Starting an immersive WebXR session requires user interaction. Start the WebXR experience with a simple button. -->
      <button id="enter-ar" class="mdc-button mdc-button--raised mdc-button--accent" onclick="window.app.showProduct(1);"> Start augmented reality </button>
     
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
