<html>
<head>
<title>˗ˏˋITF LABˎˊ˗</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'moopimisallaround.mysql.database.azure.com', 'moopim@moopimisallaround' , 'PPNuro26', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL PLEASE TRY AGAIN !: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM guestbook');
?>

<div class="container">
    <div class="form">
        <p class="ex1"><h1><center>DePaRtMeNt StOrE=͟͟͞͞♡</center></h1></p>
    </div>
  <table width="1200" border="1" class="table table-dark table-hover table-striped" class="center" >
    <thead class="thead-dark">
    <tr class="active">
      <th width="500"> <div align="center">ชื่อสินค้า</div></th>
      <th width="500"> <div align="center">ราคาต่อหน่วย</div></th>
      <th width="500"> <div align="center">จำนวน</div></th>
      <th width="500"> <div align="center">ราคาทั้งหมด</div></th>
      <th width="200"> <div align="center">Action</div></th>
    </tr>
     </thead>
  <?php
  $sum = 0;
  while($Result = mysqli_fetch_array($res))
  {
  ?>
    <tr>
      <td><center><?php echo $Result['Product'];?></center></td>
      <td><center><?php echo $Result['Price'];?></center></td>
      <td><center><?php echo $Result['Amount'];?></center></td>
      <td><center><?php echo $Result['Total'];?></center></td>
       <td><?php echo '<a href="delete.php?id='.$Result['ID'].'">
        Delete</a>'?></td>
    </tr>
  <?php
  }
  ?>
  </table>
  <center><a href="forminsert.html"><input type="submit" value="ADD" class="btn-default btn-sm"></a></center>
  <?php
  mysqli_close($conn);
  ?>
</div>
</body>
</html>
