<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>speedbus Help</title>
  <link rel="stylesheet" href="style.css">
  <style>
    body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  background: #fff;
  color: #333;
}

.help-header {
  background-color: rgb(255, 166, 0);
  color: white;
  padding: 40px;
  text-align: center;
}

.help-header h1 {
  margin: 0;
  font-size: 36px;
}

.content {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-around;
  padding: 40px 20px;
}

.left-card {
  background-color: #fff7f0;
  border-radius: 10px;
  padding: 20px;
  width: 350px;
  box-shadow: 0 0 10px rgba(0,0,0,0.1);
}

.login-box {
  text-align: center;
}

.login-box img {
  width: 100%;
  max-height: 150px;
  object-fit: contain;
}

.login-box p {
  margin: 10px 0;
}

.login-box button {
  background-color: #FF6B00;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

.faq-section h3 {
  margin-top: 20px;
}

.faq-items {
  display: flex;
  flex-direction: column;
  gap: 15px;
}

.faq-buttons {
  margin-top: 15px;
  display: flex;
  justify-content: space-between;
}

.faq-buttons button {
  background: white;
  color: #FF6B00;
  border: 1px solid #FF6B00;
  padding: 8px 12px;
  border-radius: 5px;
  cursor: pointer;
}

.right-image img {
  max-width: 400px;
  width: 100%;
  margin-top: 30px;
}

footer {
  background-color: #f2f2f2;
  padding: 30px;
  color: #333;
}

.footer-content {
  max-width: 1000px;
  margin: auto;
}

.footer-columns {
  display: flex;
  justify-content: space-between;
  margin-top: 20px;
}

.footer-columns div h4 {
  margin-bottom: 10px;
}

.footer-bottom {
  text-align: center;
  margin-top: 20px;
  font-size: 14px;
  color: #777;
}
</style>
</head>
<body>
  <header class="help-header">
    <h1>SpeedBus Help</h1>
    <p>24/7 Customer Support</p>
    <ul class="menu_s">
                         <li class="off"><div class="offer"><i class="fa-solid fa-house headph"></i><p class="text"><a href="index.php"> Home</a></p></div></li>
                         <li class="off"><div class="offer"><i class="fa-solid fa-bars headph"></i><p class="text"><a href="about.php"> About</a></p></div></li>
                         <li class="off"><div class="offer"><i class="fa-solid fa-headphones-simple headph"></i><p class="text_1"><a href="need.php">Need Help</a></p></div></li>
                        
                     </ul>
  </header>

  <main class="content">
      <form class="form" method="post" action="signin.php" >
    <section class="left-card">
      <h2>Help</h2>
  
      <div class="login-box">
        <img src="#" alt="Support Image">
        <p>For seamless booking management and customer support</p>
       <button > <i class="fa-solid  fa-magnifying-glass sea_1"></i>login to your account</button>
      </div>

      <div class="faq-section">
        <h3>FAQ</h3>
        <div class="faq-items">
        
        </div>
     
      </div>
    </section>

 
  </main>

  <footer>
    <div class="footer-content">
      <div class="logo">speedbus</div>
      <p>World's largest online bus booking service</p>
      <div class="footer-columns">
        <div>
          <h4>About</h4>
          <p>Contact us</p>
          <p>Offers</p>
        </div>
        <div>
          <h4>Info</h4>
          <p>FAQ</p>
          <p>Privacy Policy</p>
        </div>
        <div>
          <h4>Partners</h4>
          <p>Goibibo</p>
          <p>MakeMyTrip</p>
        </div>
      </div>
    </div>
    <div class="footer-bottom">&copy; 2025 speedbus. All rights reserved.</div>
  </footer>
</body>
</html>
