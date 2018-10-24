<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>

  <! This section styles the page>
  <style>

  body {
    background-image: url("design.png");
    background-repeat;
  }

<!creates navigation bar>
  {
  margin: 15;
  font-family: Arial, Helvetica, sans-serif;
  }

  .topnav {
  overflow: hidden;
  background-color: #333;
  }

  .topnav a {
  float: centered;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 40px;
  }

  .topnav a:hover {
  background-color: #ddd;
  color: black;
  }



  table, th, td{
    border: 1px solid black;
  }
  img {
    display:block;
    margin-left: auto;
    margin-right: auto;
  }

  <! This section creates a photo gallery>


  div.gallery {
      margin: 5px;
      border: 1px solid #ccc;
      float: left;
      width: 90px;
  }


  div.gallery img {
      width: 50%;
      height: auto;
  }

  div.desc {
      padding: 15px;
      text-align: center;
  }

  </style>



  <! Adding a centered linked logo as the header >
  <title> Charice's Creations Contact page</title>
  <a href="Home.html">
  <img src="logo.png" alt="Company Logo" style="width:40%;">
</head>


<! This creates a column in the middle of the site for updates>

  <div class="topnav">
  <a class="active" href="Home.html"> Home </a>
  <a href="products.php"> Products </a>
  <a href="contact.html">Contact</a>
  <a href="faq.html">FAQ</a>
  <a href="gallery.html">Gallery</a>
</div>

<br>
<br>
<br>


<! This is the title of the column>
    <h1 style="text-align:center; font-size:60px;">Products</h1>


    <!Displays the database information>
    <center>
    <?php
    $servername = "localhost:3306";
    $username = "scott";
    $password = "Sickandtired1!";
    $dbname = "demo";

    // Create a connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT Product_Name, Product_Price, Product_ID, Product_Inventory, Product_Backorder FROM test";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

      echo "<table><tr><th>Product</th><th>ID</th><th>Price</th><th>Current Inventory</th><th>Current Orders</th></tr>";

        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["Product_Name"]. "</td> <td>" . $row["Product_ID"]."</td> <td>" .$row["Product_Price"]."</td> <td>" .$row["Product_Inventory"]."</td> <td>" .$row["Product_Backorder"]."</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>
  </center>

  <style>

  </style>
  </head>

  <br>
  <br>
  <br>

  <body>

  <div class="gallery">
    <a target="_blank" href="scarf.jpg">
      <img src="scarf.jpg" alt="Snake Scarf" width="310" height="455">
    </a>
    <div class="desc"> Snake scarves as well as other variations </div>
  </div>

  <div class="gallery">
    <a target="_blank" href="coaster.jpg">
      <img src="coaster.jpg" alt="Deadpool Coaster" width="310" height="455">
    </a>
    <div class="desc"> Various types of coasters </div>
  </div>

  <div class="gallery">
    <a target="_blank" href="hat.jpg">
      <img src="hat.jpg" alt="Camo Hat" width="310" height="455">
    </a>
    <div class="desc"> Hats can be made to order in any color </div>
  </div>

  <div class="gallery">
    <a target="_blank" href="pouch.jpg">
      <img src="pouch.jpg" alt="Pouch" width="310" height="455">
    </a>
    <div class="desc"> Pouches come in a variety of sizes and colors </div>
  </div>
</body>


<br>
<br>
<br>

</article>

</html>
