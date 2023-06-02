<!DOCTYPE html>
<?php $css_path = "deliver_address.css"; ?>
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
      <form id="formdeliveryaddress" action="./payments/pay.html">
        <h2>Delivery Address</h2>
        <label for="name">Full Name</label>
        <input
          type="text"
          id="name"
          name="name"
          placeholder="Your name.."
          required
        />
        <label for="address">Address</label>
        <textarea
          id="address"
          name="address"
          placeholder="Your address.."
          required
        ></textarea>
        <label for="city">City</label>
        <input
          type="text"
          id="city"
          name="city"
          placeholder="Your city.."
          required
        />
        <label for="county">County</label>
        <input
          type="text"
          id="state"
          name="state"
          placeholder="Your county.."
          required
        />
        <label for="post code">Post Code</label>
        <input
          type="text"
          id="post code"
          name="post code"
          placeholder="Your post code.."
          required
        />
        <button type="submit" name="submit-address">
          Submit Address
        </button>
      </form>
      
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
            <li><a href="home.php">Home</a></li>
            <li><a href="buy.php">Buy</a></li>
            <li><a href="sell.php">Sell</a></li>
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
