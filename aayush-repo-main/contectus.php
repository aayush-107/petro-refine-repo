<?php
$con = mysqli_connect("localhost", "root", "", "paterolum_refinary");
if (!$con) 
{
    echo "error";
	
} 
    else
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $res = mysqli_query($con, "INSERT INTO contectus(name , email , subject , message) VALUES ('$name' ,  '$email'  , '$subject' ,  '$message')");
    if ($res) 
    {
        
        echo "thank you for submit" ;
    }
else {
       echo "error" ;
}

}

?>