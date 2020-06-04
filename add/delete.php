
<?php
extract($_REQUEST);
include('db.php');

$sql=mysqli_query($con,"select * from mca where id='$del'");
$row=mysqli_fetch_array($sql);

unlink("files/$row[name]");

mysqli_query($con,"delete from mca where id='$del'");

header("Location:index.php");

?>