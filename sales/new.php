<?php
session_start(); 
include('rightpic.php');
// $_SESSION['noofcart'] = 0;
error_reporting(0);
ini_set('display_errors', 0);
// session for name of cart
if(empty($_SESSION['name'])){
  $_SESSION['name'] = '';}

if(isset($_POST['cart'])){
  $_SESSION['name'] = $_POST['name'];
}
// session for price of cart
if(empty($_SESSION['price'])){
  $_SESSION['price'] = '';}

  
if(isset($_POST['cart'])){
  $_SESSION['price'] = $_POST['price'];
}

// session for name of uncart
if(empty($_SESSION['uncartname'])){
  $_SESSION['uncartname'] = '';}
if(isset($_POST['uncart'])){
  $_SESSION['uncartname'] = $_POST['name'];
}
// session for price of uncart
if(empty($_SESSION['uncartprice'])){
  $_SESSION['uncartprice'] = '';}
if(isset($_POST['uncart'])){
  $_SESSION['uncartprice'] = $_POST['price'];
}

// uncart section
$arruncart= array(
  "name"=> $_SESSION['uncartname'],
  'price'=> $_SESSION['uncartprice']);
  for ($i=0; $i < count($_SESSION["cartitem"]); $i++) { 
  if (($_SESSION["cartitem"][$i]['name']==$arruncart['name']) && ($_SESSION["cartitem"][$i]['price']==$arruncart['price'])){
 unset($_SESSION["cartitem"][$i]);
 array_multisort($_SESSION["cartitem"]);
}
  }

// Set, check and increment session number of cart.
      if(empty($_SESSION['noofcart'])){
        $_SESSION['noofcart'] =count($_SESSION["cartitem"]);}
      // if(isset($_POST['cart'])){
      //   if (!empty($_POST['size']) || !empty($_POST['price'])){
      //     $_SESSION['noofcart']++;
      //   }
      //   }
      
// move to permanent storage
// temporary storage for cart item
// if(empty($_SESSION['cartitem'])){
//   $_SESSION['cartmessage'] = 'Sorry, '.$_SESSION['lastname'].' you don\'t have any wish items list yet. Kindly please check on our products to cart';
//   $_SESSION['cartitem']= [];
// }

// if(isset($_POST['cart'])){
//   $_SESSION['cartmessage'] = 'Thanks,' . $_SESSION['lastname']. ' your wish items is displayed as follow:';
//   $_SESSION['carttemp'] = array(
//     "name" =>$_SESSION['name'],
//     "price" =>$_SESSION['price'],
   
//   // permanent storage for cart item
//     array_push($_SESSION['cartitem'], $_SESSION['carttemp'])
//    );
// }

 
   
          
          //  $_SESSION['carttemp'] = [];
          //  $_SESSION['cartitem'] = [];

// unset($_SESSION['quality']); unset($_SESSION['size']); unset($_SESSION['name']); unset($_SESSION['colour']);





 