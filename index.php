<!DOCTYPE html>
<html>
<head>
  <title>Gym Website</title>
  <link rel="stylesheet" href="css/css.css">
  <link rel="stylesheet" href="css/ex.css">
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
    <div class="chip" onclick="showPage('hall-page')">Hall of fame</div>
    <div class="chip" onclick="showPage('exercises-page')">Exercises</div>
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
      <h1 style="color: black;">Welcome to our Gym</h1>
      <p style="color: black;">Get fit, stay healthy, and achieve your fitness goals with our state-of-the-art facilities.</p>
      <a href="#" class="cta-button">Join Now</a>
    </div>
  </section>
  
  <section id="features">
    <h2>Why Choose Us</h2>
    <div class="feature">
      <img src="img/one.jpeg" alt="Feature Icon">
      <div class="feature-text">
        <h3>Qualified Trainers</h3>
        <p>Our experienced trainers are dedicated to helping you reach your fitness goals with personalized training programs.</p>
      </div>
    </div>
    <div class="feature">
      <img src="img/tren.png" alt="Feature Icon">
      <div class="feature-text">
        <h3>Modern Equipment</h3>
        <p>We offer a wide range of modern fitness equipment and facilities to ensure a diverse and effective workout experience.</p>
      </div>
    </div>
    <div class="feature">
      <img src="img/2.png" alt="Feature Icon">
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
    
    <div id="hall-page">
    <header>
    <h1>Bodybuilder Hall of Fame</h1>
  </header>
  <main>
    <section class="bodybuilders">
      <div class="bodybuilder" onclick="toggleText(1)">
        <img src="img/top1.webp" alt="Bodybuilder 1">
        <div class="text" id="text1">
          <h2>Ronald Dean Coleman</h2>
          <p>is an American retired professional bodybuilder. The winner of the Mr. Olympia title for eight consecutive years</p>
        </div>
      </div>
      <div class="bodybuilder" onclick="toggleText(2)">
        <img src="img/top2.jpeg" alt="Bodybuilder 2">
        <div class="text" id="text2">
          <h2>Arnold Schwarzenegger</h2>
          <p>Schwarzenegger began lifting weights at age 15 and won the Mr. Universe title aged 20, and subsequently the Mr. Olympia title seven times</p>
        </div>
      </div>
      <div class="bodybuilder" onclick="toggleText(3)">
        <img src="img/top3.jpeg" alt="Bodybuilder 3">
        <div class="text" id="text3">
          <h2>Markus Rühl</h2>
          <p>2000 Toronto Pro - 1st</p>
          <p>2002 Night of Champions - 1st</p>
          <p>2002 Toronto Pro Classic - 2nd</p>
        </div>
      </div>
      <!-- Add more bodybuilder entries here -->
    </section>
  </main>
    </div>

    <div id="exercises-page">

  <div class="simulator-container">
    <div class="simulator">
      <img src="img/noh.jpeg" alt="Simulator 1" onclick="showVideo('img/noh.mp4', 'EXTENSION OF THE LEGS', ['Tip 1: The knee is directed towards the toe.', 'Tip 2: Keep your back in a neutral position.', 'Tip 3: Perform the movement with maximum amplitude.']);">
      <div class="tips" id="tips1">
        <h2>Simulator 1 Technique</h2>
        <ul>
          <li>Tip 1:  The knee is directed towards the toe.</li>
          <li>Tip 2: Keep your back in a neutral position.</li>
          <li>Tip 3: Perform the movement with maximum amplitude.</li>
        </ul>
      </div>
    </div>

    <div class="simulator">
      <img src="simulator2.jpg" alt="Simulator 2" onclick="showVideo('video2.mp4', 'Simulator 2 Technique', ['Tip 1: Sed do eiusmod tempor incididunt.', 'Tip 2: Ut labore et dolore magna aliqua.']);">
      <div class="tips" id="tips2">
        <h2>Simulator 2 Technique</h2>
        <ul>
          <li>Tip 1: Sed do eiusmod tempor incididunt.</li>
          <li>Tip 2: Ut labore et dolore magna aliqua.</li>
        </ul>
      </div>
    </div>
    
    <!-- Add more simulators here -->
  </div>

  <div class="video-modal" id="videoModal">
    <span class="close" onclick="closeModal()">&times;</span>
    <video id="video" controls autoplay>
    </video>
    <div class="video-tips" id="videoTips">
    </div>
  </div>

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
  <script src="script.js"></script>
</body>
</html>
