console.log("HaatBodol JavaScript Connected");

document.addEventListener("DOMContentLoaded", function () {

    var dateElement = document.getElementById("ledgerDate");

    if (dateElement) {
        var today = new Date();

        var date =
            today.getDate() + "/" +
            (today.getMonth() + 1) + "/" +
            today.getFullYear();

        dateElement.innerHTML = date;
    }

});