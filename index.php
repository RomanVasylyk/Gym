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
    </div>
    
    <div id="about-page">
      <h2>About Page</h2>
      <p>Our gym has been serving the community for over 10 years. We are committed to helping our members achieve their fitness goals.</p>
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
