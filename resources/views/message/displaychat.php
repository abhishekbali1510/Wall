<?php

require 'common.php';


$sql = "SELECT `name`,`msg`,`time` FROM `user` order by `time` " or die(mysqli_error($con) );
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    
  // output data of each row
   $data = array();
  while($row = $result->fetch_assoc()) {
   // echo "msg: " . $row["msg"]. "<br>";
   $data[] = $row;

  }
} else {
  echo "0 results";
}
echo json_encode($data);
//echo "<script>console.log($data);</script>"

//$conn->close();
?>