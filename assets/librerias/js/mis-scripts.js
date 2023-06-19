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
  setTimeout(function () {
    $("#loading-screen").remove();
  }, 500);
  $("#menu-ingresar-sesion").addClass("m-0 p-0");
  $("#menu-ingresar-sesion .menu-item a")
    .eq(0)
    .addClass("btn btn-primary ps-5 pe-5");
  $("#menu-ingresar-sesion .menu-item a")
    .eq(1)
    .addClass("btn btn-light border text-primary border-primary ps-5 pe-5");
  $(".woocommerce-breadcrumb a")
    .eq(0)
    .addClass("border-start ps-2 border-primary");
  $(".products .product").addClass("card sombra");
  $(".products .product").find(".ajax_add_to_cart").remove();
  $(".sombra").mouseover(function () {
    $(this).addClass("shadow");
  });
  $(".sombra").mouseout(function () {
    $(this).removeClass("shadow");
  });
  $("#menu-footer-final").addClass("m-0 p-0");
  $("footer li ").addClass("ms-0");
  $(window).on("resize", function () {
    if ($(window).width() <= 769) {
      $(".oferta-del-dia .bg-black").removeClass("rounded-end");
      $(".oferta-del-dia .img-fluid").removeClass("rounded-start");
      $(".oferta-del-dia .bg-black").addClass("rounded-bottom");
      $(".oferta-del-dia .img-fluid").addClass("rounded-top");
    } else {
      $(".oferta-del-dia .img-fluid").removeClass("rounded-top");
      $(".oferta-del-dia .bg-black").removeClass("rounded-bottom");
      $(".oferta-del-dia .img-fluid").addClass("rounded-start");
      $(".oferta-del-dia .bg-black").addClass("rounded-end");
    }
  });
  $(".site-footer .nav-link").click(function () {
    $(this).toggleClass("boton-footer");
    $(this).find("i").toggleClass("fa-angle-down fa-angle-up");
  });
  $(".product .onsale").remove();
  $(".menu-desplegable").attr('data-bs-toggle', 'tooltip');
  $(".menu-desplegable").attr('data-bs-html', 'true');
  $(".menu-desplegable").attr('data-bs-title', $(".sub-menu").detach().html());

  const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
  const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))

  $("#menu-derecha-nav li").eq(3).find("a").html('<i class="fa-solid fa-cart-shopping"></i>');
  $("#menu-izquierda-nav li a").addClass("d-flex align-items-center");
  $("#menu-izquierda-nav li").eq(0).find("a").html('<i class="fs-2 fa-solid fa-location-dot"></i><div class="ps-2">Ingresa tu <br> ubicacion</div>');
  $(".columnas").addClass("d-flex align-items-end");

  //selecciona todos los elementos con estos atributos en jquery y añade la clase bg-primary:
  //<button  data-bs-target="#carouselExampleIndicators"
});
