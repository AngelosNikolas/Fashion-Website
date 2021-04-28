// Create an instance of the Stripe object with your publishable API key
var stripe = Stripe("pk_test_51ISiahGDrYd4wBrL6wfM28FE870l0uKO2iMYL6li7jqvdr7M5nX5i9YH0UEY3PMF0sPrObsuirPwVm5K0QNhdnnM00hhYbixyc");
var checkoutButton = document.getElementById("checkout-button");

checkoutButton.addEventListener("click", function () {
    console.log("asdfads");
    fetch("../../Fashion/payment/create-checkout-session.php", {
        method: "POST",
    })
        .then(function (response) {
            return response.json();
        })
        .then(function (session) {
            return stripe.redirectToCheckout({ sessionId: session.id });
        })
        .then(function (result) {
            // If redirectToCheckout fails due to a browser or network
            // error, you should display the localized error message to your
            // customer using error.message.
            if (result.error) {
                alert(result.error.message);
            }
        })
        .catch(function (error) {
            console.error("Error:", error);
        });
});