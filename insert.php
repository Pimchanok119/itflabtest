<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'moopimisallaround.mysql.database.azure.com', 'moopim@moopimisallaround' , 'PPNuro26', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL PLEASR TRY AGAIN!: '.mysqli_connect_error());
}


$Product = $_POST['Product'];
$Price = $_POST['Price'];
$Amount = $_POST['Amount'];
$Total = $_POST['Price']*$_POST['Amount'];


$sql = "INSERT INTO guestbook (Product , Price , Amount , Total) VALUES ('$Product', '$Price', '$Amount', '$Total')";


if (mysqli_query($conn, $sql)) {
    header("Location: show.php");
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>
