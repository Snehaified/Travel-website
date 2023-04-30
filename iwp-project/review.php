<?php
    $name="";
    $rate="";
    if(isset($_POST['submit']))
    {
        $name = $_POST['hname'];
        $date_from = $_POST['date_from'];
        $date_to = $_POST['date_to'];
        $rating = $_POST['rating'];
    }
    
    include "connection.php";
   
       $sql = "SELECT * FROM hotel_register WHERE hotel_name = '$name'";
       $result = mysqli_query($conn, $sql);
       $check = mysqli_fetch_array($result);
       if(isset($check)){
        $sql2 = "INSERT INTO review VALUES ('$name','$date_from','$date_to','$rating')";
        if(mysqli_query($conn,$sql2)){
            echo "Thank You For Your Review!";
            header("Refresh: 3; URL=explore.php"); //Refreshes the php page after 3 seconds
        }
        else{
            echo "Error updating rating";
        }

       }
       else {
        echo '<h1>Hotel doesnot exist.</h1>';
       }
    
    
?>