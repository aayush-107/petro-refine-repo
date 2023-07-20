<?php
$con = mysqli_connect("localhost", "root", "", "paterolum_refinary");
if (!$con) 
{
    echo "error";
	
} 
    else
{
    $username = $_POST['name'];
    $password = $_POST['password'];
    $account_type = $_POST['account-type'];
    $res = mysqli_query($con, "INSERT INTO logindb(username , password ) VALUES ('$username' ,  '$password')");
    if ($res) 
    {
        // echo "thank you for submit";
        // header('')
        // if (isset($_POST['submit'])) {
            header("Location: " . $account_type . "_dashboard.php?name=" . $username);
        // }
    }
else {
       echo "error" ;
}

}

?>
