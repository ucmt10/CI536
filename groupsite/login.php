<?php $css_path = "login.css"; ?>
<?php include 'header.php'; ?>
<!doctype html>
<html lang="en">

        <div id="section1">

            <div id="logotxt">
                <img id="logo" src="./images/brighton bazaar.svg" alt="Italian Trulli">
                <div id="textcontainer">
                    <h2>Weclome to Brighton Bazaar!</h2>
                    <h2>Enter your details to Log In</h2>
            </div>
            </div>
            
            <div id="loginform">
                <form action="includes/login-inc.php" method ="post">
                    <input type="text" name="uid" placeholder="Email/Username...">
                    <input type="password" name="pwd" placeholder="Password...">
                    <button type="submit" name="submit">Log In</button>
                </form>
                
                
            </div>
            <div id="errorlogs">
<?php
    if(isset($_GET["error"])){
    if($_GET["error"]== "emptyinput"){
        echo "<p>Fill in all fields!</p>";
    }
     else if($_GET["error"]== "wronglogin"){
        echo "<pIncorrect login information</p>";
    }
}
   
?>
            </div>

           
        </div>


        


        



           

           

    </main>
    <footer>

    </footer>

</body>


</html>
