<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'moopimisallaround.mysql.database.azure.com', 'moopim@moopimisallaround', 'PPNuro26', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL PLEASE TRY AGAIN!: '.mysqli_connect_error());
}

// $id = $_GET['id];
//$sql = 'DELETE FROM guestbook WHERE id = $ id';
$name = $_POST['name'];
$comment = $_POST['comment'];

//$sql = $sql = "DELETE FROM guestbook WHERE name='$name'";
$sql = "DELETE FROM guestbook WHERE Comment='$comment'";

if (mysqli_query($conn, $sql)) {
    header('Location: https://phpscript52.azurewebsites.net/show.php');
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>
