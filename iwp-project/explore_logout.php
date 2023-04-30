<?php
    session_start();
    unset($_SESSION["name"]); //removes data that has been stored from previous requests
    unset($_SESSION["pass"]);
    echo "Thank you for visiting our site.";
    header("Location: first-page.html"); //send HTTP response by the server to the client's web browser
?>
