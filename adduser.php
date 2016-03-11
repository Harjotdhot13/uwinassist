<?php
 
 
 
 try{
 if(isset($_POST['submit']));
{
 
 $conn = new mysqli("localhost", "root1", "root1", "Uwindsor_Assist");

if ($conn->connect_error) 
{

echo("Connected error");

    die("Connection failed: " . $conn->connect_error);
} 

echo("Connected");
 //mysql_select_db("Uwindsor_Assist",$conn);
/* $sql = "INSERT INTO users(First Name, Last Name, Phone Number,Gender,Email Id,Password)

*/
$sql = "INSERT INTO users (FirstName, LastName, PhoneNumber, Gender, EmailId, Password)
VALUES ('$_POST[FirstName]','$_POST[LastName]','$_POST[PhoneNumber]','$_POST[Gender]','$_POST[EmailId]','$_POST[Password]')";


echo("SQL--->".$sql);
 //  mysql_query($sql,$conn);
 
 if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
        
        
  $conn->close();     
       
// mysqli_close($conn); */
       } 
     }catch(Exception $e) {
  echo 'Message: ' .$e->getMessage();
}


?>