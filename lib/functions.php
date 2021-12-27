<?php
//function that connects my web page and the database
function get_connection()
{
    $config = require 'config.php';
    //WE NEED TO HAVE A FAILOVER INCASE THE DB CONNECTION AND SO WE NEED TO HAVE AN ERROR MECHANISM MODULE
    try {
        return new PDO($config['database_dsn'], $config['database_user'], $config['database_password']);
    } catch (PDOException $e) {
        die("The connection to the database is faulty " . $e->getMessage());
    }

}
//save users to database
function save_to_db($Usernme,$Firstnme,$lastnme,$emil,$pwd)
{
    // var_dump($Usernme,$Firstnme,$lastnme,$emil,$pwd);die();
    try {
        $pdo = get_connection();
        $query = "INSERT into `users` ( `Username`,`Firstname`,`Lastname`, `Email`, `Password`) VALUES (:username,:firstname,:lastname, :email, :password)";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":username", $Usernme);
        $stmt->bindParam(":firstname", $Firstnme);
        $stmt->bindParam(":lastname", $lastnme);
        $stmt->bindParam(":email", $emil);
        $stmt->bindParam(":password", $pwd);
        $result = $stmt->execute(array(
            ':username' => $Usernme,
            ':firstname' => $Firstnme,
            ':lastname' => $lastnme,
            ':email' => $emil,
            ':password' => $pwd,

        ));
        // var_dump($stmt);die();
    } catch (PDOException $e) {

    }
}
//save products to database
function products_save($prodimg,$ar3dimg,$prodnme,$prodprice,$prodcateg,$prodsize,$proddesc)
{
    // var_dump($prodimg,$ar3dimg,$prodnme,$prodprice,$prodcateg,$prodsize,$proddesc);die();
//hashing of the name and the current date inorder to get the serial number
$prodserial = md5($prodnme).date('M/d/Y');
// echo(isset($prodimg));
// die();
if (isset($prodimg)) {
    $prodimg2 = $prodimg;
} else {
    $prodimg2 = 'img/product.png';
}

if (isset($ar3dimg)) {
    $ar3dimg2 = $ar3dimg;
} else {
    $ar3dimg2 = 'img/test.glb';
}
// // echo($prodimg);
// die();

    try {
        $pdo = get_connection();
        $query = "INSERT into products ( productname,productdescription ,productcategory,productserial,productprice,productsize,productimage,product3dimage) 
        VALUES (:productname,:productdescription,:productcategory,:productserial,:productprice,:productsize,:productimage,:product3dimage)";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":productname", $prodnme);
        $stmt->bindParam(":productdescription", $proddesc);
        $stmt->bindParam(":productcategory", $prodcateg);
        $stmt->bindParam(":productimage", $prodimg2);
        $stmt->bindParam(":product3dimage", $ar3dimg2);
        $stmt->bindParam(":productserial", $prodserial);
        $stmt->bindParam(":productprice", $prodprice);
        $stmt->bindParam(":productsize", $prodsize);
        
        $result = $stmt->execute();
            // ':productname' => $prodnme,
            // ':productdescription' => $proddesc,
            // ':productcategory' => $prodcateg,
            // ':productimage' => $prodimg,
            // ':product3dimage' => $ar3dimg
            // // ':productserial' => $prodserial,
            // // ':productprice' => $prodprice,
            // // ':productsize' => $prodsize


        // var_dump($result);die();
    } catch (PDOException $e) {
        die("ERROR: Could not able to execute $sql. " . $e->getMessage());
    }
}
//login user
function login_db($emil, $pwd)
{
    $pdo = get_connection();
    $query = "SELECT * FROM `users` WHERE Email= :email AND Password= :pass";
    $stmt = $pdo->prepare($query);
    $result = $stmt->execute(array(
        ':email' => $emil,
        ':pass' => $pwd,
    ));
    // $row = $stmt->fetch() //the 1st implemention inside the if statement where $userRow is @
    $userRow = $stmt->fetch(PDO::FETCH_ASSOC); //returns an associative array that contains the data from the db

    if ($stmt->rowCount() == 1) {
        if ($userRow) {
            $id = $userRow["ID"];
            $email = $userRow["Email"];
            $Usernme = $userRow["Username"];
            $roletype = $userRow["Roletype"];
            $password = $userRow['Password'];
            // $truth = password_verify($pwd,$password); //this code is useful only when i've hashed my passwords.
            //  echo $id," ",$email," ",$name ;//this code echo the value from the database if they correct .
            if ($pwd == $password) {
                session_start();
                $_SESSION["loggedin"] = true;
                $_SESSION["id"] = $id; //random number
                $_SESSION["name"] = $Usernme;
                $_SESSION["email"] = $email;
              switch($roletype){
                  case 1:
                    $_SESSION["usertype"] = 'admin';
                    header('location:./../index.php?page=adminDash');
                    break;
                  case 2:
                    $_SESSION["usertype"] = 'user';
                    header('location:./../index.php?page=userDash');
                    break;
              }
         
            } else {
             $login_err = "Invalid%20email%20or%20password.";
             header('location:./login.php?1'.$login_err);
            }
        } else {
            $login_err = "Invalid%20email%20or%20password..";
            header('location:./login.php?2'.$login_err);
        }
    } else {
        $login_err = "Invalid%20email%20or%20password.";
        header('location:./login.php?3'.$login_err);//if the statement return a number not 1(true) then display this error message.
    }
    // Close statement
    unset($stmt);
    unset($pdo);
}
function fetch_user_data($userdata)
{
    //get connections
    $pdo = get_connection();
    //prepare the query to the database.SQL statement
    $query = "SELECT * from users where id='$userdata' ";
    $results = $pdo->query($query);
    $user = $results->fetch();
    return $user;
}
//redirects users if session is not available
function checkstatus()
{
    //this function redirects the user if there is no session defined inorder to prevent further errors
    $url = 'index.php';
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        if (!headers_sent())
        {    
            header('Location: '.$url);
            exit;
            }
        else
            {  
            echo '<script type="text/javascript">';
            echo 'window.location.href="'.$url.'";';
            echo '</script>';
            echo '<noscript>';
            echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';
            echo '</noscript>'; exit;
        }
       
      }
}
function account_image_processing($imageData){
   
        $iduser = $_SESSION['id'];
        $imageName= md5($imageData['name']);
        $imageType= $imageData['type'];
        $imageTempname= $imageData['tmp_name'];
        $imageError=    $imageData['error'];
        $imageSize= $imageData['size'];
        $imageFiledata = explode('/',$imageType);
        $size_of_array= sizeof($imageFiledata);
        // print_r($imageFiledata);die();
        $imageFileextension = $imageFiledata[$size_of_array-1];
        if($imageFileextension == "jpeg" || $imageFileextension == "jpg" || $imageFileextension == "png"  ){
            $destination="img/profile_image/";
            $fileNewName= $destination.$imageName; //hashing of the location
            if(move_uploaded_file($imageTempname,$fileNewName)){
                $pdo = get_connection();
                
                $query ="UPDATE `users` 
                              SET profile_image = CASE  
                                WHEN :profile_image is NULL THEN users.profile_image
                                WHEN :profile_image='' THEN users.profile_image 
                                ELSE :profile_image
                                END  
                            WHERE id = :id ";
                $stmt = $pdo->prepare($query);  
                $stmt->bindParam(':profile_image',$fileNewName);
                $stmt->bindParam(':id', $iduser);
                $result = $stmt->execute(array(
                    ':profile_image' => $fileNewName ,
                    ':id' => $iduser
                ));
            
          
         
        
        } 
   
    }
    
}
function update_db_data($array_from_side, $iduser)
{
    $pdo = get_connection();
//Query for Username
    $query1 = "UPDATE `users` 
                SET name = CASE  
                            WHEN :uname is NULL THEN users.Username
                            WHEN :uname='' THEN users.Username 
                            ELSE :uname
                            END  
                WHERE id = :id ";
//Query for firstname
    $query2 = "UPDATE `users`  
                SET Firstname = CASE 
                            WHEN :fname is NULL THEN users.Firstname
                            WHEN :fname='' THEN users.Firstname 
                            ELSE :fname 
                            END  
                WHERE id = :id ";
//Query for lastname
    $query3 = "UPDATE `users`  
                SET Lastname = CASE  
                            WHEN :lname  is NULL THEN users.Lastname 
                            WHEN :lname='' THEN users.Lastname 
                            ELSE :lname 
                            END  
                WHERE id = :id ";
//Query for Birthdate
    $query4 = "UPDATE `users`  
                SET Dateofbirth = CASE 
                            WHEN :dbirth  is NULL THEN  users.Dateofbirth
                            WHEN :dbirth='1970-01-01' THEN users.Dateofbirth  
                            ELSE :dbirth 
                            END  
                WHERE id = :id ";
//Query for Email
    $query5 = "UPDATE `users`  SET Email = CASE 
                            WHEN :email is NULL THEN  users.Email
                            WHEN :email='' THEN users.Email 
                            ELSE :email 
                            END  
                WHERE id = :id ";
//Query for Gender
    $query6 = "UPDATE `users`  SET Gender = CASE 
                         WHEN :gender is NULL THEN users.Gender
                         WHEN :gender='' THEN users.Gender 
                         ELSE :gender
                         END  
                WHERE id = :id ";
//Query for FavCategory
    $query7 = "UPDATE `users`  SET FavCategory = CASE 
                         WHEN :fav is NULL THEN  users.FavCategory 
                         WHEN :fav='' THEN users.FavCategory 
                         ELSE :fav 
                         END 
                WHERE id = :id ";
//Query for Bio
    $query8 = "UPDATE `users`  SET Bio = CASE 
                         WHEN :bio  is NULL THEN users.Bio
                         WHEN :bio='' THEN users.Bio
                         ELSE :bio 
                         END 
                WHERE id = :id ";
//Query for Phone number
    $query9 = "UPDATE `users`  SET Phonenumber = CASE 
        WHEN :phoneno  is NULL THEN users.Phonenumber
        WHEN :phoneno='' THEN users.Phonenumber 
        ELSE :phoneno 
        END     
                WHERE id = :id ";
//Query for profile picture and gender pending 
    $testarray = array(
        $query1, $query2, $query3, $query4, $query5, $query6, $query7, $query8,$query9,
    );
    $size = sizeof($testarray);
    $limit = $size - 1;//8
//   echo $testarray[0];  die();

    for ($i = 0; $i <= $limit - 6; $i++) {
        //executes this queries until successful
        $query = $testarray[$i];
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':uname', $array_from_side['username']);
        $stmt->bindParam(':fname', $array_from_side['firstname']);
        $stmt->bindParam(':lname', $array_from_side['lastname']);
        $stmt->bindParam(':id', $iduser);
        $result = $stmt->execute(array(
            ':uname' => $array_from_side['username'],
            ':fname' => $array_from_side['firstname'],
            ':lname' => $array_from_side['lastname'],
            ':id' => $iduser

        ));
        unset($query);
    }
    for ($y = 3; $y <= $limit - 3; $y++) {
        //executes this queries until successful
        $query = $testarray[$y];
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':dbirth', $array_from_side['birthdate']);
        $stmt->bindParam(':email', $array_from_side['email']);
        $stmt->bindParam(':gender', $array_from_side['gender']);
        $stmt->bindParam(':id', $iduser);
        $result = $stmt->execute(array(
            ':dbirth' => $array_from_side['birthdate'],
            ':email' => $array_from_side['email'],
            ':gender' => $array_from_side['gender'],
            ':id' => $iduser

        ));
        unset($query);
    }
    for ($y = 6; $y <= $limit; $y++) {
        //executes this queries until successful
        $query = $testarray[$y];
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':city', $array_from_side['favcategory']);
        $stmt->bindParam(':phoneno', $array_from_side['phoneno']);
        $stmt->bindParam(':gender', $array_from_side['bio']);
        $stmt->bindParam(':id', $iduser);
        $result = $stmt->execute(array(
            ':fav' => $array_from_side['favcategory'],
            ':phoneno' => $array_from_side['phoneno'],
            ':bio' => $array_from_side['bio'],
            ':id' => $iduser

        ));
        unset($query);
    }
    //  echo "status code 1- moment of truth "; die();
    //echo status code 1 and js takes it and alerts us that we are successfull

    // var_dump($stmt);die();
}
//get old password
function get_old_password($user_email)
{
    $pdo = get_connection();
    $query = "SELECT `password` FROM `users` WHERE email= :email";
    $stmt = $pdo->prepare($query);
    $result = $stmt->execute(array(
        ':email' => $user_email
    ));
    $userRow = $stmt->fetch(PDO::FETCH_ASSOC);
    $oldpassword = $userRow['password'];
    return $oldpassword;
    // echo $oldpassword ;die();
}
//update password
function update_password($newpass, $email, $passold)
{
    // var_dump($newpass, $email, $passold);
    $pdo = get_connection();
    $oldpass = get_old_password($email);
    // var_dump($oldpass);die();
    if ($passold === $oldpass) {
        $query = "UPDATE `users` SET password=:newpass where email= :email";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":newpass", $newpass);
        $stmt->bindParam(":email", $email);
        $result = $stmt->execute(array(
            ':newpass' => $newpass,
            ':email' => $email,
        ));
        header("Location:index.php?page=userprofile");
    } else {
        header("Location:index.php?page=userprofile");
    }
}
//function for fetching data in the products table
function product_feed()
{
    //get connections
    $pdo = get_connection();
    //prepare the query to the database.SQL statement
    $query = 'SELECT * from products' ;
    $results = $pdo->query($query);
    $products = $results->fetchAll(PDO::FETCH_ASSOC);
    return $products;
}
//function for fetching specific product
 //prepare the query to the database.SQL statement
function product_specific($prodid)
{
    //get connections
    $pdo = get_connection();
    //prepare the query to the database.SQL statement
    $query = "SELECT * from products where productid='$prodid'" ;
    $results = $pdo->query($query);
    $products = $results->fetch(PDO::FETCH_ASSOC);
    return $products;
}
function product_specific_category($proddata)
{
    //get connections
    $pdo = get_connection();
    //prepare the query to the database.SQL statement
    $query = "SELECT * from products where productcategory='$proddata'" ;
    $results = $pdo->query($query);
    $products = $results->fetchAll(PDO::FETCH_ASSOC);
    return $products;
}
//function for processing product image files and 3d image files
function productimage_processing($imageData){
   
    // $iduser = $_SESSION['id']; //UPLOADED BY
    $imageName= md5($imageData['name']);
    $imageType= $imageData['type'];
    $imageTempname= $imageData['tmp_name'];
    $imageError=    $imageData['error'];
    $imageSize= $imageData['size'];
    $imageFiledata = explode('/',$imageType);
    $size_of_array= sizeof($imageFiledata);
    // print_r($imageFiledata);die();
    $imageFileextension = $imageFiledata[$size_of_array-1];
    if($imageFileextension == "jpeg" || $imageFileextension == "jpg" || $imageFileextension == "png"  ){
        $destination="img/product_image/";
        $fileNewName= $destination.$imageName; //hashing of the location
        if(move_uploaded_file($imageTempname,$fileNewName)){
            $filedata = $fileNewName;
            return  $filedata;
 
    
    } 

}

}
function image3D_processing($imageData){
   
    // $iduser = $_SESSION['id']; //UPLOADED BY
    $imageName= md5($imageData['name']);
    $imageType= $imageData['type'];
    $imageTempname= $imageData['tmp_name'];
    $imageError=    $imageData['error'];
    $imageSize= $imageData['size'];
    $imageFiledata = explode('/',$imageType);
    $size_of_array= sizeof($imageFiledata);
    // print_r($imageFiledata);die();
    $imageFileextension = $imageFiledata[$size_of_array-1];
    // if($imageFileextension == "glb" || $imageFileextension == "jpg" || $imageFileextension == "png"  ){ incase of additions
    if($imageFileextension == "glb"  ){
        $destination="img/3dproduct_image/";
        $fileNewName= $destination.$imageName; //hashing of the location
        if(move_uploaded_file($imageTempname,$fileNewName)){
            $filedata = $fileNewName;
            return  $filedata;
    
    
    } 

}

}