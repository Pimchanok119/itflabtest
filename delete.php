<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'moopimisallaround.mysql.database.azure.com', 'moopim@moopimisallaround' , 'PPNuro26', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL PLEASE TRY AGAIN: '.mysqli_connect_error());
}

$id = $_GET['id'];
$sql = "DELETE FROM guestbook WHERE id = '$id'";



if (mysqli_query($conn, $sql)) {
    echo "Success " . $sql . "<br>" . mysqli_error($conn);
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>
