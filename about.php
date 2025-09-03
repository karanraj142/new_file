<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <link rel="stylesheet" type="text/css" href="style.css">
     <style>
.about-us-grid {
  padding: 40px 20px;
  background: #f0f4ff;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

.grid-container {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  gap: 70px;
  max-width: 1100px;
  margin: auto;
}

.grid-box {
  background-color: #ffffff;
  padding: 20px;
  border-radius: 12px;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
  border-left: 5px solid #007bff;
  transition: transform 0.3s ease;
  width: 100%;
    height: 400px;
}

.grid-box:hover {
  transform: translateY(-5px);
}

.grid-box h2,
.grid-box h3 {
  color: #007bff;
  margin-bottom: 12px;
}

.grid-box p,
.grid-box ul {
  color: #333;
  font-size: 15px;
  line-height: 1.6;
  margin-bottom: 0;
}

.grid-box ul {
  padding-left: 20px;
}




</style>
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
                  

       
            <div class="banner">
           
     <section class="about-us-grid">
  <div class="grid-container">

    <div class="grid-box">
      <h2>About Us</h2>
      <p>Welcome to <strong>EasyGo Bus Booking</strong> — your reliable partner for safe, fast, and affordable travel across cities.</p>
    

   
      <h3>Our Platform</h3>
      <p>We offer an easy-to-use platform that helps passengers find buses, compare seat layouts, and book tickets from the comfort of their home.</p>
    </div>

    <div class="grid-box">
      <h3>Our Mission</h3>
      <p><strong>Our Mission:</strong> To make bus travel easier, smarter, and more connected for everyone.</p>
   

      <h3>Why Choose Us?</h3>
      <ul>
        <li>Real-time seat availability</li>
        <li>Secure online booking</li>
        <li>Instant booking confirmation</li>
        <li>24/7 customer support</li>
      </ul>
 

    
      <h2>Who We Are</h2>
      <p>We are a team of developers, travel enthusiasts, and support staff working to build a smarter travel ecosystem.</p>
    </div>

    <div class="grid-box">
      <h3>What We Do</h3>
      <ul>
        <li>Real-time bus schedules</li>
        <li>Preferred seat booking</li>
        <li>Sleeper/seater layouts</li>
        <li>SMS/email confirmation</li>
        <li>Mobile-friendly experience</li>
      </ul>
    </div>

    <div class="grid-box">
      <h3>Our Values</h3>
      <ul>
        <li><strong>Trust:</strong> Transparent pricing</li>
        <li><strong>Convenience:</strong> Book from anywhere</li>
        <li><strong>Security:</strong> Encrypted payments</li>
        <li><strong>Support:</strong> Responsive service</li>
      </ul>
    </div>

    <div class="grid-box">
      <h3>Our Vision</h3>
      <p>To become India’s leading digital bus platform, connecting passengers across the country with safety and innovation.</p>
    </div>

    <div class="grid-box">
      <h3>Our Partners</h3>
      <p>We partner with private operators, government buses, and aggregators to offer wide options.</p>
    </div>

    <div class="grid-box">
      <h3>Contact Us</h3>
      <p>
        📧 Email: speedbus@gmail.com<br>
        📞 Phone: +91-98765-43210
     
   

    
      Thank you for choosing EasyGo. Your journey begins with us.</p>
    </div>

  </div>
</section>




     
            
  </div>
     
</body>
</html>