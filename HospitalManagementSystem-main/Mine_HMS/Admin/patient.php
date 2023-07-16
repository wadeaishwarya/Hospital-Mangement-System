
<!DOCTYPE HTML>
<html>
<style>
table, th, td {
  border:1px solid black;
}
</style>
<body>
<?php 
//include 'database.php';
 $username = "root"; 
 $password = "1234"; 
 $database = "hospital"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT * FROM patient";


echo '<table style="width:50%" border="0" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">FristName</font> </td> 
          <td> <font face="Arial">LastName</font> </td> 
          <td> <font face="Arial">Gender</font> </td> 
          <td> <font face="Arial">Email</font> </td> 
         
      </tr>';

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $Firstname = $row["Firstname"];
        $LastName = $row["Lastname"];
        $Gender = $row["Gender"];
        $Email = $row["Email"];
        

        echo '<tr> 
                  <td>'.$Firstname.'</td> 
                  <td>'.$LastName.'</td> 
                  <td>'.$Gender.'</td> 
                  <td>'.$Email .'</td> 
                   
              </tr>';
    }
    $result->free();
} 
?>
</body>
</html>