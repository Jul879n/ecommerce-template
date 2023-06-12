jQuery(document).ready(function ($) {
  $(".entry-summary").addClass("card p-3");
  $(".volver").click(function () {
    window.history.back();
  });
  if ($(".woocommerce").has(".woocommerce-cart-form").length) {
    $(".woocommerce").addClass("row mt-5");
  }
  $(".woocommerce-cart-form").addClass("col-12 col-sm-8 me-4");
  $(".cart-collaterals").addClass("col-12 col-sm-4");
  $(".cart_totals").addClass("w-100");
});

setTimeout(function() {
  var element = document.getElementById("loading-screen");
  if (element && element.parentNode) {
    element.parentNode.removeChild(element);
  }
}, 500);