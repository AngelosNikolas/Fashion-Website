//<![CDATA[
window.addEventListener('load',function () {
    'use strict';

    let home_button = document.getElementById("home-button");

    console.log(home_button);

    home_button.onclick = function (){
      location.href = "/Fashion/Front-end";
    }
});

