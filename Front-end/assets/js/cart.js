//<![CDATA[
window.addEventListener('load',function () {
    'use strict';



    let items = document.querySelectorAll("article.flexParagraph"),
        cart = document.getElementById("items"),
        cart_items = parseInt(document.getElementById("items").innerText),
        num_items = items.length,
        clicked_item, clicked_button, product_name, selected_item,
        item_price, item_id, img, quantity;

    var total_cost = 0;


    $.ajax({
        url: "http://localhost/Fashion/Product-page/php/get_session_data.php",
        type: 'GET',
        dataType: 'html', // request type html/json/xml
        async: false,
        success: function(data) {
            total_cost = data;
        },
        error: function(e) {
            console.log(e); // write error to console
        }
    });


    console.log("JS TOTAL FROM SESSION: " + total_cost);
    console.log("No of items: " + num_items);

    for (let idx = 0; idx < num_items; idx++){
        clicked_item = items[idx];
        clicked_button = clicked_item.querySelector("button");

        clicked_button.onclick = function (){
            //console.log(total_cost);
            selected_item = this.parentNode;
            console.log(selected_item);

            product_name = selected_item.querySelector("h4").innerText;
            item_id = selected_item.querySelector("p.item-id").innerText;

            //alert("Product " + product_name + " added to basket.");

            //add to basket -- session
            item_price = selected_item.querySelector("h5").innerText;

            img = selected_item.querySelector("img").dataset.src;

            quantity = 1;

            console.log(img);

            total_cost = parseFloat(total_cost) + parseFloat(item_price);
            total_cost = total_cost.toFixed(2);
            cart_items = parseInt(cart_items) + 1;

            cart.innerHTML = cart_items;

            // temporary
            console.log("Number of Items in Basket: " + cart_items);
            console.log("Total Cost: £ " + total_cost);
            console.log("Item ID: " + item_id);

            $.ajax({
                url: "http://localhost/Fashion/Product-page/php/cart.php",
                type: 'POST',
                dataType: 'html', // request type html/json/xml
                data: {item_name: product_name, total_cost: total_cost, item_price: item_price, img: img, quantity: quantity},
                success: function(data) {
                    alert("Product " + product_name + " added to basket.");
                },
                error: function(e) {
                    console.log(e); // write error to console
                }
            });
        }
    }
});