<?php
$conn = mysqli_connect("localhost","root","","forms");


echo  $id = $_GET["id"];

$query = "DELETE FROM `infoo` WHERE `id` = $id";

$q=mysqli_query($conn,$query);





?>
<script>
window.location.assign("showdata.php");
</script>

