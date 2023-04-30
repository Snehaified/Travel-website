<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <style>
      h3 {
        text-align:center;
        background: aqua;
      }
      div{
        display: flex;
justify-content: center;
      }
      body{
        background-color: #FF7F50;
      }
      .head{
        background-color: white;
        height: 50px;
      }
    </style>
  </head>
  <body>
    
      <h3> The Hotels Reviews given by users:</h3>
      <br>
      <?php
      echo "Welcome ".$_SESSION["username"];
        echo "<br>";
        ?>
      <div id="tables">
        <?php
      
        function openConnection(){
            $username = "root";
            $password = "";
            $servername = "127.0.0.1";
            $dbname = "iwp";

            $conn = mysqli_connect($servername, $username, $password, $dbname);

            if($conn)
            {
                return $conn;
            }
            else
            {
                echo ("Connection to DB failed: ".mysqli_connect_error());
            }
            }
            function closeConnection($conn){
                $conn->close();
            }

            $conn = openConnection();
            
            $sql = "select * from reviews;";


    $result = mysqli_query($conn,$sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<table border = 1>
              <tr class=\"head\">
              <th>Hotel Name</th>
              <th>From</th>
              <th>To</th>
              <th>Review</th>
              </tr>
              ";
        while($row = mysqli_fetch_array($result)){
              echo "<tr>";
              echo "<td>".$row['hotelname']."</tid>";
              echo "<td>".$row['date_from']."</tid>";
              echo "<td>".$row['date_to']."</tid>";
              echo "<td>".$row['review']."</tid>";
              echo "</tr>";
        }
            echo "</table>";
        }
        else{
            echo "No reviews yet.";
        }
        closeConnection($conn);

      
    ?>
    </div>
     <a href="adminlogout.php"><button>Log out</button></a>
  </body>
</html>
