$(document).ready(function () {
  $(function () {
    $('.jscroll').jscroll();
  });
  $(".burger").on("click", function () {
    $(".burger__button").toggleClass("menu-active"), $(".dropdown-menu").toggleClass("menu-active")
  }), $(".tabs-item").on("click", function () {
    $(".tabs-item").removeClass("tab-active"), $(".tabs-block").removeClass("tab-active"), $(this).addClass("tab-active"), $("#" + $(this).attr("data-target")).addClass("tab-active")
  }), $(".label").on("click", function () {
    "img/icons/bookmark-active.svg" == $("#" + $(this).attr("data-target")).attr("src") ? $("#" + $(this).attr("data-target")).attr("src", "img/icons/bookmark.svg") : $("#" + $(this).attr("data-target")).attr("src", "img/icons/bookmark-active.svg")
  }), $("#load-more").click(function () {
    $(this).toggleClass("load-active"), setTimeout(function () {
      $(".comment-hidden").addClass("comment-visible")
    }, 3e3)
  }), $(".subscription__form").validate({
    errorClass: "subscription__invalid",
    email: {
      required: "We need your email address",
      email: "Invalid format"
    }
  }), $(".comments-form").validate({
    errorClass: "comments-form__invalid",
    messages: {
      required: "Please enter your opinion",
      comment: "Minimum number of characters 100"
    }
  });
  new Swiper(".hot-news__swiper-container", {
    spaceBetween: 30,
    centeredSlides: !0,
    loop: !0,
    keyboard: {
      enabled: !0
    },
    autoplay: {
      delay: 3e3,
      disableOnInteraction: !1
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: !0
    }
  }), new Swiper(".article-slider__container", {
    slidesPerView: 1,
    spaceBetween: 15,
    loop: !0,
    keyboard: {
      enabled: !0
    },
    navigation: {
      nextEl: ".article-slider__button_next",
      prevEl: ".article-slider__button_prev"
    }
  })
});