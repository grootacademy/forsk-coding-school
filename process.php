<?php
$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";  
$CurPageURL = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];  
echo "The URL of current page: ".$CurPageURL."<br/>";
echo $_SERVER['HTTP_REFERER'];

print_r($_REQUEST);
include('./includes/connection.php');
        $name=$_REQUEST['name'];
        $email=$_REQUEST['email'];
        $phone=$_REQUEST['phone'];
        $courseName=$_REQUEST['courseName'];
        $message=$_REQUEST['message'];
        $reqPage=$_SERVER['HTTP_REFERER'];
        $sql="INSERT INTO `dmart_skill_contact_form`(`name`, `email`, `phone`, `courseName`, `message`, `pageName`) VALUES ('$name','$email','$phone','$courseName','$message','$reqPage')";
        echo $sql."<br/>";
        if($conn->query($sql)===TRUE){
            // header($_SERVER['HTTP_REFERER']);
            header('Location:'.$_SERVER['HTTP_REFERER']);
        }else{
            echo "record could not inserted";
    
        }

?>