<?php
    $serverName = "http://db4free.net";
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
                (id, email, created_at) 
                VALUES 
                ('', '$email', now())";
                
                
           }
     
        

        if(empty($email)){
            echo "Email is required";

        }else{
            $insertQuery = mysqli_query($connection, "INSERT INTO `email_response` 
            (id, email, created_at) 
            VALUES 
            ('',  '$email', now())"
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

        

