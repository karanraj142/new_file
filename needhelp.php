
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Complaint Form</title>
<style>
 /* quick orange‑white styling */
 body{font-family:Arial,Helvetica,sans-serif;background:#fff8f2;padding:40px}
 label{font-weight:bold;color:#FF6B00}
 input[type=text],textarea{
   width:100%;max-width:500px;padding:10px;margin:8px 0 18px;
   border:2px solid #FF6B00;border-radius:8px;font-size:16px
 }
 .button_1{
   background:#FF6B00;color:#fff;border:none;padding:10px 25px;
   font-size:16px;border-radius:6px;cursor:pointer
 }
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="header"><img class="logo" src="./img/logo_1.png">
                <div class="menu">
                     <ul class="menu_s">
                 
                         <li class="off"><div class="offer"><i class="fa-solid fa-bars headph"></i><p class="text"><a href="about.php"> About</a></p></div></li>
                         <li class="off"><div class="offer"><i class="fa-solid fa-headphones-simple headph"></i><p class="text_1"><a href="needhelp.php">Need Help</a></p></div></li>
                         <li class="off"><div class="offer"><i class="fa-solid fa-user-plus  headph"></i><p class="text_2"><a href="log_out.php">log out</a></p></div></li>
                     </ul>
                </div>
               <div class="line"><hr></div>
</div>
<div>
<form method="POST" action="needhelp_pro.php">
  <label for="n_name">Name</label><br>
  <input type="text" id="n_name" name="name" placeholder="Enter your name" required><br>

  <label for="n_phone">Phone No</label><br>
  <input type="text" id="n_phone" name="phone" placeholder="Phone number" required><br>

  <label for="message">Your Message</label><br>
  <textarea id="message" name="message" placeholder="Type your message here..." required></textarea><br>

  <input class="button_1" type="submit" value="Submit">
</form>
</div>
</body>
</html>
