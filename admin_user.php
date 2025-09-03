<?php
include('db_conn.php');

$qry = "select * from registraion" ;
$res = mysqli_query($conn,$qry);



?>

        <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Admin Dashboard</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Arial, sans-serif;
    }

    body {
      display: flex;
      min-height: 100vh;
      background-color: #f4f4f4;
    }

    .sidebar {
      width: 220px;
      background-color:rgba(235, 207, 65, 0.75);
      color: white;
      flex-shrink: 0;
      display: flex;
      flex-direction: column;
    }

    .sidebar h2 {
      padding: 20px;
      text-align: center;
      background-color:rgba(198, 190, 46, 0.87);
    }

    .sidebar a {
      padding: 15px 20px;
      text-decoration: none;
      color: black;
      display: block;
    }

    .sidebar a:hover {
      background-color:rgb(243, 236, 112);
    }

    .main {
      flex-grow: 1;
      padding: 20px;
    }

    .navbar {
      background-color: white;
      padding: 10px 20px;
      border-bottom: 1px solid #ccc;
    }

    .cards {
      display: flex;
      gap: 20px;
      margin-top: 20px;
      flex-wrap: wrap;
    }

    .card {
      background-color: white;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
      flex: 1;
      min-width: 200px;
    }

    .card h3 {
      margin-bottom: 10px;
      font-size: 18px;
    }

    .table-section {
    margin-top: 0px;
    background-color: white;
    padding: 20px;
    width: 84%;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 10px;
    }

    table th, table td {
      padding: 10px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    table th {
      background-color: #f0f0f0;
    }
    .btn-primary {
  background-color: #007bff;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 4px;
  font-size: 16px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.btn-primary:hover {
  background-color: #0056b3;
}
  </style>
</head>
<body>

  <div class="sidebar">
    <h2>Admin Panel</h2>
    <a href="admin_page.php">Dashboard</a>
    <a href="admin_user.php">Users</a>
    <a href="booking.php">Bookings</a>
    <a href="complaint.php">complaint</a>
    <a href="log_out.php">Logout</a>
  </div>



    <div class="table-section">
        <div id="layoutSidenav">
<div id="layoutSidenav_content">
	<main>
           <div class="card mb-4">
                            <div class="card-header">
                                <form action=add_user.php method="post">
                                <i class="fas fa-table me-1"></i>
                                DataTable Example
                                <style>
                                    .card-header > input {
                                        margin-left: 74%;
                                    }
                                </style>
                               
                                <input type="submit" name="Add" value="Add User "  class="btn btn-primary" >
                                </form>

                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>F_Name</th>
                                            <th>L_Name</th>
                                            <th>Email</th>
                                         
                                        </tr>
                                    </thead>
                                    <tbody>
                                    
                                    	<?php 
                                    	$sno = 1;
                                    	while($res_arr=mysqli_fetch_array($res)) {
								        echo '<tr><td>' .$sno. '</td>' ;
								        echo '<td>' .$res_arr['fname']. '</td>' ;
                                        echo '<td>' .$res_arr['lname']. '</td>' ;
								        echo '<td>' .$res_arr['email']. '</td>' ;
								        echo '<td><a href="edit_user.php?id='.$res_arr['id'] .'">Edit</a> | <a href="delete_user.php?id='.$res_arr['id'].'">Delete</a></td></tr>';

								        $sno ++;
										 }?>
										</tbody>
            
			                      </table>
                            </div>
                        </div>
                    </main>
                    
            </div>
        </div>





      
  </div>

</body>
</html>