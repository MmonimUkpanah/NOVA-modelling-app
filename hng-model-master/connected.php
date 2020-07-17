<?php
    $serverName = "85.10.205.173:3306";
    $userName = "mmonimukpanah";
    $password = "fanatica6442";
    $dbName = "response_data";

    $connection = mysqli_connect($serverName,$userName,$password,$dbName);

    if(!$connection){
        echo "Unable to connect db.";
    }

    // $serverName = "localhost";
    // $userName = "root";
    // $password = "";
    // $dbName = "response_data";

    // $connection = mysqli_connect($serverName,$userName,$password,$dbName);

    // if(!$connection){
    //     echo "Unable to connect db.";
    // }

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
                (id, name, email, message, time) 
                VALUES 
                ('', '$name', '$email', '$message', now())";
                
                
           }
     
        

        if(empty($name) || empty($email) || empty($message) ){
            echo "All fields are required";

        }else{
            $insertQuery = mysqli_query($connection, "INSERT INTO `response_capture` 
            (id, name, email, message, time) 
            VALUES 
            ('',  '$name', '$email', '$message', now())"
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