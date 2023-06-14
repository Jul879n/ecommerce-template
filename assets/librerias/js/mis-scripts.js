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
  setTimeout(function() {
    $("#loading-screen").remove();
  }, 500);
  $("#menu-ingresar-sesion").addClass("m-0 p-0");
  $("#menu-ingresar-sesion .menu-item a").eq(0).addClass("btn btn-primary ps-5 pe-5");
  $("#menu-ingresar-sesion .menu-item a").eq(1).addClass("btn btn-light border text-primary border-primary ps-5 pe-5");
  $(".woocommerce-breadcrumb a").eq(0).addClass("border-start ps-2 border-primary");
  $(".products .product").addClass("card sombra");
  $(".products .product").find(".ajax_add_to_cart").remove();
  $(".sombra").mouseover(function () {
    $(this).addClass("shadow");
  });
  $(".sombra").mouseout(function () {
    $(this).removeClass("shadow");
  });
  $("#menu-footer-final").addClass("m-0 p-0")
});
