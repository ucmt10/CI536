<?php $css_path = "signup.css"; ?>
<?php include 'header.php'; ?>
<!doctype html>
<html lang="en">

        <div id="section1">

            <div id="logotxt">
                <img id="logo" src="./images/brighton bazaar.svg" alt="Italian Trulli">
                <div id="textcontainer">
                    <h2>Weclome to Brighton Bazaar!</h2>
                    <h2>Enter your details to signup</h2>
            </div>
            </div>
            
            <div id="signupform">
                <form action="includes/signup-inc.php" method ="post">
                    <input type="text" name="name" placeholder="Full name...">
                    <input type="text" name="email" placeholder="Email...">
                    <input type="text" name="uid" placeholder="Username...">
                    <input type="password" name="pwd" placeholder="Password...">
                    <input type="password" name="pwdrepeat" placeholder="Repeat Paswsword...">
                    <button type="submit" name="submit">Sign Up</button>
                
                </form>
                
                
            </div>

           
        </div>


        
<?php
if(isset($_GET["error"])){
    if($_GET["error"]== "emptyinput"){
        echo "<p>Fill in all fields!</p>";
    }
     else if($_GET["error"]== "invlaiduid"){
        echo "<p>Choose a proper username w/ letters+numbers</p>";
    }
    
     else if($_GET["error"]== "invlaidemail"){
        echo "<p>Choose a proper email</p>";
    }
    
     else if($_GET["error"]== "passwordsdontmatch"){
        echo "<p>Passwords do not match :(</p>";
    }
    
    
     else if($_GET["error"]== "stmtfailed"){
        echo "<p>Something went wrong, please try again (SQL)</p>";
    }
    
     else if($_GET["error"]== "usernametaken"){
        echo "<p>Username already taken</p>";
    }
    
     else if($_GET["error"]== "none"){
        echo "<p>Youre all signed up!</p>";
    }
}
?>


        



           

           

    </main>
    <footer>

    </footer>

</body>


</html>
