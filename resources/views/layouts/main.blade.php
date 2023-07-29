<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Karyatama</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"
    ></script>
    <!-- foont google -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <!-- icon bootstrap --> 
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css"
    />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <!-- my css -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="icon" type="image/png" href="img/logo.png" />

  </head>
  <body>

    @include('layouts.navbar')
    
    @yield('content')

    @include('layouts.footer')

    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        centeredSlides: false,
        slidesPerGroupSkip: 1,
        grabCursor: true,
        keyboard: {
          enabled: true,
        },
        breakpoints: {
          912: {
            slidesPerView: 1,
            slidesPerGroup: 1,
          },
          1024: {
            slidesPerView: 2,
            slidesPerGroup: 1,
          }
        },
        scrollbar: {
          el: ".swiper-scrollbar",
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
      });
    </script>

    <script>
      var swiper = new Swiper(".mySwiper2", {
        slidesPerView: 1,
        centeredSlides: false,
        slidesPerGroupSkip: 1,
        grabCursor: true,
        keyboard: {
          enabled: true,
        },
        breakpoints: {
          769: {
            slidesPerView: 6,
            slidesPerGroup: 1,
          },
          375: {
            slidesPerView: 2,
            slidesPerGroup: 1,
          }
        },
        // breakpoints: {
        //   540: {
        //     slidesPerView: 3,
        //     slidesPerGroup: 1,
        //   },
        // },
        scrollbar: {
          el: ".swiper-scrollbar",
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
      });
    </script>

    <script>
      function changeImage(fileName) {
        let img = document.querySelector("#bannerImage");
        img.setAttribute("src", fileName);
      }
    </script>

    <script>
      var swiper = new Swiper(".swiperKarir", {
        slidesPerView: 1,
        centeredSlides: false,
        slidesPerGroupSkip: 1,
        grabCursor: true,
        keyboard: {
          enabled: true,
        },
        breakpoints: {
          921: {
            slidesPerView: 3,
            slidesPerGroup: 1,
          },
        },
        scrollbar: {
          el: ".swiper-scrollbar",
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
      });
    </script>  

    {{-- <script>
    document.addEventListener('DOMContentLoaded', function () {
      const dropdownItems = document.querySelectorAll('.lang-select');

      dropdownItems.forEach(function (item) {
        item.addEventListener('click', function (event) {
          event.preventDefault();
          const selectedLang = this.getAttribute('data-lang');
          changeLanguage(selectedLang);
        });
      });

      function changeLanguage(lang) {
        const dropdownToggle = document.querySelector('.dropdown-toggle');
        dropdownToggle.textContent = '| ' + lang;

      }
    });
  </script> --}}

  <script type="text/javascript">
      function googleTranslateElementInit() {
        new google.translate.TranslateElement(
          { pageLanguage: "id" },
          "google_translate_element"
        );
      }
      function triggerHtmlEvent(element, eventName) {
        var event;
        if (document.createEvent) {
          event = document.createEvent("HTMLEvents");
          event.initEvent(eventName, true, true);
          element.dispatchEvent(event);
        } else {
          event = document.createEventObject();
          event.eventType = eventName;
          element.fireEvent("on" + event.eventType, event);
        }
      }
      $(document).ready(function () {
        $(".lang-select").click(function () {
          var theLang = $(this).attr("data-lang");
          $(".goog-te-combo").val(theLang);
          window.location = $(this).attr("href");
          window.location.reload();
        });
      });
    </script>
    <script
      type="text/javascript"
      src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"
    ></script>

    <script src="js/script.js"></script>
  </body>

</html>
