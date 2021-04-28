//<![CDATA[
window.addEventListener('load',function () {
    'use strict';

    let home_button = document.getElementById("home-button");

    console.log(home_button);

    //home_button.onclick = function (){
      //  location.href = "/Fashion/Front-end";
    //}

    let items = document.querySelectorAll("div.item"),
        num_items = items.length,
        clicked_item, button;

    console.log(num_items);

    for (let idx = 0; idx < num_items; idx++){
        clicked_item = items[idx];
        button = clicked_item.querySelector("button");

        button.onclick = function (){
            $.ajax({
                url: "http://localhost/Fashion/Product-page/php/cart_remove.php",
                type: 'POST',
                dataType: 'html', // request type html/json/xml
                data: {item_data: this.getAttribute("data-src"),},
                success: function(data) {
                    location.reload();
                },
                error: function(e) {
                    console.log(e); // write error to console
                }
            });

        }


    }
});

