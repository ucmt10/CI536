<?php
session_start();
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
<link href="<?php echo $css_path; ?>" rel="stylesheet" />
    <script src="home.js"></script>
    <title>Brighton Bazaar</title>
</head>

<body>


    <main>
        <header>

            <div class="topbar">

                <div class="navigation">

                    <a href="home.php">Home</a>
                    <a href="buy.php">Buy</a>
                     <a href="sell.php">Sell</a>
                     
<?php
if(isset($_SESSION["useruid"])){
    echo '<a href="profile.php">Profile</a>';
    echo '<a href="includes/logout-inc.php">Log Out</a>';
}
else{
    echo '<a href="login.php">Log In</a>';
    echo '<a href="signup.php" id="signup">Sign Up</a>';
}
?>
                     
                
                    <form id="form">
                        <input type="search" class="search" id="query" placeholder="Seach images....">
                        <button>
                            <svg viewBox="0 0 1024 1024">
                                <path class="path1"
                                    d="M848.471 928l-263.059-263.059c-48.941 36.706-110.118 55.059-177.412 55.059-171.294 0-312-140.706-312-312s140.706-312 312-312c171.294 0 312 140.706 312 312 0 67.294-24.471 128.471-55.059 177.412l263.059 263.059-79.529 79.529zM189.623 408.078c0 121.364 97.091 218.455 218.455 218.455s218.455-97.091 218.455-218.455c0-121.364-103.159-218.455-218.455-218.455-121.364 0-218.455 97.091-218.455 218.455z">
                                </path>
                            </svg>
                        </button>
                        <a href="basket.html" id="shopping-basket">
              <img
                src="images/shopping_cart_black_24dp.svg"
                alt="Shopping Basket"
                id="basket-icon-black"
              />
              <span id="basket-count">0</span>
            </a>
                    </form>
                </div>
            </div>

        </header>