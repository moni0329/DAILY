<!DOCTYPE html>
<html lang="en">
<head>
<title>Polaroid by Daily</title>
  <style>
    /* Reset default styles */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    /* Set body font and background */
    body {
      font-family: "Courier New", monospace;
      background-color: #f5f5f5;
	  background-image: url("logo.jpg");
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
    }

    /* Header styles */
    header {
	  box-sizing: border-box;
	  font-family: "Papyrus", fantasy;
      background-color: #333;
      color: #fff;
      padding: 10px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    
  nav {
    display: flex;
    align-items: center;
  }

  nav img {
    width: 55px;
    margin-right: 15px;
  }

    nav ul {
      list-style: none;
      display: flex;
    }

    nav ul li {
      margin-right: 10px;
    }

    nav ul li a {
      color: #fff;
      text-decoration: none;
      padding: 10px;
      transition: background-color 0.2s ease;
    }

    nav ul li a:hover {
      background-color: #555;
    }
    
	@keyframes slideInLeft {
    0% {
      opacity: 0;
      transform: translateX(-100%);
    }
    100% {
      opacity: 1;
      transform: translateX(0);
    }
  }

  h1, h2 {
    animation: slideInLeft 2s ease-in-out;
  }
	
	.font h1 {
    font-size: 74px;
    font-family: Arial, sans-serif;
    font-weight: bold;
    color: #800000;
    text-align: center;
    letter-spacing: 2px;
    margin-bottom: 15px;
  }
	
    .font h2{
         font-size: 15px;
         font-family: Impact, Haettenschweiler, 'Arial Narrow', sans-serif;
         font-weight: lighter;
         color: #800000;
         text-align: center;
         letter-spacing: 18px;
         margin-bottom: 100px;
         margin-top: 0px;
  
          }

    .butn-x{
        padding: 10px 20px;
		color: #a07b1c;
		font-family: Georgia, 'Times New Roman', Times, serif;
		margin: auto;
		text-align: center;
		width: 200px;
		font-size: 25px;
		border: 2px solid rgb(151, 147, 147);
		border-radius: 10px;
		margin-left: 100px;
          }
    /* Main styles */
    main {
      padding: 20px;
    }

    section {
      margin-bottom: 5px;
    }

    h1 {
      font-size: 30px;
      margin-bottom: 10px;
    }

    p {
	   font-size: 20px;
      line-height: 1.5;
      margin-bottom: 10px;
    }

    h3 {
      font-size: 18px;
      margin-bottom: 10px;
    }
	
	.header {
	  font-size: 14px;
      background-color: #FFFFE0;
      color: #ffffff;
      padding: 20px;
      text-align: center;
    }

    .message {
      max-width: 800px;
      margin: 50px auto;
      padding: 20px;
      background-color: #ffffff;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }

    .message h1 {
      font-size: 24px;
      text-align: center;
      margin-bottom: 20px;
    }

    .message p {
      font-size: 16px;
      line-height: 1.5;
      margin-bottom: 20px;
      text-align: center;
    }

    .inspiring-images {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      margin-bottom: 50px;
    }

    .inspiring-images img {
      width: 250px;
      height: 320px;
      margin: 10px;
    }

    .feedback {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
      background-color: #ffffff;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }

    .feedback h2 {
      font-size: 20px;
      margin-bottom: 20px;
    }

    .feedback p {
      font-size: 16px;
      line-height: 1.5;
      margin-bottom: 20px;
    }

    .comment-area {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
      background-color: #ffffff;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }

    .comment-area h2 {
      font-size: 20px;
      margin-bottom: 20px;
    }

    .comment-area form {
      margin-bottom: 20px;
    }

    .comment-area textarea {
      width: 100%;
      height: 100px;
      resize: vertical;
    }

    .comment-area input[type="submit"] {
      background-color: #1c1c1c;
      color: #ffffff;
      border: none;
      padding: 10px 20px;
      font-size: 16px;
      border-radius: 5px;
      cursor: pointer;
    }

    .comment-area input[type="submit"]:hover {
      background-color: #333333;
    }
	
  #imageSlider {
    margin-top: 20px;
  }

  .slider-container {
    position: relative;
    width: 100%;
    height: 500px;
    overflow: hidden;
  }

  .slider-image {
    width: 100%;
    height: 100%;
    object-fit: contain;
  }

  .slider-controls {
    margin-top: 10px;
    text-align: center;
  }

  .slider-prev,
  .slider-next {
    background-color: #ccc;
    border: none;
    color: #fff;
    cursor: pointer;
    padding: 10px 15px;
    font-size: 16px;
    transition: background-color 0.3s;
  }

  .slider-prev:hover,
  .slider-next:hover {
    background-color: #555;
  }

	
	<!--specials-->
	
h1 {
			text-align: center;
			margin-top: 50px;
			font-size: 32px;
			color: #333333;
		}

		.container {
			display: flex;
			flex-direction: column;
			flex-wrap: wrap;
			justify-content: space-around;
			margin: 50px auto;
			max-width: 1000px;
		}

		.offer-card {
			background-color: #ffffff;
			border-radius: 5px;
			box-shadow: 0 2px 5px rgba(0,0,0,0.1);
			display: flex;
			flex-direction: column;
			margin: 20px;
			padding: 20px;
			width: 300px;
		}

		.offer-card img {
			border-radius: 5px;
			height: 200px;
			object-fit: cover;
			width: 100%;
		}

		.offer-card h2 {
			font-size: 24px;
			margin-top: 20px;
			text-align: center;
			color: #333333;
		}
		
		.offer-card h1 {
			font-size: 14px;
			margin-top: 10px;
			text-align: center;
			color: #666666;
		}
      
#sidebar {
  width: 50px;
  background-color: rgb(55, 214, 166);
  padding: 1px;
  position: fixed;
  left: 0;
  bottom: 0;
  border-radius: 15px;
  margin-left: 10px;
  margin-bottom: 100px;
  z-index: 1;
}


#sidebar ul {
  list-style: none;
  padding: 0;
}

#sidebar li {
  margin-bottom: 10px;
  width: fit-content;
  width: 36px;
  margin-left: 1;
  margin-right: 0;
  padding: 0;
}

#sidebar a {
  color: #333;
  text-decoration: none;
}

#sidebar a:hover {
  color: #ff4081;
}
#sidebar ul li a img{
    width: 30px;
    margin-left: 5px;
    height: 30px;
    margin-right: 5px;
}


		.offer-card p {
			font-size: 12px;
			line-height: 1.5;
			margin-top: 10px;
			text-align: justify;
			color: #666666;
		}

		.offer-card a {
			background-color: #1c1c1c;
			border-radius: 5px;
			color: #ffffff;
			display: block;
			margin-top: 20px;
			padding: 10px;
			text-align: center;
			text-decoration: none;
			transition: background-color 0.2s ease;
		}

		.offer-card a:hover {
			background-color: #333333;
		}
		
	 .offer-card {
    position: relative;
    overflow: hidden;
    transition: transform 0.3s ease;
  }

  .offer-card:hover {
    transform: scale(1.1);
  }

  .offer-card .overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    opacity: 0;
    transition: opacity 0.3s ease;
  }

  .offer-card:hover .overlay {
    opacity: 1;
  }

  .offer-card .overlay-content {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    color: #fff;
  }
		
<!--achievement section-->


    .header {
	  font-size: 14px;
      background-color: #FFFFE0;
      color: #ffffff;
      padding: 20px;
      text-align: center;
    }

    .feedback-images {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      margin-bottom: 50px;
    }

    .feedback-images img {
      width: 300px;
      height: auto;
      margin: 10px;
    }

    .counts {
      text-align: center;
      margin-bottom: 50px;
    }
	

    .counts p {
      font-size: 16px;
      margin-bottom: 10px;
    }

    .counts a {
      color: #1c1c1c;
      font-weight: bold;
      text-decoration: none;
    }
	.container {
	        text-align: justify;
			max-width: 400px;
			margin: 50px auto;
			padding: 20px;
			background-color: #ffffff;
			border-radius: 5px;
			box-shadow: 0 2px 5px rgba(0,0,0,0.1);
		}

		h1 {
  font-size: 30px;
  color: #333333;
  text-align: center;
  margin-bottom: 20px;
  text-transform: uppercase;
  letter-spacing: 2px;
}

		

		.contact-item {
			display: flex;
			align-items: center;
			margin-bottom: 10px;
		}

		.contact-item img {
			width: 30px;
			height: 30px;
			margin-right: 10px;
		}

		.contact-item a {
			color: #333333;
			text-decoration: none;
		}
		
		
	#toggleButton {
  background-color: #4CAF50;
  color: white;
  padding: 10px 20px;
  font-size: 16px;
  border: none;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

#toggleButton:hover {
  background-color: #45a049;
}
	
		
  #additionalInfo {
    display: none;
    background-color: #f5f5f5;
    padding: 20px;
    border: 10x solid #ccc;
    border-radius: 5px;
    margin-top: 20px;
    font-family: Arial, sans-serif;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
  }

  #additionalInfo h3 {
    font-size: 24;
    color: #333;
    margin-bottom:10px;
    text-align: center;
    text-transform: uppercase;
  }

  #additionalInfo p {
    color: #555;
    line-height: 1.5;
    margin-bottom: 10px;
  }

  #additionalInfo ul {
    margin-top: 10px;
    padding-left: 20px;
  }

  #additionalInfo li {
    color: #666;
    margin-bottom: 5px;
  }

 aside {
      background-color: #f9f9f9;
      padding: 10px;
    }

    h3 {
      font-size: 18px;
      margin-bottom: 10px;
    }

    footer {
      background-color: #333;
      color: #fff;
      padding: 10px;
      text-align: center;
      position: fixed;
      bottom: 0;
      left: 0;
      right: 0;
    }
	
    footer ul {
      list-style: none;
      margin-bottom: 10px;
    }

    footer ul li {
      display: inline;
      margin-right: 10px;
    }

    footer ul li a img {
      width: 20px;
      height: 20px;
    }

    
    @media (max-width: 708px) {
      header {
        flex-direction: column;
        align-items: flex-start;
      }

      nav ul {
        flex-direction: column;
        align-items: flex-start;
      }

      nav ul li {
        margin-bottom: 5px;
      }
    }
	
	html {
      scroll-behavior: smooth;
    }

  </style>
</head>
<body>
  <?php
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


  $validated = true;
  $comment = "";
  $messageErr = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
       
       if (empty($_POST["message"])) {
           $messageErr = "Message is required";
           $validated = false;
       } else {
     
       $message = test_input($_POST["message"]);
       }
       
       echo '<script type="text/javascript">
       window.location = "index.php#contact"
       </script>';
   
   
   if($validated){
     $host = "localhost";
     $username = "root";
     $password = "";
     $db = "polaroid";

     $conn = new mysqli($host,$username,$password,$db);
     if($conn->connect_error){
         echo "$conn->connect_error";
         echo '<script>alert("Error Occured...")</script>';
         echo '<script type="text/javascript">
         window.location = "index.php"
         </script>';
     } else {
         $stmt = $conn->prepare("insert into tbl_comment(comment) values(?)");
         $stmt->bind_param("s", $message);
         $execval = $stmt->execute();
         echo '<script>alert("Thank you for contacting us..")</script>';
         echo '<script type="text/javascript">
         window.location = "index.php"
         </script>';
         $stmt->close();
         $conn->close();
 }
 }else{
     echo '<script type="text/javascript">
     window.location = "index.php#comment"
     </script>';
 }
}
  
  ?>
  <header>
    <nav>
	   <img src="picture/logo234.png">
      <ul>
	    <li><a href="login.html">Log In</a></li>
        <li><a href="register.php">Register</a></li>
        <li><a href="#home">Home</a></li>
        <li><a href="#special">Specials</a></li>
        <li><a href="#contact">Contact Us</a></li>
		<li><a href="#achievement">Achievements</a></li>
      </ul>
    </nav>
  </header>
  <main>
<br>
<br>
<br>
<br>
<br>
<br>
<section>
    <div class="font">
	<h1>Polaroids by DAILY</h1>
	<br>
    <h2>BY MONISHA WALPITAGAMAGE</h2><br>
	<section id="imageSlider">
  <div class="slider-container">
    <img class="slider-image" src="picture/i1.jpg" alt="Image 1">
    <img class="slider-image" src="picture/i2.jpg" alt="Image 2">
    <img class="slider-image" src="picture/i3.jpg" alt="Image 3">
    <!-- Add more images here -->
  </div>
  <div class="slider-controls">
    <button class="slider-prev">&#10094;</button>
    <button class="slider-next">&#10095;</button>
  </div>
</section>

    <a class="butn-x" href="ourproducts.html">Our Products</a>
    </div>
</section>
<br>
<br>
<br>
  	<!--home section-->
<section id="home">
<div class="header">
    <h1>you are on the Red Carpet to P O L A R O I D-P A R A D I S E !</h1>
  </div>

  <div class="message">
    <h1>A Personalized Touch to Your Precious Memories</h1>
    <p>At Polaroid by Daily, we believe in capturing and cherishing your memories in a unique and creative way. Our wide range of polaroid cards, memory books, peg clips, jute rope, and room decoration items will add a personalized touch to your special moments.</p>
    <p>Let us help you create beautiful memories that will last a lifetime!</p>
  </div>

  <div class="inspiring-images">
    <img src="picture/polaroid3.jpg" alt="Inspiring Image 1">
    <img src="picture/frame1.jpg" alt="Inspiring Image 2">
    <img src="picture/lights2.jpg" alt="Inspiring Image 3">
  </div>

  <div class="feedback">
    <h2>Customer Feedbacks</h2>
    <p>"The polaroid cards I ordered from Polaroid by Daily exceeded my expectations. The quality and attention to detail were amazing!" - Hashan Senarathne</p>
    <p>"I absolutely love the memory book I purchased. It's the perfect way to document and treasure my special moments." - Janani Dilshani</p>
    <p>"The room decoration items I bought from Polaroid by Daily added a charming and cozy touch to my space. Highly recommended!" - Yathra Hapuarachchi</p>
  </div>

  <div class="comment-area" id="comment">
    <h2>Leave a Comment</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <textarea placeholder="Your comment" name="message"></textarea><br>
      <input type="submit" value="Submit">
      <span class="error"><?php echo $messageErr;?></span>
    </form>
  </div>
</section>  
  <!--specials section-->
 <section id="special">
 <div class="header">
    <h1> S P E C I A L S !</h1>
  </div>
	<div class="container">
		<div class="offer-card">
			<img src="picture/mother.jpg" alt="Offer 1">
			<div class="overlay">
        <div class="overlay-content">
          <h3>Portfolio Item 1</h3>
          <p>Hover over me for more information</p>
        </div>
      </div>
			<h2>Cheers to our favorite lady!</h2>
			<h1>Cherish your mother with a customized Polaroid Mother's Day card</h1>
			<p>Express your love and gratitude to your mom with a personalized Polaroid card designed just for her. Make her feel special and create lasting memories.</p>
			<a href="#">Grab now</a>
		</div>
	</div>
	<div class="container">
		<div class="offer-card">
			<img src="picture/keychain1.jpg" alt="Offer 2">
			 <div class="overlay">
        <div class="overlay-content">
          <h3>Portfolio Item 2</h3>
          <p>Hover over me for more information</p>
        </div>
      </div>
			<h2>Stylish gifts for less!</h2>
			<h1>Customize your Polaroid keychain to gift your loved ones</h1>
			<p>Surprise your loved ones with a unique and stylish Polaroid keychain. Personalize it with their favorite photos and make it a memorable keepsake they can carry everywhere.</p>
			<a href="#">Grab now</a>
		</div>
	</div>
</section>
<br>

<!--achievement section-->
<section id="achievement">
<div class="header">
    <h1>A C H I E V E M E N T S !</h1>
  </div>

  <div class="feedback-images">
    <img src="picture/feedback1.jpg" alt="Customer Feedback 1">
    <img src="picture/feedback2.jpg" alt="Customer Feedback 2">
    <img src="picture/feedback3.jpg" alt="Customer Feedback 3">
  </div>
<div class="container">
  <div class="counts">
    <p>Follow us on <a href="https://www.facebook.com/polaroidsbydaily" target="_blank">Facebook</a>:</p>
    <p>Followers: <span id="followersCount">25,713</span></p>
    <p>Likes: <span id="likesCount">16,230</span></p>
  </div>
</div>

   <button id="toggleButton">Show More</button>

    <section id="additionalInfo" style="display: none;">
  <h3>Additional Information</h3>
  <p>We could complete our first 100 orders within the first 3 months from the opening day of our business. Up to now, we have delivered our packages to more than 40 overseas areas.We have successfully attracted a diverse and growing customer base, with our polaroid photo business becoming a popular choice among visitors and tourists. Our unique and nostalgic approach to capturing special moments has resonated with people from all walks of life, creating cherished memories that last a lifetime.We have been featured in several prominent publications and online platforms, including <em>Photography Magazine</em> and <em>Travel&Leisure</em>, for our exceptional polaroid photography services.Our business has expanded to include collaborations with local artists and event organizers, providing custom-designed polaroid photo experiences for art exhibitions, weddings, and corporate events.We have received overwhelmingly positive feedback and reviews from our satisfied customers, with an average rating of 4.9 out of 5 stars on various review platforms.</p>
  <p>In addition to our polaroid photo business, we have also successfully introduced other selling items:</p>
  <ul>
    <li>Our high-quality peg clips have gained popularity among customers for their durability and versatility. They are perfect for organizing photos, notes, and artwork, adding a touch of creativity to any space.</li>
    <li>The jute rope we offer is eco-friendly and has become a sought-after choice for DIY enthusiasts and crafters. Its natural texture and strength make it ideal for various craft projects and home decorations.</li>
    <li>Our fairy lights have captured the imagination of our customers, transforming any space into a magical and enchanting setting. With their soft and warm glow, they have become a favorite choice for weddings, parties, and special occasions.</li>
    <li>We take pride in our unique collection of handmade wooden photo frames. Each frame is carefully crafted by skilled artisans, showcasing the beauty of natural wood grains. These frames add a rustic and charming touch to any cherished photograph.</li>
    <li>Our wide range of photo frames offers a variety of styles, sizes, and designs to suit every customer's preference. From classic and elegant frames to modern and minimalist designs, we have something to display and preserve treasured memories for everyone.</li>
  </ul>
</section>

</section>
<br>
	<!--contact us section-->

<section id="contact">
<div class="header">
    <h1> R E A C H  US !</h1>
  </div>
	<div class="container">
		<div class="contact-item">
			<img src="picture/gmail.png" alt="Email Icon">
			<a href="dailymh98@gmail.com">dailymh98@gmail.com</a>
		</div>
		<div class="contact-item">
			<img src="picture/fb.jpg" alt="Facebook Icon">
			<a href="https://www.facebook.com/polaroidsbydaily">Facebook Page</a>
		</div>
		<div class="contact-item">
			<img src="picture/insta.jpg" alt="Instagram Icon">
			<a href="https://www.instagram.com/polaroids_by_daily">Instagram Page</a>
		</div>
		<div class="contact-item">
			<img src="picture/whatsapp.png" alt="WhatsApp Icon">
			<a href="https://wa.me/94704118798">WhatsApp: +94704118798</a>
		</div>
	</div>
</section>	
<br>
<br>
<aside id="sidebar">
  
  <ul>
    <li><a href="#home"><img src="picture/home.png" alt="Home" title="Home" ></a></li>
    <li><a href="#contact"><img src="picture/contact-mail.png" alt="Contact Us" title="Contact Us" ></a></li>
    <li><a href="#achievement"><img src="picture/trophy.png" alt="Achievements" title="Achievements" ></a></li>
  </ul>
  
</aside>
<br>
<br>
<br>
<br>
<br>
<br>
  <footer>
    <ul>
      <li><a href="https://www.facebook.com/polaroidsbydaily"><img src="picture/fbb.png" alt="Facebook Icon" ></a></li>
      <li><a href="https://www.instagram.com/polaroids_by_daily"><img src="picture/instaa.png" alt="Instagram Icon"></a></li>
      <li><a href="https://wa.me/94704118798"><img src="picture/whatsappp.png" alt="Whatsapp Icon"></a></li>
    </ul>
    <p><font size ="2px">&copy; 2023 Polaroid by Daily. All rights reserved.</font></p>
  </footer>
  
  <script>
  const sliderImages = document.querySelectorAll('.slider-image');
  const prevButton = document.querySelector('.slider-prev');
  const nextButton = document.querySelector('.slider-next');
  let currentImage = 0;

  // Function to show the current image
  function showImage() {
    sliderImages.forEach((image, index) => {
      if (index === currentImage) {
        image.style.display = 'block';
      } else {
        image.style.display = 'none';
      }
    });
  }

  // Function to go to the previous image
  function prevImage() {
    currentImage--;
    if (currentImage < 0) {
      currentImage = sliderImages.length - 1;
    }
    showImage();
  }

  // Function to go to the next image
  function nextImage() {
    currentImage++;
    if (currentImage >= sliderImages.length) {
      currentImage = 0;
    }
    showImage();
  }

  // Event listeners for previous and next buttons
  prevButton.addEventListener('click', prevImage);
  nextButton.addEventListener('click', nextImage);

  // Automatically advance to the next image every 5 seconds
  setInterval(nextImage, 5000);

  // Show the initial image
  showImage();

    function toggleAdditionalInfo() {
      var additionalInfo = document.getElementById("additionalInfo");
      if (additionalInfo.style.display === "none") {
        additionalInfo.style.display = "block";
      } else {
        additionalInfo.style.display = "none";
      }
    }

    var toggleButton = document.getElementById("toggleButton");
    toggleButton.addEventListener("click", toggleAdditionalInfo);
	
	// Event handling for portfolio item hover effects
  const portfolioItems = document.querySelectorAll('.offer-card');

  portfolioItems.forEach(item => {
    item.addEventListener('mouseenter', () => {
      item.classList.add('active');
    });

    item.addEventListener('mouseleave', () => {
      item.classList.remove('active');
    });
  });
  
  

  </script>
</body>
</html>
