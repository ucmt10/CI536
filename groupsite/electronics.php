<?php $css_path = "electronics.css"; ?>
<?php include 'header.php'; ?>
         <div id="butter">
         <div id="loginsection">
            <button id="leavelogin">X</button>
            <div id="loginill">
               <img id="login" src="./images/13.svg" alt="man on laptop">
            </div>
            <div class="logincontainer">
               <h2> Weclome back! Please Log In</h2>
               <label for="uname"><b>Username</b></label>
               <input type="text" placeholder="Enter Username" name="uname" required>
               <label for="psw"><b>Password</b></label>
               <input type="password" placeholder="Enter Password" name="psw" required>
               <button id="submit" type="submit">Login</button>
               <label>
               <input type="checkbox" checked="checked" name="remember"> Remember me
               </label>
            </div>
         </div>
         
         <div id="section1">
         <div id="logo+txt">
            <img id="logo" src="./images/brighton bazaar.svg" alt="Italian Trulli">
            <div id="textcontainer">
               <h1> Browse items</h1>
               <h2> Enjoy shopping!!!</h2>
            </div>
         </div>
         <section id="search">
            <div class="container">
               <form action="/action_page.php" id="search-form">
                  <div class="row">
                     <div class="col-md-6">
                        <h2 class="search-title">Search for Electronics</h2>
                        <div class="form-group">
                           <label for="keywords">Keywords:</label>
                           <input type="text" id="keywords" name="keywords" class="form-control">
                        </div>
                        <div class="form-group">
                           <label for="category">Category:</label>
                           <select name="category" id="category" class="form-control">
                              <option value="">All categories</option>
                              <option value="mobile-phones">Mobile phones</option>
                              <option value="tablets-ipads">Tablets/iPads</option>
                              <option value="computers">Computers</option>
                              <option value="cameras">Cameras</option>
                           </select>
                        </div>
                        <div class="form-group">
                           <label for="condition">Condition:</label>
                           <select name="condition" id="condition" class="form-control">
                              <option value="">All conditions</option>
                              <option value="new">New</option>
                              <option value="used">Used</option>
                              <option value="good">Good</option>
                              <option value="acceptable">Acceptable</option>
                           </select>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group">
                           <label for="price-range">Price range:</label>
                           <input type="range" id="price-range" name="price-range" min="0" max="1000" class="form-range">
                           <div class="range-values">
                              <span class="min-value">$0</span>
                              <span class="max-value">$1000+</span>
                           </div>
                        </div>
                        <div class="form-group">
                           <label for="rating">Minimum rating:</label>
                           <input type="number" id="rating" name="rating" class="form-control" min="0" max="5" step="0.1">
                        </div>
                        <div class="form-group">
                           <label for="sort-by">Sort by:</label>
                           <select name="sort-by" id="sort-by" class="form-control">
                              <option value="best-match">Best match</option>
                              <option value="date-added">Date added</option>
                              <option value="lowest-price">Lowest price</option>
                              <option value="highest-price">Highest price</option>
                           </select>
                        </div>
                     </div>
                  </div>
                  <button type="submit" class="btn btn-primary">Search</button>
               </form>
            </div>
         </section>
         <div id="toast">
            <h1 id="section3h1">Electronics</h1>
            <div id="section3">
               <div class="item">
                  <a href="item.php" class="item-link">
                    <img src="./images/dummy_600x400_ab96ab_f0e4f2_image.png" alt="item image">
                    <h2>Item 1</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit vulputate.</p>
                    <p>Price: £10</p>
                  </a>
                </div>
               <div class="item">
                  <img src="./images/dummy_600x400_ab96ab_f0e4f2_image.png" alt="item image">
                  <h2>Item 2</h2>
                  <p>Lorem ipsum dolor sit amet consectetur adipiscing elit vulputate.</p>
                  <p>Price: £20</p>
               </div>
               <div class="item">
                  <img src="./images/dummy_600x400_ab96ab_f0e4f2_image.png" alt="item image">
                  <h2>Item 3</h2>
                  <p>Lorem ipsum dolor sit amet consectetur adipiscing elit vulputate.</p>
                  <p>Price: £30</p>
               </div>
               <div class="item">
                  <img src="./images/dummy_600x400_ab96ab_f0e4f2_image.png" alt="item image">
                  <h2>Item 4</h2>
                  <p>Lorem ipsum dolor sit amet consectetur adipiscing elit vulputate.</p>
                  <p>Price: £40</p>
               </div>
               <div class="item">
                  <img src="./images/dummy_600x400_ab96ab_f0e4f2_image.png" alt="item image">
                  <h2>Item 5</h2>
                  <p>Lorem ipsum dolor sit amet consectetur adipiscing elit vulputate.</p>
                  <p>Price: £40</p>
               </div>
               <div class="item">
                  <img src="./images/dummy_600x400_ab96ab_f0e4f2_image.png" alt="item image">
                  <h2>Item 6</h2>
                  <p>Lorem ipsum dolor sit amet consectetur adipiscing elit vulputate.</p>
                  <p>Price: £40</p>
               </div>
            </div>
         </div>
      </main>
      <footer>
         <div class="footer-container">
            <div class="column about-us">
               <h3>About Us</h3>
               <p>Brighton Bazaar is a student marketplace where you can buy and sell a variety of products.</p>
               <p>Contact us to learn more!</p>
            </div>
            <div class="column quick-links">
               <h3>Quick Links</h3>
               <ul>
                  <li><a href="home.php">Home</a>
                  <li><a class="active" href="#buy">Buy</a>
                  <li><a href="sell.php">Sell</a>
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
