<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Simple House Template</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400" rel="stylesheet" />    
	<link href="css/templatemo-style.css" rel="stylesheet" />
</head>
<!--

Simple House

https://templatemo.com/tm-539-simple-house

-->
<body> 
	<div class="container">
	<!-- Top box -->
		<!-- Logo & Site Name -->
		<div class="placeholder">
			<div class="parallax-window" data-parallax="scroll" data-image-src="img/simple-house-01.jpg">
				<div class="tm-header">
					<div class="row tm-header-inner">
						<div class="col-md-6 col-12">
							<img src="img/simple-house-logo.png" alt="Logo" class="tm-site-logo" /> 
							<div class="tm-site-text-box">
								<h1 class="tm-site-title">Simple House</h1>
								<h6 class="tm-site-description">new restaurant template</h6>	
							</div>
						</div>
						<nav class="col-md-6 col-12 tm-nav">
							<ul class="tm-nav-ul">
								<li class="tm-nav-li"><a href="index.html" class="tm-nav-link active">Home</a></li>
								<li class="tm-nav-li"><a href="about.html" class="tm-nav-link">About</a></li>
								<li class="tm-nav-li"><a href="contact.html" class="tm-nav-link">Contact</a></li>
							</ul>
						</nav>	
					</div>
				</div>
			</div>
		</div>

		<main>
			<header class="row tm-welcome-section">
				<h2 class="col-12 text-center tm-section-title">Welcome to Simple House</h2>
				<p class="col-12 text-center">Total 3 HTML pages are included in this template. Header image has a parallax effect. You can feel free to download, edit and use this TemplateMo layout for your commercial or non-commercial websites.</p>
			</header>
			
			<div class="tm-paging-links">
				<nav>
					<ul>
						<li class="tm-paging-item"><a href="#" class="tm-paging-link active">Pizza</a></li>
						<li class="tm-paging-item"><a href="#" class="tm-paging-link">Salad</a></li>
						<li class="tm-paging-item"><a href="#" class="tm-paging-link">Noodle</a></li>
					</ul>
				</nav>
			</div>

			
<?php
  require('connect.php');
  $sql = ' SELECT * FROM products NATURAL JOIN color_product NATURAL JOIN size_product NATURAL JOIN stock_detail
  WHERE products.ProductId = color_product.ProductId = size_product.ProductId = stock_detail.ProductId' ;
  
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  $result = mysqli_query($conn, $sql);
  $objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql . "]"); 
  
$Id   = $_GET['ProductId'];
$Name		  = $_GET['ProductName'];
$Price		  = $_GET['ProductPrice'];
$Size		  = $_GET['ProductSize'];
$Color	  = $_GET['ProductColor'];
$Picture	  = $_GET['ProductPicture'];

  echo "<br/>";
  if (mysqli_num_rows($result) > 0) {
    echo "<br/>";
        echo 'จำนวนรายการสินค้าทั้งหมด = ';
        echo mysqli_num_rows($result);
        echo "<br><br>";
    } else {
    echo "EMPTY DATA";
    }
  ?>
  
  <!-- Gallery -->
  <div class="row tm-gallery">
				<!-- gallery page 1 -->
				<div id="tm-gallery-page-pizza" class="tm-gallery-page">
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/gallery/01.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Fusce dictum finibus</h4>
								<p class="tm-gallery-description">Nam in suscipit nisi, sit amet consectetur metus. Ut sit amet tellus accumsan</p>
								<p class="tm-gallery-price">$Price</p>
							</figcaption>
						</figure>
					</article>
                </div>
            </div>
          
				
				

    <?php
    $i = 1;
    while ($objResult = mysqli_fetch_array($objQuery)) {
    ?>	
     <tr>
        
        <td><?php echo $objResult[ProductId"]; ?></td>
        <td><?php echo $objResult["ProductName"]; ?></td>
        <td><?php echo $objResult["ProductPrice"]; ?></td>
        <td><?php echo $objResult["CustomerAddress"]; ?></td>
        <td><?php echo $objResult["CustomerTel"]; ?></td>
        <td align="center"><a href="deleteCusId.php?CustomerId=<?php echo $objResult["CustomerId"]; ?>">Delete</a></td>
        <td align="center"><a href="updateCus.php?CustomerId=<?php echo $objResult["CustomerId"]; ?>">Update</a></td>
      </tr>
    <?php
      $i++;
    }
    ?>
					
		</main>

		<footer class="tm-footer text-center">
			<p>Copyright &copy; 2020 Simple House 
            
            | Design: <a rel="nofollow" href="https://templatemo.com">TemplateMo</a></p>
		</footer>
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/parallax.min.js"></script>
	<script>
		$(document).ready(function(){
			// Handle click on paging links
			$('.tm-paging-link').click(function(e){
				e.preventDefault();
				
				var page = $(this).text().toLowerCase();
				$('.tm-gallery-page').addClass('hidden');
				$('#tm-gallery-page-' + page).removeClass('hidden');
				$('.tm-paging-link').removeClass('active');
				$(this).addClass("active");
			});
		});
	</script>
</body>
</html>