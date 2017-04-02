<!DOCTYPE html>
<html>
<head>
	<title>createOrder</title>
</head>
<body>
<h2>Create order page</h2>
<h3>Choose a pizza:</h3>

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
			<td><ul></ul></td>
			<td><ul></ul></td>
			<td><ul></ul></td>
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
<script>

// set empty order array outside function 
//to catch all pizzas,sizes and prices chosen
pizzas = [];
sizes = [];
prices = [];

// addToOrder() function
function addToOrder() {

	// find selected pizza and push to pizzas array
	var p = document.getElementById("pizza");
	var pizzaStr = p.options[p.selectedIndex].text;
	pizzas.push(pizzaStr);

	//check length of pizzas array in console
	var pizzasArrayLength = pizzas.length;
	console.log(pizzasArrayLength);

	// find selected size and push to sizes array
	var sizeStr = document.querySelector('input[name="size"]:checked').value;
	sizes.push(sizeStr);
	//alert(sizeStr);

	//check length of sizes array in console
	var sizesArrayLength = sizes.length;
	console.log(sizesArrayLength);

	//show order chosen in 'Order: section' of html
	//target <ul> in #salesOrder div
	AddToPizzaListUl = document.getElementById("salesOrder").getElementsByTagName('ul')[0];
	var newPizzaItem = document.createElement('li');
        for(i = 0; i <= (pizzasArrayLength-1); i++){
            newPizzaItem.textContent = pizzas[i];
            AddToPizzaListUl.appendChild(newPizzaItem);
        }

    //show size chosen in 'Order: section' of html	
    AddToSizeListUl = document.getElementById("salesOrder").getElementsByTagName('ul')[1];
	var newSizeItem = document.createElement('li');
        for(i = 0; i <= (sizesArrayLength-1); i++){
            newSizeItem.textContent = sizes[i];
            AddToSizeListUl.appendChild(newSizeItem);
        }

      //show price in 'Order: section' of html
      var price = 0;
      switch(sizeStr) {
      	case 'M':
      		price = 17.0;
      		break;
      	case 'F':
      		price = 20.0;
      		break;
      	case 'GF':
      		price = 22.0;
      		break;
      	default:
      		price = 17.0;
      }
      prices.push(price);
      pricesArrayLength = prices.length;
      AddToPriceListUl = document.getElementById("salesOrder").getElementsByTagName('ul')[2];
      var newPriceItem = document.createElement('li');
      var changeOrderButton = document.createElement('button');
      changeOrderButton.innerHTML = "Remove"
        for(i = 0; i <= (pricesArrayLength-1); i++){
            newPriceItem.textContent = prices[i];
            var pizzaPrice = AddToPriceListUl.appendChild(newPriceItem);
            pizzaPrice.appendChild(changeOrderButton);
            changeOrderButton.setAttribute("id", "remove_pizza_" + prices.indexOf(prices[i]));
            var data = changeOrderButton.setAttribute("data", prices.indexOf(prices[i]));
            changeOrderButton.addEventListener('click', removeOderEntry(data));
        }
      console.log(prices.length);
		}
      //Total pizzas ordered
      var pizzaTotalTD = document.getElementById("orderTotals").getElementsByTagName('td')[1];
      pizzaTotalTD.textContent = pizzasArrayLength;

      //Total cost
      var totalCost = 0;
      var totalCostTD = document.getElementById("orderTotals").getElementsByTagName('td')[3];
      for(i = 0; i <= (pricesArrayLength-1); i++){
            totalCost += prices[i];
        }
      totalCostTD.textContent = totalCost;

      //remove ordered item
      function removeOderEntry(id){
      	alert(id);
      }
</script>
</html>