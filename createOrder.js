// set empty arrays outside function 
//to catch all pizzas,sizes and prices chosen
// may want to call addPizzaPriceToOrder(sizeStr) from addPizzaSizeToOrder()??? 
pizzas = [];
sizes = [];
prices = [];

// Add To Order
function addToOrder(){
	addPizzaTypeToOrder();
	addPizzaSizeToOrder();
	addPizzaPriceToOrder();
	addRemoveButtonToOrderedItem();
	addOrderTotals();
} // eo addToOrder()

function addPizzaTypeToOrder(){
	// alert("made it to addPizzaTypeToOrder");
	// find selected pizza and push to pizzas array
	var p = document.getElementById("pizza");
	var pizzaStr = p.options[p.selectedIndex].text;
	pizzas.push(pizzaStr);

	//check length of pizzas array in console
	var pizzasArrayLength = pizzas.length;
	console.log(pizzasArrayLength);

	//show order chosen in 'Order: section' of html
	//target a <ul> in #salesOrder div
	//add pizza items to a #pizzaList<ul>
	var AddToPizzaListUl = document.getElementById("salesOrder").getElementsByTagName('ul')[0];

	var newPizzaItem = document.createElement('li');
    for(i = 0; i <= (pizzasArrayLength-1); i++){
        newPizzaItem.textContent = pizzas[i];
        AddToPizzaListUl.appendChild(newPizzaItem);
    }
}//eo addPizzaToOrder()

function addPizzaSizeToOrder(){
	// find selected size and push to sizes array
	var sizeStr = document.querySelector('input[name="size"]:checked').value;
	sizes.push(sizeStr);

	//check length of sizes array in console
	var sizesArrayLength = sizes.length;
	console.log(sizesArrayLength); 

	//show size chosen in 'Order: section' of html	
    AddToSizeListUl = document.getElementById("salesOrder").getElementsByTagName('ul')[1];
	var newSizeItem = document.createElement('li');
    for(i = 0; i <= (sizesArrayLength-1); i++){
        newSizeItem.textContent = sizes[i];
        AddToSizeListUl.appendChild(newSizeItem);
	}
}// eo addPizzaSizeToOrder()

function addPizzaPriceToOrder(){
	var sizeStr = document.querySelector('input[name="size"]:checked').value;
	//assert price to sizeStr chosen:
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
	//check length of prices array in console
	prices.push(price);
	var pricesArrayLength = prices.length;
	console.log(pricesArrayLength);

	//show price in 'Order: section' of html
	var AddToPriceListUl = document.getElementById("salesOrder").getElementsByTagName('ul')[2];
	var newPriceItem = document.createElement('li');
	for(i = 0; i <= (pricesArrayLength-1); i++){
        newPriceItem.textContent = prices[i];
        AddToPriceListUl.appendChild(newPriceItem);
    }
}//eo addPizzaPriceToOrder()

function addRemoveButtonToOrderedItem(){
	//Add remove button to each pizza
    var removePizzaButton = document.createElement('button');
    removePizzaButton.innerHTML = "Remove"
    for(i = 0; i <= (prices.length-1); i++){
    	var pizzaListItem = document.getElementById("pricesList").getElementsByTagName('li')[i];
    	//console.log(pizzaListItem);
    	pizzaListItem.appendChild(removePizzaButton);
    	removePizzaButton.setAttribute("id", "remove_pizza_" + prices.indexOf(prices[i]));
    	removePizzaButton.setAttribute("onClick", "removePizza(i)");
    }
}// eo addRemoveButtonToOrderedItem()

//remove pizza from order
function removePizza(x){
	// console.log(x);
	var pizzaToRemove = pizzas.indexOf(x);
	console.log(pizzaToRemove);	
} // eo removePizza()

function addOrderTotals(){
	pizzaTotal();
	costTotal();
}//eo orderTotals()

function pizzaTotal(){
	//Total pizzas ordered
    var pizzaTotalTD = document.getElementById("orderTotals").getElementsByTagName('td')[1];
    pizzaTotalTD.textContent = pizzas.length;
} //eo pizzaTotal()

function costTotal(){
	var totalCost = 0;
    var totalCostTD = document.getElementById("orderTotals").getElementsByTagName('td')[3];
    for(i = 0; i <= (prices.length-1); i++){
        totalCost += prices[i];
    }
    totalCostTD.textContent = totalCost;
}// eo totalCost()



