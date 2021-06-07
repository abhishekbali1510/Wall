<!-- 
$sql = "SELECT `senderId`,`content`,`created_at` FROM `message` order by `created_at` " or die(mysqli_error($con) );
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

//$conn->close(); -->
<!-- 
@foreach($datas as $data) -->

<?php 
print json_encode($data); 
// $fp = fopen('results.json', 'w');
// fwrite($fp, json_encode($data));
// fclose($fp);
// header("Location: /msg");
?>
<!-- @endforeach -->
