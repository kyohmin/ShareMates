<!DOCTYPE html>
<?php 
session_start();
include 'dbconnection.php';


?>
<html lang="en">
<head>
  <title>user Header</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <style type="text/css">
     ul li a.cart .cart-basket {
  font-size: 1rem;
  position: absolute;
  top: -6px;
  right: -5px;
  width: 35px;
  height: 35px;
  color: #fff;
  background-color: #418deb;
  border-radius: 50%;
}
ul li a.cart:hover {
  text-decoration: none;
  color: #d60e96;
}

ul li a {
  font-size: 1.1rem;
  color: #343a40;
}

.fas {
    font-size: 50px;
}

  </style>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-light">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="Home.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="UsersProduct.php">Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="aboutus.php">About us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="FAQ.php">FAQ </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Location.php">Location </a>
      </li>
      
    </ul>
    
     <div id="form">
               	<form method="post" action="UsersProduct.php" enctype="multipart/form-data">
               		
               		
               <input type="text" name="SearchProduct" placeholder="Search">
               	<input type="submit" name="Search" value="Search">
               	</form>
               	</div>
               </div>   
          </form>
  </ul>
      
      <?php 
      $cart = 0;
      if(isset($_SESSION['cart'] ))
      {
          foreach($_SESSION['cart']as $Quantity){
              $cart += $Quantity;
          }
      }
      ?>
      <?php if(isset($_SESSION["username"]))
      {
          $username = $_SESSION["username"];
      }
      ?>
 
 
  
<li class="nav-item">
      		<a href="viewcart.php" class="cart position-relative d-inline-flex mt-3" style="text-decoration:none;">
			<img src="https://img.icons8.com/external-kiranshastry-solid-kiranshastry/64/000000/external-shopping-cart-ecommerce-kiranshastry-solid-kiranshastry.png"/>
     <span class="cart-basket d-flex align-items-center justify-content-center"> 
      			<?php  echo $cart ?>
      		</span>
      </a>
      </li>
		<li class="nav-item">
			<a class="nav-link" href="login.php">
	 <img src="https://img.icons8.com/external-flatart-icons-lineal-color-flatarticons/64/000000/external-login-web-security-flatart-icons-lineal-color-flatarticons.png"/>
 		
</a>
		</li>
		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle mt-2" href="" data-bs-toggle="dropdown">
			<?php 
			 if(isset($_SESSION["username"]))
			 {
			     echo $_SESSION["username"];
			 }
			 else {?>
			 	<img src="https://img.icons8.com/external-sbts2018-blue-sbts2018/58/000000/external-logout-social-media-basic-1-sbts2018-blue-sbts2018.png"/> 
			  <?php } 
			  ?></a>   
			  <ul class="submenu dropdown-menu">
			  	<li> <a class="dropdown-item" href="login.php">logout</a></li>
		</ul>
		</li>	
			          
      </ul>
  </div>
</nav>



</body>
</html>
          <title>Producdts</title>                   

<?php 
$cart=0;
if (isset($_SESSION['cart'])){
    foreach ($_SESSION['cart'] as $qty){
        $cart+=$qty;
    }
}
?>