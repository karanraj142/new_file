<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <link rel="stylesheet" type="text/css" href="style.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/script.js/2.0.2/script.min.js">   -->
</head>


<body>
  <div class="full_container">
          <div class="header"><img class="logo" src="./img/logo_1.png">
                <div class="menu">
                     <ul class="menu_s">
                         <li class="off"><div class="offer"><i class="fa-solid fa-house headph"></i><p class="text"><a href="index.php"> Home</a></p></div></li>
                         <li class="off"><div class="offer"><i class="fa-solid fa-bars headph"></i><p class="text"><a href="about.php"> About</a></p></div></li>
                         <li class="off"><div class="offer"><i class="fa-solid fa-headphones-simple headph"></i><p class="text_1"><a href="need.php">Need Help</a></p></div></li>
                         <li class="off"><div class="offer"><i class="fa-solid fa-user-plus  headph"></i><p class="text_2"><a href="signin.php">Sign In</a></p></div></li>
                     </ul>
                </div>
               <div class="line"><hr></div>
          </div>
                  

       
             <div class="new_user">
                 <div class="register">
                    <form class="form" method="post" action="registerpro.php" >
                         <label for="name" class="f_name">First Name </label><br>
                         <input type="text" class="f_name_1" placeholder="Enter your F_Name" id="n_name" name="fname" required><br><br>
                         <label for="name" class="f_name">Last Name </label><br>
                         <input type="text" class="f_name_1" placeholder="Enter your L_Name" id="n_name" name="lname" required><br><br>
                         <label for="email" class="f_name">Email </label><br>
                         <input type="email" class="f_name_1" placeholder="Enter your Email" id="email" name="email" required><br><br>
                         <label for="secret" class="f_name">Password </label><br>
                         <input type="password" class="f_name_1" id="new_pass" placeholder="Password" minlength="8" maxlength="10" name="password" required><br><br>
                         <label for="secret" class="f_name"> Confirm Password </label><br>
                         <input type="password"  class="f_name_1" id="new_pass1" placeholder="C_Password" minlength="8" maxlength="10" name="c_password" required><br><br>
                         <input  class="button_1" type="submit" value="Submit" >  
                         <input  class="button_1" type="reset" value="Clear"> <br><br>
                         <h4><a href="signin.php" id="already">Already user</a></h4>
    
                    </form>
                 </div>
                
            </div>
            <div class="cop">
                 <pre><h3 class="copy">2025 Speed Bus Travel . copy rights                                                             PRIVACY & POLICY TERM</h3></pre>
                </div> 
              
            
  </div>
  <script>
  document.querySelector(".form").addEventListener("submit", function(e) {
    let password = document.getElementById("new_pass").value;
    let confirm = document.getElementById("new_pass1").value;

    if (password !== confirm) {
      alert("Passwords do not match!");
      e.preventDefault(); // stop form submission
    }
  });
</script>

     
</body>

</html>