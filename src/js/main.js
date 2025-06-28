jQuery(document).ready(function($) {
  // When a tab is clicked
  $('a.nav-link').on('click', function() {
    // Get the name of the clicked tab
    var term = $(this).text().trim().split('(')[0];
    // Set the name of the clicked tab to the h3 element
    $('#active-category-name').text(term);
  });
  // Get the name of the active tab on page load and set it to the h3 element
  var activeterm = $('a.nav-link.active').text().trim().split('(')[0];
  $('#active-category-name').text(activeterm);
  
   $('.nav-link').on('click', function(e) {
      e.preventDefault();
      var target = $(this).attr('href');
      $('.nav-link').removeClass('active');
      $(this).addClass('active');
      $('.tab-pane').removeClass('active show');
      $(target).addClass('active show');
  });
});


// Table of content on integrations posts
document.addEventListener('DOMContentLoaded', function() {
  const upsDiv = document.querySelector('.ups');
  const contentDiv = document.querySelector('.rights');

  // Ensure that both the .ups and .rights divs exist
  if (upsDiv && contentDiv) {
    const headings = contentDiv.querySelectorAll('h2');
    const tocList = document.createElement('ul');
    const tocLinks = [];

    // Create TOC items
    headings.forEach((heading, index) => {
        if (!heading.id) {
            heading.id = 'heading-' + (index + 1);
        }

        const listItem = document.createElement('li');
        const link = document.createElement('a');
        link.href = '#' + heading.id;

        // Add the number prefix to the link text (e.g., 1. Heading Title)
        link.textContent = (index + 1) + '. ' + heading.textContent;

        link.addEventListener('click', function(e) {
            e.preventDefault();
            document.querySelector(link.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });

        listItem.appendChild(link);
        tocList.appendChild(listItem);
        tocLinks.push(link);
    });

    upsDiv.appendChild(tocList);

    // Function to determine the currently active section
    function onScroll() {
        let currentActive = null;

        headings.forEach((heading, index) => {
            const rect = heading.getBoundingClientRect();

            // Check if the heading top is near the top of the viewport and before the next heading
            if (rect.top <= 100 && (index === headings.length - 1 || headings[index + 1].getBoundingClientRect().top > 100)) {
                currentActive = tocLinks[index];
            }
        });

        // Update the active class
        tocLinks.forEach(link => {
            link.classList.remove('active');
        });

        if (currentActive) {
            currentActive.classList.add('active');
        }
    }

    // Listen for scroll events
    window.addEventListener('scroll', onScroll);

    // Initial check in case the page loads with a section in view
    onScroll();
  }
  // Select all anchor links in the table of contents //This is only for shopware and shopify page
  const tocLinks = document.querySelectorAll('.toc-list a');
  const headingSections = [];

  tocLinks.forEach(function(link) {
      const targetId = link.getAttribute('href').substring(1);
      const targetElement = document.getElementById(targetId);
      if (targetElement) {
          headingSections.push({
              id: targetId,
              element: targetElement
          });
      }

      // Click behavior
      link.addEventListener('click', function(event) {
          event.preventDefault();

          // Remove active class from all
          tocLinks.forEach(l => l.classList.remove('active'));
          // Add active class to clicked
          link.classList.add('active');

          // Scroll smoothly
          // Scroll smoothly
          targetElement.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        });  
      });
  });

  // Scroll behavior
  window.addEventListener('scroll', function() {
      const scrollPos = window.scrollY || window.pageYOffset;
      let currentId = null;

      headingSections.forEach(section => {
          if (scrollPos >= section.element.offsetTop - 100) {
              currentId = section.id;
          }
      });

      if (currentId) {
          tocLinks.forEach(link => {
              link.classList.toggle('active', link.getAttribute('href') === '#' + currentId);
          });
      }
  });
  
});



//Counter number for ONLINE MARKETING PAGE
function debounce(func, delay) {
  let timer;
  return function() {
    clearTimeout(timer);
    timer = setTimeout(func, delay);
  };
}

$(window).on('load', function() {
  var counterTriggered = false;

  function triggerCounter() {
    var $clientWrapper = $('.client-wrapper-onlinem');
    if (!counterTriggered && $clientWrapper.length && $(window).scrollTop() + $(window).height() >= $clientWrapper.offset().top) {
      $('.counter').each(function() {
        $(this).prop('Counter', 0).animate({
          Counter: $(this).text()
        }, {
          duration: 5000,
          easing: 'swing',
          step: function(now) {
            $(this).text(Math.ceil(now));
          }
        });
      });
      counterTriggered = true;
    }
  }

  $(window).on('scroll', debounce(triggerCounter, 250));
});




$(document).ready(function () {
//   if (window.matchMedia("(max-width: 768px)").matches) {
//     $(".scrollTo").click(() => {
//       $("html, body").animate({ scrollTop: 4320 }, 300);
//     });
//   } else {
//     $(".scrollTo").click(() => {
//       $("html, body").animate({ scrollTop: 3600 }, 300);
//     });
//   }

  $(".head").click(function () {
    $(this).toggleClass("active");
    $(this).parent().find(".arrow").toggleClass("arrow-animate");
    $(this).parent().find(".content").slideToggle(280);
  });

  if (window.matchMedia("(max-width: 1500px)").matches) {
    $(document).ready(function () {
      $(".work__spaces-wrapper").slick({
        infinite: true,
        slidesToShow: 4,
        autoplay: true,
        slidesToScroll: 1,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 1.9,
              infinite: true,
            },
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1.2,
              slidesToScroll: 1,
              centerMode: true,
            },
          },
          {
            breakpoint: 340,
            settings: {
              slidesToShow: 1.5,
              slidesToScroll: 1,
            },
          },
         

          
        ],
        prevArrow: $(".prev-career"),
        nextArrow: $(".next-career"),
      });
    });
  } else {
    $(document).ready(function () {
      $(".work__spaces-wrapper").slick({
        infinite: true,
        slidesToShow: 5,
        autoplay: true,
        slidesToScroll: 1,
        prevArrow: $(".prev-career"),
        nextArrow: $(".next-career"),
      });
    });
  }

// Menubar
$(".menubar").click(function (e) {
  e.preventDefault();
  
  // Toggle active class on menubar-menu and header
  $(this).find(".menubar-menu").toggleClass("active");
  $("header").toggleClass("active");

  // Toggle no-scroll class based on the header's active state
  if ($("header").hasClass("active")) {
    $("html").addClass("noscr");
  } else {
    $("html").removeClass("noscr");
  }

  $("nav").slideToggle(200); // Adjust the transition speed (in milliseconds)
});

// Video Popup
$(".video-container").click(function (e) {
  e.preventDefault();
  $("#videoPopup").toggleClass("active");
  $("body").toggleClass("overflow-hidden");
});



  $(".our-cases-wrapper").slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    infinite: true,
    prevArrow: $(".our-cases-prev"),
    nextArrow: $(".our-cases-next"),
    responsive: [
      {
        breakpoint: 1366,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });
  
  $(".testimonial-second-slider").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: ".testimonial-main-slider",
  });

  $(".testimonial-main-slider").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    asNavFor: ".testimonial-second-slider",
    dots: false,
    infinite: true,
    centerMode: false,
    focusOnSelect: true,
    prevArrow: $(".testimonial-arrow-prev"),
    nextArrow: $(".testimonial-arrow-next"),
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });

  $(".partners-wrapper").slick({
    slidesToShow: 6,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 0,
    speed: 3000,
    pauseOnHover: false,
    cssEase: "linear",
    arrows: false,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        },
      },
    ],
  });

  $(".technology-accordion-wrapper").click(function (e) {
    e.preventDefault();

    $(".technology-body > div").removeClass("active");
    $(".technology-accordion-wrapper").removeClass("active-a");
    $(this).addClass("active-a");

    $currentAccordion = "." + $(this).attr("data-index");
    $($currentAccordion).toggleClass("active");
  });

  $(".new-parners-container .container .row").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    fade: false,
    mobileFirst: true,
    centerMode: false,
    autoplay: true,
    autoplaySpeed: 1000,
    prevArrow: $(".services-arrow-prev"),
    nextArrow: $(".services-arrow-next"),
    responsive: [
      {
        breakpoint: 992,
        settings: "unslick",
      },
    ],
  });

  $(".background-partners .container .row").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    fade: false,
    mobileFirst: true,
    centerMode: false,
    autoplay: true,
    autoplaySpeed: 1000,
    prevArrow: $(".services-arrow-prev"),
    nextArrow: $(".services-arrow-next"),
    responsive: [
      {
        breakpoint: 992,
        settings: "unslick",
      },
    ],
  });

  $(".why-shopify .row").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    fade: false,
    mobileFirst: true,
    centerMode: false,
    adaptiveHeight: true,
    prevArrow: $(".services-arrow-prev"),
    nextArrow: $(".services-arrow-next"),
    responsive: [
      {
        breakpoint: 992,
        settings: "unslick",
      },
    ],
  });

  $(".why-chose-us  .row").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    fade: false,
    mobileFirst: true,
    centerMode: false,
    adaptiveHeight: true,
    prevArrow: $(".services-arrow-prev-sec"),
    nextArrow: $(".services-arrow-next-sec"),
    responsive: [
      {
        breakpoint: 992,
        settings: "unslick",
      },
    ],
  });

  $(".solutions-wrapper  .row").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    fade: false,
    mobileFirst: true,
    centerMode: false,
    prevArrow: $(".services-arrow-prev"),
    nextArrow: $(".services-arrow-next"),
    responsive: [
      {
        breakpoint: 992,
        settings: "unslick",
      },
    ],
  });

  // Ajax call for post category filter
  $(".cat-list_item").on("click", function () {
    $(".cat-list_item").removeClass("active");
    $(this).addClass("active");

    $slug = $(this).data("slug");
    $postType = $(this).data("type");
    filter_projects();
  });

  function filter_projects() {
    $.ajax({
      url: "/wp-admin/admin-ajax.php",
      data: {
        action: "filter_projects",
        category: $slug,
        type: $postType,
      },
      type: "POST",
      beforeSend: function (xhr) {
        $(".ajax-container").html("<h5>Loading...</h5>");
      },
      success: function (data) {
        $(".ajax-container").html(data);
      },
      error: function (errorThrown) {
        window.alert(errorThrown);
      },
    });
  }
  var langg = $("html").attr("lang");
  if (langg == "de-DE") {
    $("header").addClass("de_DE");
  } else {
    $("header").addClass("en_EN");
  }
});

$(".marketing-partner-logo").slick({
  slidesToShow: 2,
  slidesToScroll: 1,
  arrows: false,
  fade: false,
  mobileFirst: true,
  autoplay: true,
  autoplaySpeed: 2000,
  pauseOnHover: false,
  cssEase: "linear",
  responsive: [
    {
      breakpoint: 992,
      settings: "unslick",
    },
  ],
});

document.addEventListener("wpcf7mailsent", function (event) {
  console.log(event);
  window.dataLayer.push({
    event: "cf7submission",
    formId: event.detail.contactFormId,
    response: event.detail.inputs,
  });
});

$(".listbtn a").click(function (e) {
  e.preventDefault(); // disable href on a

  $(".item").removeClass("active"); //  remove all actives
  const accordionItem = $(this).attr("data-type"); // this
  $("." + accordionItem).addClass("active");
});

$(document).on("click",".listbtn a",function(){
  if (!$(this).hasClass("active_accordion")) {
    $("li a").removeClass("active_accordion");
    $(this).addClass("active_accordion");
  }
});

jQuery("a[href='#anchor-direct']").click(function() {
  jQuery("html, body").animate({ scrollTop: 20 }, "slow");
  return false;
});

var swiper = new Swiper(".mySwiper-frontpage-desktop", {
  slidesPerView: 1,
  spaceBetween: 30,
  loop: false,
  pagination: {
  el: ".swiper-pagination",
  clickable: true,
  },
});
var swiper = new Swiper(".mySwiper-frontpage-mobile", {
  slidesPerView: 1,
  spaceBetween: 30,
  loop: false,
  pagination: {
  el: ".swiper-pagination",
  clickable: true,
  },
});

var swiper = new Swiper(".mySwiper-app", {
  slidesPerView: 1,
  spaceBetween: 0,
  autoplay: {
      delay: 3000,
  },
    breakpoints: {
        992: {
        slidesPerView: 3,
        spaceBetween: 0,
      },
    },
  });
  
  var swiper = new Swiper(".mySwiperone-plugin", {
      slidesPerView: 2,
      spaceBetween: 35,
      loop: true,
      autoplay: false,
      breakpoints: {
        575.98: {
          slidesPerView: 3,
          loop: true,
          spaceBetween: 50,
        },
        991.98: {
          slidesPerView: 4,
          loop: true,
          spaceBetween: 50,
        },
        1200: {
          slidesPerView: 6,
          loop: true,
          spaceBetween: 10,
        },
      },
    });



var swiper = new Swiper(".mySwiper1", {
  slidesPerView: 4.5,
  pagination: {
  el: ".swiper-pagination",
  clickable: true,
  },
  autoplay: {
      delay: 3000,
  },
  breakpoints: {
  768: {
  slidesPerView: 6,
},
1024: {
  slidesPerView: 9,   
},
},
});

 var swiper = new Swiper(".mySwiper-single-gallery", {
    slidesPerView: 1,
    spaceBetween: 0,
    loop: false,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    });
    

var swiper = new Swiper(".mySwiper2", {
  slidesPerView: 1,
  pagination: {
  el: ".swiper-pagination",
  clickable: true,
  },
  breakpoints: {
  768: {
  slidesPerView: 2,
  spaceBetween: 24,
},
992: {
  slidesPerView: 3,
  spaceBetween: 24,
},
},
});

var swiper = new Swiper(".mySwiper5", {
  slidesPerView: 3.5,
  pagination: {
  el: ".swiper-pagination",
  clickable: true,
  },
  breakpoints: {
  768: {
  slidesPerView: 3.5,
},
1024: {
  slidesPerView: 5,   
},
},
});



$('.webinfo-image-wrapper').slick({
    prevArrow: $(".allinone-arrow-prev"),
    nextArrow: $(".allinone-arrow-next"),
});

$(".technology-accordion-wrapper-allinone").click(function (e) {
    e.preventDefault();

    $(".technology-body-allinone > div").removeClass("active");
    $(".technology-accordion-wrapper-allinone").removeClass("active-a");
    $(this).addClass("active-a");

    $currentAccordion = "." + $(this).attr("data-index");
    $($currentAccordion).toggleClass("active");
});

$(".allinone-partners-row").slick({
    slidesToShow: 2,
    slidesToScroll: 1,
    arrows: false,
    fade: false,
    mobileFirst: true,
    autoplay: true,
    autoplaySpeed: 1000,
    responsive: [
        {
            breakpoint: 769,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 1,
                centerMode: true,
                variableWidth: true,
            },
        },
        {
            breakpoint: 1370,
            settings: "unslick",
        },
    ],
});

$(".ourclients-logo").slick({
    slidesToShow: 2.01,
    slidesToScroll: 1,
    rows:3,
    arrows: false,
    fade: false,
    mobileFirst: true,
    autoplay: true,
    autoplaySpeed: 1000,
    responsive: [
        {
          breakpoint: 500,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                variableWidth: true,
            },  
        },
        {
            breakpoint: 992,
            settings: "unslick",
        },
    ],
});

$(".company-info-allinone .row").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: false,
    mobileFirst: true,
    autoplay: true,
    autoplaySpeed: 1000,
    responsive: [
        {
            breakpoint: 992,
            settings: "unslick",
        },
    ],
});


var swiper = new Swiper(".mySwiperone-rd", {
  slidesPerView: 1.5,
  spaceBetween: 35,
  loop: true,
  autoplay: true,
  autoplay: {
      delay: 3500,
  },
  breakpoints: {
     575.98: {
      slidesPerView: 3,
      loop: true,
      spaceBetween: 50,
    },
    767.99: {
      slidesPerView: 4,
      loop: true,
      spaceBetween: 50,
    },
    991.98: {
      slidesPerView: 5,
      loop: true,
      spaceBetween: 50,
    },
    1200: {
      slidesPerView: 7,
      loop: true,
      spaceBetween: 50,
    },
  },
});

var swiper = new Swiper(".mySwiperone", {
  slidesPerView: 4,
  spaceBetween: 35,
  loop: true,
	autoplay: true,
  breakpoints: {
    992: {
      slidesPerView: 4,
      loop: true,
      spaceBetween: 50,
    },
    1200: {
      slidesPerView: 5,
      loop: true,
      spaceBetween: 50,
    },
  },
});

var swiper = new Swiper(".mySwiperone-redesign", {
  slidesPerView: 1.5,
  spaceBetween: 35,
  loop: true,
	autoplay: true,
  breakpoints: {
    575.98: {
      slidesPerView: 3,
      loop: true,
      spaceBetween: 50,
    },
    991.98: {
      slidesPerView: 4,
      loop: true,
      spaceBetween: 50,
    },
    1200: {
      slidesPerView: 5,
      loop: true,
      spaceBetween: 50,
    },
  },
});

var swiper = new Swiper(".mySwiperteam", {
  slidesPerView: 1,
  loop: true,
  navigation: {
    nextEl: ".swiper-button-nextt",
    prevEl: ".swiper-button-prevv",
  },
  breakpoints: {
    992: {
      slidesPerView: 2,
      loop: true,
      spaceBetween: 36,
    },
    1200: {
      slidesPerView: 3,
      loop: true,
      spaceBetween: 36,
    },
  },
});


// $(document).ready(function() {
//   // When clicking on .widget_polylang
//   $('.right-widget .widget_polylang').click(function(event) {
//       // Prevent click from propagating to document
//       event.stopPropagation();

//       // Toggle the 'show' class on lang-item elements that are not the current language
//       $(this).find('ul .lang-item').toggleClass('show');

//       // Toggle the 'opened' class on the <ul> element
//       $(this).find('ul').toggleClass('opened');
//   });

//   // Optionally, close the menu when clicking outside of it
//   $(document).click(function(event) {
//       // If the click was outside of .right-widget
//       if (!$(event.target).closest('.right-widget').length) {
//           // Hide all lang-item elements that are not the current language
//           $('.right-widget ul .lang-item').removeClass('show');
//           // Remove the 'opened' class from all <ul> elements inside .right-widget
//           $('.right-widget ul').removeClass('opened');
//       }
//   });
// });


$(document).ready(function() {
  // When clicking on .widget_polylang
  $('.topbar .widget_polylang').click(function(event) {
      // Prevent click from propagating to document
      event.stopPropagation();

      // Toggle the 'show' class on lang-item elements that are not the current language
      $(this).find('ul .lang-item').toggleClass('show');

      // Toggle the 'opened' class on the <ul> element
      $(this).find('ul').toggleClass('opened');
  });

  // Optionally, close the menu when clicking outside of it
  $(document).click(function(event) {
      // If the click was outside of .topbar
      if (!$(event.target).closest('.topbar').length) {
          // Hide all lang-item elements that are not the current language
          $('.topbar ul .lang-item').removeClass('show');
          // Remove the 'opened' class from all <ul> elements inside .topbar
          $('.topbar ul').removeClass('opened');
      }
  });
});

// const swiper = new Swiper(".nnouncmentbar-rd", {
//   loop: true,
//   slidesPerView: 1,
//   spaceBetween: 32,
//   breakpoints: {
//         767: {
//           slidesPerView: 2,
//           loop: true,
//           spaceBetween: 36,
//         },
//         1200: {
//           slidesPerView: 3,
//           loop: true,
//           spaceBetween: 36,
//         },
//         1399.98: {
//           slidesPerView: "auto",
//           loop: false,
//           spaceBetween: 30,
//         },
//       },
// });


var swiper = new Swiper(".announcmentbar-rd", {
  slidesPerView: 1,
  spaceBetween: 0,
  loop: true,
  autoplay: true,
  breakpoints: {
    991.98: {
      slidesPerView: 2,
      loop: true,
      spaceBetween: 36,
    },
    1399.98: {
      slidesPerView: "auto",
      loop: false,
      spaceBetween: 0,
    },
  },
});

var swiper = new Swiper(".blogs-wrapper-news", {
  slidesPerView: 1.3,
  spaceBetween: 16,
  loop: true,
  autoHeight: false,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    767.98: {
      slidesPerView: 3,
      loop: true,
        autoHeight: true,
      spaceBetween: 36,
    },
    1200: {
      slidesPerView: 4,
      loop: true,
        autoHeight: true,
      spaceBetween: 16,
    },
  },
});


var swiper = new Swiper(".mySwiperfour", {
  slidesPerView: 1,
  spaceBetween: 70,
  loop: true,
  navigation: {
    nextEl: ".swiper-button-nextt",
    prevEl: ".swiper-button-prevv",
  },
});


// var prevScrollpos = window.pageYOffset;
// window.onscroll = function() {
// var currentScrollPos = window.pageYOffset;
//   if (prevScrollpos > currentScrollPos) {
//     document.getElementById("masthead").style.cssText = "top: 0px; transition: .5s";
//   } else {
//     document.getElementById("masthead").style.cssText = "top: -38px; transition: .5s;";
//   }
//   prevScrollpos = currentScrollPos;
// }
// var prevScrollpos = window.pageYOffset;
// window.onscroll = function() {
//   var currentScrollPos = window.pageYOffset;
//   if (prevScrollpos > currentScrollPos) {
//     document.getElementById("masthead").style.cssText = "top: 0px; transition: .5s;";
//   } else {
//     var mastheadElement = document.getElementById("masthead");
//     var parentElement = mastheadElement.closest(".home");
//     if (parentElement) {
//       mastheadElement.style.cssText = "top: -40px; transition: .5s; background: white; box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.15);";
//     } else {
//       mastheadElement.style.cssText = "top: -40px; transition: .5s;";
//     }
//   }
//   prevScrollpos = currentScrollPos;
// };

var prevScrollpos = window.pageYOffset;
var rightWidget = document.querySelector('.right-widget');

window.onscroll = function() {
    var currentScrollPos = window.pageYOffset;

    // Header scroll logic
    var mastheadElement = document.getElementById("masthead");
    if (prevScrollpos > currentScrollPos) {
        mastheadElement.style.cssText = "top: 0px; transition: .5s;";
    } else {
        var parentElement = mastheadElement.closest(".home");
        if (parentElement) {
            mastheadElement.style.cssText = "top: -40px; transition: .5s; background: white; box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.15);";
        } else {
            mastheadElement.style.cssText = "top: -40px; transition: .5s;";
        }
    }

    // Scroll logic for "Get in touch" button
    // if (currentScrollPos > 200) { // Adjust scroll position threshold as needed
    //     rightWidget.classList.add('show-button');
    // } else {
    //     rightWidget.classList.remove('show-button');
    // }

    prevScrollpos = currentScrollPos;
};




var swiper = new Swiper(".mySwiperportfolio", {
  slidesPerView: 1.2,
  spaceBetween: 30,
  loop: true,
  navigation: {
    nextEl: ".swiper-button-nextt",
    prevEl: ".swiper-button-prevv",
  },
  breakpoints: {
    992: {
      slidesPerView: 2,
      loop: true,
      spaceBetween: 36,
    },
    1200: {
      slidesPerView: 3,
      loop: true,
      spaceBetween: 36,
    },
  },
});

var swiper3 = new Swiper(".mySwiper3", {
  slidesPerView: 1,
  spaceBetween: 20,
  loop: true,
  pagination: {
  el: ".swiper-pagination",
  clickable: true,
      dynamicMainBullets: 3,
  },
});
var isMobile = window.innerWidth <= 992;
if (!isMobile) {
  swiper3.destroy();
}






(function($) {
  $(document).ready(function() {
    var counterElement = $('#counter');
    var counter = 0;

    setInterval(function() {
      counter++;
      counterElement.text(counter);
    }, 1000);
  });
})(jQuery);






// $(document).ready(function(){
//   $('li.empty-page').click(function(event){
//       event.preventDefault();
//   });
// });


// window.addEventListener('load', function () {
//   setTimeout(function () {
//     var script = document.createElement('script');
//     script.src = 'https://cdn-cookieyes.com/client_data/3651b615d63e9058897329ec/script.js';
//     script.setAttribute('id', 'cookieyes');
//     script.setAttribute('type', 'text/javascript');
//     script.setAttribute('data-cookiescript', '3651b615d63e9058897329ec');
//     document.body.appendChild(script);
//   }, 5000); // Delay loading for 2 seconds
// });
// 
// 
// 

document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.menu-item-has-children > a').forEach(link => {
        const arrow = document.createElement('span');
        arrow.className = 'expand-button';
        link.appendChild(arrow);
        arrow.addEventListener('click', function(event) {
            event.stopPropagation();
            event.preventDefault();
            const subMenu = link.parentNode.querySelector('.sub-menu');
            subMenu.classList.toggle('open');
            this.classList.toggle('open');
        });
    });
});

