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
    <link rel="stylesheet" href="tourist-signup.css">
</head>
<body>
    
    <form action="book.php" method="POST">
        <div class="D1">

        <?php
        echo "Welcome to Hotel Booking! ".$_SESSION['name'];
        ?>
            <h1>Book Hotel</h1>
            <div class="box1">
		<label for="name">Name:</label><br>
		<input type="text" name="tname" required><br>

		<label for="username">Email:</label><br>
		<input type="email" name="username" id="username" required><br>

        <label for="hotel">Hotel Name</label><br>
        <input type="text" name="hotel" id="hotel" required><br>

        
        <label for="destination">Destination</label><br>
        <input type="text" name="destination" id="destination" required><br>

		<label for="checkin">Check-In Date:</label><br>
		<input type="date" name="checkin" required><br>

		<label for="checkout">Check-Out Date:</label><br>
		<input type="date" name="checkout" required><br>

		<label for="guests">Number of Guests:</label><br>
		<input type="number" name="guests" min="1" max="10" value="1" required onchange="calculatePrice()"><br>

		<label for="price">Price per Night:</label><br>
		<span id="price-per-night">$100</span><br>
        <input type="hidden" name="price" id="price-per-night-hidden" value="100"><br>

		<label for="total">Total Price:</label><br>
		<span id="total-price">$100</span><br>

		<input type="submit" value="Book Now">
    </div>
    <div class="signup">
        <a href="explore.php">Explore More</a>
      </div>
</div>
    
	</form>

	<script>
		function calculatePrice() {
			var guests = document.getElementsByName("guests")[0].value;
			var price = 100; // Default price per night
			if (guests > 1 && guests <= 5) {
				price = 150;
			} else if (guests > 5 && guests <= 10) {
				price = 200;
			}
			document.getElementById("price-per-night").innerHTML = "$" + price;
			// Date object in js gives answer in milliseconds
            document.getElementById("price-per-night-hidden").value = price * (Math.round((new Date(document.getElementsByName("checkout")[0].value) - new Date(document.getElementsByName("checkin")[0].value))/(1000*60*60*24)) || 1) * guests;; 
			document.getElementById("total-price").innerHTML = "$" + price * (Math.round((new Date(document.getElementsByName("checkout")[0].value) - new Date(document.getElementsByName("checkin")[0].value))/(1000*60*60*24)) || 1) * guests;
		}
	</script>
    
   
      
</body>
</html>