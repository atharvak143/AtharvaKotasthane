
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="atharva kotasthane, portfolio, atharva, full stack dev, personal portfolio lifecodes, portfolio design, portfolio website, personal portfolio,kotasthane,atharvak143" />
    <meta name="description" content="Welcome to Atharva's Portfolio. Full-Stack Web Developer and Android App Developer" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <!-- Font Awesome -->
    
    <link id='favicon' rel="shortcut icon" href="./assets/images/favicon.png" type="image/x-png">
    <title>Portfolio | Atharva Kotasthane</title>
</head>
<body oncontextmenu="return false">

<!-- pre loader -->
<!-- <div class="loader-container">
  <img draggable="false" src="./assets/images/preloader.gif" alt="">
</div> -->

<!-- navbar starts -->
<header>
        <a href="/" class="logo"><i class="fab fa-node-js"></i> Atharva</a>

        <div id="menu" class="fas fa-bars"></div>
        <nav class="navbar">
            <ul>
            <li><a class="active" href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="#education">Education</a></li>
            
            <!-- <li><a href="#experience">Experience</a></li> -->
            <!-- <li><a href="#contact">Contact</a></li> -->
            </ul>
        </nav>
</header>
<!-- navbar ends -->


<!-- hero section starts -->
<section class="home" id="home">
    <div id="particles-js"></div>

    <div class="content">
    <h2>Hi There,<br/> I'm Atharva <span>Kotasthane</span></h2>
    <p>i am into <span class="typing-text"></span></p>
    <a href="#about" class="btn"><span>About Me</span>
      <i class="fas fa-arrow-circle-down"></i>
    </a>
    <div class="socials">
        <ul class="social-icons">
          <li><a class="linkedin" aria-label="LinkedIn" href="https://www.linkedin.com/in/atharva-kotasthane-39542622b" target="_blank"><i class="fab fa-linkedin"></i></a></li> 
          <li><a class="github" aria-label="GitHub" href="https://github.com/atharvak143" target="_blank"><i class="fab fa-github"></i></a></li>
          <li><a class="twitter" aria-label="Twitter" href="https://twitter.com/33_atharva60059" target="_blank"><i class="fab fa-twitter"></i></a></li>
          <li><a class="telegram" aria-label="Telegram" href="https://t.me/+919370600985" target="_blank"><i class="fab fa-telegram-plane"></i></a></li>
          <li><a class="instagram" aria-label="Instagram" href="https://www.instagram.com/_atharva__143"><i class="fab fa-instagram" target="_blank"></i></a></li>
          <li><a class="dev" aria-label="Dev" href="https://dev.to/atharvak143" target="_blank"><i class="fab fa-dev"></i></a></li>
	  <li><a class="dev" aria-label="Whatsapp" href="https://wa.me/9370600985" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
        </ul>
      </div>
    </div>
<div class="image">
    <img draggable="false" class="tilt" src="./assets/images/hero.png" alt="">
</div>
</section>
<!-- hero section ends -->


<!-- about section starts -->
<section class="about" id="about">
    <h2 class="heading"><i class="fas fa-user-alt"></i> About <span>Me</span></h2>
    
    <div class="row">

    <div class="image">
        <img draggable="false" class="tilt" src="./assets/images/Atharva_Img.jpg" alt="">
    </div>
    <div class="content">
        <h3>Atharva Kotasthane</h3>
        <span class="tag">Full Stack Developer</span>
        
        <p>I am a Full-Stack developer based in Pune, India. 
          I am an Information Technology undergraduate from SPPU.
          I am very passionate about improving my coding skills & developing applications & websites.
          I build WebApps and Websites using MERN Stack.
          Working for myself to improve my skills.
          Love to build Full-Stack clones. </p>
        
        <div class="box-container">
            <div class="box">
              <p><span> age: </span> 22</p>
              <p><span> phone : </span> +91 9370600985</p>
            </div>
            <div class="box">
              <p><span> email : </span> atharvakotasthane143@gmail.com</p>
              <p><span> place : </span> Ahmadnagar, India - 414607</p>
            </div>
        </div>
        
        <div class="resumebtn" onclick="downloadResume()">
            <a  target="_blank" class="btn"><span>Resume</span>
                <i class="fas fa-chevron-right"></i>
            </a>
            
        </div>
        <script>
          function downloadResume() {
              var fileId = '1ep7CvqsYoAkGalkBuBmduz-cUmlFZ_um';
              var resumeUrl = 'https://drive.google.com/uc?export=download&id=' + fileId;
      
              var link = document.createElement('a');
              link.href = resumeUrl;
              link.download = 'Atharva Resume.pdf';
      
              document.body.appendChild(link);
              link.click();
              document.body.removeChild(link);
          }
      </script>

    </div>
    </div>
</section>
<!-- about section ends -->

<!-- skills section starts -->
<section class="skills" id="skills">

    <h2 class="heading"><i class="fas fa-laptop-code"></i> Skills & <span>Abilities</span></h2>

    <div class="container">
          <div class="row" id="skillsContainer">

            <div class="bar">
              <div class="info">
                <img src="https://img.icons8.com/color/48/000000/adobe-xd.png"/>
                <span>AdobeXD</span>
              </div>
            </div>
            <div class="bar">
              <div class="info">
                <img src="assets/images/android.png"/>
                <span>Android</span>
              </div>
            </div>
            <div class="bar">
              <div class="info">
                <img src="assets/images/icons8-python-48.png"/>
                <span>Python</span>
              </div>
            </div>
            <div class="bar">
              <div class="info">
                <img src="assets/images/icons8-java-48.png"/>
                <span>Java</span>
              </div>
            </div>
            <div class="bar">
              <div class="info">
                <img src="assets/images/icons8-data-structure-64 (1).png"/>
                <span>DSA</span>
              </div>
            </div>
            <div class="bar">
              <div class="info">
                <img src="assets/images/icons8-html-48.png"/>
                <span>HTML</span>
              </div>
            </div>
            <div class="bar">
              <div class="info">
                <img src="assets/images/icons8-css-48.png"/>
                <span>CSS</span>
              </div>
            </div>
            <div class="bar">
              <div class="info">
                <img src="assets/images/icons8-javascript-50.png"/>
                <span>JavaScript</span>
              </div>
            </div>
            <div class="bar">
              <div class="info">
                <img src="assets/images/icons8-react-a-javascript-library-for-building-user-interfaces-24.png"/>
                <span>React JS</span>
              </div>
            </div>
            <div class="bar">
              <div class="info">
                <img src="assets/images/icons8-angular-24.png"/>
                <span>Angular</span>
              </div>
            </div>
            <div class="bar">
              <div class="info">
                <img src="assets/images/icons8-php-64.png"/>
                <span>PHP</span>
              </div>
            </div>
            <div class="bar">
              <div class="info">
                <img src="assets/images/icons8-mysql-24.png"/>
                <span>MySQL</span>
              </div>
            </div>
            <div class="bar">
              <div class="info">
                <img src="assets/images/icons8-mongodb-a-cross-platform-document-oriented-database-program-24.png"/>
                <span>MongoDB</span>
              </div>
            </div>
             <div class="bar">
              <div class="info">
                <img src="assets/images/icons8-c++-50.png"/>
                <span>C/C++</span>
              </div>
             </div>
              
              <div class="bar">
                <div class="info">
                  <img src="assets/images/icons8-linux-48.png">
                  <span>Linux</span>
                </div>
                </div>
                
                <div class="bar">
                  <div class="info">
                    <img src="assets/images/icons8-nodejs-48.png"/>
                    <span>NodeJs</span>
                  </div>
                  </div>
                  
            

      </div>
</div>
</section>
<!-- skills section ends -->


<!-- education section starts -->
<section class="education" id="education">

  <h1 class="heading"><i class="fas fa-graduation-cap"></i> My <span>Education</span></h1>

    <p class="qoute">Education is not the learning of facts, but the training of the mind to think.</p>

    <div class="box-container">

    <div class="box">
        <div class="image">
        <!-- <img draggable="false" src="./assets/images/educat/college.jpg" alt=""> -->
        </div>
        <div class="content">
        <h3>Bachelor of Engineering in Information Technology</h3>
        <p>Sanjivani College Of Engineering | SPPU</p>
        <h4>2021-2025 | Pursuing</h4>
        <h4>CGPA:7.80</h4>
        </div>
    </div>

    <div class="box">
      <div class="image">
      <!-- <img draggable="false" src="./assets/images/educat/school.jpg" alt=""> -->
      </div>
      <div class="content">
      <h3>HSC Science | Computer Science</h3>
      <p>SSVM</p>
      <h4>2018-2020 | Completed</h4>
      <h4>Percentage:70.46</h4>
      </div>
    </div>

    <div class="box">
      <div class="image">
      <!-- <img draggable="false" src="./assets/images/educat/school.jpg" alt=""> -->
      </div>
      <div class="content">
      <h3>SSC</h3>
      <p>Mula Public School</p>
      <h4>2017-2018 | Completed</h4>
      <h4>Percentage:89.80</h4>
      </div>
    </div>
</div>
</section>



<!-- education section ends -->

<!-- Commment Section Update later -->


<!-- work project section starts -->
<!--<section class="work" id="work">

  <h2 class="heading"><i class="fas fa-laptop-code"></i> Projects <span>Made</span></h2>

  <div class="box-container">

     <div class="box tilt">
      <img draggable="false" src="./assets/images/projects/portfolio1.PNG" alt="" />
      <div class="content">
        <div class="tag">
        <h3>Portfolio Website</h3>
        </div>
        <div class="desc">
          <p>Personal portfolio website. Don't need much info about it, just scroll down. You're here only!</p>
          <div class="btns">
            <a href="#" class="btn" target="_blank"><i class="fas fa-eye"></i> View</a>
            <a href="https://github.com/jigar-sable/Portfolio-Website" class="btn" target="_blank">Code <i class="fas fa-code"></i></a>
          </div>
        </div>
      </div>
    </div> -->


















<!-- </div> -->

<!-- <div class="viewall">
  <a href="/projects" class="btn"><span>View All</span>
    <i class="fas fa-arrow-right"></i>
</a>
</div> -->

<!-- Comment section Finish -->












<!-- </section> -->
<!-- work project section ends -->
<!-- experience section starts -->
<!-- experience section ends -->

<!-- contact section starts -->
<section class="contact" id="contact">
  
  <h2 class="heading"><i class="fas fa-headset"></i> Get in <span>Touch</span></h2>

  <div class="container">
    <div class="content">
      <div class="image-box">
        <img draggable="false" src="./assets/images/contact1.png" alt="">
      </div>
    <form id="contact-form" action="index.php" method="post">
      
      <div class="form-group">
        <div class="field">
          <input type="text" name="name" placeholder="Name" required>
          <i class='fas fa-user'></i>
        </div>
        <div class="field">
          <input type="text" name="email" placeholder="Email" required>
          <i class='fas fa-envelope'></i>
        </div>
        <div class="field">
          <input type="text" name="phone" placeholder="Phone">
          <i class='fas fa-phone-alt'></i>
        </div>
        <div class="message">
        <textarea placeholder="Message" name="message" required></textarea>
        <i class="fas fa-comment-dots"></i>
        </div>
        </div>
      <div class="button-area">
        <button type="submit" name="b1" value="Submit">
          Submit <i class="fa fa-paper-plane"></i></button>
      </div>
    </form>
    <?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$database = "portfolio"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['b1'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Prepare and bind SQL statement
    $stmt = $conn->prepare("INSERT INTO users ('Name', 'Email', 'Phone', 'Message') VALUES ('$name', '$email', '$phone', '$message')");
    $stmt->bind_param( $name, $email, $phone, $message);

    // Execute SQL statement
    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement
    $stmt->close();
}

// Close connection
$conn->close();
?>

  </div>
  </div>
</section>
<!-- contact section ends -->


<!-- footer section starts -->
<section class="footer">

  <div class="box-container">

      <div class="box">
          <h3>Atharva's Portfolio</h3>
          <p>Thank you for visiting my personal portfolio website. Connect with me over socials. <br/> <br/> Keep Rising 🚀. Connect with me over live chat!</p>
      </div>

      <div class="box">
          <h3>quick links</h3>
          <a href="#home"><i class="fas fa-chevron-circle-right"></i> home</a>
          <a href="#about"><i class="fas fa-chevron-circle-right"></i> about</a>
          <a href="#skills"><i class="fas fa-chevron-circle-right"></i> skills</a>
          <a href="#education"><i class="fas fa-chevron-circle-right"></i> education</a>
               </div>

      <div class="box">
          <h3>contact info</h3>
          <p> <i class="fas fa-phone"></i>+91 9370600985</p>
          <p> <i class="fas fa-envelope"></i>atharvakotasthane143@gmail.com</p>
          <p> <i class="fas fa-map-marked-alt"></i>Ahmadnagar, India-414607</p>
          <div class="share">

              <a href="https://www.linkedin.com/in/atharva-kotasthane-39542622b" class="fab fa-linkedin" aria-label="LinkedIn" target="_blank"></a>
              <a href="https://github.com/atharvak143" class="fab fa-github" aria-label="GitHub" target="_blank"></a>
              <a href="mailto:atharvakotasthane143@gmail.com" class="fas fa-envelope" aria-label="Mail" target="_blank"></a>
              <a href="https://twitter.com/33_atharva60059" class="fab fa-twitter" aria-label="Twitter" target="_blank"></a>
              <a href="https://t.me/+919370600985" class="fab fa-telegram-plane" aria-label="Telegram" target="_blank"></a>
              <a class="dev" aria-label="Whatsapp" href="https://wa.me/9370600985" target="_blank"><i class="fab fa-whatsapp"></i></a>

          </div>
      </div>
  </div>

  <h1 class="credit">Designed  <i class="fa fa-heart pulse"></i> by <a> Atharva Kotasthane</a></h1>
  <h1 class="credit1"> &#169; Atharva Kotasthane. All rigths reserved</h1>

</section>
<!-- footer section ends -->


<!-- scroll top btn -->
<a href="#home" aria-label="ScrollTop" class="fas fa-angle-up" id="scroll-top"></a>
<!-- scroll back to top -->


<!-- ==== ALL MAJOR JAVASCRIPT CDNS STARTS ==== -->
<!-- jquery cdn -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- typed.js cdn -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.5/typed.min.js" integrity="sha512-1KbKusm/hAtkX5FScVR5G36wodIMnVd/aP04af06iyQTkD17szAMGNmxfNH+tEuFp3Og/P5G32L1qEC47CZbUQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- particle.js links -->
<script src="./assets/js/particles.min.js"></script>
<script src="./assets/js/app.js"></script>

<!-- vanilla tilt.js links -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.7.0/vanilla-tilt.min.js" integrity="sha512-SttpKhJqONuBVxbRcuH0wezjuX+BoFoli0yPsnrAADcHsQMW8rkR84ItFHGIkPvhnlRnE2FaifDOUw+EltbuHg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- scroll reveal anim -->
<script src="https://unpkg.com/scrollreveal"></script>

<script
      type="text/javascript"
      src="https://cdn.jsdelivr.net/npm/emailjs-com@3/dist/email.min.js"
    ></script>

<!-- ==== ALL MAJOR JAVASCRIPT CDNS ENDS ==== -->

<script src="./assets/js/script.js"></script>




</body>
</html>
