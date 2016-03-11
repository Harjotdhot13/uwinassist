<?php



 function select_qry($sql)
 {
// //$sql = "SELECT id, firstname, lastname FROM MyGuests";
 // Create connection
 
$conn = new mysqli("localhost", "root1", "root1", "Uwindsor_Assist");


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// echo "Connected successfully";
 
 $result = $conn->query($sql);
 $i=0;
 
 if ($result->num_rows > 0) {
 
 while($row[$i] = $result->fetch_assoc())
 {
 	$i++;
 }
 
 // echo $sql;
//  
//   echo "<table><tr><th>ID</th><th>Name</th></tr>";
//     // output data of each row
//     
//     while($row = $result->fetch_assoc()) {
//     
//         echo "<tr><td>".$row['BS_Id']."</td></tr>";
//     }
//     echo "</table>";
    
	return $row;
	
 } else {     
     return   "0";
 }
// // $conn->close();
// 
}

// select_qry("Select * from `banking services`");

?>