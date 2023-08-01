var sp_flag = false;
var wW = $(window).innerWidth();
var wH = $(window).innerHeight();
var pos = $(window).scrollTop();
var modalPos;

///////アクション
$(function(){
  resizePcSp();
  objectFitImages();
  page_scroll();
  scrollProcess();
  spHNav();
  catList();
  contactTrigger();
  siwperRelation();
  pageTop();

  $(window).on("resize orientationchange", function () {
    wW = $(window).innerWidth();
    resizePcSp();
  });
  $(window).on("scroll touchmove", function () {
    pos = $(window).scrollTop();
    scrollProcess();
  });
});

$(window).on("load", function () {
  $("#wrapper").addClass("preload");
  wW = $(window).innerWidth();
  resizePcSp();
});

//関数
////////////////////////////////

// スマホ判断
function resizePcSp() {
  if (wW > 767) {
    sp_flag = false;
  } else {
    sp_flag = true;
  }
}

//ページスクロール
function page_scroll() {
  $('a[href^="#"]').not(".noScroll").on("click", function () {
    var speed = 800;
    var href = jQuery(this).attr("href");
    var target = jQuery(href === "#" || href === "" ? 'html' : href);
    var position = target.offset().top;
    $('body,html').animate({
      scrollTop: position //- hH
    }, speed, 'swing');
    return false;
  });
}


//hNav
function spHNav() {
  $(".header__btn").off();
  $(".header__btn").on("click",function(){
    $(this).toggleClass("active");
    $(".header__nav").toggleClass("active");
    $("#wrapper").css({
      position: "fixed",
      top: -1 * pos,
      width:"100%"
    });
  
    if(!$(this).hasClass("active")){
      $('#wrapper').attr({
        style: ''
      });
      $('html, body').prop({
        scrollTop: modalPos
      });
    } else {
      modalPos = pos;
      wH = $(window).innerHeight();
      hH = $("header").outerHeight(true);
    }
    
    return false;
  });
  // $(".header__nav .header__list").find('a[href^="#"]').on("click", function () {
  //   var href = jQuery(this).attr("href");
  //   if ($(".header__btn").hasClass("active")) {
  //     $(".header__btn , .header__nav").removeClass("active");
  //     var speed = 800;
  //     var target = jQuery(href === "#" || href === "" ? 'html' : href);
      
  //     $('#nav').attr({
  //       style: ''
  //     });
  //     var position = target.offset().top;
  //     $('#wrapper').attr({
  //       style: ''
  //     });
  //     $('html, body').prop({
  //       scrollTop: modalPos
  //     }, function () {
  //       $('body,html').animate({
  //         scrollTop: position - hH
  //       }, speed, 'swing');
  //     });
      
  //     return false;
  //   }
  // });
}

//scroll 処理
function scrollProcess() {
  /*scroll fadeinなどタイミング*/
  $(".scroll_item").each(function () {
    var startPos = 0.8;
    if($(this).attr('data-spos') !== undefined ){
      startPos = $(this).data('spos');
    }
    if ($(this).offset().top < pos + wH * startPos) {
      $(this).addClass("scrollActive");
    }
  });
  /*scroll_listの順番で表示タイミング*/
  $(".scroll_list").each(function () {
    var delaySpeed = 200;
    var startPos = 0.8;
    var listType = "";
    if($(this).attr('data-speed') !== undefined ){
      delaySpeed = $(this).data('speed');
    }
    if($(this).attr('data-spos') !== undefined ){
      startPos = $(this).data('spos');
    }
    if($(this).attr('data-list') !== undefined ){
      listType = "." + $(this).data('list');
    }
    if ($(this).offset().top < pos + wH * startPos) {
      $(this).find(".scroll_list_item"+listType).each(function (i) {
        $(this).delay(delaySpeed * i).queue(function () {
          $(this).addClass("scrollActive").dequeue();
        });
      });
    }
  });
}

function catList() {
  $(".catList__list").hide();
  $(".catList__btn.toggle").click(function () {
    $(this).next().slideToggle();
  });
}

function contactTrigger() {
  $('.contact__agree .agreement span.mwform-checkbox-field-text').html('個人情報の取り扱いについて、<br class="sp">同意の上送信します。');
  $('.contact__content.radio select.explain option[value=""]').html('お選びください');
  $('.contact__content.radio .explain').hide();
  $('.contact__content.radio .mwform-radio-field input[type=radio]').each(function() {
    $(this).change(function() {
      if($(this.checked)) {
        $('.contact__content.radio .explain').hide();
        $('.contact__content.radio .explain').val('');
      }
    });
  });
  $('.contact__content.radio .trigger').each(function() {
    if($(this).eq(0).prop('checked')) {
      const explain = $(this).parent().parent().next().next('.explain');
      explain.fadeIn();
    }
    $(this).change(function() {
      if($(this).eq(0).prop('checked')) {
        // const explain = $(this).parent().parent().next().next('.explain');
        // explain.fadeIn();

        const explain01 = $(this).parent().parent().next().next('.explain');
        const explain02 = $(this).parent().parent().next().next().next('.explain');
        explain01.fadeIn();
        explain02.fadeIn();
      }
    });
  });
}

// function siwperRelation() {
//   let options = {};
//   const slideLength = document.querySelectorAll('.relation__slider .swiper-container .swiper-slide').length;
//   if (slideLength == 1) {
//     $(".relation__slider .swiper-container").addClass("slideNone");
//   }
//   if ( slideLength !== 1 ) {
//     options = {
//       loop: true,
//       spaceBetween: 25,
//       slidesPerView: 2,
//       speed: 1500,
//       navigation: {
//         nextEl: '.swiper-button-next',
//         prevEl: '.swiper-button-prev'
//       },
//       autoplay: {
//         delay: 5000,
//         stopOnLastSlide: false,
//         disableOnInteraction: false,
//         reverseDirection: false
//       },
//       breakpoints: {
//         1000: {
//           slidesPerView: 4,
//           spaceBetween: 20,
//         },
//         768: {
//           slidesPerView: 3,
//           slidesPerGroup: 10,
//         }
//       },
//     }
//   } else {
//     options = {
//       loop: false,
//       autoplay: false,
//     }
//   }
//   new Swiper('.relation__slider .swiper-container', swipeOption);
// }
function siwperRelation() {
  const slideLength = document.querySelectorAll('.relation__slider .swiper-container .swiper-slide').length
  if(slideLength > 2) {
    var relationSlider = new Swiper('.relation__slider .swiper-container', {
      loop: true,
      spaceBetween: 25,
      slidesPerView: 2,
      speed: 1500,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev'
      },
      autoplay: {
        delay: 5000,
        stopOnLastSlide: false,
        disableOnInteraction: false,
        reverseDirection: false
      },
      breakpoints: {
        1000: {
          slidesPerView: 4,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 3,
          slidesPerGroup: 10,
        }
      },
    });
  } else {
    $(".relation__slider .swiper-container").addClass("slideNone");
  }
}

function pageTop() {
  var appear = false;
  var pagetop = $('.footer__top');
  $(window).scroll(function () {
    if ($(this).scrollTop() > 200) {
      if (appear == false) {
        appear = true;
        pagetop.addClass('active');
      }
    } else {
      if (appear) {
        appear = false;
        pagetop.removeClass('active');
      }
    }
  });
}
