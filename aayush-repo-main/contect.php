<!DOCTYPE html>
<html>
<head>
  <title>Paterolum Refinery System - Contact</title>
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
    <section class="contact">
      <div class="container">
        <h1>Contact Us</h1>
        
        <p>Got any questions or inquiries? Feel free to reach out to us using the form below.</p>

        <form action="contectus.php" method="POST">
          <label for="name">Name:</label>
          <input type="text" id="name" name="name" required>

          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required>

          <label for="subject">Subject:</label>
          <input type="text" id="subject" name="subject" required>

          <label for="message">Message:</label>
          <textarea id="message" name="message" required></textarea>

          <button type="submit">Submit</button> 
        </form>
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
