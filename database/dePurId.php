<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>36</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="styles.css" type="text/css" />
<h1>Moonlight Clothes Store</h1>
<hr />
</head>
<body>
<div id="demo-container">
  <ul id="simple-menu">
  	<li><a href="allproduct.php" ><span>All Product</span></a></li>
  	<li><a href="product.php" ><span>Product</span></a></li>
	<li><a href="size.php" ><span>Size</span></a></li>
    <li><a href="color.php" ><span>Color</span></a></li>
  	<li><a href="lot&stock.php"  ><span>Lot & Stock </span></a></li>
  	<li><a href="lot.php" ><span>Lot </span></a></li>
    <li><a href="stock.php" ><span>Stock </span></a></li>
  	<li><a href="Customer.php" ><span>Customer</span></a></li>
    <li><a href="Employee.php" ><span>Employee</span></a></li> 
    <li><a href="wholesale.php" ><span>Wholesale Store</span></a></li>
    <li><a href="purchase.php" class="current"><span>Purchase</span></a></li>
    <li><a href="order.php" ><span>Order</span></a></li>
    <li><a href="/moonlight/public/index.php"><span>Moonlight Clothes Store</span></a></li>
    
  </ul>
</div>

<div id="demo-container">
  <ul id="simple-menu">
  <li><a href="searchPur.php" ><span>Search Purchase Order</span></a></li>
    <li><a href="insertPur.php"><span>Insert Purchase Order</span></a></li>
    <li><a href="dePurId.php" class="current"><span>Delete Purchase Order</span></a></li>
    <li><a href="updatePur.php"><span>Update Purchase Order</span></a></li>    
  </ul>
</div><br><div id="wrapper"><br>
    <h1>Delete Data : Purchase Order</h1>
    <?php
    
    require('connect.php');

    $sql = ' SELECT *  FROM purchase_order; ';
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    $objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql . "]");
    ?>
   <div align="center">
    <form action="deletePurId.php" method="post" name="Purchase">
        <table border="1">
            <tr>
                <td>Purchase Order ID : </td>
                <td><select name="PurchaseId">
                        <?php
                        while ($objResult = mysqli_fetch_array($objQuery)) {
                        ?>
                            <option value=<?php echo $objResult["PurchaseId"]; ?>><?php echo $objResult["PurchaseId"]; ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </td>
            </tr>
        </table>

        <br>
<td><button><a href="purchase.php">Back to Purchase Order</a></button></td>
        <input type="submit" value="Delete Data">
        
    </form>
    <?php
    mysqli_close($conn); // ปิดฐานข้อมูล
    echo "<br><br>";
    echo "--- END ---";
    ?></div></div>
</body>

</html>