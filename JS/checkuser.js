function CheckUser() {
    let username = document.getElementById("name").value.trim();
    let response = document.getElementById("userresponse");
 
    // ইনপুট বক্স ফাঁকা থাকলে রেসপন্স ক্লিয়ার করে দেবে
    if (username === "") {
        response.innerHTML = "";
        return;
    }
 
    let xhttp = new XMLHttpRequest();
 
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            response.innerHTML = this.responseText;
        } else if (this.readyState == 4) {
            response.innerHTML = "Error checking username.";
        }
    };
 
    xhttp.open("POST", "../Controller/CheckUser.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("username=" + username);
}