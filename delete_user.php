<?php
include('db_conn.php');

if (!isset($_GET['id']) || !ctype_digit($_GET['id'])) {
    die("Invalid or missing ID.");
}

$id = (int) $_GET['id'];  // safe casting to integer

$qry = "DELETE FROM registraion WHERE id = $id";
$res = mysqli_query($conn, $qry);

if ($res) {
    echo "<script>
            alert('Deleted successfully');
            window.location = 'admin_user.php';
          </script>";
} else {
    die("Delete failed: " . mysqli_error($conn));
}
exit;
?>
