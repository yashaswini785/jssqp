
<?php
extract($_REQUEST);
include('db.php');

$sql=mysql_query("select * from mca where id='$del'");
$row=mysql_fetch_array($sql);

unlink("files/$row[name]");

mysql_query("delete from mca where id='$del'");

header("Location:index.php");

?>