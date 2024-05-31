jQuery(document).ready(function ($) {
  $('.js-date').datepicker({
    autoClose: true,
    language: 'en',
    position: 'bottom right',
    dateFormat: 'M dd, yyyy'
  });
  $('.js-select').niceSelect();
  $('.js-phone').inputmask({
    "mask": "+38(999) 999-99-99"
  });
  const heroSlider = new Swiper('.js-hero-slider .swiper', {
    slidesPerView: 1,
    spaceBetween: 0,
    loop: true,
    watchOverflow: true,
    observeParents: true,
    observeSlideChildren: true,
    observer: true,
    speed: 800,
    autoplay: {
      delay: 5000
    },
    pagination: {
      el: '.js-hero-slider .swiper-pagination',
      type: 'fraction',
      // 'bullets', 'fraction', 'progressbar'
      clickable: true
    }
  });
  const homeSlider = new Swiper('.js-slider-homepage .swiper', {
    slidesPerView: 1,
    spaceBetween: 0,
    loop: true,
    watchOverflow: true,
    observeParents: true,
    observeSlideChildren: true,
    observer: true,
    speed: 800,
    autoplay: {
      delay: 5000
    },
    pagination: {
      el: '.js-slider-homepage .swiper-pagination',
      type: 'fraction',
      // 'bullets', 'fraction', 'progressbar'
      clickable: true
    }
  });
  const solutionSlider = new Swiper('.js-solution-slider .swiper', {
    slidesPerView: 1,
    spaceBetween: 10,
    loop: true,
    watchOverflow: true,
    observeParents: true,
    observeSlideChildren: true,
    observer: true,
    speed: 800,
    autoplay: {
      delay: 5000
    },
    navigation: {
      nextEl: '.js-solution-slider .swiper-button-next',
      prevEl: '.js-solution-slider .swiper-button-prev'
    },
    breakpoints: {
      639: {
        slidesPerView: 2,
        spaceBetween: 15
      },
      959: {
        slidesPerView: 3,
        spaceBetween: 15
      }
    }
  });
  const reviewsSlider = new Swiper('.js-reviews-slider .swiper', {
    slidesPerView: 1,
    spaceBetween: 10,
    loop: true,
    watchOverflow: true,
    observeParents: true,
    observeSlideChildren: true,
    observer: true,
    speed: 800,
    autoplay: {
      delay: 5000
    },
    pagination: {
      el: '.js-reviews-slider .swiper-pagination',
      type: 'bullets',
      // 'bullets', 'fraction', 'progressbar'
      clickable: true
    },
    breakpoints: {
      639: {
        slidesPerView: 2,
        spaceBetween: 15
      },
      959: {
        slidesPerView: 3,
        spaceBetween: 15
      }
    }
  });
  const newsSlider = new Swiper('.js-news-slider .swiper', {
    slidesPerView: 1,
    spaceBetween: 10,
    loop: true,
    watchOverflow: true,
    observeParents: true,
    observeSlideChildren: true,
    observer: true,
    speed: 800,
    pagination: {
      el: '.js-news-slider .swiper-pagination',
      type: 'bullets',
      // 'bullets', 'fraction', 'progressbar'
      clickable: true
    },
    breakpoints: {
      639: {
        loop: false,
        slidesPerView: 2,
        spaceBetween: 15
      },
      959: {
        slidesPerView: 3,
        spaceBetween: 15
      }
    }
  });
  const teamSlider = new Swiper('.js-team-slider .swiper', {
    slidesPerView: 1,
    spaceBetween: 10,
    loop: true,
    watchOverflow: true,
    observeParents: true,
    observeSlideChildren: true,
    observer: true,
    speed: 800,
    pagination: {
      el: '.js-team-slider .swiper-pagination',
      type: 'bullets',
      // 'bullets', 'fraction', 'progressbar'
      clickable: true
    },
    breakpoints: {
      639: {
        loop: false,
        slidesPerView: 2,
        spaceBetween: 15
      },
      959: {
        slidesPerView: 4,
        spaceBetween: 15
      }
    }
  });
  $(document).ready(function () {
    //E-mail Ajax Send
    $("form").submit(function () {
      //Change
      var th = $(this);
      $.ajax({
        type: "POST",
        url: "assets/mail/mail.php",
        //Change
        data: th.serialize()
      }).done(function () {
        UIkit.notification({
          message: 'Form sent successfully!',
          status: 'success',
          pos: 'top-center',
          timeout: 5000
        });
        setTimeout(function () {
          // Done Functions
          th.trigger("reset");
        }, 1000);
      });
      return false;
    });
  });

  function rargePrice() {
    var $range = $("#range-price");
    var $inputFrom = $("#range-price-from");
    var $inputTo = $("#range-price-to");
    var instance;
    var min = 0;
    var max = 8000;
    var from = 1200;
    var to = 5000;
    $range.ionRangeSlider({
      skin: "round",
      type: "double",
      min: min,
      max: max,
      from: from,
      to: to,
      hide_min_max: true,
      hide_from_to: true,
      onStart: updateInputs,
      onChange: updateInputs,
      onFinish: updateInputs
    });
    instance = $range.data("ionRangeSlider");

    function updateInputs(data) {
      from = data.from;
      to = data.to;
      $inputFrom.prop("value", from);
      $inputTo.prop("value", to);
    }

    $inputFrom.on("change", function () {
      var val = $(this).prop("value"); // validate

      if (val < min) {
        val = min;
      } else if (val > to) {
        val = to;
      }

      instance.update({
        from: val
      });
      $(this).prop("value", val);
    });
    $inputTo.on("change", function () {
      var val = $(this).prop("value"); // validate

      if (val < from) {
        val = from;
      } else if (val > max) {
        val = max;
      }

      instance.update({
        to: val
      });
      $(this).prop("value", val);
    });
  }

  rargePrice();

  function rargeWeight() {
    var $range = $("#range-weight");
    var $inputFrom = $("#range-weight-from");
    var $inputTo = $("#range-weight-to");
    var instance;
    var min = 0;
    var max = 50;
    var from = 0;
    var to = 25;
    $range.ionRangeSlider({
      skin: "round",
      type: "double",
      min: min,
      max: max,
      from: from,
      to: to,
      hide_min_max: true,
      hide_from_to: true,
      onStart: updateInputs,
      onChange: updateInputs,
      onFinish: updateInputs
    });
    instance = $range.data("ionRangeSlider");

    function updateInputs(data) {
      from = data.from;
      to = data.to;
      $inputFrom.prop("value", from);
      $inputTo.prop("value", to);
    }

    $inputFrom.on("change", function () {
      var val = $(this).prop("value"); // validate

      if (val < min) {
        val = min;
      } else if (val > to) {
        val = to;
      }

      instance.update({
        from: val
      });
      $(this).prop("value", val);
    });
    $inputTo.on("change", function () {
      var val = $(this).prop("value"); // validate

      if (val < from) {
        val = from;
      } else if (val > max) {
        val = max;
      }

      instance.update({
        to: val
      });
      $(this).prop("value", val);
    });
  }

  rargeWeight();

  function rargeMeter() {
    var $range = $("#range-meter");
    var $inputFrom = $("#range-meter-from");
    var $inputTo = $("#range-meter-to");
    var instance;
    var min = 0;
    var max = 8000;
    var from = 1000;
    var to = 6500;
    $range.ionRangeSlider({
      skin: "round",
      type: "double",
      min: min,
      max: max,
      from: from,
      to: to,
      hide_min_max: true,
      hide_from_to: true,
      onStart: updateInputs,
      onChange: updateInputs,
      onFinish: updateInputs
    });
    instance = $range.data("ionRangeSlider");

    function updateInputs(data) {
      from = data.from;
      to = data.to;
      $inputFrom.prop("value", from);
      $inputTo.prop("value", to);
    }

    $inputFrom.on("change", function () {
      var val = $(this).prop("value"); // validate

      if (val < min) {
        val = min;
      } else if (val > to) {
        val = to;
      }

      instance.update({
        from: val
      });
      $(this).prop("value", val);
    });
    $inputTo.on("change", function () {
      var val = $(this).prop("value"); // validate

      if (val < from) {
        val = from;
      } else if (val > max) {
        val = max;
      }

      instance.update({
        to: val
      });
      $(this).prop("value", val);
    });
  }

  rargeMeter();
  const mediaQueryDesktop = window.matchMedia('(max-width: 1200px)');

  function handleDesktopChange(e) {
    if (e.matches) {
      $('.js-filter-content').hide();
    } else {
      $('.js-filter-content').show();
    }
  }

  mediaQueryDesktop.addListener(handleDesktopChange);
  handleDesktopChange(mediaQueryDesktop);
  $('.js-more-filter').on('click', function () {
    $(this).parent().next('.js-filter-content').slideToggle();
  });
});

window.addEventListener('scroll', () => {
  const searchForm = document.querySelector('.search-form');
  const searchFormPosition = searchForm.getBoundingClientRect().top;
  const screenPosition = window.innerHeight / 1.3;

  if (searchFormPosition < screenPosition) {
    searchForm.classList.add('active');
  }
});

window.addEventListener('scroll', () => {
  const sectionFeatures = document.querySelector('.s-features');
  const sectionFeaturesPosition = sectionFeatures.getBoundingClientRect().top;
  const screenPosition = window.innerHeight / 1.3;

  if (sectionFeaturesPosition < screenPosition) {
    sectionFeatures.classList.add('active');
  }
});

window.addEventListener('scroll', () => {
  const sectionCategories = document.querySelector('.s-categories');
  const sectionCategoriesPosition = sectionCategories.getBoundingClientRect().top;
  const screenPosition = window.innerHeight / 1.3;

  if (sectionCategoriesPosition < screenPosition) {
    sectionCategories.classList.add('active');
  }
});

// Scroll Top
// Função que mostra ou oculta o botão conforme o scroll da página
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    var scrollTopBtn = document.getElementById("scrollTopBtn");

    // Mostra o botão quando o usuário rola 20 pixels para baixo da parte superior da página
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        scrollTopBtn.style.display = "block";
    } else {
        scrollTopBtn.style.display = "none";
    }
}

// Função que faz o scroll da página para o topo
function scrollToTop() {
    document.body.scrollTop = 0; // Para navegadores que não são o Firefox
    document.documentElement.scrollTop = 0; // Para o Firefox
}




