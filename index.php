<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h2>Welcome to Pizza Bay</h2>
	<label for="tableNumberInput">Table Number:</label>
	<input type="text" id="tableNumberInput" size="4">
	<br><br>
	<label for="customerNameInput">Customer Name:</label>
	<input type="text" name="customerName" id="customerNameInput">
	<br><br>
	<div>
	    <a href="createOrder.php"><button id="customerInitiate">Initiate Order</button></a>
	</div>
</body>
<script src="storeCustomerData.js"></script>
</html>