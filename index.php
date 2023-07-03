<!DOCTYPE html>
<html>
<head>
  <title>Gym Website</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }
    
    #header {
      background-color: #333;
      color: #fff;
      padding: 20px;
      text-align: center;
    }
    
    #menu {
      background-color: #eee;
      padding: 10px;
      text-align: center;
    }
    
    #menu .logo {
      display: inline-block;
      height: 100px; /* Adjust the height as needed */
      cursor: pointer;
      position: absolute;
      left: 10px; /* Adjust the left position as needed */
      top: 10px; /* Adjust the top position as needed */
    }
    
    #menu .chip {
      display: inline-block;
      padding: 10px 20px;
      margin: 5px;
      background-color: #f1f1f1;
      border-radius: 20px;
      cursor: pointer;
      font-weight: bold;
    }
    
    #content {
      padding: 20px;
      text-align: center;
    }
    
    #home-page {
      display: block;
    }
    
    #about-page {
      display: none;
    }
    
    #contact-page {
      display: none;
    }


    #gallery {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      padding: 20px;
    }
    
    .gallery-item {
      width: 300px;
      margin: 20px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      border-radius: 5px;
      overflow: hidden;
    }
    
    .gallery-item img {
      width: 100%;
      height: auto;
      object-fit: cover;
    }
    
    #footer {
      background-color: #333;
      color: #fff;
      padding: 20px;
      text-align: center;
    }



    .hero {
      background-image: url("gym-hero-image.jpg"); /* Replace with your own hero image */
      background-size: cover;
      background-position: center;
      height: 600px; /* Adjust the height as needed */
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      color: #fff;
    }
    
    .hero h1 {
      font-size: 48px;
      margin-bottom: 20px;
    }
    
    .hero p {
      font-size: 20px;
      margin-bottom: 40px;
    }
    
    .cta-button {
      background-color: #333;
      color: #fff;
      padding: 15px 30px;
      font-size: 18px;
      font-weight: bold;
      text-decoration: none;
      border-radius: 5px;
      transition: background-color 0.3s ease;
    }
    
    .cta-button:hover {
      background-color: #555;
    }
    
    #features {
      background-color: #f1f1f1;
      padding: 50px 0;
      text-align: center;
    }
    
    #features h2 {
      font-size: 36px;
      margin-bottom: 40px;
    }
    
    .feature {
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 40px;
    }
    
    .feature img {
      width: 100px;
      margin-right: 20px;
    }
    
    .feature-text {
      text-align: left;
    }
    
    .feature-text h3 {
      font-size: 24px;
      margin-bottom: 10px;
    }
    
    .feature-text p {
      font-size: 16px;
    }
    
    #testimonial {
      background-color: #333;
      color: #fff;
      padding: 50px 0;
      text-align: center;
    }
    
    #testimonial h2 {
      font-size: 36px;
      margin-bottom: 40px;
    }
    
    .testimonial-text {
      font-size: 20px;
      margin-bottom: 20px;
    }
    
    .testimonial-author {
      font-size: 18px;
    }
    
    #footer {
      background-color: #eee;
      padding: 20px;
      text-align: center;
      color: #888;
    }
    
    #footer p {
      margin: 0;
    }
  </style>
</head>
<body>
  <div id="header">
    <h1>Welcome to our Gym</h1>
  </div>
  
  <div id="menu">
    <svg class="logo" viewBox="0 0 100 100" onclick="showPage('home-page')">
      <circle cx="50" cy="50" r="40" fill="gray" /> <!-- Change the fill color here -->
      <text x="50%" y="55%" text-anchor="middle" fill="#fff" font-size="30px" font-weight="bold">G</text>
    </svg>
    <div class="chip" onclick="showPage('home-page')">Home</div>
    <div class="chip" onclick="showPage('about-page')">About</div>
    <div class="chip" onclick="showPage('contact-page')">Contact</div>
  </div>
  
  <div id="content">
    <div id="home-page">
      <h2>Home Page</h2>
      <p>Welcome to our gym! We offer a wide range of fitness classes and state-of-the-art equipment.</p>
      <div id="gallery">
    <div class="gallery-item">
      <img src="img/1.webp" alt="Image 1">
    </div>
    <div class="gallery-item">
      <img src="img/4.png" alt="Image 2">
    </div>
    <div class="gallery-item">
      <img src="img/3.jpeg" alt="Image 3">
    </div>
    
  </div>
  
  <div id="footer">
    <p>&copy; 2023 Gym Website. All rights reserved.</p>
  </div>
    </div>
    
    <div id="about-page">
      <h2>About Page</h2>
      <p>Our gym has been serving the community for over 10 years. We are committed to helping our members achieve their fitness goals.</p>
      <section class="hero">
    <div>
      <h1>Welcome to our Gym</h1>
      <p>Get fit, stay healthy, and achieve your fitness goals with our state-of-the-art facilities.</p>
      <a href="#" class="cta-button">Join Now</a>
    </div>
  </section>
  
  <section id="features">
    <h2>Why Choose Us</h2>
    <div class="feature">
      <img src="feature-icon1.png" alt="Feature Icon">
      <div class="feature-text">
        <h3>Qualified Trainers</h3>
        <p>Our experienced trainers are dedicated to helping you reach your fitness goals with personalized training programs.</p>
      </div>
    </div>
    <div class="feature">
      <img src="feature-icon2.png" alt="Feature Icon">
      <div class="feature-text">
        <h3>Modern Equipment</h3>
        <p>We offer a wide range of modern fitness equipment and facilities to ensure a diverse and effective workout experience.</p>
      </div>
    </div>
    <div class="feature">
      <img src="feature-icon3.png" alt="Feature Icon">
      <div class="feature-text">
        <h3>Group Classes</h3>
        <p>Join our group classes led by expert instructors and enjoy the benefits of a motivating and supportive community.</p>
      </div>
    </div>
  </section>
  
  <section id="testimonial">
    <h2>Testimonials</h2>
    <div class="testimonial-text">
      <p>"I've been a member of this gym for over a year now, and it has truly transformed my life. The trainers are amazing, the atmosphere is welcoming, and the facilities are top-notch. Highly recommended!"</p>
    </div>
    <div class="testimonial-author">
      <p>- John Doe</p>
    </div>
  </section>
  
  <footer id="footer">
    <p>&copy; 2023 Gym Website. All rights reserved.</p>
  </footer>
    </div>
    
    <div id="contact-page">
      <h2>Contact Page</h2>
      <p>If you have any questions or inquiries, please feel free to contact us using the information below:</p>
      <p>Phone: 123-456-7890</p>
      <p>Email: info@gymwebsite.com</p>
    </div>
  </div>
  
  <script>
    function showPage(pageId) {
      var pages = document.querySelectorAll("#content > div");
      for (var i = 0; i < pages.length; i++) {
        pages[i].style.display = "none";
      }
      document.getElementById(pageId).style.display = "block";
    }
  </script>
</body>
</html>
