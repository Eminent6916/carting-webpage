<?php
session_start();
if (isset($_POST['signn'])) {
$_SESSION['lastname'] = ucfirst($_POST['lname']);
}
if(empty($_SESSION['lastname'])){
  $_SESSION['lastname'] = 'Guest';}
  // session_unset();  
  
  $_session["testing"]= 'opening-hours(1)';
  // echo $_session['testing'];
  // $_session["picture"] = 'images\products\\'.$_session["testing"].'.png';
  // $_session["picture"];
// $_SESSION["qiut"] = (isset($_POST['signout']))??{
//   session_destroy();
// }
// echo $_SESSION["quit"];
//  number of cart items
// $_SESSION["noOfCart"] = 0;
//   if(isset($cart)){
//   $_SESSION["noOfCart"]++;
//   }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akube.com</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="f.css" type="text/css">
    <link rel="icon" href="images/logo.png" type="image">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="form.js"></script>
</head>
<body class="master">
    <div class ="top--section" >
    <section class="container">
        <header> 
            
            <div class="logo">
            <a class="logo" href="">
                <img  width="80px" height="80px" src="./images/logo.png">
            </a></div>
       
            <div class="searchform">
  
                <form action="productList" method="GET" class="searchmother" >
                        <div class="input-container">
                            <i class="fa fa-search icon"></i>
                   <input class="input-field" type="text" name="search" id="search" width="400px" placeholder="Search Goods, Brands and Categories"  required="">
                   <a class="searchbutton" href="" onclick="search" type="reset"><img src="images\search.png" width="30px" height="30px"></a>                
               </div>
                </form>
                </div>
                <p><strong>Akube.com</strong><br>
                Sit-back and Select</p>

        </header>
    </div>
    </section>
    <section class="body">
      <!-- images\opening-hours(1).png -->
 <img width="150px" height="150px" src="images\<?php echo $_session["testing"];?>.png" class="rounded mx-auto d-block" alt="open">

        <p class ="greeting"><h1>Hey!  dear  <?php echo  $_SESSION['lastname'];?>  Our store is full and full of what you want, kindly Log in to shop.</h1>
         <!-- Button to open the modal login form -->

<button onclick="document.getElementById('id01').style.display='block'">Log In</button>
 <!-- The Modal -->
<div id="id01" class="modal">
 

  <!-- Modal Content -->
  <!-- ?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> -->
  <form class="modal-content animate" method="POST" action="home.php">
    
    <div class="form">
        <div onclick="document.getElementById('id01').style.display='none'"
        class="close" title="Close Modal">&times;</div>
        <div class="imgcontainer">
      <img width="80px" height="80px" src="images\user-profile.png" alt="profile" class="profile">
    </div>
        <div><label for="sname"><b>Surname</b></label><br>
            <input type="text" placeholder="Enter Sursname" name="sname" required>
          </div>
        <div><label for="lname"><b>Last name</b></label><br>
      <input type="text" placeholder="Enter Lastname" name='lname' required>
    </div>
    <div> <label for="psw"><b>Password</b></label> <br>
      <input type="password" placeholder="Enter Password" name="psw" required>
    </div> <br>
      <input class="loginbt"  name='signn' type="submit" value=" Log In "></input>
      <div><label><br>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>
    <br><br><br>
    <div class="c-frg">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
    </div>
   
  </form>
</div> 

    </section>

</body>

</html>
