
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
$query = "SELECT * FROM doctb";


echo '<table style="width:50%" border="0" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">Username</font> </td> 
          <td> <font face="Arial">Email</font> </td> 
          <td> <font face="Arial">Specialist</font> </td> 
          <td> <font face="Arial">Docfee</font> </td> 
         
      </tr>';

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $Username = $row["username"];
        $Email= $row["email"];
        $Spec = $row["spec"];
        $Docfee = $row["docfee"];
        

        echo '<tr> 
                  <td>'.$Username.'</td> 
                  <td>'.$Email.'</td> 
                  <td>'.$Spec.'</td> 
                  <td>'.$Docfee .'</td> 
                   
              </tr>';
    }
    $result->free();
} 
?>
</body>
</html>