function CheckUser()
{
    let username =
        document.getElementById("name").value.trim();

    let response =
        document.getElementById("userresponse");


    /*
     * If username field is empty,
     * clear the AJAX response.
     */
    if (username === "")
    {
        response.innerHTML = "";
        return;
    }


    /*
     * Create AJAX request.
     */
    let xhttp =
        new XMLHttpRequest();


    /*
     * Handle AJAX response.
     */
    xhttp.onreadystatechange = function()
    {
        if (
            this.readyState === 4 &&
            this.status === 200
        )
        {
            response.innerHTML =
                this.responseText;
        }

        else if (this.readyState === 4)
        {
            response.innerHTML =
                "<span style='color:red;'>Error checking username.</span>";
        }
    };


    /*
     * Send POST request to controller.
     *
     * IMPORTANT:
     * Your project folder names are lowercase:
     * controller
     */
    xhttp.open(
        "POST",
        "../controller/checkuser.php",
        true
    );


    /*
     * Tell PHP that data is
     * URL encoded form data.
     */
    xhttp.setRequestHeader(
        "Content-Type",
        "application/x-www-form-urlencoded"
    );


    /*
     * Send username to PHP controller.
     *
     * encodeURIComponent() prevents
     * problems with spaces and special characters.
     */
    xhttp.send(
        "username=" +
        encodeURIComponent(username)
    );
}