<?php
    $name="";
    $pass="";
    if(isset($_POST['submit']))
    {
        
        $name = $_POST['email'];
        $pass = $_POST['pswd'];
    }
    
    include "connection.php";
   
       $sql = "SELECT * FROM tourist_details WHERE Email = '$name' AND psw =
       '$pass'";
       $result = mysqli_query($conn, $sql);
       if( mysqli_num_rows($result) > 0)
       {   
          $row  = mysqli_fetch_array($result);
           session_start();
           $_SESSION["name"] = $row['Email'];
           $_SESSION["pass"] = $row['psw'];
           header("Location: explore.php");
           echo "User exists";
       }
       else
       {
           echo "Invalid Credentials";
       }
       mysqli_close($conn);
       
       
   ?>