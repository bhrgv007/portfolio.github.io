<?php 
 
    if(isset($_POST['submit']))
    {
       $name = $_POST['name'];
       $phone = $_POST['phone'];
       $email = $_POST['email'];
       $message = $_POST['message'];
 
       if(empty($name) || empty($phone) || empty($email) || empty($message))
       {
           header('location:index.php?error');
       }
       else
       {
           $to = "bhrgvrayavarapu@gmail.com";
 
           
           if(mail($to,$Subject,$message,$mail))
           {
               header("location:index.php?success");
           }
       }
    }
    else
    {
        header("location:index.php");
    }
?>