<?php
include('db_conn.php');
session_start();

$name   = $_POST['name']   ?? '';
$phone  = $_POST['phone']  ?? '';
$gender = $_POST['gender'] ?? '';
$bus_id = $_POST['bus_id'] ?? '';
$price  = $_POST['price']  ?? '';
$seats  = $_POST['seats']  ?? [];   
$confirm = $_POST['confirm'] ?? 'no';

if (empty($name) || empty($phone) || empty($gender) || empty($bus_id) || empty($seats)) {
    echo "<script>alert('All fields and at least one seat must be selected.'); history.back();</script>";
    exit();
}

$alreadyBooked = [];
$conflictSeats = [];

foreach ($seats as $seat) {
    $seat = (int)$seat;

    $result = $conn->query("SELECT gender FROM bookingdetails 
                             WHERE FIND_IN_SET($seat, seats) AND bus_id = $bus_id");
    if ($result && $result->num_rows > 0) {
        $alreadyBooked[] = $seat;
        continue;
    }

    $adjacentSeats = [$seat - 1, $seat + 1];
    foreach ($adjacentSeats as $adjSeat) {
        if ($adjSeat >= 1 && $adjSeat <= 30) {
            $adjResult = $conn->query("SELECT gender FROM bookingdetails 
                                        WHERE FIND_IN_SET($adjSeat, seats) AND bus_id = $bus_id");
            if ($adjResult && $adjResult->num_rows > 0) {
                $adjRow = $adjResult->fetch_assoc();
                if ($adjRow['gender'] !== $gender) {
                    $conflictSeats[] = $seat;
                }
            }
        }
    }
}

if ($alreadyBooked) {
    $seatsList = implode(', ', $alreadyBooked);
    echo "<script>alert('The following seats are already booked: $seatsList'); history.back();</script>";
    exit();
}

if ($conflictSeats && $confirm !== 'yes') {
    $conflictList = implode(', ', $conflictSeats);
    echo "<form id='confirmForm' method='post' action=''>";
    foreach (['name','phone','gender','bus_id'] as $field) {
        echo "<input type='hidden' name='$field' value='".htmlspecialchars($$field, ENT_QUOTES)."'>";
    }
    foreach ($seats as $s) {
        echo "<input type='hidden' name='seats[]' value='$s'>";
    }
    echo "<input type='hidden' name='price' value='".htmlspecialchars($price, ENT_QUOTES)."'>
          <input type='hidden' name='confirm' value='yes'>
          <script>
              if (confirm('Seats $conflictList are next to opposite gender. Do you want to continue?')) {
                  document.getElementById(\"confirmForm\").submit();
              } else {
                  alert('Booking cancelled.');
                  history.back();
              }
          </script></form>";
    exit();
}

// ✅ convert seats array to string
$seatString = implode(',', $seats);

// ✅ Only one insert
$stmt = $conn->prepare(
    "INSERT INTO bookingdetails (name, phone, gender, seats, bus_id, price)
     VALUES (?, ?, ?, ?, ?, ?)"
);
if (!$stmt) {
    die("Prepare failed: " . $conn->error);
}

$stmt->bind_param("ssssii", $name, $phone, $gender, $seatString, $bus_id, $price);
$stmt->execute();
$booking_id = $conn->insert_id;

$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Seat Booked Successfully</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body{
      background:#f9f7f4;
      font-family:'Georgia',serif;
      display:flex;
      align-items:center;
      justify-content:center;
      height:100vh;margin:0;
    }
    .success-container{
      text-align:center;background:#fff;padding:40px;
      border-radius:12px;box-shadow:0 10px 25px rgba(0,0,0,.1);
      animation:fadeIn 1s ease-out;
    }
    .checkmark-circle{
      width:100px;height:100px;border-radius:50%;
      background:#c8e6c9;margin:0 auto 20px;position:relative;
    }
    .checkmark{
      display:block;width:30px;height:60px;
      border-bottom:6px solid rgb(255,166,0);
      border-right:6px solid rgb(255,166,0);
      transform:rotate(45deg);position:absolute;top:18px;left:32px;
      animation:drawCheck .6s ease-out forwards;
    }
    h1{font-size:28px;color:#2e7d32;margin:10px 0}
    p{font-size:16px;color:#555;margin-bottom:30px}
    .btn{
      display:inline-block;padding:12px 25px;
      background:rgb(255,166,0);color:#fff;text-decoration:none;
      font-size:16px;border-radius:6px;transition:.3s;
    }
    .btn:hover{background:#ff9f00}
    @keyframes drawCheck{
      0%{height:0;width:0}50%{height:60px;width:0}100%{height:60px;width:30px}
    }
    @keyframes fadeIn{
      from{opacity:0;transform:translateY(20px)}
      to{opacity:1;transform:translateY(0)}
    }
  </style>
</head>
<body>
  <div class="success-container">
    <div class="checkmark-circle"><div class="checkmark"></div></div>
    <h1>Seat Booked Successfully!</h1>
    <p>Thank you for your booking.</p>
    <a href="ticket.php?id=<?php echo $booking_id; ?>" class="btn">View Ticket</a>
  </div>
</body>
</html>
