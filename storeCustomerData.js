// initiateOrder - enter and locally store customer name and table number
(function (global) {
    document.getElementById("customerInitiate").addEventListener("click", function () {
        global.localStorage.setItem("tableNumber", document.getElementById("tableNumberInput").value);
        global.localStorage.setItem("customerName", document.getElementById("customerNameInput").value);
    }, false);
}(window));