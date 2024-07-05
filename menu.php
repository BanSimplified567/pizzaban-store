<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon"
      href="../Build-and-Deploy-a-Pizza-Website-Using-only-HTML-CSS-and-JavaScript-2023-Dark-and-Light//final//img/favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
      integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
    </style>
    <title>Pizza Ban</title>
    <link rel="stylesheet" href="./Style/style.css" />
    <script src="./js/jquery-3.7.1.min.js"></script>
    <style>
      .popup-form {
        display: none;
        position: fixed;
        width: 20rem;
        height: 20rem;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: var(--body-color);
        padding: 20px;
        border: 1px solid var(--title-color);
        z-index: 1000;
      }

      .popup-form input {
        padding: 1rem;
      }

      .overlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 999;
      }
    </style>
  </head>

  <body>
    <div class="models">
      <div class="pizza-item">
        <a href="">
          <div class="pizza-item--img"><img src="" /></div>
          <div class="pizza-item--add">+</div>
        </a>
        <div class="pizza-item--price"></div>
        <div class="pizza-item--name">--</div>
        <div class="pizza-item--desc">--</div>
      </div>
      <div class="cart--item">
        <img src="" />
        <div class="cart--item-nome">--</div>
        <div class="cart--item--qtarea">
          <button class="cart--item-qtmenos">-</button>
          <div class="cart--item--qt">1</div>
          <button class="cart--item-qtmais">+</button>
        </div>
      </div>
    </div>
    <header>
      <div class="menu-openner">
        <span>0</span>🛒
      </div>
    </header>
    <main class="header" id="header">
      <nav class="container">
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

      </nav>
      <div class="pizza-area"></div>

      <!--~~~~~~~~~~~~~~~ FOOTER ~~~~~~~~~~~~~~~-->
      <footer class="footer" id="contactUs">
        <div class="footer__container">
          <div>
            <a href="./menu.php" class="footer__logo">
              <img src="./img/pizzas/logo.png" alt="logo image" class="nav__logo">
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
                <li><a href="./menu.php" class="footer__link">Menus</a></li>
                <li><a href="./menu.php" class="footer__link">Offer</a></li>
                <li><a href="./contact.php" class="footer__link">Events</a></li>
              </ul>
            </div>

            <div>
              <h3 class="footer__title">Information</h3>

              <ul class="footer__links">
                <li><a href="./contact.php" class="footer__link">Contact: 09551929404</a></li>
                <li><a href="./pizza.php" class="footer__link">Order & Returns : 09460945946</a></li>
                <li><a href="./final.php" class="footer__link">Videos</a></li>
                <li><a href="./pizza.php" class="footer__link">Reservation</a></li>
              </ul>
            </div>

            <div>
              <h3 class="footer__title">Address</h3>

              <ul class="footer__links">
                <li class="footer__information">
                  Sibonga <br>
                  Plaza</li>
                <li class="footer__information">9AM - 11PM</li>
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

    </main>

    <section class="section-pizza-order">
      <div id="orderDetails">
      </div>
    </section>

    <aside>
      <div class="cart--area">
        <div class="menu-closer">❌</div>
        <h2>Your Pizzas</h2>
        <div class="cart"></div>
        <div class="cart--details">
          <div class="cart--totalitem subtotal">
            <span>Subtotal</span>
            <span>₱ --</span>
          </div>
          <div class="cart--totalitem desconto">
            <span>Discount (-10%)</span>
            <span>₱ --</span>
          </div>
          <div class="cart--totalitem total big">
            <span>Total</span>
            <span>₱ --</span>
          </div>
          <button type="button" id="deliverButton" class="cart--finalizar">
            Deliver
          </button>
        </div>
      </div>
    </aside>
    <div class="pizzaWindowArea">
      <div class="pizzaWindowBody">
        <div class="pizzaInfo--cancelMobileButton">Cancel</div>
        <div class="pizzaBig">
          <img src="" />
        </div>
        <div class="pizzaInfo">
          <h1>--</h1>
          <div class="pizzaInfo--desc">--</div>
          <div class="pizzaInfo--sizearea">
            <div class="pizzaInfo--sector">Size</div>
            <div class="pizzaInfo--sizes">
              <div data-key="0" class="pizzaInfo--size">SMALL <span>--</span></div>
              <div data-key="1" class="pizzaInfo--size">AVERAGE <span>--</span></div>
              <div data-key="2" class="pizzaInfo--size selected">LARGE<span>--</span></div>
            </div>
          </div>
          <div class="pizzaInfo--pricearea">
            <div class="pizzaInfo--sector">Price</div>
            <div class="pizzaInfo--price">
              <div class="pizzaInfo--actualPrice">₱ --</div>
              <div class="pizzaInfo--qtarea">
                <button class="pizzaInfo--qtmenos">-</button>
                <div class="pizzaInfo--qt">1</div>
                <button class="pizzaInfo--qtmais">+</button>
              </div>
            </div>
          </div>
          <div class="pizzaInfo--addButton">Add to Cart</div>
          <div class="pizzaInfo--cancelButton">Cancel</div>
        </div>
      </div>
    </div>

    <div class="overlay"></div>
    <div class="popup-form">
      <form id="myForm" class="myInformation">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required />

        <label for="location">Location:</label>
        <input type="text" id="location" name="location" required />

        <label for="number">Number:</label>
        <input type="number" id="number" name="number" required />

        <button type="button" id="submitForm">Submit</button>
      </form>
    </div>



    <script src="./js/pizzas.js"></script>
    <script>
      $(document).ready(function () {
        let cart = [];
        let modalQt = 1;
        let modalKey = 0;

        const c = (el) => $(el);
        const cs = (el) => $(el);

        pizzaJson.map((item, index) => {
          let pizzaItem = $('.models .pizza-item').clone();
          pizzaItem.attr('data-key', index);
          pizzaItem.find('.pizza-item--img img').attr('src', item.img);
          pizzaItem.find('.pizza-item--name').html(item.name);
          pizzaItem.find('.pizza-item--desc').html(item.description);

          pizzaItem.find('a').on('click', (e) => {
            e.preventDefault();
            let key = $(e.target).closest('.pizza-item').data('key');
            modalQt = 1;
            modalKey = key;

            $('.pizzaBig img').attr('src', pizzaJson[key].img);
            $('.pizzaInfo h1').html(pizzaJson[key].name);
            $('.pizzaInfo--desc').html(pizzaJson[key].description);
            $('.pizzaInfo--actualPrice').html(pizzaJson[key].price.toFixed(2));
            $('.pizzaInfo--size.selected').removeClass('selected');

            $('.pizzaInfo--size').each((sizeIndex, size) => {
              if (sizeIndex === 2) {
                $(size).addClass('selected');
              }
              $(size).find('span').html(pizzaJson[key].sizes[sizeIndex]);
            });

            $('.pizzaInfo--qt').html(modalQt);

            $('.pizzaWindowArea').css('opacity', 0).css('display', 'flex');
            setTimeout(() => {
              $('.pizzaWindowArea').css('opacity', 1);
            }, 100);
          });

          $('.pizza-area').append(pizzaItem);
        });

        function closeModal() {
          $('.pizzaWindowArea').css('opacity', 0);
          setTimeout(() => {
            $('.pizzaWindowArea').css('display', 'none');
          }, 300);
        }

        $('.pizzaInfo--cancelButton, .pizzaInfo--cancelMobileButton').each((index, item) => {
          $(item).on('click', closeModal);
        });

        $('.pizzaInfo--qtmenos').on('click', () => {
          if (modalQt > 1) {
            modalQt--;
            $('.pizzaInfo--qt').html(modalQt);
          }
        });

        $('.pizzaInfo--qtmais').on('click', () => {
          modalQt++;
          $('.pizzaInfo--qt').html(modalQt);
        });

        $('.pizzaInfo--size').each((sizeIndex, size) => {
          $(size).on('click', () => {
            $('.pizzaInfo--size.selected').removeClass('selected');
            $(size).addClass('selected');
          });
        });

        $('.pizzaInfo--addButton').on('click', () => {
          let size = parseInt($('.pizzaInfo--size.selected').data('key'));

          let identifier = pizzaJson[modalKey].id + '@' + size;

          let key = cart.findIndex((item) => item.identifier === identifier);

          if (key > -1) {
            cart[key].qt += modalQt;
          } else {
            cart.push({
              identifier,
              id: pizzaJson[modalKey].id,
              size,
              qt: modalQt,
            });
          }
          updateCart();
          closeModal();
        });

        $('.menu-openner').on('click', () => {
          if (cart.length > 0) {
            $('aside').css('left', '0');
          }
        });

        $('.menu-closer').on('click', () => {
          $('aside').css('left', '100vw');
        });

        function updateCart() {
          $('.menu-openner').html(cart.length);

          if (cart.length > 0) {
            $('aside').addClass('show');
            $('.cart').html('');

            let subtotal = 0;
            let discount = 0;
            let total = 0;

            cart.forEach((cartItem, i) => {
              let pizzaItem = pizzaJson.find((item) => item.id === cartItem.id);
              subtotal += pizzaItem.price * cartItem.qt;

              let cartElement = $('.models .cart--item').clone();

              let pizzaSizeName;
              switch (cartItem.size) {
                case 0:
                  pizzaSizeName = 'S';
                  break;
                case 1:
                  pizzaSizeName = 'M';
                  break;
                case 2:
                  pizzaSizeName = 'L';
                  break;
              }

              let pizzaName = `${pizzaItem.name} (${pizzaSizeName})`;

              cartElement.find('img').attr('src', pizzaItem.img);
              cartElement.find('.cart--item-nome').html(pizzaName);
              cartElement.find('.cart--item--qt').html(cartItem.qt);
              cartElement.find('.cart--item-qtmenos').on('click', () => {
                if (cartItem.qt > 1) {
                  cartItem.qt--;
                } else {
                  cart.splice(i, 1);
                }
                updateCart();
              });

              cartElement.find('.cart--item-qtmais').on('click', () => {
                cartItem.qt++;
                updateCart();
              });

              $('.cart').append(cartElement);
            });

            discount = subtotal * 0.1;
            total = subtotal - discount;

            $('.subtotal span:last-child').html(`₱ ${subtotal.toFixed(2)}`);
            $('.desconto span:last-child').html(`₱ ${discount.toFixed(2)}`);
            $('.total span:last-child').html(`₱ ${total.toFixed(2)}`);
          } else {
            $('aside').removeClass('show').css('left', '100vw');
          }
        }

        $('#deliverButton').click(function () {
          $('.overlay').fadeIn();
          $('.popup-form').fadeIn();
        });

        $('#submitForm').click(function () {
          const name = $('#name').val();
          const location = $('#location').val();
          const number = $('#number').val();

          if (name && location && number) {
            alert(`Delivering pizza to:\nName: ${name}\nLocation: ${location}\nNumber: ${number}`);
            $('.popup-form').fadeOut();
            $('.overlay').fadeOut();
          } else {
            alert('Please fill out all fields.');
          }
        });

        $('.overlay').click(function () {
          $('.popup-form').fadeOut();
          $('.overlay').fadeOut();
        });
      });

      function displayValues() {
        const name = $('#name').val();
        const location = $('#location').val();
        const number = $('#number').val();

        const orderDetails = `
                <p><strong>Name:</strong> ${name}</p>
                <p><strong>Location:</strong> ${location}</p>
                <p><strong>Number:</strong> ${number}</p>
            `;

        $('#orderDetails').html(orderDetails);
        $('.section-pizza-order').css('display', 'block');
      }
    </script>
  </body>

</html>
