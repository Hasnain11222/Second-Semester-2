<?php
$conn = mysqli_connect("localhost","root","","forms");

$id = $_GET['id'];
$query = "select * from infoo where id = '$id'";
$row = mysqli_fetch_assoc(mysqli_query($conn,$query));
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<link rel="stylesheet" href="style.css">
</head>

<body>



<form action = "index.php" method = "post">

<div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">ID</label>
          <input type="text" value ="<?= $row['ID'] ?>"  class="form-control" id="exampleInputPassword1">
        </div>



        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Name</label>
          <input type="text" value ="<?= $row['Name'] ?>"  name = "txtName"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

          <div id="emailHelp" class="form-text"></div>
        </div>

        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Lastname</label>
          <input type="text" value ="<?= $row['Lastname'] ?>" name = "txtLastname" class="form-control" id="exampleInputPassword1">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Email</label>
            <input type="text" value ="<?= $row['Email'] ?>" name = "txtEmail" class="form-control" id="exampleInputPassword1">
          </div>
  


          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" value ="<?= $row['Password'] ?>" name = "txtPassword" class="form-control" id="exampleInputPassword1">
          </div>
  
          
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Age</label>
            <input type="text"  value ="<?= $row['Age'] ?>" name = "txtAge" class="form-control" id="exampleInputPassword1">
          </div>



          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Address</label>
            <input type="text" value ="<?= $row['Address'] ?>" name = "txtAddress" class="form-control" id="exampleInputPassword1">
          </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>




</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</html>
