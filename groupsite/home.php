<?php $css_path = "home.css"; ?>
<?php include 'header.php'; ?>
<div id="butter">
    <div id="loggedin">
        <?php
        if(isset($_SESSION["useruid"])){
            echo "<p>Welcome " . $_SESSION["useruid"] . "</p>";
        }
        ?>
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
            <h1 id="section4h1">About Us</h1>

            <div id="section4">
                <img id="pic2"
                    src="./images/undraw_shopping__bags_mjvf.svg">
        <article>

            <h3>Meet: Brighton Bazaar</h3>
            <p>Welcome to Brighton Bazaar, the vibrant student marketplace community for buying and selling items and services in the bustling city of Brighton </p>

            <p>As a student, you are always looking for ways to save money and make your budget stretch further. Brighton Bazaar is the perfect platform for you to do just that! With a wide range of items and services on offer, from textbooks and stationary to fashion and electronics, you're sure to find what you're looking for at a great price.</p>
                
            <p>But Brighton Bazaar is more than just a marketplace. It's a community of like-minded students who are passionate about helping each other out and making the most of their time in Brighton. Whether you're a new student looking for advice on the best places to go or an experienced local wanting to share your knowledge, Brighton Bazaar is the place to be.</p>
                
            <p>So how does it work? It's simple! As a buyer, you can browse through listings for items and services that interest you. You can contact the seller directly to ask questions or make an offer. Once you've agreed on a price, you can arrange to meet up and exchange the item or service. It's a great way to save money and get to know other students at the same time.</p>
                
            <p>As a seller, you can list your items or services for free. You can upload photos and descriptions of your items, and set your own prices. You can also choose whether to sell your item locally or to offer shipping to other areas. Once you've found a buyer, you can arrange to meet up and complete the transaction.</p>
                
            <p>At Brighton Bazaar, we believe that buying and selling should be easy and hassle-free. That's why we've created a platform that is safe, secure, and easy to use. We take your privacy seriously and will never share your personal information with third parties. We also have a dedicated support team who are available to answer any questions you may have.</p>
        </article>

            </div>
            </div>

            <div id="tea">

            <div id="section2">
                <div id="sellers">
                    <div id="section2txtL">
                        <h2><a href="sell/sell.html">For Students</a></h2>
                        <p>Sell your stuff amoung thousands of other students</p>
                    </div>
    
                    <img id="nft1" src="./images/nfts/Comic book store by Mariel Rodriguez.jfif"
                        alt="image of a cartoon style NFT">
                </div>
    
                <div id="buyers">
                    <img id="nft2" src="./images/nfts/Gavin Parker - Art & Design.jfif" alt="image of a cartoon style NFT">
                    <div id="section2txtR">
    
                        <h2><a href="/buy.html">For Buyers</a></h2>
                        <p>Buy from our many vendors</p>
                    </div>
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
              <li><a href="home.html">Home</a>
              <li><a class="active" href="#buy">Buy</a>
              <li><a href="sell/sell.html">Sell</a>
              <li><a href="#">Contact Us</a></li>
            </ul>
          </div>
          <div class="column company-name">
            <h3>Brighton Bazaar</h3>
            <p>123 Main St.</p>
            <p>Brighton, MA 02135</p>
            <p>(617) 555-1234</p>
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
