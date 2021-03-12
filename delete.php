 <?php  
 //delete.php  
 $connect = mysqli_connect("localhost", "root", "", "ticket_booking");  
 $data = json_decode(file_get_contents("php://input"));  

 if(count(array($data)) > 0)  
 {  
      $id = $data->send_id;  
      $query = "DELETE FROM society_tour WHERE id='$id'";  
      if(mysqli_query($connect, $query))  
      {  
           echo 'Data Deleted';  
      }  
      else  
      {  
           echo 'Error';  
      }  
 }  
 ?>  
