 <?php  
 //select.php  
 $connect = mysqli_connect("localhost", "root", "", "mcaproject");  
 $output = array();  
 $query = "SELECT * FROM hod";  
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