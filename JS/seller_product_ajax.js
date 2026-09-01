document.addEventListener("DOMContentLoaded", function ()
{
    var addForm =
        document.getElementById("addProductForm");

    var addButton =
        document.getElementById("addButton");

    var messageBox =
        document.getElementById("message");

    var searchBox =
        document.getElementById("search");

    var productList =
        document.getElementById("productList");

    var removeButton =
        document.getElementById("removeButton");


  
    function showMessage(text, type)
    {
        if (messageBox)
        {
            messageBox.style.display = "block";

            messageBox.className =
                "message " + type;

            messageBox.innerHTML =
                text;
        }
    }


   

    if (addForm)
    {
        addForm.addEventListener(
            "submit",
            function (e)
            {
              
                e.preventDefault();


               
                var formData =
                    new FormData(addForm);


               
                formData.append(
                    "action",
                    "Add Product"
                );


                
                if (addButton)
                {
                    addButton.disabled = true;

                    addButton.innerHTML =
                        "Adding...";
                }


               
                var xhttp =
                    new XMLHttpRequest();


               
                xhttp.onreadystatechange =
                    function ()
                    {
                        if (
                            this.readyState === 4 &&
                            this.status === 200
                        )
                        {
                           
                            var response =
                                this.responseText.trim().split("|");


                            var status =
                                response[0];


                            var message =
                                response.slice(1).join("|");


                           
                            if (status === "success")
                            {
                                showMessage(
                                    message,
                                    "success"
                                );


                                setTimeout(
                                    function ()
                                    {
                                        location.reload();
                                    },
                                    1000
                                );
                            }

                            
                            else
                            {
                                showMessage(
                                    message,
                                    "error"
                                );


                                if (addButton)
                                {
                                    addButton.disabled =
                                        false;

                                    addButton.innerHTML =
                                        "Add Product";
                                }
                            }
                        }

                        
                        else if (
                            this.readyState === 4
                        )
                        {
                            showMessage(
                                "Something went wrong. Please try again.",
                                "error"
                            );


                            if (addButton)
                            {
                                addButton.disabled =
                                    false;

                                addButton.innerHTML =
                                    "Add Product";
                            }
                        }
                    };


                xhttp.open(
                    "POST",
                    "../controller/seller/addremoveproduct_validation.php",
                    true
                );


                xhttp.send(formData);
            }
        );
    }



    if (searchBox && productList)
    {
        searchBox.addEventListener(
            "keyup",
            function ()
            {
                var keyword =
                    searchBox.value
                    .trim()
                    .toLowerCase();


                var products =
                    productList.getElementsByClassName(
                        "product"
                    );


                for (
                    var i = 0;
                    i < products.length;
                    i++
                )
                {
                    var name =
                        products[i].getAttribute(
                            "data-name"
                        );


                    if (!name)
                    {
                        name = "";
                    }


                    if (
                        name
                        .toLowerCase()
                        .indexOf(keyword) > -1
                    )
                    {
                        products[i].style.display =
                            "flex";
                    }
                    else
                    {
                        products[i].style.display =
                            "none";
                    }
                }
            }
        );
    }


    if (removeButton)
    {
        removeButton.addEventListener(
            "click",
            function ()
            {
                
                var selected =
                    document.querySelector(
                        'input[name="selected_product"]:checked'
                    );


                if (!selected)
                {
                    showMessage(
                        "Please select a product to remove.",
                        "error"
                    );

                    return;
                }


                var confirmDelete =
                    confirm(
                        "Are you sure you want to remove this product?"
                    );


                if (!confirmDelete)
                {
                    return;
                }


                removeButton.disabled =
                    true;

                removeButton.innerHTML =
                    "Removing...";


                var xhttp =
                    new XMLHttpRequest();


              
                xhttp.onreadystatechange =
                    function ()
                    {
                        if (
                            this.readyState === 4 &&
                            this.status === 200
                        )
                        {
                          
                            var response =
                                this.responseText.trim().split("|");


                            var status =
                                response[0];


                            var message =
                                response.slice(1).join("|");


                            if (status === "success")
                            {
                                showMessage(
                                    message,
                                    "success"
                                );


                              
                                setTimeout(
                                    function ()
                                    {
                                        location.reload();
                                    },
                                    1000
                                );
                            }

                            else
                            {
                                showMessage(
                                    message,
                                    "error"
                                );


                                removeButton.disabled =
                                    false;

                                removeButton.innerHTML =
                                    "Remove Selected";
                            }
                        }

                        
                        else if (
                            this.readyState === 4
                        )
                        {
                            showMessage(
                                "Something went wrong. Please try again.",
                                "error"
                            );


                            removeButton.disabled =
                                false;

                            removeButton.innerHTML =
                                "Remove Selected";
                        }
                    };


             
                var data =
                    "action=" +
                    encodeURIComponent(
                        "Remove Selected"
                    ) +
                    "&selected_product=" +
                    encodeURIComponent(
                        selected.value
                    );


               
                xhttp.open(
                    "POST",
                    "../controller/seller/addremoveproduct_validation.php",
                    true
                );


              
                xhttp.setRequestHeader(
                    "Content-Type",
                    "application/x-www-form-urlencoded"
                );


                xhttp.send(data);
            }
        );
    }

});