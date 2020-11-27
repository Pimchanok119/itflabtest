<html>
<head>
<title>˗ˏˋITF LABˎˊ˗</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  p.ex1 {
    margin-top: 25px;
  }
  </style>
</head>
<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'moopimisallaround.mysql.database.azure.com', 'moopim@moopimisallaround', 'PPNuro26', 'itflab', 3306);
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
  <table width="1200" border="1" class="table table-dark table-striped" class="center" class="ex1">
    <tr class="info">
      <th width="500"> <div align="center">ชื่อสินค้า</div></th>     
      <th width="500"> <div align="center">ราคาต่อหน่วย</div></th>
      <th width="500"> <div align="center">จำนวน</div></th>    
      <th width="500"> <div align="center">ราคาทั้งหมด</div></th>
      <th width="200"> <div align="center">การจัดการ</div></th>
    </tr>
  <?php
  while($Result = mysqli_fetch_array($res))
  {
  ?>
    <tr>
      <td><center><?php echo $Result['Product'];?></center></td>     
      <td><center><?php echo $Result['Price'];?></center></td>  
      <td><center><?php echo $Result['Amount'];?></center></td>
      <td><center><?php echo $Result['Total'];?></center></td>
    </tr>                     
  <?php
  }
  ?>
  </table>
  <?php
  mysqli_close($conn);
  ?>
</div>
</body>
</html>
