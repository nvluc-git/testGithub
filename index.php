<!DOCTYPE HTML>
<html>

<head>
  <title>Streetwear</title>
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="css/style_home.css?version=3" title="style" />
</head>

<body>

<div class="header">
  <h1 class="street">STREETWEAR</h1>
  <p class="monospace">-The Joy Of Dressing Is An Art-</p>
</div>

<div class="topnav">
    <a href="admin/login.php">ADMIN</a>
    <a href="index.php"">HOME</a>
</div>

<div id="row">
           <div id="columnbrand"
                <div class="brand">
               <h3 style = "text-align: center;font-size: 20px;margin-left:45px;">BRANDS</h3>
               <ul>
                   <?php
                   require_once "admin/dbconnect.php";
                   $sql = "SELECT * FROM brands";
                   $execute = $connection->query($sql);
                   while ($brand = mysqli_fetch_array($execute)) { ?>
                        
                        <li>                        
                           <a style = "color: black; display: block;" 
                           href="branddetail.php?brand=<?= $brand['brandid'] ?>"><?= $brand['brandname'] ?></a>
                       </li>
                        
                       
                   <?php }
                   ?>
               </ul>
                </div>
            </div>

        <div id="columnproduct"
           <div id="product">
               <h3 style = "text-align: center;font-size: 20px;" > PRODUCTS </h3>
               <?php
               $qry = "SELECT * FROM clothes";
               $run = $connection->query($qry);
               while ($clothes = mysqli_fetch_array($run)) { ?>
                   <div class="clothesdetail">
                       <div class="clothesimage">
                           <a href="clothesdetail.php?clothes=<?= $clothes['cID'] ?>">
                               <img src="admin\images\clothes\<?= $clothes['cImage'] ?>" width="200" height="200">
                           </a>
                       </div>
                       <div class="clothesinfor">
                       <?= $clothes['cName'] ?>
                   </div>
                   </div>
               <?php }
               ?>
           </div>
       </div>


  <div class="footer">
  <p>Copyright By Nguyen Van Luc 2020</p>
</div>

</body>
</html>