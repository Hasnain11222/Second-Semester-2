<?php
$conn = mysqli_connect("localhost","root","","forms");
 

$Name = $_POST["txtName"];
$Lastname = $_POST["txtLastname"];
$Email = $_POST["txtEmail"];
$Password = $_POST["txtPassword"];
$Age = $_POST["txtAge"];
$Address = $_POST["txtAddress"];


$query = "UPDATE `infoo` SET `Name`='$Name',`Lastname`='$Lastname',`Email`='$Email',`Password`='$Password',`Age`='$Age',`Address`='$Address' WHERE `id` = $id";

$q = mysqli_query($conn,$query);
?>
<script>
window.location.assign("showdata.php");
</script>
