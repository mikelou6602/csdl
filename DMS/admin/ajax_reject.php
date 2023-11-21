<?php

include("../include/connection.php");

$id = $_POST['id'];

$querry = "UPDATE doctors SET status = 'Rejected' WHERE id='$id'";

mysql_query($connect,$querry);

?>