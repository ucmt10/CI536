<?php $css_path = "buy.css"; ?>
<?php include 'header.php'; ?>
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
              <h1>Choose category</h1>
              <h2>Enjoy shopping!!!</h2>
            </div>
          </div>
        </div>
      </div>
      <div id="toast">
        <h1 id="section3h1">Top Categories</h1>
        <div id="section3">
          <div id="b1">
            <a href="electronics.php">
              <img
                id="pic"
                src="./images/davide-boscolo-gz9njd0zYbQ-unsplash3.jpg"
                alt="category image"
              />
            </a>
            <h2 class="electronics-heading">
              <a href="electronics.php">Electronics</a>
            </h2>
          </div>
          <div id="b2">
            <img
              id="pic"
              src="./images/hope-house-press-leather-diary-studio-IOzk8YKDhYg-unsplash3.jpg"
              alt="category image"
            />
            <h2>Books</h2>
          </div>
          <div id="b3">
            <img
              id="pic"
              src="./images/artboard-studio-c-KRSHct7Ho-unsplash3.jpg"
              alt="category image"
            />
            <h2>Stationary</h2>
          </div>
          <div id="b4">
            <img
              id="pic"
              src="./images/alexandra-gorn-WF0LSThlRmw-unsplash3.jpg"
              alt="category image"
            />
            <h2>Fashion</h2>
          </div>
          <div id="b5">
            <img
              id="pic"
              src="./images/erica-steeves-PfQh55R0ZtE-unsplash3.jpg"
              alt="category image"
            />
            <h2>Sports</h2>
          </div>
          <div id="b6">
            <img
              id="pic"
              src="./images/kelli-mcclintock-GopRYASfsOc-unsplash3.jpg"
              alt="category image"
            />
            <h2>Other</h2>
          </div>
        </div>
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
            <li><a href="home.php">Home</a></li>
            <li><a class="active" href="#buy">Buy</a></li>
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
