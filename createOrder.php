<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Create Order @ Pizza Bay!!</h1>
	<p>
		<strong>Table Number: </strong><span id="tableNumber"></span>
		<br><br>
		<strong>Customer name: </strong><span id="customerName"></span>
	</p>
	<h2>Choose a Pizza or 3!!</h2>
	<label for="pizza"><strong>Pizza:</strong></label>
	<select name="pizza" id="pizza">
		  <option value="pizza1">Pizza 1</option>
		  <option value="pizza2">Pizza 2</option>
		  <option value="pizza3">Pizza 3</option>
		  <option value="pizza4">Pizza 4</option>
	</select>
	<br><br>
	<label for="size"><strong>Size:</strong></label>
	<input type="radio" name="size" id="medium" value="M"> M
	<input type="radio" name="size" id="family" value="F"> F
	<input type="radio" name="size" id="giantFamily" value="GF"> GF 
	<br><br>
	<button id="createOrder" onclick="addToOrder()">Add to Order</button>
	<h3>Order: </h3>
<div id="salesOrder">
	<table>
		<tr>
			<th></th>
			<th>Pizza Type</th>
			<th>Size</th>
			<th>Price</th>
		</tr>
		<tr>
			<td></td>
			<td><ul id="pizzaList"></ul></td>
			<td><ul id+"sizesList"></ul></td>
			<td><ul id="pricesList"></ul></td>
		</tr>
		<tr id='orderTotals'>
			<td><strong>Totals</strong></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
	</table>
	
</div>

</body>
<script src="retrieveCustomerData.js"></script>
<script src="createOrder.js"></script>
</html>
