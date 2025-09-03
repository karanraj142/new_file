<?php
include('db_conn.php');

$id    = $_POST['id'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];


$qry = "UPDATE `registraion` 
        SET `fname`='$fname', `lname`='$lname', `email`='$email' 
        WHERE `id`='$id'";

$res = mysqli_query($conn, $qry);


if ($res) {
    echo "<script>
            alert('Updated successfully');
            window.location = 'admin_user.php';
          </script>";
} else {
    echo "Update failed: " . mysqli_error($conn);
}
?>
