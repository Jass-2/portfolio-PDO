<!DOCTYPE html>
<html lang="en">
<?php


require_once('includes/connect.php');

//create a query to run in SQL
$stmt = $connect->prepare("SELECT projects.id AS projects, image_banner, class_layout FROM projects, media WHERE media.project_id = projects.id");

$stmt->execute();


?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.plyr.io/3.7.8/plyr.css">
    <link href="css/grid.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css?family=Inter" rel="stylesheet">

    <!-- Load GSAP first -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollToPlugin.min.js"></script>
    
    <!-- Then load other scripts -->
    <script src="https://cdn.plyr.io/3.7.8/plyr.js"></script>

    <script type="module" src="js/main.js"></script>

    <title>Jashan Kumar</title>
</head>
<body>

    <h1 class="hidden"> Portfolio </h1>

    <header id="header" class="grid-con">
        <nav class="col-span-full mobile-navbar">
            <h2 class="hidden">Header</h2>
            <a href="index.html" ><img width="100px" id="logo" src="images/Main-logo.svg" alt="main-logo"></a>
            


            <!-- mobile-menu -->
            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>

            <div class="nav-menu col-start-4 col-end-auto ">
                
                <ul>
                    <li class="nav-item">
                        <a href="https://github.com/Jass-2" class="nav-link"><img 
                            src="images/git-nav.svg" alt=""></a>
                    </li>
                    <li class="nav-item">
                        <a href="https://github.com/Jass-2" class="nav-link"><img src="images/insta-nav.svg" alt=""></a>
                    </li>
                    <li class="nav-item">
                        <a href="https://github.com/Jass-2"  class="nav-link"><img src="images/linkdin-nav.svg" alt=""></a>
                    </li>
                    <li class="nav-item" >
                        <a  href="#contact-form" class="nav-link scroll"><img src="images/mail-nav.svg" alt=""></a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link"><img src="images/home.svg" alt="" id="button-tablet"></a>
                    </li>
                </ul>
                </div>
                <!-- mobile-menu -->
                 
        </nav>
    </header>



    <!--SECTION 1 TITLE -->
    <section class="grid-con section1">
        <div class="col-span-full m-col-start-1 m-col-end-7 ">
            <h2>Front-End Dev And</h2>
            <h2>Creative Designer</h2>
            <p>Hi! I’m <span class="highlights">Jashan Kumar</span>, a <span class="highlights">Front-End Developer and Creative Designer</span> specializing in web development, 3D motion graphics, and multimedia design. Check out my projects to see how I combine creativity with functionality!</p>
        </div>

        <div class="col-span-full m-col-start-7 m-col-end-13 pfp">
            <!-- <img  src="images/pfp-jass-mobile.png" alt="Portfolio Image"> -->
            <img src="images/pfp-bg1.png" alt="pfp-Background">
            
        </div>
    </section>

    <!--SECTION 2  Video Section  -->

    <section id="player-container" class="section-video section3">
        <h2 class="hidden"> Motion reel video </h2>
       
        <video class="player" controls preload="metadata" poster="images/video-bg.png">
            <source src="videos/motion-reel.mp4" type="video/mp4">
           
            <p>Ooops, something went wrong. You may be using an outdated browser or have javascript disabled.</p>
        </video>
    </section>



    <!-- Section3 projects -->

        <section class="section3">

          <div class="grid-con">
            <h2 class="col-span-full">MY Recent Work</h2>
            <h3 class="col-span-full">
              Here are a few of my recent projects that demonstrate my range of skills in front-end development, 3D motion graphics, and multimedia design 
          </h3>
            
          </div>

          <div class="grid-con">
            <!-- 1. -->
            

//loop


       <?php
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo '
            <div class="'.$row['class_layout'].'">
                <a href="case-study.php?id='.$row['projects'].'"><img src="images/'.$row['image_banner'].'.png" alt="placeholder-picture"></a>
            </div>'    ;
}


$stmt = null;

?> 
</div>
</section>
        <!-- Section4 About me -->


        <section class="grid-con">
          <div class="about-me-section4 col-span-full">
            <div class="about-me-image">
            <img src="images/pfp-mini-mobile1.png" alt="profile-picture">
            </div>

            <div class="about-me-text">
              <h2>About Me</h2>
            <p>I’m Jashan Kumar, and I love combining functionality with creativity. My journey in web development and design began with a passion for crafting engaging digital experiences. 

              With skills in JavaScript, CSS frameworks, Cinema 4D, Blender, and Figma, I bring ideas to life through interactive websites, 3D animations, and striking visuals. I focus on creating seamless experiences that connect users with stories and brands.
            </p>

            <div class="contact-btn">
              <a href="#contact-form" class="scroll">CONTACT ME</a>
          </div>
            
            </div>

          </div>


            

        </section>



        <!-- section 5 skills -->
<div class="section5 ">
  <h2>My Skills</h2>
  <h3>Proficient in industry-leading tools for design, development, and collaboration</h3>


        <section class="cloneable">
            <div class="nav-wrap">
              <nav class="nav-bar scroller" data-speed="fast">
                <ul class="nav-list tag-list scroller__inner">

                  <li class="nav-item2">
                    <div class="nav-item__link"><img src="images/vue-img.png" loading="eager" alt="" class="image"></div>
                    
                  </li>
                  <li class="nav-item2">
                    <div class="nav-item__link"><img src="images/js-img.png" loading="eager" alt="" class="image"></div>
                    
                  </li>
                  


                  <li class="nav-item2">
                    <div class="nav-item__link"><img src="images/css-img.png" loading="eager" alt="" class="image"></div>
                    
                  </li>

                  <li class="nav-item2">
                    <div class="nav-item__link"><img src="images/html-img.png" loading="eager" alt="" class="image"></div>
                    
                  </li>
                  
                  <li class="nav-item2">
                    <div class="nav-item__link"><img src="images/git-img.png" loading="eager" alt="" class="image"></div>
                    
                  </li>

                 
                  <li class="nav-item2">
                    <div class="nav-item__link"><img src="images/ai-img.png" loading="eager" alt="Adobe Illustrator app icon" class="image"></div>
                    <!-- <div class="nav-item__tooltip">
                      <p>Adobe Illustrator</p>
                    </div> -->
                  </li>
                  <li class="nav-item2">
                    <div class="nav-item__link"><img src="images/figma-img.png" loading="eager" alt="figma app icon" class="image"></div>
                    <!-- <div class="nav-item__tooltip">
                      <p>Figma</p>
                    </div> -->
                  </li>
                  <li class="nav-item2">
                    <div class="nav-item__link"><img src="images/ps-img.png" loading="eager" alt="Photoshop app icon" class="image"></div>
                    <!-- <div class="nav-item__tooltip">
                      <p>Photoshop</p>
                    </div> -->
                  </li>
                  <li class="nav-item2">
                    <div class="nav-item__link"><img src="images/ae-img.png" loading="eager" alt="Premiere Pro app icon" class="image"></div>
                    <!-- <div class="nav-item__tooltip">
                      <p>after-effects</p>
                    </div> -->
                  </li>
                  <li class="nav-item2">
                    <div class="nav-item__link"><img src="images/cinema-img.png" loading="eager" alt="" class="image"></div>
                    
                  </li>
                </ul>
              </nav>
            </div>
          </section>





        </div>



      
      <section id="contact-form" class="section6 grid-con">
        <div id="contact-hero-address" class="col-span-full m-col-start-1 m-col-end-7">          
            <h3>Get In Touch!</h3>
            <p>I’d love to connect! Feel free to reach out to me
                for collaborations, freelance opportunities, or if 
                you just want to chat about web development
                and design.</p>
            <p> 
                <img src="images/location-icon.svg" alt=""> London, Ontario<br>
                <img src="images/call-icon.svg" alt="">(+1) 123 456 7890<br>
                <img src="images/mail-icon.svg" alt="">
                dev@jkumar.com
            </p>         
        </div>
        <div id="contact-hero-form" class="col-span-full m-col-start-7 m-col-end-13">
            <div class="form">
                <!-- Added id="contact-form" -->
                <form id="contact_form" action="" method="post">
    <input class="input" name="fname" type="text" placeholder="First Name" required>
    <input class="input" name="lname" type="text" placeholder="Last Name" required>
    <input class="input" name="email" type="email" placeholder="Email" required>
    <textarea name="message" placeholder="Message" required></textarea>
    <input id="send-button" name="submit" type="submit" value="Sent">
</form>

            </div>
            <!-- Submit button outside the div -->
            
       
      </div>
    </section>


        <footer>
            <div class="contact-links">
                <a href="#">dev@jkumar.com</a>

                <div>
                    <img src="images/behance.svg" alt="behance" class="socials">
                    <img src="images/linkdin.svg" alt="linkdin" class="socials">
                    <img src="images/instagram.svg" alt="instagram" class="socials">
                    <img src="images/dribble.svg" alt="dribble" class="socials">
                    <img src="images/github.svg" alt="github" class="socials">
                </div>
            </div>


           <a href="#header" class="scroll"> 
            <div class="back-to-top">
                <p>Back to top</p>
                <img src="images/arrow.svg" alt="arrow">
            </div>
        </a>
            

            
        </footer>

        
    


</body>
</html>