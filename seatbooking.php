<?php
include('db_conn.php'); // Connect to the database

$from = $_POST['from'] ?? '';
$to = $_POST['to'] ?? '';
$date = $_POST['date'] ?? '';

if (empty($from) || empty($to)|| empty($date)) {
    echo "<script>alert('Please select From and To'); history.back();</script>";
    exit();
}

$sql = "SELECT * FROM buses WHERE source = ? AND destination = ? AND travel_date >= ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $from, $to,$date);
$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Available Buses</title>
  <style>
    body {
      font-family: 'Georgia', serif;
      background-color: #f2f2f2;
      margin: 0;
      padding: 0;
    }

    .classic-container {
      max-width: 900px;
      margin: 30px auto;
      background-color: #fff;
      border: 1px solid #ccc;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }

    .classic-title {
      text-align: center;
      font-size: 26px;
      color: #333;
      margin-bottom: 20px;
      border-bottom: 1px solid #ccc;
      padding-bottom: 10px;
    }

    .classic-table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    .classic-table th, .classic-table td {
      border: 1px solid #888;
      padding: 12px;
      text-align: center;
    }

    .classic-table th {
      background-color: #f4f4f4;
      font-weight: bold;
    }

    .classic-link a {
      padding: 6px 12px;
      background-color:  rgb(255, 166, 0);
      color: white;
      text-decoration: none;
      border-radius: 4px;
    }

    .classic-link a:hover {
      background-color:  rgba(255, 166, 0, 0.85);
    }

    .classic-message {
      text-align: center;
      color: red;
      margin-top: 20px;
      font-weight: bold;
    }
  </style>
</head>
<body>

  <div class="classic-container">
    <div class="classic-title">
      Buses from <?php echo htmlspecialchars($from); ?> to <?php echo htmlspecialchars($to); ?> (Today & Upcoming)
    </div>

    <?php if ($result->num_rows > 0): ?>
      <table class="classic-table">
        <tr>
          <th>Bus Name</th>
          <th>Departure</th>
          <th>Arrival</th>
          <th>Travel Date</th>
          <th>Action</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
          <tr>
            <td><?php echo htmlspecialchars($row['bus_number']); ?></td>
            <td><?php echo date("g:i A", strtotime($row['departure_time'])); ?></td>
            <td><?php echo date("g:i A", strtotime($row['arrival_time'])); ?></td>
            <td><?php echo htmlspecialchars($row['travel_date']); ?></td>
            <td class="classic-link">
              <a href="search.php?bus_id=<?php echo $row['id']; ?>">Book Seats</a>
            </td>
          </tr>
        <?php endwhile; ?>
      </table>
    <?php else: ?>
      <div class="classic-message">
        No buses found from <?php echo htmlspecialchars($from); ?> to <?php echo htmlspecialchars($to); ?> for today or future.
      </div>
    <?php endif; ?>
  </div>

</body>
</html>

<?php
$stmt->close();
$conn->close();
?>
