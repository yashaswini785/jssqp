 <?php  
 //select.php  
 $connect = mysqli_connect("localhost", "root", "", "myweb");  
 $output = array();  
 $query = "SELECT * FROM mca";  
 $result = mysqli_query($connect, $query);  
 if(mysqli_num_rows($result) > 0)  
 {  
      while($row = mysqli_fetch_array($result))  
      {  
           $output[] = $row;  
      }  
      echo json_encode($output);  
 }  
 ?>  