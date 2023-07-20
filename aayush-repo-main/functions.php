<?php

function getRefineryDetails($refineryId) {
    global $conn;
    $sql = "SELECT * FROM refineries WHERE id = $refineryId";
    $result = mysqli_query($conn, $sql);
    $refineryDetails = mysqli_fetch_assoc($result);
    return $refineryDetails;
}


function sanitizeInput($data) {
    global $conn;
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    $data = mysqli_real_escape_string($conn, $data);
    return $data;
}
