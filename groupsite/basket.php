<!DOCTYPE html>
<?php $css_path = "basket.css"; ?>
<?php include 'header.php'; ?>
      <div id="butter">
        <div id="loginsection">
          <button id="leavelogin">X</button>
          <div id="loginill">
            <img id="login" src="./images/13.svg" alt="man on laptop" />
          </div>
          <div class="logincontainer">
            <h2>Weclome back! Please Log In</h2>
            <label for="uname"><b>Username</b></label>
            <input
              type="text"
              placeholder="Enter Username"
              name="uname"
              required
            />
            <label for="psw"><b>Password</b></label>
            <input
              type="password"
              placeholder="Enter Password"
              name="psw"
              required
            />
            <button id="submit" type="submit">Login</button>
            <label>
              <input type="checkbox" checked="checked" name="remember" />
              Remember me
            </label>
          </div>
        </div>
        <div id="section1">
          <div id="logo+txt">
            <img
              id="logo"
              src="./images/brighton bazaar.svg"
              alt="Italian Trulli"
            />
            <div id="textcontainer">
              <h1>Explore the marketplace.</h1>
              <h2>Buy. Sell. Enjoy.</h2>
            </div>
          </div>
        </div>
      </div>
      <div class="shopping-basket">
        <table>
          <thead>
            <tr>
              <th>Item</th>
              <th>Price</th>
              <th>Quantity</th>
              <th>Subtotal</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <div class="basket-item">
                  <img
                    src="./images/dummy_600x400_ab96ab_f0e4f2_image.png"
                    alt="Item 1"
                  />
                  <div class="item-details">
                    <h3>Item 1</h3>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </p>
                  </div>
                </div>
              </td>
              <td>£12.00</td>
              <td>
                <input type="number" value="1" min="1" data-price="12.99" />
              </td>
              <td class="item-subtotal"></td>
            </tr>
            <tr>
              <td>
                <div class="basket-item">
                  <img
                    src="./images/dummy_600x400_ab96ab_f0e4f2_image.png"
                    alt="Item 2"
                  />
                  <div class="item-details">
                    <h3>Item 2</h3>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </p>
                  </div>
                </div>
              </td>
              <td>£15.00</td>
              <td>
                <input type="number" value="1" min="1" data-price="21.99" />
              </td>
              <td class="item-subtotal"></td>
            </tr>
          </tbody>
          <tfoot>
            <tr>
              <td colspan="3">Total</td>
              <td class="basket-total"></td>
            </tr>
            <tr>
              <td colspan="4">
                <button class="button-shopping">
                  <a href="buy.html">Continue Shopping</a>
                </button>
                <button class="button-delivery">
                  <a href="delivery_address.html">Checkout</a>
                </button>
              </td>
            </tr>
          </tfoot>
        </table>
      </div>
    </main>
    <footer>
      <div class="footer-container">
        <div class="column about-us">
          <h3>About Us</h3>
          <p>
            Brighton Bazaar is a student marketplace where you can buy and sell
            a variety of products.
          </p>
          <p>Contact us to learn more!</p>
        </div>
        <div class="column quick-links">
          <h3>Quick Links</h3>
          <ul>
            <li><a href="home.html">Home</a></li>
            <li><a href="buy.html">Buy</a></li>
            <li><a href="sell/sell.html">Sell</a></li>
            <li><a href="#">Contact Us</a></li>
          </ul>
        </div>
        <div class="column company-name">
          <h3>Brighton Bazaar</h3>
          <p>1 Main St.</p>
          <p>BN15PF Brighton</p>
          <p>(01273) 12345678</p>
          <p>brightonbazaar@gmail.com</p>
        </div>
      </div>
      <div class="sub-footer">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <p>&copy; 2023 Brighton Bazaar. All Rights Reserved.</p>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>
