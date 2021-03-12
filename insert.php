 <?php  
 //insert.php  
 $connect = mysqli_connect("localhost", "root", "", "ticket_booking");  
 
 $data = json_decode(file_get_contents("php://input"));  
 
 if(count(array($data)) > 0)  
 
 {  
      $name_received = mysqli_real_escape_string($connect, $data->send_name);       
      $phone_received = mysqli_real_escape_string($connect, $data->send_phone);
      $status_received = mysqli_real_escape_string($connect, $data->send_status);
      $btnname_received = mysqli_real_escape_string($connect, $data->send_btnName);
     
   
	  if($btnname_received == 'ADD'){
      $query = "INSERT INTO society_tour(name, phone, status) VALUES ('$name_received', '$phone_received','$status_received')";  
      if(mysqli_query($connect, $query))  
      {  
           echo "Data Inserted...";  
      }  
      else  
      {  
           echo 'Error';  
      }  
     }



     if($btnname_received == 'Update'){
          $id_received = mysqli_real_escape_string($connect, $data->send_id);

          $query = "UPDATE society_tour SET name = '$name_received', phone = '$phone_received', status = '$status_received' WHERE id = '$id_received'";  

  
          if(mysqli_query($connect, $query))  
          {  
               echo 'Data Updated';  
          }  
          else  
          {  
               echo 'Error';  
          }  
     }




 }  
 ?>  
