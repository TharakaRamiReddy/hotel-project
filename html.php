  <!DOCTYPE html>
  <html>
  <head>
    <h1 align=center>BOOKING PAGE</h1>
  	<title>table with data base</title>   
     <style type="text/css">
      table {
        border-collapse: collapse;
        width: 100%;
        color: lightblue;
        font-family: monospace;
        font-size: 20px;
        text-align: left;
      }
      th{
        background-color: lightgreen;
        color: white;
      }
      tr:nth-child(even).{background-color: #2f2f2}
    </style>

  </head>
  <body>
  <table>
  	<tr>
  		<th>fullname</th>
  		<th>emailid</th>
  		<th>phonenumber</th>
  		<th>datefrom</th>
  		<th>dateto</th>
  	</tr>
  	<?php
$conn=mysqli_connect("localhost","root","","project");
    if (mysqli_connect_errno($conn))
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }

      $sql = "SELECT fullname,email,phonenumber,datefrom,dateto from stay2";
      $result = $conn-> query($sql);
      if ($result->num_rows > 0) {
      	while ($row=$result->fetch_assoc()) {
      		echo "<tr><td>". $row["fullname"] ."</td><td>". $row["email"] ."</td><td>". $row["phonenumber"] ."</td><td>". $row["datefrom"] ."</td><td>". $row["dateto"] ."</td></tr>";
      	}
      echo "</table";
      }
else{
	echo "0 result";
}
$conn-> close();
  	?>
  </table>
  </body>
  </html>