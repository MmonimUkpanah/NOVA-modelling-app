<!DOCTYPE html >
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="./images/O.png">
</head>
<body >
<?php

    // $serverName = "localhost";
    // $userName = "root";
    // $password = "";
    // $dbName = "response_data";

    // $connection = mysqli_connect($serverName,$userName,$password,$dbName);

    // if(!$connection){
    //     echo "Unable to connect db.";
    // }
    require('connected.php');

    $response = "Your message has been stored successfully";

        if(isset($_POST['registerBtn'])){
           $name = $_POST['name'];
           $email = ($_POST['email']); //sha1, md5, salt are different hash functions used to hide passwords
           $message = $_POST['message'];



           $result = mysqli_query($connection, "SELECT * FROM response_capture WHERE email = '$email'") or
           exit(mysqli_error($connection)); // check for duplicates
           $num_rows = mysqli_num_rows($result); // number of rows where duplicates exist

           if(($num_rows) > 0){
               echo "E-mail already exists.";
               exit;
           }else{
                $insertQuery = "INSERT INTO `response_capture` 
                ( name, email, message, time) 
                VALUES 
                ( '$name', '$email', '$message', now())";
                
                
           }
     
        

        if(empty($name) || empty($email) || empty($message) ){
            echo "All fields are required";

        }else{
            $insertQuery = mysqli_query($connection, "INSERT INTO `response_capture` 
            ( name, email, message, time) 
            VALUES 
            (  '$name', '$email', '$message', now())"
            );
            
            


            if($insertQuery){
                echo "<script type='text/javascript'>alert('$response'); </script>";
                // header('location:welcome.php'); header function is used to navigate to another webpage
            }else{
                echo mysqli_error($connection)."Oops! something went wrong";
            }
            

            }
        }

    

?>

    
    <header>
        <nav>
            <div class="burger">
                <span>&nbsp;</span>
                <span>&nbsp;</span>
            </div>
            <div class="logo">
                <img src="./images/O.png" alt="" srcset="">
                <h2>Nova</h2>
            </div>
            <div class="links">
                <ul>
                <li><a href="../index.php">Home</a></li>
                <li><a href="../nova-models-master/index.html">Models</a></li>
                <li><a href="../faqpage-master/index.html">FAQ</a></li>
                <li><a href="index.php">Contact</a></li>
                </ul>
                <div class="nav-i-s">
                    <a href="#"> <img src="./images/insta-pink.png" alt=""></a>
                    <img src="./images/search.png" alt="">
                </div>
            </div>
        </nav>
        <div class="whole">
            
            <section class="two">
                <div style="overflow: hidden;">
                    <div class="row">
                        <div class="col-sm-7">
                            <div class="two1 contact"> 
                                <h2>Contact Us</h2>
                                <p>Have any questions? We’d love to hear from you. Submit your queries here and we will get back to you as soon as possible.</p>
                            </div>
                        </div>
                        <div class="col-sm-5 two2">
                            <img src="./images/freepik  Mail  inject 161.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="two5">
                    <div class="two6" style="overflow: hidden;">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="two3">
                                    <img src="./images/pin.png" alt="" class="two4">
                                    <p><strong>2972 Westheimer Rd. Santa Ana, Illinois 85486</strong> </p>
                                </div>
                                <div class="two3">
                                    <img src="./images/Vector (5).png" alt="">
                                    <p><strong>support.expenseng@gmail.com</strong> </p>
                                </div>
                                <div class="two3">
                                    <img src="./images/Vector (6).png" alt="">
                                    <p><strong>(234) 555-0120</strong> </p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="two7">
                                <form action="index.php" method="POST">
                                        <label for=""><strong>Name</strong>  </label> <br>
                                        <input type="text" name="name" class="two8" ><br>
                                        <label for=""><strong>Email</strong> </label><br>
                                        <input type="email" name="email" class="two8"><br>
                                        <label for=""><strong>Your message here</strong> </label><br>
                                        <textarea name="message" id=""  rows="5"></textarea><br>
                                        <input  type="submit" name="registerBtn" value="submit" class="two9" >
                                    </form>
                                </div>        
                            </div>
                        </div>
                    </div>
                    
                </div>
        
            </section>
            <footer>
          <div class="logo-socials">
              <img src="./images/Group 1.png" alt="">
              <div class="socials">
                  <img src="./images/Group 24.png" alt="">
                  <img src="./images/Group 25.png" alt="">
                  <img src="./images/Group 529.png" alt="">
              </div>
          </div>
          <div class="cpo">
              <div class="contact po">
                  <ul>
                      <li><h2>Contact info  <img class="b" src="./assets/images/Vector.svg" alt=""></h2></li>
                      <li><img src="./images/Layer 2.png" alt="">Plot 106 Commercial Layout, <br>Byyazhin Road.</li>
                      <li><img src="./images/Vector (7).png" alt="">+234 9034829374 <br>+234 7024889323</li>
                      <li><img src="./images/Vector (8).png" alt="">info@nova.com</li>
                  </ul>
              </div>
              <div class="pages po">
                  <ul>
                      <li><h2>Pages  <img class="b" src="./assets/images/Vector.svg" alt=""></h2></li>
                      <li><a href="../index.php">Home</a></li>
                      <li><a href="../nova-models-master/index.html">Models</a></li>
                      <li><a href="../faqpage-master/index.html">Facts</a></li>
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
        </div>
    
        
    
        
    </header>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    
    <script src="main.js"></script>
</body>
</html>