<?php
include('db_conn.php');


if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // pull & sanitise
    $name    = trim($_POST['name']    ?? '');
    $phone   = trim($_POST['phone']   ?? '');
    $message = trim($_POST['message'] ?? '');

    // simple required‑field check (HTML has required too)
    if ($name && $phone && $message) {

       $sql  = "INSERT INTO complaint (`name`,`phone_no`,`message`) VALUES (?,?,?)";
$stmt = $conn->prepare($sql);
if (!$stmt) { die("Prepare failed: (" . $conn->errno . ") " . $conn->error); }

$stmt->bind_param("sss", $name, $phone, $message);
if ($stmt->execute()) {
    echo "<script>alert(' Complaint submitted successfully.');window.location='contact.php';</script>";
} else {
    echo "<script>alert(' Insert failed: ".$stmt->error."');</script>";
}
    
}
}
?>