<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// 1.create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//2.query
$sql = "SELECT message_id , title_message FROM messages
WHERE `deleted` = FALSE;";
$result = $conn->query($sql);
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
    $table = $result->fetch_all(MYSQLI_ASSOC);
    echo json_encode($table);
}
else{
    echo "پیدا نشد";
}



//3.close conection
mysqli_close($conn);
?>