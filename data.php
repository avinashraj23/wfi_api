<?php
$conn = mysqli_connect('localhost','root','root','m-Nutrino');

   
   if(! $conn) {
      die('Could not connect: ' . mysql_error());
   }


$query=mysqli_query($conn,"SELECT * FROM users");

if($query)
{
while($row=mysqli_fetch_array($query))
{
$flag[] = $row;
}
print(json_encode($flag));
}

mysqli_close($conn);


?>
