<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=".">
    <link rel="shortcut icon"
      href="../Build-and-Deploy-a-Pizza-Website-Using-only-HTML-CSS-and-JavaScript-2023-Dark-and-Light//final//img/favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
      integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="shortcut icon" href="./img/pizzas/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="./Style/contact.css">
    <script src="./js/about.js" defer></script>
    <title>Contact Form</title>
  </head>

  <body>
    <header class="header" id="header">
      <nav class="nav container">
        <a href="./final.php" class="nav__logo">
          <img src="./img/pizzas/favicon.png" alt="logo image">
          PizzaBan
        </a>

        <div class="nav__menu" id="nav-menu">
          <ul class="nav__list">
            <li class="nav__item"><a href="./final.php" class="nav__link active-link">Home</a></li>
            <li class="nav__item"><a href="./menu.php" class="nav__link">Menu</a></li>
            <li class="nav__item"><a href="./about.php" class="nav__link">About us</a></li>
            <li class="nav__item"><a href="./contact.php" class="nav__link">Contact us</a></li>
          </ul>

        </div>

        <div class="nav__buttons">
          <i class="fa-regular fa-moon change-theme" id="theme-button"></i>

        </div>
      </nav>
    </header>


    <div class="containers">
      <div class="column">
        <i class="fas fa-user icon"></i>
        <h2>Contact Us</h2>
        <form>
          <label for="name" class="custom-label">Name:</label>
          <input type="text" id="name" name="name" placeholder="Enter Your Name" required>

          <label for="email" class="custom-label">Email:</label>
          <input type="email" id="email" name="email" placeholder="email@example.com" required>

          <label for="message" class="custom-label">Message:</label>
          <textarea id="message" name="message" rows="4" placeholder="Enter Your Message Here"></textarea>

          <button type="submit">Submit</button>
        </form>
      </div>
      <div class="column">
        <div class="contact-info">
          <h2>Contact Information</h2>
          <i class="fas fa-map-marker-alt icon"></i>
          <p><strong>Address:</strong>Poblacion, 6020 Sibonga, Cebu</p>
          <i class="fas fa-envelope icon"></i>
          <p><strong>Email:</strong> <a href="naviedaj567@gmail.com" style="color: #fff;">naviedaj567@gmail.com</a></p>
          <i class="fas fa-globe icon"></i>
          <p><strong>Website:</strong> <a href="./final.php" target="_blank" style="color: #fff;">PizzaBan</a></p>
          <p>Feel free to contact us for any inquiries or assistance.</p>
        </div>
      </div>
    </div>


    <script src="./js/about.js"></script>

  </body>

</html>
