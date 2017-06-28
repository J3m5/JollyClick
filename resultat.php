  <?php
$servername = "localhost";
$username = "root";
$password = "admin";
$dbname = "JollyClick";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, firstname FROM liked_skills";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["ID_likedskills"]. " - Name: " . $row["ID_porteur"]. " " . $row["ID_skill"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>