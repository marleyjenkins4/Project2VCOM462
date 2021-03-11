<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

            // Create connection
            $conn = new mysqli("localhost","u792692359_hiker","Hiker123","u792692359_Hyke");
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            
            $sql = "SELECT id, name, miles, difficulty, avgtime, address, lat, lng FROM Trails";
            $result = $conn->query($sql);   

// then build your output...
while($row = mysqli_fetch_array($result)) {
    $output[] = array (
        "id" => $row['id'],
        "name" => $row['name'],
        "miles" => $row['miles'],
        "difficulty" => $row['difficulty'],
        "avgtime" => $row['avgtime'],
        "address" => $row['address'],
        "lat" => $row['lat'],
        "lng" => $row['lng']
    );
}
echo json_encode($output);
?>