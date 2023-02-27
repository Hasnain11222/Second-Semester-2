<?php
include_once("conn.php");
include_once("navbar.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard </title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
<body>
<div class="container mt-4 m ">
<h1>Dashboard</h1>
<h3>Testimonial</h3>
<a href="addtestimonial.php">
<button class="btn btn-primary">ADD USER</button></a>
<br>
<br>
<br>
<br>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    
</body>
</html>








  
<table id="datatablesSimple" class = "he" >
    <thead>
    <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Descriptaion</th>
            <th>courses</th>
            <th>Picture</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Descriptaion</th>
            <th>courses</th>
            <th>Picture</th>

        </tr>
    </tfoot>
    <tbody>

    <?php
    include_once("conn.php");
            $query = "SELECT * FROM `testimonial`";
            $result = mysqli_query($conn,$query);  
            if(mysqli_num_rows($result)){
                    while($row = mysqli_fetch_array($result)){

    ?>

        <tr>
            <td><?php echo $row[0];?></td>
            <td><?php echo $row[1];?></td>
            <td><?php echo $row[2];?></td>
            <td><?php echo $row[3];?></td>
         <td><img src="./courses2/<?php echo $row[4];?>" width="200px";></td> 

        </tr>
        <?php

        }
        }                                     
        ?>

    </tbody>




</table>
