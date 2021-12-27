<?php
require './lib/functions.php';
session_start();
$user_id = $_SESSION['id'];
$user_email = $_SESSION['email'];
// var_dump($_POST);
// die();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //define the process fetched
    if(isset($_POST['Update'])){
        $update_array = array(
            'username' => '',
            'firstname' => '',
            'lastname' => '',
            'email' => '',
            'phoneno' => '',
            'birthdate' => '',
            'gender' => '',
            'favcategory' => '',
            'bio' => '',
        );
       
        if (isset($_FILES['userprofileimage'])) {
            $userimage = $_FILES['userprofileimage'];
            //image processing
            account_image_processing($userimage);
            // $update_array['userprofileimage']= $userimage;
        } else {
            //later
            header("Location:./pages/profile.php?error=Imageuploadfailed");
        }
        //
        if (isset($_POST['username'])) {
            $username = $_POST['username'];
            $update_array['username'] = $username;
        } else {
            $username = "";
        }
        //
        if (isset($_POST['firstname'])) {
            $firstname = $_POST['firstname'];
            $update_array['firstname'] = $firstname;
        } else {
            $firstname = "";
        }
        //
        if (isset($_POST['lastname'])) {
            $lastname = $_POST['lastname'];
            $update_array['lastname'] = $lastname;
        } else {
            $lastname = "";
        }
        //
        if (isset($_POST['email'])) {
            $email = $_POST['email'];
            $update_array['email'] = $email;
        } else {
            $email = "";
        }
        //
        if (isset($_POST['phoneno'])) {
            $phoneno = $_POST['phoneno'];
            $update_array['phoneno'] = $phoneno;
        } else {
            $phoneno = "";
        }
        //
        if (isset($_POST['birthdate'])) {
            $birthdate = date('Y-m-d', strtotime(strtr($_POST['birthdate'], '/', '-')));
            $update_array['birthdate'] = $birthdate;
        } else {
            $birthdate = "";
        }
        //
        if (isset($_POST['gender'])) {
            $gender = $_POST['gender'];
            $update_array['gender'] = $gender;
        } else {
            $gender = "";
        }
        //
        if (isset($_POST['favcategory'])) {
            $favcategory = $_POST['favcategory'];
            $update_array['favcategory'] = $favcategory;
        } else {
            $favcategory = "";
        }
        //
        if (isset($_POST['bio'])) {
            $bio = $_POST['bio'];
            $update_array['bio'] = $bio;
        } else {
            $bio = "";
        }
        //
        // var_dump($update_array);
        // die();
        update_db_data($update_array,$user_id);
        header("Location:index.php?page=userprofile");
            
    }
    if (isset($_POST['password_update'])) {

        if (isset($_POST['old_password'])) {
            $old_password = $_POST['old_password'];
        } else {
            $old_password = "";
        }
        if (isset($_POST['new_password'])) {
            $newpassword = $_POST['new_password'];
        } else {
            $newpassword = "";
        }
        
        // var_dump($_POST);die();
        update_password($newpassword, $user_email, $old_password);




    }
    //Upload product code
    if (isset($_POST['Upload'])) {
        // var_dump($_POST);
        // die();
        // var_dump($_FILES);
        if (isset($_FILES['productimage'])) {
            $prodimage = $_FILES['productimage'];
            //image processing
            $prodimage2 = productimage_processing($prodimage);
        } else {
            //later index
            $error="failed to upload product image";
            header("Location:index.php?page=adaddproducts?err=$error");
        }
        if (isset($_FILES['ar3dimage'])) {
            $ar3dimage = $_FILES['ar3dimage'];
            //image processing
            $ar3dimage2 = image3D_processing($ar3dimage);
        
        } else {
            //later index
            $error="failed to upload 3D product image";
            header("Location:index.php?page=adaddproducts?err=$error");
        }
        if (isset($_POST['productname'])) {
            $productname = $_POST['productname'];
        } else {
            $productname = "";
        }
        if (isset($_POST['productprice'])) {
            $productprice = $_POST['productprice'];
        } else {
            $productprice = "";
        }
        if (isset($_POST['prodcategory'])) {
            $prodcategory = $_POST['prodcategory'];
        } else {
            $prodcategory = "";
        }
        if (isset($_POST['size'])) {
            $size = $_POST['size'];
        } else {
            $size = "";
        }
        if (isset($_POST['desc'])) {
            $desc = $_POST['desc'];
        } else {
            $desc = "";
        }
    products_save( $prodimage2,$ar3dimage2,$productname,$productprice,$prodcategory,$size,$desc);    
    header("Location:index.php?page=products");



    }
}