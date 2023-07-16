
<!DOCTYPE html>
<html>
<style>
table, th, td {
  border:1px solid black;
}
</style>
<body>

<form method="post" action="procbb.php">

	<table style="width:50%">
    <tr>
    <td>Your Name:</td>
    <td><input type="text" name="uname" placeholder="Enter your name(First name)"><br><br></td> 
  </tr>
  <tr>
    <td>Your Email:</td>
    <td><input type="text" name="email" placeholder="Enter your email"><br><br></td> 
  </tr>
  <tr>
    <td>Doctors:</td>
    <td>
      <select id="doc" name="doc">
    <option value="ashok">ashok</option>
    <option value="suraj">suraj</option>
    <option value="ramesh">ramesh</option>
    <option value="nitin">nitin</option>
    </select><br><br></td> 
  </tr>
   <tr>
    <td>Consultancy Fees:</td>
    <td><input type="text" name="fee" placeholder="Enter fee"><br><br></td>
  </tr> 
   <tr>
    <td>Date:</td>
    <td><input type="text" name="date" placeholder="Enter date"><br><br></td>
  </tr>
   <tr>
    <td>Time:</td>
    <td><input type="text" name="time" placeholder="Enter time"><br><br></td>
  </tr>
 </table>
 <br>
 <center>

 <button type="submit" name="submit" value="submit" >Submit</button>
</center>
</form>
</center>
</body>
</html>