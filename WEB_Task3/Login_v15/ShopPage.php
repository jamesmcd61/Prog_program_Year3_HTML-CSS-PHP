<!DOCTYPE html>
<!-- Name:James Mcdonald
	 Student Number :18011160
	 Lecturer Name :Rothman
	 admin@rothman.za.bz
	 
	 Declaration:i hereby declare that this is my own work and 
	 any code obtained by other sources will be refrenced.
-->

<?php
session_start();
require_once('ShoppingCartClass.php');

?>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Template</title>
	

</head>
<!--CSS Styles-->
<link href ="styles.css" rel="stylesheet" type="text/css">

<body bgcolor ="#D8F4F6 " >
<!--https://www.google.com/search?q=cool+headers&tbm=isch&chips=q:cool+headers,g_1:black:ELFU_fQqrqw%3D&rlz=1C1GCEU_enZA887ZA887&hl=en&ved=2ahUKEwja4a_u5KDoAhUG1IUKHaUUB7UQ4lYoBXoECAEQHw&biw=1903&bih=969#imgrc=nMk0k2-HJY3jUM-->
<!--header-->
<header style="color:white">
<h1><center>Cards For Life</center></h1>
</header>

<!--Navigation-->
<ul>
  <li><a href="Introduction.php">Home</a></li>
  <li style="float:right"><a class="active" href="ShoppingCart.php">CheckOut</a></li>
  <li><a href="">Shop</a></li>
</ul>

<center>
<!--https://www.w3schools.com/howto/howto_css_product_card.asp-->
<!--https://www.w3schools.com/html/html_tables.asp-->
<!--styles-->
<style>
th, td {
  padding: 15px;
  text-align: left;
}

table {
  border-collapse: collapse;
}

table, th, td {
  border: 1px solid black;
}

<!--end of w3school-->
</style>
<!--Table creating-->
<table id="Items">
	<tr>
		<thead>Shop</thead>
	</tr>
	<tr>
		<th> Item</th>
		<th> Description</th>
		<th> SellPrice</th>
		<th>Quantity</th>
		<th> Add to Cart</th>
	</tr>
<!--https://www.php.net/manual/en/mysqli.query.php-->
<?php
include_once("DBConn.php");

//Getting information from DB and doing a loop to populate the table
$select = $DBConnect->query("select * from tbl_Item");
while($row = $select->fetch_assoc()){
	
	$Price = $row['Sell_Price'];
?>

	<tr>
<!--https://www.google.com/search?q=valentines+card&tbm=isch&ved=2ahUKEwjFksXO257oAhULexoKHRq_BnIQ2-cCegQIABAA&oq=va&gs_l=img.1.0.0i67l10.24380.25470..26974...1.0..0.244.485.2-2......0....1..gws-wiz-img.....10..35i362i39j0.DU1EY40hM0M&ei=gEtvXsXSHYv2aZr-mpAH&bih=935&biw=927&rlz=1C1GCEU_enZA887ZA887&hl=en#imgrc=os_SVmGH8tbiyM-->
<!--https://www.google.com/search?q=april+fools++card&tbm=isch&ved=2ahUKEwirmN2N3J7oAhUC9BoKHbQyBB0Q2-cCegQIABAA&oq=april+fools++card&gs_l=img.3..0j0i5i30j0i8i30.1643.3401..15225...1.0..0.451.2392.2-1j5j1......0....1..gws-wiz-img.......35i39j0i67.bvB0V_Tv4dc&ei=BUxvXusBguhrtOWQ6AE&bih=935&biw=927&rlz=1C1GCEU_enZA887ZA887&hl=en#imgrc=qMn0xjMqrHnCXM-->
<!--https://www.google.com/search?q=happy+50th+birthday&tbm=isch&ved=2ahUKEwiGz-GV3J7oAhUJ4RoKHb1eBc0Q2-cCegQIABAA&oq=happy+50Th&gs_l=img.1.0.0l10.47082.50680..52901...1.0..0.355.2742.2-9j1......0....1..gws-wiz-img.....10..35i362i39j35i39j0i67.idm_Wl5ZcCM&ei=FUxvXsbwM4nCa729legM&bih=935&biw=927&rlz=1C1GCEU_enZA887ZA887&hl=en#imgrc=uL-Sl_PUpFR8qM-->
<!--https://www.google.com/search?q=celebration&tbm=isch&ved=2ahUKEwjlr9Kv3J7oAhUN0xoKHTLRCXIQ2-cCegQIABAA&oq=Cele&gs_l=img.1.0.0i67l10.25248.26950..30652...1.0..0.321.1121.2-3j1......0....1..gws-wiz-img.....10..35i362i39j35i39j0j0i131.LuCpIdsnXVA&ei=TExvXuXZB42ma7Kip5AH&bih=935&biw=927&rlz=1C1GCEU_enZA887ZA887&hl=en#imgrc=F7A6R7uR0CBHRM-->
<!--https://www.google.com/search?q=OldCard&tbm=isch&ved=2ahUKEwikqfq-3J7oAhXF_4UKHVgLDC0Q2-cCegQIABAA&oq=OldCard&gs_l=img.3..0l10.23154.31538..31723...8.0..0.448.1819.2-4j1j1......0....1..gws-wiz-img.....10..35i362i39j0i67j0i131.HKFOP0kWvio&ei=bExvXqTDDsX_lwTYlrDoAg&bih=935&biw=927&rlz=1C1GCEU_enZA887ZA887&hl=en#imgrc=3SGz46lHEkbUwM-->
<!--https://www.google.com/search?q=business+card&tbm=isch&ved=2ahUKEwid79fk3J7oAhUDrhoKHXCCCtsQ2-cCegQIABAA&oq=business+card&gs_l=img.3..35i39j0j0i67j0l7.522.522..794...0.0..0.240.240.2-1......0....1..gws-wiz-img.pb3XPNOkYH8&ei=u0xvXt2lFoPcavCEqtgN&bih=935&biw=927&rlz=1C1GCEU_enZA887ZA887&hl=en#imgrc=Nh1GT2bMKns95M-->
<!--https://www.google.com/search?q=wedding+Card&tbm=isch&ved=2ahUKEwi58OLl3J7oAhURwoUKHeDWDUMQ2-cCegQIABAA&oq=wedding+Card&gs_l=img.3..0i67l5j0l5.32897.36367..36539...2.0..0.299.3074.2-12......0....1..gws-wiz-img.....10..35i362i39j35i39j0i131.ulEoXrFL7N0&ei=vUxvXvmdJ5GElwTgrbeYBA&bih=935&biw=927&rlz=1C1GCEU_enZA887ZA887&hl=en#imgrc=5VIhuW-1gYEr3M-->
<!--https://www.google.com/search?q=Sailing+card&tbm=isch&ved=2ahUKEwjO5-733J7oAhUV4RoKHbCODooQ2-cCegQIABAA&oq=Sailing+card&gs_l=img.3..0l10.31277.37759..37855...3.0..0.404.3430.2-4j5j2......0....1..gws-wiz-img.....10..35i362i39j35i39j0i67j0i131.rZsvBJ9QGL8&ei=40xvXo7qI5XCa7CdutAI&bih=935&biw=927&rlz=1C1GCEU_enZA887ZA887&hl=en#imgrc=clVt-QlAkm-FgM-->
<!--https://www.google.com/search?q=Best+friend+card&tbm=isch&ved=2ahUKEwjR-9KK3Z7oAhUDVhoKHdLaAxkQ2-cCegQIABAA&oq=Best+friend+card&gs_l=img.3..0l10.29867.33424..33509...1.0..0.337.3665.2-12j2......0....1..gws-wiz-img.....10..35i362i39j35i39j0i131j0i67.-06p2w0Y0is&ei=Ck1vXtHOO4OsadK1j8gB&bih=935&biw=927&rlz=1C1GCEU_enZA887ZA887&hl=en#imgrc=SHpsPK0aCAOAXM-->
<!--https://www.google.com/search?q=newchild+card&tbm=isch&ved=2ahUKEwjOy6-b3Z7oAhUF0xoKHV5DDicQ2-cCegQIABAA&oq=newchild+card&gs_l=img.3...32109.36729..36823...1.0..0.330.2877.2-9j2......0....1..gws-wiz-img.....10..35i362i39j35i39j0i131j0j0i67j0i24j0i10i24.6yCEAirm5QM&ei=Lk1vXs78AoWma96GubgC&bih=935&biw=927&rlz=1C1GCEU_enZA887ZA887&hl=en#imgrc=aQnUY_7I17eVFM-->
<!--https://www.google.com/search?q=Happy+bithday+18th&tbm=isch&ved=2ahUKEwjC1tKt3Z7oAhVGlBoKHeecAXEQ2-cCegQIABAA&oq=Happy+bithday+18th&gs_l=img.3...23739.29741..29990...1.0..0.391.4809.2-14j4......0....1..gws-wiz-img.....10..35i362i39j35i39j0j0i67j0i10i24.cKbxH1HtpO4&ei=VE1vXsLcFsaoaue5hogH&bih=935&biw=927&rlz=1C1GCEU_enZA887ZA887&hl=en#imgrc=GH_64Wjp2uZRkM-->
<!--https://www.google.com/search?q=Happy+bithday+21th&tbm=isch&ved=2ahUKEwj2w9q83Z7oAhVOiRoKHUQ1CLIQ2-cCegQIABAA&oq=Happy+bithday+21th&gs_l=img.3...23463.23999..24606...0.0..0.392.1252.2-2j2......0....1..gws-wiz-img.......0i10i24.8vrpOm5cA80&ei=c01vXra-Os6SasTqoJAL&bih=935&biw=927&rlz=1C1GCEU_enZA887ZA887&hl=en#imgrc=LpQPKNkOCvjzSM-->	
		<!--Adding data to the table with the help of php and html-->
		<td><img src="images2/<?php echo $row['Item_ID'];?>" style="width:75px;height:75px;"></td>
		<td><?php echo $row["Description"]; ?></td>
		<td><?php echo $row["Sell_Price"];?></td>
		
		<form action="ShopPage.php" method="POST">
		<input type="hidden" name="item_ID" value=<?php echo $row['Item_ID'];?>>
		<td><input type="number" id="quantity" value="1" name="quantity" min="1" max="10"/>
		<td><button type="submit" name="submit" onclick = "popup(price = <?php echo $Price;?>)">Add to Cart</button></td>
		</form>

	</tr>

<?php }

$cart = new ShoppingCart();
if(isset($_SESSION['Cart'])){
	$cart = unserialize($_SESSION['Cart']);
}
if(isset($_POST['submit'])){
	$id = $_POST['item_ID'];
	$quantity = (int)($_POST['quantity']);

	$cart->insert($id,$quantity);

	$_SESSION['Cart'] = serialize($cart);
}

 ?>
<!--end of php-->
</table>
<!--Footer-->
<footer style="background-image: url('images2/header.jpg');color:white;height: 100px;">
 <h1><p>Created By james McDonald</p><h1>
</footer>

</center>
<!--Function to create pop up-->
	<script>
function popup(price){
	alert(`Prices is R ${price}`);
}

</script>

</body>
</html>