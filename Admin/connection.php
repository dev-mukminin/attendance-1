<?php
header('Content-Type: application/json');

$conn = new mysqli("localhost", "root", "", "attendance");
$result = $conn->query("SELECT * FROM dekanat");
$data = [];

while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

$conn->close();

echo json_encode($data);
