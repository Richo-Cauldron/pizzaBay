// reteive locally stored data from welcome.js for createOrder.js

(function (global) {
    document.getElementById("tableNumber").innerHTML = global.localStorage.getItem("tableNumber");
    document.getElementById("customerName").innerHTML = global.localStorage.getItem("customerName");
}(window));


