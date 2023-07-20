<?php
    
    if (isset($_POST['submit'])) {
        $name = $_POST['account-type'];
        header("Location: " . $name . ".php?name=" . $_REQUEST['name']);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" />
        <label for="password">password</label>
        <input type="text" name="password" id="password" />
        <label for="account-type">Account Type</label>
        <select name="account-type" id="account-type">
            <option value="admin">Admin</option>
            <option value="customer">customer</option>
        </select>
        <button name="submit" type="submit">Submit</button>
    </form>
</body>
</html>