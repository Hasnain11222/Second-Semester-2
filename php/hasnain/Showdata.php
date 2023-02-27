<?php
$conn = mysqli_connect("localhost","root","","forms");
if(!$conn){
    echo "connextion refuse";
}
else{
    echo " connected";
}

$qurey ="select * from infoo";

$q =mysqli_query($conn,$qurey);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <table border="2px" style "width: 60px;">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Add</th>
                <th>Email</th>
                <th>Password</th>
                <th>Action</th>
</tr>
<?php error_reporting(0); while($row = mysqli_fetch_assoc($q)){ ?>
            <tr>
            <td> <?php echo $row ['ID']; ?></td>
                <td> <?php echo $row ['Name']; ?></td>
                <td> <?php echo $row ['Lastname']; ?></td>
                <td><?php echo $row ['Email']; ?></td>
                <td><?php echo $row ['Password']; ?></td>
                <td><?php echo $row ['Age'] ?></td>\
                <td><?php echo $row ['Address']; ?> </td>
                
                <td><a href ="edit.php?id=<?=$row['ID']?>">Edit</a>-
                -<a href="delet.php?id=<?=$row['ID']?>">DELETE</a></td>
</tr>
<?php }?>


        </table>
    </center>
</body>
</html>