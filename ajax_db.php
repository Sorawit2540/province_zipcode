<?php

		  $con= mysqli_connect("localhost","root","123456","testdata") or die("Error: " . mysqli_error($con));
          mysqli_query($con, "SET NAMES 'utf8' ");
          error_reporting( error_reporting() & ~E_NOTICE );
          date_default_timezone_set('Asia/Bangkok');  


  if (isset($_POST['function']) && $_POST['function'] == 'provinces') {
  	$id = $_POST['id'];
  	$sql = "SELECT * FROM amphures WHERE province_id='$id'";
  	$query = mysqli_query($con, $sql);
  	echo '<option value="" selected disabled>-กรุณาเลือกอำเภอ-</option>';
  	while($result=mysqli_fetch_array($query,MYSQLI_ASSOC)){
  		echo '<option value="'.$result['id'].'">'.$result['name_th'].'</option>';
  		
  	}
  }


if (isset($_POST['function']) && $_POST['function'] == 'amphures') {
    $id = $_POST['id'];
    $sql = "SELECT * FROM districts WHERE amphure_id='$id'";
    $query = mysqli_query($con, $sql);
    echo '<option value="" selected disabled>-กรุณาเลือกตำบล-</option>';
    while($result2=mysqli_fetch_array($query,MYSQLI_ASSOC)){
      echo '<option value="'.$result2['id'].'">'.$result2['name_th'].'</option>';
      
    }
  }

  if (isset($_POST['function']) && $_POST['function'] == 'districts') {
    $id = $_POST['id'];
    $sql = "SELECT * FROM districts WHERE id='$id'";
    $query3 = mysqli_query($con, $sql);
    $result = mysqli_fetch_assoc($query3);
    echo $result['zip_code'];
    exit();
  }
?>