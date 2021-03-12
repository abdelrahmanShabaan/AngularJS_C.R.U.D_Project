<?php  
 //insert.php  
 $connect = mysqli_connect("localhost", "root", "", "ticket_booking");  
 
 $data = json_decode(file_get_contents("php://input"));  
 
 if(count(array($data)) > 0)  
 
 {  
    $id_received = mysqli_real_escape_string($connect, $data->id_for_update);
      $name_received = mysqli_real_escape_string($connect, $data->name_for_update);       
      $phone_received = mysqli_real_escape_string($connect, $data->phone_for_update);

      $query = "UPDATE society_tour SET name = '$name_received', phone = '$phone_received' WHERE id = '$id_received'";  

  
      if(mysqli_query($connect, $query))  
      {  
           echo "Data Updates...";  
      }  
      else  
      {  
           echo 'Error';  
      }  
 }  
 ?>  
