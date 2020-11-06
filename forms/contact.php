<?php
$fname = $_POST['firstname'];
$email = $_POST['email'];
$lname = $_POST['lastname'];
$msg = $_POST['message'];

if (empty($name) || empty($email) || empty($msg)){
    echo "please file the form";
}
else{
    mail("codershub07@gmail.com" , "Submitted Message" , "Hey My name is $fname $lname and message is $msg " , "From: $name <$email>");
    echo "<script type='text/javascript'>alert('your message sent successfully');
    window.history.log(-1);
    </script>";
    header('location: index.html');
}
?>