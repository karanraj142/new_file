

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <link rel="stylesheet" type="text/css" href="style.css">
</head>


<body>
  <div class="full_container">
          <div class="header"><img class="logo" src="./img/logo_1.png">
                <div class="menu">
                     <ul class="menu_s">
                         <li class="off"><div class="offer"><i class="fa-solid fa-house headph"></i><p class="text"><a href="index.php"> Home</a></p></div></li>
                         <li class="off"><div class="offer"><i class="fa-solid fa-bars headph"></i><p class="text"><a href="about.php"> About</a></p></div></li>
                         <li class="off"><div class="offer"><i class="fa-solid fa-headphones-simple headph"></i><p class="text_1"><a href="needhelp.php">Need Help</a></p></div></li>
                         <li class="off"><div class="offer"><i class="fa-solid fa-user-plus  headph"></i><p class="text_2"><a href="signin.php">Sign In</a></p></div></li>
                     </ul>
                </div>
                 <div class="line"><hr></div>
          </div>
                  

       
            <div class="container">
                   <h1>signin</h2>
                <div class="login_1">
                      <div class="login">
                          <fieldset id="user_login">
                       
                             <form class="form_" action="signinpro.php" method="POST">
                                 <label for="name" class="u_name">User Email </label>
                                 <input type="text" placeholder="Enter your Name" id="u_name_1" name="name" required><br><br>
                                 <label for="secret" class="u_name">Password </label>
                                 <input type="password" id="secret"  placeholder="password**" minlength="8" maxlength="10" name="password" required><br><br>
                                 <input  class="button" type="submit" value="Submit">  
                                 <input  class="button" type="reset" value="Clear"> <br><br>
                                 <h4><a href="forget.php" id="forget">Forget password?</a></h4>
                                 <h4><a href="new_user.php" id="forget" >New User Registration</a></h4>
         
         
                             </from>
                           </fieldset>
                       </div>
                       <div class="vet"><image class="vector" src="./img/vector.jpg">
                       </div> 
                 </div>
                
            </div>
            <div class="cop">
                 <pre><h3 class="copy">2025 Speed Bus Travel . copy rights                                                             PRIVACY & POLICY TERM</h3></pre>
                </div> 
              
            
  </div>
     
</body>





</html>