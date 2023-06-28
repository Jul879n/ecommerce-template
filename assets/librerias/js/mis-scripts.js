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
  $(".attachment-woocommerce_thumbnail").addClass("card-img");
  $(".products .product").find(".ajax_add_to_cart").remove();
  $(".sombra").mouseover(function () {
    $(this).addClass("shadow puntero");
  });
  $(".sombra").mouseout(function () {
    $(this).removeClass("shadow");
    $(this).removeClass("puntero");
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
  $(".menu-desplegable").attr("data-bs-toggle", "tooltip");
  $(".menu-desplegable").attr("data-bs-html", "true");
  $(".menu-desplegable").attr("data-bs-title", $(".sub-menu").detach().html());

  const tooltipTriggerList = document.querySelectorAll(
    '[data-bs-toggle="tooltip"]'
  );
  const tooltipList = [...tooltipTriggerList].map(
    (tooltipTriggerEl) => new bootstrap.Tooltip(tooltipTriggerEl)
  );

  $("#menu-derecha-nav li")
    .eq(3)
    .find("a")
    .html('<i class="fa-solid fa-cart-shopping"></i>');
  $("#menu-izquierda-nav li a").addClass("d-flex align-items-center");
  $("#menu-izquierda-nav li")
    .eq(0)
    .find("a")
    .html(
      '<i class="fs-2 fa-solid fa-location-dot"></i><div class="ps-2">Ingresa tu <br> ubicacion</div>'
    );
  //$(".columnas").addClass("d-flex align-items-end");
  $('button[data-bs-target="#carouselExampleIndicators"]').addClass(
    "circulo rounded-circle"
  );

  $(".cuadrado").mouseover(function () {
    $(this).removeClass("text-primary");
    $(this).addClass("bg-primary  text-white");
  });
  $(".cuadrado").mouseout(function () {
    $(this).removeClass("bg-primary text-white");
    $(this).addClass("text-primary");
  });

  //carrusel productos
  $("#carrusel-productos").slick({
    slidesToShow: 5,
    slidesToScroll: 5,
    autoplay: false,
    autoplaySpeed: 4000,
    arrows: true,
    dots: false,
    pauseOnHover: true,
    infinite: true,
    edgeFriction: 1,
    responsive: [
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
          autoplay: true,
          autoplaySpeed: 4000,
        },
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
          autoplay: true,
          autoplaySpeed: 4000,
        },
      },
      {
        breakpoint: 375,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 4000,
        },
      },
    ],
  });
  // Busca todos los elementos con el atributo aria-hidden
  $("[aria-hidden]").each(function () {
    // Si el valor de aria-hidden es "true", cambia el valor a "false", de lo contrario cambia el valor a "true"
    if ($(this).attr("aria-hidden") === "true") {
      $(this).attr("aria-hidden", "false");
    } else {
      $(this).attr("aria-hidden", "true");
    }
  });
  $(".slick-track").addClass("d-flex");
  $(".slick-next").html(
    '<i class="fs-1 text-primary fa-solid fa-angle-right"></i>'
  );
  $(".slick-next").addClass(
    "border shadow bg-light esfera rounded-circle d-flex justify-content-center align-items-center"
  );
  $(".slick-prev").html(
    '<i class="fs-1 text-primary fa-solid fa-angle-left"></i>'
  );
  $(".slick-prev").addClass(
    "border shadow bg-light esfera rounded-circle d-flex justify-content-center align-items-center"
  );
  if ($("#home-page").length === 0) {
    $(".site-footer").removeClass("bg-white").find(".container:eq(0)").remove();
    $(".site-footer .bg-white:eq(0)").removeClass("bg-white");
  }
  $(".single-product .woocommerce-product-gallery")
    .removeClass()
    .addClass(
      "woocommerce-product-gallery col-12 col-sm-9 d-flex flex-row-reverse mb-3"
    );
  $("ol.flex-control-nav.flex-control-thumbs img").removeAttr("onload");
  $(".woocommerce-loop-product__link").addClass("p-0");
  $(".woocommerce-product-gallery .flex-viewport").addClass("card-img");
  $(".flex-control-thumbs").prependTo(".woocommerce-product-gallery");
  $(".single-product .product").addClass("row justify-content-between");
  $('<div id="pegado" class="col-sm-3 pegado"></div>').insertAfter(".summary");
  $(".summary").appendTo("#pegado");
  $(".single-product .summary").removeClass().addClass("card p-3 mb-3 pago");
  $("#customer_details").addClass("form-control p-3");
  $("#customer_details input").addClass("form-control");
  $(".woocommerce-info").addClass("rounded-3 border-primary border");
  $(".wp-element-button").removeClass().addClass("btn btn-primary");
  $(".woocommerce-tabs").addClass("card border-0 border-top p-3 col-sm-9 mb-3");
  $(".related").attr("id", "relacionados");
  // Selecciona el elemento donde deseas insertar la sección #relacionados
  var $targetElement = $(".type-product:first");
  // Mueve el elemento #relacionados a la posición deseada, si ya existe en el DOM
  $("#relacionados").detach().insertAfter($targetElement);
  $("#comments").appendTo(".woocommerce-tabs");
  $("#commentform label").addClass("form-label");
  $("#commentform input").addClass("form-control");
  $("#commentform textarea").addClass("form-control");
  $("#wp-comment-cookies-consent").removeClass("form-control");
  $("#tarjetas").appendTo("#pegado");
  $(".pago").each(function () {
    $(this).find(".price").addClass("d-flex justify-content-between");
    $(this).find(".cart").addClass("d-flex flex-column justify-content-around");
    $(this).find(".separacion").css("heigth", "120px");
    $('<div class="mitad"></div>').appendTo($(this).find(".price"));
    $(this).find(".porcentaje").appendTo($(this).find(".price"));
    $(this).find(".price del").first().appendTo($(this).find(".mitad"));
    $(this).find(".price ins").first().appendTo($(this).find(".mitad"));
    $(this).find(".woocommerce-Price-amount").eq(1).addClass("grande");
  });
  $("#home-page .product li").find(".btn-primary").remove();
  $("#home-page .product li").find(".woocommerce-loop-product__title").remove();
  $("#home-page ").find(".mitad").remove();
  $("#home-page ").find(".porcentaje").remove();
});
