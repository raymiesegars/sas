<?php
require_once('../../private/initialize.php'); 

echo "<h1>Stub for Create Salamander</h1>";

if (is_post_request()) {
    $salamanderName = $_POST['salamanderName'];
    echo "Salamander Name: $salamanderName<br>";
} else {
    redirect_to(url_for('/salamanders/new.php'));
}
?>
