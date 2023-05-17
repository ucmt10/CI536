<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/normalize.css" rel="stylesheet">
    <link href="home.css" rel="stylesheet" />
    <script src="home.js"></script>
    <title>Brighton Bazaar</title>
</head>

<body>


    <main>
        <header>

            <div class="topbar">

                <div class="navigation">
                    
                    <a href="home.php">Home</a>
                    <a class="active" href="#buy">Buy</a>
                    <a href="sell/sell.php">Sell</a>
                    <a href="login.php">Log In</a>
                    <a href="#signup" id="signup">Sign Up</a>
                    <form id="form">
                        <input type="search" class="search" id="query" placeholder="Seach images....">
                        <button>
                            <svg viewBox="0 0 1024 1024">
                                <path class="path1"
                                    d="M848.471 928l-263.059-263.059c-48.941 36.706-110.118 55.059-177.412 55.059-171.294 0-312-140.706-312-312s140.706-312 312-312c171.294 0 312 140.706 312 312 0 67.294-24.471 128.471-55.059 177.412l263.059 263.059-79.529 79.529zM189.623 408.078c0 121.364 97.091 218.455 218.455 218.455s218.455-97.091 218.455-218.455c0-121.364-103.159-218.455-218.455-218.455-121.364 0-218.455 97.091-218.455 218.455z">
                                </path>
                            </svg>
                        </button>
                    </form>
                </div>
            </div>

        </header>
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
                    <h1> Choose category</h1>
                    <h2> Enjoy shopping!!!</h2>
                </div>
            </div>

        </div>

</div>
    <div id="toast">


        <h1 id="section3h1">Top Categories</h1>

        <div id="section3">

            <div id="b1">
                <img id="pic" src="./images/davide-boscolo-gz9njd0zYbQ-unsplash3.jpg"
                    alt="category image">
                <h2>Electronics</h2>
            </div>

            <div id="b2">
                <img id="pic" src="./images/hope-house-press-leather-diary-studio-IOzk8YKDhYg-unsplash3.jpg"
                    alt="category image">
                    <h2>Books</h2>
            </div>

            <div id="b3">
                <img id="pic" src="./images/artboard-studio-c-KRSHct7Ho-unsplash3.jpg"
                    alt="category image">
                    <h2>Stationary</h2>


            </div>

            <div id="b4">
                <img id="pic" src="./images/alexandra-gorn-WF0LSThlRmw-unsplash3.jpg"
                    alt="category image">
                    <h2>Fashion</h2>


            </div>

            <div id="b5">
                <img id="pic" src="./images/erica-steeves-PfQh55R0ZtE-unsplash3.jpg"
                    alt="category image">
                    <h2>Sports</h2>


            </div>

            <div id="b6">
                <img id="pic" src="./images/kelli-mcclintock-GopRYASfsOc-unsplash3.jpg"
                    alt="category image">
                    <h2>Other</h2>


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
