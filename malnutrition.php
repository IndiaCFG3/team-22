<!DOCTYPE html>  
 <html>  
      <head>  
           <title>Convert Data from Mysql to JSON Format using PHP</title>  
      </head>  
      <body>  
           <?php   
           $connect = mysqli_connect("localhost", "root", "", "eggs");  
           $sql = "SELECT * from malfinal";  
           $result = mysqli_query($connect, $sql);  
           $json_array = array();  
           while($row = mysqli_fetch_assoc($result))  
           {  
                $json_array[] = $row;  
           }   
           echo json_encode($json_array); 
           ?>  
      </body>  
 </html>  