<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./img/pizzas/favicon.png" type="image/x-icon">
    <link rel="shortcut icon"
      href="../Build-and-Deploy-a-Pizza-Website-Using-only-HTML-CSS-and-JavaScript-2023-Dark-and-Light//final//img/favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
      integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />



    <link rel="stylesheet" href="./Style/final.css">
    <title>PizzaBan || Sibonga</title>
  </head>

  <body>

    <header class="header" id="header">
      <nav class="nav container">
        <a href="#header" class="nav__logo">
          <img src="./img/pizzas/favicon.png" alt="logo image">
          PizzaBan
        </a>

        <div class="nav__menu" id="nav-menu">
          <ul class="nav__list">
            <li class="nav__item"><a href="#" class="nav__link active-link">Home</a></li>
            <li class="nav__item"><a href="#menu" class="nav__link">Menu</a></li>
            <li class="nav__item"><a href="#recently" class="nav__link">Recently</a></li>
            <li class="nav__item"><a href="#about" class="nav__link">About us</a></li>
            <li class="nav__item"><a href="#contactUs" class="nav__link">Contact us</a></li>
          </ul>

          <div class="nav__close" id="nav-close">
            <i class="fa-solid fa-xmark"></i>
          </div>

          <img src="./img/pizza-slice.png" alt="nav image" class="nav__img-1">
        </div>

        <div class="nav__buttons">
          <i class="fa-regular fa-moon change-theme" id="theme-button"></i>

          <div class="nav__toggle" id="nav-toggle">
            <i class="fa-solid fa-bars"></i>
          </div>
        </div>
      </nav>
    </header>

    <main class="main">
      <section class="home section" id="home">
        <div class="home__container container grid">
          <img src="./img/pizzas/home-pizza.png" alt="home image" class="home__img">

          <div class="home__data">
            <h1 class="home__title">
              The <br>
              Pizza <br>
              Ban
            </h1>

            <p class="home__description">
              Welcome to PizzaBan, your ultimate destination for a slice of pure delight! 🍕

              At PizzaBan, we redefine the pizza experience with a perfect blend of tradition and innovation. Our
              passion
              for crafting mouthwatering pizzas goes beyond just toppings – it's an art form. From classic favorites to
              bold, creative combinations, each bite is a journey into a world of flavors.
            </p>

            <a href="./menu.php" class="button">
              Order
              <svg width="46" height="46" fill="none" stroke="currentColor" stroke-linecap="round"
                stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path fill="currentColor" stroke="none" d="M10.25 22.5a1.75 1.75 0 1 0 0-3.5 1.75 1.75 0 0 0 0 3.5Z">
                </path>
                <path fill="currentColor" stroke="none" d="M18.75 22.5a1.75 1.75 0 1 0 0-3.5 1.75 1.75 0 0 0 0 3.5Z">
                </path>
                <path d="m7 6 2.5 11h10L22 8.5"></path>
                <path d="M12.5 13h8"></path>
                <path d="M2.5 3 7 6"></path>
                <path d="M22 8.5h-9.5"></path>
              </svg> Now <i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>
        </div>
      </section>

      <section class="about section" id="about">
        <div class="about__container container grid">
          <div class="about__data">
            <span><a href="./about.php" class="section__subtitle"> About Us</a></span>

            <h2 class="section__title">
              We Offer <br>
              Healthy Food
            </h2>

            <p class="about__description">
              At PizzaBan, we're not just about delicious pizzas – we're on a mission to redefine your perception of
              healthy indulgence. 🌿


              <br>
              <br>
              ✨ Healthful Ingredients: Our commitment to your well-being starts with thoughtfully selected, high-quality
              ingredients. From nutrient-rich whole-grain crusts to fresh, locally sourced vegetables, every bite
              reflects
              our dedication to wholesome goodness.
            </p>
          </div>

          <img src="./img/pizzas/pizza.png" alt="about image" class="about__img">
        </div>

      </section>

      <span id="menu"></span>
      <section class="popular section" id="popular">

        <span class="section__subtitle">The Best Food</span>
        <h2 class="section__title">Popular Pizza</h2>

        <div class="popular__container container grid">
          <div class="popular__card">
            <img src="./img/pizzas/pizza.png" alt="popular image" class="popular__img">

            <div class="popular__content">
              <a href="./menu.php" class="popular__button">
                Order
                <svg width="28" height="20" fill="none" stroke="currentColor" stroke-linecap="round"
                  stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path fill="currentColor" stroke="none" d="M10.25 22.5a1.75 1.75 0 1 0 0-3.5 1.75 1.75 0 0 0 0 3.5Z">
                  </path>
                  <path fill="currentColor" stroke="none" d="M18.75 22.5a1.75 1.75 0 1 0 0-3.5 1.75 1.75 0 0 0 0 3.5Z">
                  </path>
                  <path d="m7 6 2.5 11h10L22 8.5"></path>
                  <path d="M12.5 13h8"></path>
                  <path d="M2.5 3 7 6"></path>
                  <path d="M22 8.5h-9.5"></path>
                </svg>


              </a>

              <h3 class="popular__name">Mozzarella</h3>

              <p class="popular__description">
                A classic pizza with tomato sauce,
                fresh mozzarella, and basil.
              </p>

              <p class="popular__price">₱110.19</p>
            </div>
          </div>

          <div class="popular__card">
            <img src="./img/pizzas/pizza2.png" alt="popular image" class="popular__img">

            <div class="popular__content">
              <a href="./menu.php" class="popular__button">
                Order
                <svg width="28" height="20" fill="none" stroke="currentColor" stroke-linecap="round"
                  stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path fill="currentColor" stroke="none" d="M10.25 22.5a1.75 1.75 0 1 0 0-3.5 1.75 1.75 0 0 0 0 3.5Z">
                  </path>
                  <path fill="currentColor" stroke="none" d="M18.75 22.5a1.75 1.75 0 1 0 0-3.5 1.75 1.75 0 0 0 0 3.5Z">
                  </path>
                  <path d="m7 6 2.5 11h10L22 8.5"></path>
                  <path d="M12.5 13h8"></path>
                  <path d="M2.5 3 7 6"></path>
                  <path d="M22 8.5h-9.5"></path>
                </svg>

              </a>

              <h3 class="popular__name">Pepperoni</h3>

              <p class="popular__description">
                A traditional pizza topped with tomato sauce, mozzarella cheese.
              </p>

              <p class="popular__price">₱118.00</p>
            </div>
          </div>

          <div class="popular__card">
            <img src="./img/pizzas/pizza4.png" alt="popular image" class="popular__img">

            <div class="popular__content">
              <a href="./menu.php" class="popular__button">
                Order
                <svg width="28" height="20" fill="none" stroke="currentColor" stroke-linecap="round"
                  stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path fill="currentColor" stroke="none" d="M10.25 22.5a1.75 1.75 0 1 0 0-3.5 1.75 1.75 0 0 0 0 3.5Z">
                  </path>
                  <path fill="currentColor" stroke="none" d="M18.75 22.5a1.75 1.75 0 1 0 0-3.5 1.75 1.75 0 0 0 0 3.5Z">
                  </path>
                  <path d="m7 6 2.5 11h10L22 8.5"></path>
                  <path d="M12.5 13h8"></path>
                  <path d="M2.5 3 7 6"></path>
                  <path d="M22 8.5h-9.5"></path>
                </svg>

              </a>

              <h3 class="popular__name">Meat Lovers</h3>

              <p class="popular__description">
                A hearty pizza topped with tomato sauce, mozzarella cheese, pepperoni.
              </p>

              <p class="popular__price">₱117.99</p>
            </div>
          </div>
        </div>
      </section>

      <section class="recently section" id="recently">
        <div class="recently__container container grid">
          <div class="recently__data">
            <span class="section__subtitle">Recently Added</span>

            <h2 class="section__title">
              Sibonga <br>
              Pizza
            </h2>

            <p class="recently__description">
              Check out what's new and don't miss out
              on the opportunity to treat yourself
              to a delicious meal. Indulge in the
              experience and savor every bite.
            </p>

            <a href="./menu.php" class="button">
              Order
              Now <i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>
          <img src="./img/Pizza-Image/TheOriginalBBQChickenPizza_1200x630.0.jpg" alt="recently image"
            class="recently__img">
        </div>
      </section>


      <section class="newsletter section">
        <div class="newsletter__container container grid">
          <img src="./img/pizza-slice.png" alt="newsletter image" class="newsletter__img">

          <div class="newsletter__data">
            <span class="section__subtitle">Newsletter</span>
            <h2 class="section__title">
              Subscribe for <br>
              exclusive offers
            </h2>

            <form action="" class="newsletter__form">
              <input type="email" placeholder="Enter email" class="newsletter__input">

              <a href="./about.php" class="button newsletter__button">
                Subscribe <i class="fa-regular fa-paper-plane"></i>
              </a>
            </form>
          </div>
        </div>
      </section>
    </main>

    <!--~~~~~~~~~~~~~~~ FOOTER ~~~~~~~~~~~~~~~-->
    <footer class="footer" id="contactUs">
      <div class="footer__container container grid">
        <div>
          <a href="./menu.php" class="footer__logo">
            <img src="./img/pizzas/logo.png" alt="logo image">
            PizzaBan
          </a>

          <p class="footer__description">
            Food for the body is not <br>
            enough. There must be food <br>
            for the soul.
          </p>
        </div>

        <div class="footer__content">
          <div>
            <h3 class="footer__title">Main Menu</h3>

            <ul class="footer__links">
              <li><a href="./about.php" class="footer__link">About</a></li>
              <li><a href="./menu.php" class="footer__link">Menu</a></li>
              <li><a href="./menu.php" class="footer__link">Offer</a></li>
              <li><a href="./contact.php" class="footer__link">Events</a></li>
            </ul>
          </div>

          <div>
            <h3 class="footer__title">Information</h3>

            <ul class="footer__links">
              <li><a href="./contact.php" class="footer__link">Contact: 09551929404</a></li>
              <li><a href="./contact.php" class="footer__link">Order
                  <svg width="46" height="46" fill="none" stroke="currentColor" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path fill="currentColor" stroke="none"
                      d="M10.25 22.5a1.75 1.75 0 1 0 0-3.5 1.75 1.75 0 0 0 0 3.5Z"></path>
                    <path fill="currentColor" stroke="none"
                      d="M18.75 22.5a1.75 1.75 0 1 0 0-3.5 1.75 1.75 0 0 0 0 3.5Z"></path>
                    <path d="m7 6 2.5 11h10L22 8.5"></path>
                    <path d="M12.5 13h8"></path>
                    <path d="M2.5 3 7 6"></path>
                    <path d="M22 8.5h-9.5"></path>
                  </svg> & Returns : 09460945946</a></li>
              <li><a href="./final.php" class="footer__link">Home</a></li>
              <li><a href="./contact.php" class="footer__link">Reservation</a></li>
            </ul>
          </div>

          <div>
            <h3 class="footer__title">Address</h3>

            <ul class="footer__links">
              <li class="footer__information">
                Sibonga <br>
                Plaza</li>
              <li class="footer__information">09:00AM - 11:00PM</li>
            </ul>
          </div>

          <div>
            <h3 class="footer__title">Social Media</h3>

            <ul class="footer__links footer__social">
              <a href="https://web.facebook.com/him.blacklion567" class="footer__social-link" target="_blank">
                <i class="fa-brands fa-facebook"></i>
              </a>
              <a href="https://www.instagram.com/nocodearea/                                                  "
                class="footer__social-link" target="_blank">
                <i class="fa-brands fa-square-instagram"></i>
              </a>
              <a href="https://twitter.com/JBringcola" class="footer__social-link" target="_blank">
                <i class="fa-brands fa-twitter"></i>
              </a>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <!-- SCROLL UP -->
    <a href="#" class="scrollup" id="scroll-up">
      <i class="fa-solid fa-arrow-up"></i>
    </a>

    <script src="./js/final.js"></script>
  </body>

</html>