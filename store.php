<?php include("inc/products.php"); ?><?php 
$pageTitle = "Shop";
$section = "store";
include('inc/header.php'); ?>

	<div class="section page">

		<div class="wrapper">

		<h1>Welcome to the store!</h1>

		<ul class="products">
			<?php foreach ($products as $product_id => $product) {
					echo "<li>";
					echo '<a href="store_details.php?id=' . $product_id . '">';
					echo '<img width=200, height=200, src="' . $product["img"] . '" alt="' . $product["name"] . '">';
					echo "<p>View Details</p>";
					echo "</a>";
					echo "</li>";
				
				} 
			?>
		</ul>

		</div>

	</div>


<?php include('inc/footer.php'); ?>