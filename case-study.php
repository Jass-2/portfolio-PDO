<!DOCTYPE html>
<html lang="en">
<?php
require_once('includes/connect.php');

$query = 'SELECT description, image_banner, challenges, approach, GROUP_CONCAT(image_gallery) AS images 
          FROM projects 
          JOIN media ON project_id = projects.id 
          WHERE projects.id = :projectid';

$stmt = $connect->prepare($query);

$projectid = $_GET['id'];

$stmt->bindParam(':projectid', $projectid, PDO::PARAM_INT);
$stmt->execute();

$row = $stmt->fetch(PDO::FETCH_ASSOC);

$image_array = $row ? explode(',', $row['images']) : [];

$stmt = null;
?>

<!-- <?php


// require_once('includes/connect.php'); 
// $query = 'SELECT description, image_banner, challenges, approach, GROUP_CONCAT(image_gallery) AS images FROM projects, media WHERE project_id = projects.id AND projects.id ='.$_GET['id'];

// $results = mysqli_query($connect,$query);

// $row = mysqli_fetch_assoc($results);

// $image_array = explode(',',$row['images']);


?> -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.plyr.io/3.7.8/plyr.css">
    <link href="css/grid.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

<!-- Scripts -->
 <!-- Scripts -->
 <script defer src="https://cdn.plyr.io/3.7.8/plyr.js"></script>
 <script defer src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
 <script defer src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
 <script defer src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollToPlugin.min.js"></script>
 <script type="module" defer src="js/main.js"></script>

    <title>Case Study Page</title>
</head>
<body class="case-body">
    <header>
        <a href="index.html"><img src="images/main-logo.svg" alt="Logo" class="logo"></a>
        <nav class="col-span-full mobile-navbar">
            <h2 class="hidden">Header</h2>
            <!-- <a href="index.html" ><img width="100px" id="logo" src="images/Main-logo.svg" alt="main-logo"></a> -->
            


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
    
    <section class="banner">
        <div class="banner-image-container">
            <img src="images/<?php echo $row['image_banner'];?>.png" alt="project-banner" class="banner-image">
        </div>
        
        <div class="banner-content">
            <!-- <h2><?php echo $row['title'];?></h2> -->
        </div>
    </section>

    <section class="case-study">
        <h2>Description</h2>
        <p><?php echo $row['description'];?></p>
        
        <h2>Challenge</h2>
        <p><?php echo $row['challenges'];?>
        </p>
        
        <h2>Approach</h2>
        <p>
        <?php echo $row['approach'];?></p>
    </section>


    <section class="gallery">
        <div class="gallery-item">
        <?php
    //whenever we want to echo out our images, we can just call them from the new array, individually or in a loop:
for($i = 0; $i < count($image_array); $i++) {

    echo '<img src="images/'.$image_array[$i].'.png" alt="project-5">';
}
    ?>
        </div>
       
    </section>



    <footer>
        <p>dev@jkumar.com</p>
        <div class="social-links">
            <a href="#">Behance</a>
            <a href="#">Instagram</a>
            <a href="#">Dribbble</a>
            <a href="#">Vimeo</a>
        </div>
    </footer>

    
</body>
</html>
