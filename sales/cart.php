<?php
  include ('new.php');
  error_reporting(0);
  ini_set('display_errors', 0);

  if(empty($_SESSION['cartitem'])){
    $_SESSION['cartmessage'] = 'Sorry, '.$_SESSION['lastname'].' you don\'t have any wish items list yet. Kindly please check on our products to cart';
    $_SESSION['cartitem']= array();
  }
  
  if(isset($_POST['cart'])){
    $_SESSION['cartmessage'] = '<h1 style = "font-weight: bolder"; "font-size: x-large;"> Hi '. $_SESSION['lastname']. ' purchase your wish items now when it\'s still cheap and available.</h1> <br> Thanks, Dear loyal customer your wish items is display as follow:';
    $_SESSION['carttemp'] = array(
      "name" =>$_SESSION['name'],
      "price" =>$_SESSION['price'],

    );
         // permanent storage for cart item
         array_push($_SESSION['cartitem'], $_SESSION['carttemp']);
    //  unset($_SESSION['carttemp']);
  }
  // unset($_SESSION['cartitem']);
  // unset($_SESSION['noofcart'])

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="images\logo.png">
    <link rel="stylesheet" href="main.css">
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
                            "> <img src="images\shopping-cart.png" width="45px" height="45px" style="display:flex; " ><?php echo'<em>'.$_SESSION["noofcart"].'</em>';?></a></li>
                            <li><nav class="profile dropdown" > <form method="$_POST" >
                            <button class="dropbtn"><img src="images\user-profile.png"  width="45px" height="45px" style="display:flex; " ></button>
                                <div class="dropdown-content">
                                    <a href="#">Sign In</a>
                                    <a name="signout"  >Sign Out</a>
                                    <a href="#">Profile</a> </form>
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
        <!-- Main content -->
  <section class="main--container">
      
      <div class="container">
      <img width="150px" height="150px" src="images\24-hours.png" class="rounded mx-auto d-block" alt="open">
      <p class ="greeting font-weight-bold"><h1><?php echo $_SESSION['cartmessage'];?></h1>
      <br><br>
      <section class= "shelf">

<?php 
  // card information to display
    // loop through  cartitems file
    // $_SESSION["cartitem"] = array_map('array_filter', $_SESSION["cartitem"]);
    // $_SESSION["cartitem"] = array_filter($_SESSION["cartitem"]);
    $itemno = (int)count($_SESSION["cartitem"]);
    for ($n=0; $n < $itemno; $n++) { 
     $name = $_SESSION["cartitem"][$n]['name'];
     $price = $_SESSION["cartitem"][$n]['price'];
    //  $detail = $_SESSION["cartitem"][$n]['detail'];
     
           $carthtml = '<div class="gallery" ><a href="" class="gallery"  data-toggle="modal" data-target="#myModal'.(1 + $n).'">
           <img src="images\products\\'.$name.'1.jpeg" alt="Shoe"></a>'; echo $carthtml;}
          
           $itemno = (int)count($_SESSION["cartitem"]);
           for ($n=0; $n < $itemno; $n++) { 
            $name = $_SESSION["cartitem"][$n]['name'];
            $price = $_SESSION["cartitem"][$n]['price'];
            // $detail = $_SESSION["cartitem"][$n]['detail'];

            $carthtmlmodal='<div id="myModal'.(1 + $n).'" class="modal fade" role="dialog">
                     <div class="modal-dialog">
                      <!-- Modal content   -->
                       <div class="modal-content text-dark bg-gradient">
                         <div class="modal-header">
                           <button type="button" class="close" data-dismiss="modal">&times;</button>
                           <h4 class="modal-title">Akube.com</h4>
                         </div>
                         <div class="modal-body">
                           <div class="card" style="width: 18rem;">
                           <div id="carouselExampleIndicators'.(2 + $n).'" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                   <div class="carousel-item active">
                       <img class="w-100" src="images\products\\'.$name.'1.jpeg" alt="image">
                   </div>
                   <div class="carousel-item">
                       <img class="w-100" src="images\products\\'.$name.'2.jpeg" alt="image">
                   </div>
                   <div class="carousel-item">
                       <img class="w-100" src="images\products\\'.$name.'3.jpeg" alt="image">
                   </div>
                   
               </div>
               <a class="carousel-control-prev" href="#carouselExampleIndicators'.(2 + $n).'" role="button" data-slide="prev">
                   <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                   <span class="sr-only">Previous</span>
               </a>
               <a class="carousel-control-next" href="#carouselExampleIndicators'.(2 + $n).'" role="button" data-slide="next">
                   <span class="carousel-control-next-icon" aria-hidden="true"></span>
                   <span class="sr-only">Next</span>
               </a>
           </div>
                       
                           <div class="card-body">
                             <h5 class="card-title">'.$name.' - '.$price.'</h5>
                             <p class="card-text"> Authentic and Original'.$name.' grade-A footware from UK</p>
                           </div>
                           <ul class="list-group list-group-flush">
                             <form class="cart-form" method="POST" action="cart.php">
                             <li class="list-group-item">
                             <input class="form-control" type="text" name="name" id="name" value="'.$name.'" readonly="readonly"  ></li>
                             <input class="form-control" type="text" name="price" id="price" value="'.$price.'" readonly="readonly"  ></li>
       
         
                           </ul>
                           <div class="card-body">
                             <a href="" class="card-link'.(2 + $n).'"><button name="uncart" > Uncart </button></a>
                             <a href="" class="card-link'.(2 + $n).'"><button> Buy </button></a>
                           </div>
                         </div>
                       </div>
                       <div class="modal-footer">
                         <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                         </form>
                       </div>
                     </div>
                     </div>
                     </div>
                     </div>  
           ';
       
          echo $carthtmlmodal;
    }

    if(empty($_SESSION['noofcart'])){
      $_SESSION['noofcart'] ='0';}
    if(!empty($_SESSION['noofcart'])){
    $_SESSION['noofcart'] = count($_SESSION["cartitem"]);}

?>
      

      </div>
    </div>

</body>
</html>
<script>
      if ( window.history.replaceState ) {
      window.history.replaceState( null, null, window.location.href );
    }
  </script> 
 