s


<!DOCTYPE html>
<html>
<head>
  <title>Paterolum Refinery System - Refinery Details</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <header>
    <nav>
      <ul>
      <li><a href="index.php">Home</a></li>
        <li><a href="refinary_detail.php">Refineries</a></li>
        <li><a href="contect.php">Contact us</a></li>
        <li><a href="login.php">login</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <section class="refinary-details">
      <div class="container">
        <h1>Refinery Name</h1>
        <p>PATEL refinary</p>

        <h2>Refinery Information</h2>
        <ul>
          <li><strong>Location:</strong> <?php # echo $refinery_Details ['jetpur']; ?>jetpur</li>
          <li><strong>Capacity:</strong> <?php # echo $refinery_Details ['5000']; ?> as per your order</li>
          <li><strong>status:</strong> <?php # echo $refinery_Details ['']; ?>any time</li>
        </ul>

        <h2>Products</h2>
        <ul>
          <li>PIPE & FEETING</li>
          <li>CONTROLS</li>
          <li>hoses</li>
          <li>ACTUTORS</li>
          <li>SAMPLLING</li>
          <li>SENSORS</li>
          <li>PUMPS</li>
          <li>EXPANSSION JOINTS</li>
        </ul>

        <h2>Refinery Image</h2>
        <img src="photos/refinary.jpg" alt="Refinery Image">
      </div>
    </section>
  </main>

  <footer>
    <div class="container">
      <p>&copy; <?php echo date("Y"); ?> Paterolum Refinery System. All rights reserved.</p>
    </div>
  </footer>
</body>
</html>
