<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Hotel</title>
    <link rel="stylesheet" href="tourist-login.css">
</head>
<body>
    
    <form action="available-hotel.php" method="post">
        <div class="container">
        <?php
        echo "Find your hotel! ".$_SESSION['name'];
        ?>
        <h1>Check Hotels</h1>
        <div class="box1">
            <form method="POST" action="bookhotel.php"><br>
                <label for="destination">Destination:</label><br>
                <input type="text" name="destination" id="destination"><br>
            
                <label for="checkin">Check-in date:</label><br>
                <input type="date" name="checkin" id="checkin"><br>
            
                <label for="checkout">Check-out date:</label><br>
                <input type="date" name="checkout" id="checkout"><br>
            
                <label for="guests">Number of guests:</label><br>
                <input type="number" name="guests" id="guests"><br>
            
                <input type="submit" value="Show Hotels"><br>
            </form>
      </form>
    </div>
    <div class="signup">
        <a href="explore.php">Explore More</a>
      </div>
</div>
    
      
</body>
</html>