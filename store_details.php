<?php include("inc/products.php"); 

if (isset($_GET["id"])){
	$product_id = $_GET["id"];
	if (isset($products[$product_id])) {
		$product = $products[$product_id];
	}
}
if (!isset($product)){
	header("Location: store.php");
	exit();
}
$section = "store";
$pageTitle = $product["name"];
include("inc/header.php");?>

		<div class="section page">

			<div class="wrapper">

				<div class="breadcrumb"><a href="store.php">Store</a> &gt; <?php echo $product["name"]; ?></div>

				<div class="store-picture">
					<span>
						<img src="<?php echo $product["img"]; ?>" alt="<?php echo $product["name"];   ?>">
					</span>
			</div>

				<div class="store-details">

					<h1><span class="price">$<?php echo $product["price"]; ?></span> <?php echo $product["name"]; ?></h1>

					<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
						<input type="hidden" name="cmd" value="_s-xclick">
						<input type="hidden" name="hosted_button_id" value="<?php echo $product["paypal"]; ?>">
						<input type="hidden" name="item_name" value="<?php echo $product["name"]; ?>">
						<table>
						<tr>
							<th>
								<input type="hidden" name="on0" value="Color">
								<label for="os0">Color</label>
							</th>
							<td><select name="os0" id="os0">
							<option value="Black">Black </option>
							<option value="Tan">Tan </option>
							<option value="Olive">Olive </option>
							<option value="Purple">Purple </option>
								</select> 
							</td>
						</tr>
						</table>
						<input type="submit" value="Add to Cart" name="submit">
						
					</form>

		</div>

<?php include("inc/footer.php"); ?>