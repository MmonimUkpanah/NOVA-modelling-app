<!DOCTYPE html >
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/bootstrap-grid.css">
    <link rel="icon" href="./assets/images/O.png">
</head>
<body data-simplebar>
<?php
    

    // $serverName = "localhost";
    // $userName = "root";
    // $password = "";
    // $dbName = "response_data";

    // $connection = mysqli_connect($serverName,$userName,$password,$dbName);

    // if(!$connection){
    //     echo "Unable to connect db.";
    // }
    require('connect.php');

    $message = "Your email has been saved successfully";

    
        if(isset($_POST['registerBtn'])){
           $email = ($_POST['email']); //sha1, md5, salt are different hash functions used to hide passwords
        



           $result = mysqli_query($connection, "SELECT * FROM email_response WHERE email = '$email'") or
           exit(mysqli_error($connection)); // check for duplicates
           $num_rows = mysqli_num_rows($result); // number of rows where duplicates exist

           if(($num_rows) > 0){
               echo "E-mail already exists.";
               exit;
           }else{
                $insertQuery = "INSERT INTO `email_response` 
                ( email, created_at) 
                VALUES 
                ( '$email', now())";
                
                
           }
     
        

        if(empty($email)){
            echo "Email is required";

        }else{
            $insertQuery = mysqli_query($connection, "INSERT INTO `email_response` 
            ( email, created_at) 
            VALUES 
            (  '$email', now())"
            );

            if($insertQuery){
                echo "<script type='text/javascript'>alert('$message'); </script>";
                // header('location:welcome.php'); header function is used to navigate to another webpage
            }else{
                echo mysqli_error($connection)."Oops! something went wrong";
            }

            }
        }

?>

        



    <div class="slider"></div>
    <div class="slider"></div>
    <div class="color-changer">Dark</div>
    <header>
        <nav>
            <div class="burger">
                <span>&nbsp;</span>
                <span>&nbsp;</span>
            </div>
            <div class="logo">
                <img src="./assets/images/O.png" alt="" srcset="">
                <h2>Nova</h2>
            </div>
            <div class="links">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="nova-models-master/index.html">Models</a></li>
                    <li><a href="faqpage-master/index.html">FAQ</a></li>
                    <li><a href="hng-model-master/index.php">Contact</a></li>
                </ul>
                <div class="nav-i-s">
                    <a href="#"> <img src="./assets/images/insta-pink.png" alt=""></a>
                    <img src="./assets/images/search.png" alt="">
                </div>
            </div>
        </nav>
        <div class="header-display">
            <div class="header-display_content">
                <h1 class="drop">
                    Take <span>modelling</span><br>to a new level!
                </h1>
                <p class="drop">
                    Globally incentivize B2B relationships after backend core
                    competencies. Enthusiastically reconceptualize functionalized<br>
                    supply chains<br>
                </p>
                <a  class="drop" href="#">Discover</a>
            </div>
            <div class="header-display_images">
                <img src="./assets/images/header image.png" alt="" srcset="">
            </div>
        </div>
    </header>
    <div class="sponsors">
        <img src="./assets/images/avenue.svg" alt="">
        <img src="./assets/images/verona.svg" alt="">
        <img src="./assets/images/vijon.svg" alt="">
        <img src="./assets/images/luxe.svg" alt="">
        <img src="./assets/images/look.svg" alt="">
    </div>
    <div class="welcome">
        <img class="img" src="./assets/images/welcome circle.png" alt="">
        <img class="img" src="./assets/images/welcome-curve.png" alt="">
        <h1 class="h1 drop2">Welcome to Nova</h1>
        <p class="p drop2">Who are we?</p>
        <div class="welcome-display">
            <div class="welcome_img">
                <img class="img" src="./assets/images/welcome-image-back-svg.png" alt=""> 
                <img src="./assets/images/welcome-image.png" alt="">
             </div>
            <div class="welocome_content">
                <h1 class="drop2">
                    We are a top <span>modelling</span><br>agency
                </h1>
                <p class="drop2">
                    Progressively communicate wireless expertise and technically<br> 
                    sound outsourcing. Progressively seize sticky e-commerce <br>
                    before backend technologies. Professionally engage parallel <br>
                    strategic theme areas vis-a-vis client-centric deliverables.
                </p>
            </div>
        </div>
    </div>
    <div class="proff">
        <div class="professional">
            <img class="img" src="./assets/images/welcome circle.png" alt="">
            <img class="img" src="./assets/images/welcome-curve.png" alt="">
    
            <div class="professional-display">
                <div class="professional_content">
                    <h1 class="drop3">
                        Highly <span>professional</span><br>models
                    </h1>
                    <p class="drop3">
                        Progressively communicate wireless expertise and technically<br> 
                        sound outsourcing. Progressively seize sticky e-commerce <br>
                        before backend technologies. Professionally engage parallel <br>
                        strategic theme areas vis-a-vis client-centric deliverables.
                    </p>
                </div>
                <div class="professional_img">
                    <img class="prof-img" src="./assets/images/prof-iregular.png" alt="">
                    <img class="prof-img" src="./assets/images/prof-reg.png" alt="">
                    <img class="prof-main-img" src="./assets/images/professional image.png" alt="">
                 </div>
            </div>
        </div>
    </div>
    <div class="featured">
        <img class="img" src="./assets/images/welcome circle.png" alt="">
        <img class="img" src="./assets/images/s-curve.png" alt="">
        <h1 class="drop4">Featured Models</h1>
        <p class="drop4">
            We’ve continued to grow as a modelling agency and now represent thousands of diverse models across all races
        </p>
        <div class="feat-imgs">
              <a href="nova-models-master/model-madi.html">
                <div class="feat-img">
                    <img src="./assets/images/featured image 1.png" alt="" srcset="">
                    <p>View portfolio<br>-<br><b>Madi Zigler</b></p>
                </div>
              </a> 
              <a href="nova-models-master/model-steph.html">
                <div class="feat-img">
                    <img src="./assets/images/featured image 2.png" alt="" srcset="">
                    <p>View portfolio<br>-<br><b>Stephenie Fernandez</b></p>
                </div>
              </a> 
               
              <a href="nova-models-master/model-chioma.html">
                <div class="feat-img">
                    <img src="./assets/images/featured image 3.png" alt="" srcset="">
                    <p>View portfolio<br>-<br><b>Chioma Eke</b></p>
                </div>
              </a> 
              <a href="nova-models-master/model-sam.html">
                <div class="feat-img">
                    <img src="./assets/images/featured image 4.png" alt="" srcset="">
                    <p>View portfolio<br>-<br><b>Sam Puket</b></p>
                </div>
              </a> 
              <a href="nova-models-master/model-maddision.html">
                <div class="feat-img">
                    <img src="./assets/images/featured image 5.png" alt="" srcset="">
                    <p>View portfolio<br>-<br><b>Maddisson Harper</b></p>
                </div>
              </a> 
              <a href="nova-models-master/model-kim.html">
                <div class="feat-img">
                    <img src="./assets/images/featured image 6.png" alt="" srcset="">
                    <p>View portfolio<br>-<br><b>Kim Hudson</b></p>
                </div>
              </a> 
              <a href="nova-models-master/model-christina.html">
                <div class="feat-img">
                    <img src="./assets/images/featured image 7.png" alt="" srcset="">
                    <p>View portfolio<br>-<br><b>Christina Orna</b></p>
                </div>
              </a> 
              <a href="nova-models-master/model-ola.html">
                <div class="feat-img">
                    <img src="./assets/images/featured image 8.png" alt="" srcset="">
                    <p>View portfolio<br>-<br><b>Ola Obafemi</b></p>
                </div>
              </a> 
        </div>
        <button>Show More</button>
    </div>
    <div class="quality">
        <div class="quality_img">
            <img src="./assets/images/commercial image 3.png" alt="" srcset="">     
        </div>
            <div class="quality_content">
                <h1 class="drop5">
                    Top <span>quality</span> commercial <br>shots
                </h1>
                <p class="drop5">
                    Progressively communicate wireless expertise and technically<br> 
                    sound outsourcing. Progressively seize sticky e-commerce <br>
                    before backend technologies. Professionally engage parallel <br>
                    strategic theme areas vis-a-vis client-centric deliverables.
                </p>
            </div>
    </div>
    <div class="blog container-fluid">
        <h1 class="drop6">Blog</h1>
        <div class="row">
            <div class="peeps col-xl-4 col-lg-4 col-md-4 col-sm-6">
                <img src="./assets/images/blog 1.png" alt="">
                <p>
                    Progressively communicate<br>wireless
                </p>
            </div>
            <div class="peeps col-xl-4 col-lg-4 col-md-4 col-sm-6">
                <img src="./assets/images/blog 2.png" alt="">
                <p>
                    Progressively communicate<br>wireless
                </p>
            </div>
            <div class="peeps col-xl-4 col-lg-4 col-md-4 col-sm-6">
                <img src="./assets/images/blog 3.png" alt="">
                <p>
                    Progressively communicate<br>wireless
                </p>
            </div>
        </div>
    </div>
    <div class="email">
        <img src="./assets/images/swirl.png" alt="" class="img"><img src="./assets/images/welcome circle.png" alt="" class="img">
        <div class="email_content">
            <h1 class="drop7">Do you want to be a super <span>model</span> ?</h1>
            <p class="drop7">Uniquely communicate error-free platforms before functional meta-services. Monotonectally emerging<br> platforms before low-risk high-yield growth strategiesred niches.</p>
            <p class="drop7">Intrinsicly facilitate client-based channels for.</p>
            <form action="index.php" method="POST">
                 <input class="drop7 twenty1" type="email" placeholder="Email address" name="email">
                 <input  type="submit" name="registerBtn" value="submit" class="drop7 twenty" > 
            </form>
        </div>
    </div>
    <footer>
        <div class="logo-socials">
            <img src="./assets/images/logo.svg" alt="">
            <div class="socials">
                <img src="./assets/images/twitter.png" alt="">
                <img src="./assets/images/facebook.png" alt="">
                <img src="./assets/images/instagram.png" alt="">
            </div>
        </div>
        <div class="cpo">
            <div class="contact po">
                <ul>
                    <li><h2>Contact info  <img class="b" src="./assets/images/Vector.svg" alt=""></h2></li>
                    <li><img src="./assets/images/map.png" alt="">Plot 106 Commercial Layout, <br>Byyazhin Road.</li>
                    <li><img src="./assets/images/phone.png" alt="">+234 9034829374 <br>+234 7024889323</li>
                    <li><img src="./assets/images/mail.png" alt="">info@nova.com</li>
                </ul>
            </div>
            <div class="pages po">
                <ul>
                    <li><h2>Pages  <img class="b" src="./assets/images/Vector.svg" alt=""></h2></li>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="nova-models-master/index.html">Models</a></li>
                    <li><a href="faqpage-master/index.html">Facts</a></li>
                    <li><a href="hng-model-master/index.html">Contact us</a></li>
                </ul>
            </div>
            <div class="services po">
                <ul>
                    <li><h2>Our services <img class="b" src="./assets/images/Vector.svg" alt=""></h2></li>
                    <li>Professional Models</li>
                    <li>Commercial Shots</li>
                    <li>Model Managements</li>
                    <li>Runway Modelling</li>
                </ul>
            </div>
        </div>
  
    </footer>
    
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/glider-js/1.7.3/glider.min.js" integrity="sha512-NI5tuaiyhrV4EkyHBGHJj9uaL6uu7fz/WCoMnEwvHi8WXTKZ9f8P1v517sdTGVpT31/UEHRdLMuNdPon9F3HUg==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.0/CSSRulePlugin.min.js" integrity="sha512-G/DslVCv+cnQaVTGKHAvIbe9YSmz+OTTU3v6nBIMHG4IckIB54qlr228DvtPhw8UYS3ye5lWMtTeGX/Ezk8QdA==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.0/ScrollTrigger.min.js" integrity="sha512-VVSEbx0kiWyvgjB6m2CCZRz53eN8Q7gy5e3nwqa71U+XkS7H7n9iTQwFyY5qTJKJVLP8QnOdBhKwEp52Ra2+bw==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.0/gsap.min.js" integrity="sha512-elauk8NI35rjTlatfRQxeqmJoieQlfm0W8AeQVps+j+KkMDdaqNxVazFzwyU7uSOyeeVn/VLbGYLwOR/D5I6Kw==" crossorigin="anonymous"></script>
    <script src="./assets/js/hover.js"></script>
    <script src="./assets/js/main.js"></script>
</body>
</html>