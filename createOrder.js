// reteive locally stored data for order

(function (global) {
    document.getElementById("tableNumber").innerHTML = global.localStorage.getItem("tableNumber");
    document.getElementById("customerName").innerHTML = global.localStorage.getItem("customerName");
}(window));