<!doctype html>
<?php $css_path = "home.css"; ?>
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
                     <h1> Explore the marketplace.</h1>
                     <h2> Buy. Sell. Enjoy.</h2>
                  </div>
               </div>
            </div>
         </div>
         </div>
         <div id="crumpet">
            <h1 id="section4h1">Item name</h1>
            <div id="section4">
               <img id="pic3"
                  src="./images/dummy_600x400_ab96ab_f0e4f2_image.png">
               <article>
                  <h2>Price: £10</h2>
                  <p>Condition: New</p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Curabitur gravida arcu ac tortor dignissim convallis aenean.</p>
                  <p> Mattis molestie a iaculis at erat pellentesque adipiscing. Sed id semper risus in hendrerit gravida rutrum quisque non. Nibh mauris cursus mattis molestie a iaculis at erat pellentesque.</p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sed id semper risus in hendrerit gravida rutrum quisque non. </p>
                  <a href="basket.html"><button>Add to Basket</button></a>    
               </article>
            </div>
         </div>
         <div class="seller-info">
            <h2>About the seller</h2>
            <div class="seller-details">
              <img src="images/account_circle_black_24dp.svg" alt="account icon" class="seller-icon" />
              <h3 class="seller-name">Seller's name</h3>
            </div>
            <p class="feedback">100% positive feedback&nbsp;(&nbsp;<span class="star-rating">105</span>&nbsp;<img src="images/icons8-star-48.png" alt="star rating icon" class="star-icon">)&nbsp;</p>
            <h4>Reviews</h4>
            <ul class="customer-reviews">
              <li>
                <div class="customer-info">
                  <img src="images/account_circle_black_24dp.svg" alt="account icon" class="profile-icon" />
                  <h5 class="customer-name">Customer's name</h5>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Curabitur gravida arcu ac tortor dignissim convallis aenean. Mattis molestie a iaculis at erat pellentesque adipiscing. Sed id semper risus in hendrerit gravida rutrum quisque non. Nibh mauris cursus mattis molestie a iaculis at erat pellentesque. Curabitur gravida arcu ac tortor dignissim convallis aenean.</p>
              </li>
              <li>
                <div class="customer-info">
                  <img src="images/account_circle_black_24dp.svg" alt="account icon" class="profile-icon" />
                  <h5 class="customer-name">Customer's name</h5>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Curabitur gravida arcu ac tortor dignissim convallis aenean. Mattis molestie a iaculis at erat pellentesque adipiscing. Sed id semper risus in hendrerit gravida rutrum quisque non. Nibh mauris cursus mattis molestie a iaculis at erat pellentesque. Curabitur gravida arcu ac tortor dignissim convallis aenean.</p>
              </li>
            </ul>
          </div>
          <div class="contact-seller">
            <h2>Contact Seller</h2>
            <form>
              <label for="message">Your message (max 100 words)</label>
              <textarea id="message" name="seller-message" rows="4" cols="40" placeholder="Type your message here (max 100 words)"></textarea>
              <button type="submit">Send message</button>
            </form>
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
                  <li><a href="home.html">Home</a>
                  <li><a href="buy.html">Buy</a>
                  <li><a href="sell/sell.html">Sell</a>
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
