<?php 
session_start();
session_destroy();
// echo"You'll be Re-directed shortly";
header("Location: deliveryBoy.php");
exit();
?>