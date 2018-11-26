<!DOCTYPE html>
<html lang="en">
<head>
<title>Database Connection</title>
<style>
a.button {
    -webkit-appearance: button;
    appearance: button;
    text-decoration: none;
    color: initial;
	padding: 10px 20px;
    font-weight: bold;
	display:block;
	float:right;
}
</style>
</head>
<body>
<a href="xml.php" class="button">Import XML</a>
</body>
</html>

<?php
include 'db_connection.php';
 
$conn = OpenCon();

 
echo "Database Connected Successfully";

$sql = "SELECT id, country_id, title, description FROM tour";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   
    while($row = $result->fetch_assoc()) {
        echo "<div style='background:#b7b7b7'><strong>Tour ID: " . $row["id"]. " | " ." Tour Country ID : " . $row["country_id"]. "</strong><br><hr><strong><u> " . $row["title"]."</u></strong><br>" . 
			 $row["description"]."<br></div>";
			 echo "<br>";
    }
} else {
    echo "0 results";
}
 
CloseCon($conn);
 
?>
