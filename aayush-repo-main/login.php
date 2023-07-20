<?php
    
    // if (isset($_POST['submit'])) {
    //     $account_type = $_POST['account-type'];
    //     header("Location: " . $account_type . "_dashboard.php?name=" . $_REQUEST['name']);
    // }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            width: 300px;
            margin: 0 auto;
            margin-top: 100px;
        }

        h2 {
            text-align: center;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input[type="text"],
        .form-group input[type="password"] {
            width: 100%;
            padding: 5px;
        }

        .form-group input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #17dfe6;
            color: rgb(255, 255, 255);
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <header>
        <nav>
          <ul>
          <li><a href="index.php">Home</a></li>
        <li><a href=" refinary_detail.php">Refineries</a></li>
        <li><a href="contect.php">Contact us</a></li>
        <li><a href="login.php">login</a></li>
          </ul>
        </nav>
      </header>
    <div class="container">
        <h2> Login</h2>
        <form action="db.php" method="post">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" />
                <div class="form-group"></div>
                <label for="password">password</label>
                <input type="text" name="password" id="password" />
                <label for="account-type">Account Type</label>
                <select name="account-type" id="account-type">
                    <option value="admin">Admin</option>
                    <option value="customer">customer</option>
            <div class="form-group">
                <input type="submit" value="Login">
            </div>
        </form>
    </div>
</body>
</html>
