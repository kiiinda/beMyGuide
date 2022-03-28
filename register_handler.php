<?php
require_once "db_con.php";

//Check if sign up btn has been clicked
if(isset($_POST['reg-btn'])){
    //start receiving data 
    $name = $_POST['name'];
    $username = $_POST['u_name'];
    $idNum = $_POST['u_id_num'];
    

}

    $sql = "INSERT INTO `register`(`id`, `name`, `username`, `id_num`)
     VALUES ('','$name','$username', '$idNum' )";
    
    $qry = mysqli_query($con, $sql);

     if(isset($qry)){
        header(header:"location:login.php");
         }
     else{
         die('ERROR!!!Details not inserted');
     }
     
    