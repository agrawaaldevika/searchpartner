<?PHP

 
	$servername="localhost";
    $username = "qwerk";
$password = "51525354";
$dbname = "SOCIALJERSY";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 ?>