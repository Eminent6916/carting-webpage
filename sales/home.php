<?php
      session_start();
      include('rightpic.php');
      if (isset($_POST['signn'])) {
      $_SESSION['lastname'] = ucfirst($_POST ['lname']);
      }
    
      if(empty($_SESSION['lastname'])){
          $_SESSION['lastname'] = 'Guest';}

    //   // Set or increment session number only if button is clicked.
    //   if(empty($_SESSION['noofcart'])){
    //       $_SESSION['noofcart'] = '';}
    //   if(!empty($_SESSION["cartitem"])){
    //     $_SESSION['noofcart'] =  count($_SESSION["cartitem"]);
    //   }
    if(empty($_SESSION['noofcart'])){
        $_SESSION['noofcart'] ='0';}
      if(!empty($_SESSION['noofcart'])){
      $_SESSION['noofcart'] = count($_SESSION["cartitem"]);}
?>
<!DOCTYPE html>
<html lang="en">
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="./images/logo.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="home.css">
   <title>Akube.com</title>
</head>
<body>
<section class="overall">
        <!-- Top section -->
        <div class="top--section">
            <div class="container">
                <header>
                <div class="logo"></div>
                 <a class="logo" href="">
                     <img  width="80px" height="80px" src="./images/logo.png">
                 </a>
                 <div class="searchform">
  
                 <form action="productList" method="GET" class="searchmother" >
                                <!-- <svg viewBox="0 0 24 24" class="search" width="24px" height="24px">
                                     </svg> -->
                                     <div class="input-container">
                                <i class="fa fa-search icon"></i>
                    <input class="input-field" type="text" name="search" id="search" width="100%" placeholder="Search Goods, Brands and Categories"  required="">
                    <a class="searchbutton" href="" onclick="search" type="reset"><img src="images\search.png" width="30px" height="30px"></a>                
                </div>
                                    <!-- <input type="text" name="search" id="search" width="100%" placeholder="Search Goods, Brands and Categories"  required=""> -->
                 </form>
                 </div>
                    <nav class="toptext"> <h1>Akube.com</h1> </nav>
                    <nav class="navg">
                    <ul>
                    
                            <li><a href="home.php"><button class="home" class="dropdown-content">Home</button></a></li>
                            <li><div class="dropdown">
                                <button class="dropbtn">Product</button>
                                <div class="dropdown-content">
                                    <a href="#">Assessories</a>
                                    <a href="#">Cloths</a>
                                    <a href="product.php">Shoes</a>
                                </div>
                                </div>
                            </li> 
    
                            <li><div class="dropdown">
                                <button class="dropbtn">Help</button>
                                <div class="dropdown-content">
                                    <a href="#">Track my Order</a>
                                    <a href="#">FAQs</a>
                                    <a href="#">Contact Us</a>
                                </div>
                                </div>
                            </li>
                        
                            </nav>
                            <nav class="cart"> 
                            <li><a href="cart.php" class="cart" style="color:rgb(17, 228, 243); font-variant-position: super; display:flex; 
                            "> <img src="images\shopping-cart.png" width="45px" height="45px" style="display:flex; " ><?php echo'<em>'.$_SESSION['noofcart'].'</em>';?></a></li>
                            <li><a href=""a href="" class="profile" style=" display:flex">
                            <img src="images\user-profile.png"  width="45px" height="45px" style="display:flex; " ></a></li>
                            </nav>
                            <nav class="profile">
                            </nav>
                    
                    </ul>
                    
                    </nav>
        <nav>
            </div>
        </nav>
    </header>
    </div>
    <section class="hbody">
        <div class="hbodydd"><p><h1>Welcome, how are you doing today <?php echo  $_SESSION['lastname'];?> </h1></p> <br>
        <p><h2><em><strong style=" color : red">Error1031!</strong> Sorry Dear loyal customer our website is under repair, click on <a href="product.php">Products</a> to explore & shop</em></h2></p>
        </div>
   <div> <img class = "giff"src="images\Gray Ripped Black Friday Video.gif"  alt="ads" style="width:420px;height:300px;">
   </div>
</section> </body>

</html>