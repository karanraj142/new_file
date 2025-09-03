<?php
include('db_conn.php');

$id = (int)($_GET['id'] ?? 0);
$result = $conn->query("SELECT * FROM bookingdetails WHERE id = $id LIMIT 1");
$row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Bus Ticket</title>
  <style>
    body {
      font-family: 'Arial', sans-serif;
      background-color: #f8f8f8;
      margin: 0;
      padding: 20px;
    }

    .ticket {
      width: 400px;
      margin: auto;
      background-color: white;
      padding: 20px;
      border: 1px dashed;
      border-radius: 10px;
      box-shadow: 0px 4px 8px rgba(0,0,0,0.1);
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
      font-size: 24px;
    }

    .row {
      display: flex;
      justify-content: space-between;
      margin: 8px 0;
    }

    .label {
      font-weight: bold;
    }

    .print-btn {
      display: block;
      margin: 20px auto 0;
      background-color: #efe415ff;
      color: black;
      border: none;
      padding: 10px 20px;
      font-size: 16px;
      cursor: pointer;
      border-radius: 5px;
    }

    .print-btn:hover {
      background-color: #218837a9;
    }

    @media print {
      .print-btn {
        display: none;
      }
    }
  </style>
</head>
<body>

<div class="ticket">
  <h2>🚌 Bus Ticket</h2>

  <div class="row"><span class="label">Name:</span><span><?= htmlspecialchars($row['name']) ?></span></div>
  <div class="row"><span class="label">Phone:</span><span><?= htmlspecialchars($row['phone']) ?></span></div>
  <div class="row"><span class="label">Gender:</span><span><?= htmlspecialchars($row['gender']) ?></span></div>
  <div class="row"><span class="label">Seats:</span><span><?= htmlspecialchars($row['seats']) ?></span></div>
  <div class="row"><span class="label">Bus ID:</span><span><?= htmlspecialchars($row['bus_id']) ?></span></div>
  <div class="row"><span class="label">Booked On:</span><?php
$formattedTime = date("d-m-Y h:i A", strtotime($row['booking_time']));
?>
<span><?= htmlspecialchars($formattedTime) ?></span>
</span></div>

  <button class="print-btn" onclick="window.print()"> Print Ticket</button>
</div>

</body>
</html>
