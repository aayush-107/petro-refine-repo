<?php
$con = mysqli_connect("localhost", "root", "", "paterolum_refinary");
if (!$con) 
{
    echo "error";
	
} 
    else
{
    $name = $_POST['username'];
    $email = $_POST['password'];
    $res = mysqli_query($con, "INSERT INTO users(username ,password) VALUES (' $username ' ,  ' $password ' )");
    if ($res) 
    {
        echo "login sucessfully";
    }
else {
       echo "error" ;
}

}

?>