<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Đăng Nhập</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<?php 
  	session_start();
  	include('opp.php');
  	$db = new Database;
  	$db->connect();
  	$kq=$db->benh_nhan();
  	//print_r($kq);
	?>

	<table class="table">
    <thead>
      <tr>
        <th>Tên</th>
        <th>Số điện thoại</th>
        <th>Địa chỉ</th>
        <th>Số CMND</th>
      </tr>
    </thead>
    <tbody>
      
      <?php 
        foreach ($kq as &$value) {
          echo '<tr>
                  <td>'.$value['name'].'</td>
                  <td>'.$value['phone'].'</td>
                  <td>'.$value['diachi'].'</td>
                  <td>'.$value['cmnd'].'</td>
                </tr>';
          }
       ?>
    </tbody>
  </table>
</body>
</html>