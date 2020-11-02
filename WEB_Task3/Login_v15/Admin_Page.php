<!DOCTYPE html>
<!-- Name:James Mcdonald
	 Student Number :18011160
	 Lecturer Name :Rothman
	 admin@rothman.za.bz
	 
	 Declaration:i hereby declare that this is my own work and 
	 any code obtained by other sources will be refrenced.
-->
<html>
<head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
}

li a {
  display: block;
  color: #000;
  padding: 8px 16px;
  text-decoration: none;
}

/* Change the link color on hover */
li a:hover {
  background-color: #555;
  color: white;
}
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

</style>
</head>

<link href ="styles.css" rel="stylesheet" type="text/css">

<body bgcolor ="#D8F4F6 " >
<!--https://www.google.com/search?q=cool+headers&tbm=isch&chips=q:cool+headers,g_1:black:ELFU_fQqrqw%3D&rlz=1C1GCEU_enZA887ZA887&hl=en&ved=2ahUKEwja4a_u5KDoAhUG1IUKHaUUB7UQ4lYoBXoECAEQHw&biw=1903&bih=969#imgrc=nMk0k2-HJY3jUM-->
<!--header-->
<header style="background-image: url('images2/header.jpg');color:white;height: 100px;">
<h1><center>Cards For Life</center></h1>
</header>

<?php
include_once("DBConn.php");
function admintale(){
	global $DBConnect;
			?>
			<center>
				<table id="Items">
				<tr>
					<thead>Shop</thead>
				</tr>
				<tr>
					<th>Item_ID</th>
					<th>Description</th>
					<th>CostPrice</th>
					<th>Quantity</th>
					<th>SellPrice</th>
				</tr>
				<?php
			
			$select = $DBConnect->query("select * from tbl_Item ");
			while($row = $select->fetch_assoc()){

			?>
			<form action="Admin_Page.php" method="GET">
			<tr>
			<td><input type="text" name="item_ID" value=" <?php echo $row['Item_ID'];?>"></td>
			<td><input type="text" name="description" value=" <?php echo $row["Description"]; ?>"></td>
			<td><input type="text" name="cost_Price" value=" <?php echo $row["Cost_Price"];?>"></td>
			<td><input type="text" name="quantity" value=" <?php echo $row["Quantity"];?>"></td>
			<td><input type="text" name="sell_Price" value=" <?php echo $row["Sell_Price"];?>"></td>
			<td><input type="hidden" name="hidden" value=" <?php echo $row["Item_ID"];?>"></td>
		
			<td><input type="submit" name="Update" value="Update"></td>
			<td><input type="submit" name="Delete" value="Delete"></td>
			</tr>
			</form>
			<?php	
			}
			?>
				</table>
		<?php
		}
		

if(isset($_GET['Update'])){
$UpdateQuery = "UPDATE tbl_Item SET Item_ID='$_GET[item_ID]', Description='$_GET[description]',Cost_Price='$_GET[cost_Price]',Quantity='$_GET[quantity]',Sell_Price='$_GET[sell_Price]' WHERE Item_ID='$_GET[hidden]'";
$u1 = $DBConnect->query($UpdateQuery);

}
if(isset($_GET['Delete'])){
$DeleteQuery = "DELETE FROM tbl_Item  WHERE Item_ID='$_GET[hidden]'";
$d1 = $DBConnect->query($DeleteQuery);

}
admintale();

?>
<!--Footer-->
<footer style="background-image: url('images2/header.jpg');color:white;height: 100px;">
 <h1><p>Created By james McDonald</p><h1>
</footer>
</body>
 </center>
</html>
