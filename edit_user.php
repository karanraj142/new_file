<?php

include ('db_conn.php');
$res_arr=$_GET['id'];
$qry = "select * from registraion where id='$res_arr'";
$res = mysqli_query($conn,$qry);
$res_arr = mysqli_fetch_array($res);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>editpage</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        .section-title {
  font-size: 24px;
  font-weight: bold;
  color: #007bff; /* classic blue */
  border-left: 5px solid #007bff;
  padding-left: 10px;
  margin-bottom: 20px;
  text-transform: uppercase;
  letter-spacing: 1px;
}
.section-title:hover {
  color: #0056b3;
  background-color: #f0f8ff; /* very light blue */
}

.regist {
    width: 44%;
    height: 538px;
    background-color: white;
    float: left;
    border-radius: 25px;
    box-shadow: 10px 10px 12px #7e7b7bfa;
    margin: 4px 0px 0px 423px;
}

        </style>
</head>
<body>
    
</body>
</html>
<div class="new_user">
    <h3 class="section-title">Edit User</h3>
                 <div class="regist">

                    <form class="form" method="post" action="edit_pro_user.php" >
                         <label for="name" class="f_name">First Name </label><br><br>
                          <input class="f_name_1" id="inputName" type="text" placeholder="Enter your name"  name="fname" value="<?php echo  $res_arr['fname'] ;?>"  /><br><br>
                         <label for="name" class="f_name">Last Name </label><br><br>
                           <input class="f_name_1" id="inputName" type="text" placeholder="Enter your name"  name="lname" value="<?php echo  $res_arr['lname'] ;?>"  /><br><br>
                         <label for="email" class="f_name">Email </label><br><br>
                          <input class="f_name_1" id="inputName" type="text" placeholder="Enter your email"  name="email" value="<?php echo  $res_arr['email'] ;?>"  /> <br><br><br>
                          <input type="hidden" name="id" value="<?php echo  $res_arr['id'];?>">
                         <input  class="button_1" type="submit" value="Submit" >  <br><br><br>
                         <input  class="button_1" type="reset" value="Clear"> <br><br>
                        
    
                    </form>
                 </div>