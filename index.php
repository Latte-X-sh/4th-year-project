<?php
session_start();

// var_dump($_GET['page']);
// var_dump($_GET);
// die();
if($_GET == NULL || $_GET['page'] == 'index' ){
    $message = 'Kindly login or signup!';
    $page = 'pages/landingpage.php&message=';
    header("Location: Homepage.php?page=$page$message");
    }   
else{
        if($_GET['page'] == 'adminDash'){
            $page = 'pages/admindashboard.php';
            header("Location: Homepage.php?page=$page");
        }
        if($_GET['page'] == 'userDash'){
            $page = 'pages/userdashboard.php';
            header("Location: Homepage.php?page=$page");
        }
        if($_GET['page'] == 'products'){
            $page = 'pages/products.php';
            header("Location: Homepage.php?page=$page");
        }
        if($_GET['page'] == 'print'){
            $page = 'fpdf184/tutorial/arreport.php';
            header("Location: $page");
        }
        if($_GET['page'] == 'viewar'){
            $prodid = $_GET['id'];
            $page = 'pages/viewar.php?id=';
            header("Location: $page$prodid");
        }
        if($_GET['page'] == 'userprofile'){
            $page = 'pages/profile.php';
            header("Location: Homepage.php?page=$page");
        }
        // if($_GET['page'] == 'adedituser'){
        //     $page = 'pages/adedituser.php';
        //     header("Location: Homepage.php?page=$page");
        // }
        if($_GET['page'] == 'adeditproducts'){
            $page = 'pages/adeditproducts.php';
            header("Location: Homepage.php?page=$page");
        }
        if($_GET['page'] == 'adaddproducts'){
            $page = 'pages/adaddproducts.php';
            header("Location: Homepage.php?page=$page");
        }
        // if($_GET['page'] == 'deleteprod' && $_GET['id'] != NULL){
        //     $prodid = $_GET['id'];
        //     $page = 'pages/deleteprod.php&id=';
        //     header("Location: Homepage.php?page=$page$prodid");
        // }
        // if($_GET['page'] == 'deleteprod'){
        //     $page = 'pages/emailadmin.php';
        //     header("Location: Homepage.php?page=$page");
        // }
        if($_GET['page'] == 'productdesc' && $_GET['id'] != NULL){
            $prodid = $_GET['id'];
            $page = 'pages/productdescription.php&id=';
            header("Location: Homepage.php?page=$page$prodid");
        }
        if($_GET['page'] == 'prodprofile' && $_GET['id'] != NULL){
            $prodid = $_GET['id'];
            $page = 'pages/editprodprofile.php&id=';
            header("Location: Homepage.php?page=$page$prodid");
        }
        if($_GET['page'] == 'signin'){
            $page = 'pages/signup.php';
            header("Location: $page");
        }
        if($_GET['page'] == 'login'){
            $page = 'pages/login.php';
            header("Location: $page");
        }
      
        if($_GET['page'] == 'logout'){
            $_SESSION = array() ; //unset all of the sessions variables
            session_destroy();
            $page = 'pages/landingpage.php';
            header("Location: Homepage.php?page=$page");
        }
}
