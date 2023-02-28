
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    
    <title>Admin</title>
</head>
<body>
   
<?php
require("./nav.php");
?>
    <section class="home">
        <div class="text">Welcome Admin!
        <div class ="Manage">
             Item list<br> 
             <?php
 require("connect_testDb.php");
 if ( mysqli_connect_errno() ) {
   exit('Failed to connect to MySQL: ' . mysqli_connect_error());
  }
 
 $query = "SELECT * FROM itemsavailable";

if ($result = $con->query($query)) {
while ($row = $result->fetch_assoc()) {
$field1name = $row["item_name"];
$field2name = $row["item_availability"];

echo '<tr> 
<td>'.$field1name.'</td> 
<td>'.$field2name.'</td> 
</tr>';
}
$result->free();
} 
?>
  

              

       </div>

    </section>

   

</body>
</html>
