<?php $css_path = "sell.css"; ?>
<?php include 'header.php'; ?>
<!doctype html>
<html lang="en">

        <div id="section1">
            <div id="ani_GIF">
                    <img id="GIF_1" src="images/GIF_1.gif"
                    alt="an image for sell an item">   
            </div>
        </div>
        <div id="textcontainer_1">
            <h1> Weclome! </h1>
            <h2> Let's post an ad</h2>
            
            <div id="sellingform">
                <form action="../includes/sell-inc.php" method ="post">
                    <input type="text" name="title" placeholder="Enter the title...">
                    <input type="text" name="author" placeholder="Enter the author...">
                    <input type="text" name="date" placeholder="Enter the date...">
                    <input type="text" name="ISBN" placeholder="Enter the ISBN...">
                    <input type="text" name="price" placeholder="Enter your selling price...">

                    <button type="submit" name="submit">Sell</button>
                </form>
            
            <?php
if(isset($_GET["error"])){
    if($_GET["error"]== "emptyinput"){
        echo "<p>Fill in all fields!</p>";
    }
}
?>
        
        </div>

    



    </main>
    <footer>

    </footer>

</body>


</html>