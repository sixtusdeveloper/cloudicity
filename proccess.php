<?php


// $host = "ftpupload.net";
// $host = "sql301.epizy.com";
$host = "ftpupload.net";
$database = "epiz_33508388_blogify_data_management";
$username= "epiz_33508388";
$password= "Pkyk1izrfyyWmQ";

$name = $_POST["name"];
$email = $_POST["email"];
$company = $_POST["company"];


$conn = mysqli_connect(
                    hostname: $host,
                    username: $username,
                    password: $password,
                    database: $database
          
);

if(mysqli_connect_errno()){
 die("Connection_error: " . mysqli_connect_error);
}

$sql = "INSERT INTO cloudicity(name, email, company) VALUES(?, ?, ?);";

$stmt = mysqli_stmt_init($conn);

if(! mysqli_stmt_prepare($stmt, $sql)){
      die("mysqli_error($conn)");
}

mysqli_stmt_bind_param($stmt, "sss", 
                       $name,
                       $email,
                       $company);


if(isset($_POST["submit"])){
  if(empty($_POST["name"])){
   die("name must not be empty!");
   }

   if(empty($_POST["email"])){
      die("Email must not be empty!");
   }
      if(empty($_POST["company"])){
            die("Company must not be empty!");
      }

      if(mysqli_stmt_execute($stmt)){
            header("Location: success.php");
            exit();
      }
   
  
}

else{
 echo "Submitted Successfully!";
 exit();
}