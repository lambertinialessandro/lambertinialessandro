/*******************************************IMAGE GALLERY*******************************************/

/*******Filtering*******/

// init Isotope
  var $grid = $('.img-grid').isotope({
    itemSelector: '.img-container',
    //layoutMode: 'fitRows',
  });

  // filter functions
  var filterFns = {
    // show if number is greater than 50
    numberGreaterThan50: function() {

    },
  };

  // bind filter button click
  $('#filter-btn').on( 'click', 'button', function() {
    var filterValue = $( this ).attr('data-filter');
    // use filterFn if matches value
    filterValue = filterFns[ filterValue ] || filterValue;
    $grid.isotope({ filter: filterValue });
  });

  // change is-checked class on buttons
  $('.button-group').each( function( i, buttonGroup ) {
    var $buttonGroup = $( buttonGroup );
    $buttonGroup.on( 'click', 'button', function() {
      $buttonGroup.find('.is-checked').removeClass('is-checked');
      $( this ).addClass('is-checked');
    });
  });

/*******************************************SCROLL MAGIC*******************************************/

/*******Scroll for the links*******/
var controller = new ScrollMagic.Controller();

new ScrollMagic.Scene({triggerElement: "#about", duration: $("#about").height()}).setClassToggle("#about-link", "active").addTo(controller);
new ScrollMagic.Scene({triggerElement: "#services", duration: $("#services").height()}).setClassToggle("#services-link", "active").addTo(controller);
new ScrollMagic.Scene({triggerElement: "#project", duration: $("#project").height()}).setClassToggle("#project-link", "active").addTo(controller);
new ScrollMagic.Scene({triggerElement: "#contact", duration: $("#contact").height()}).setClassToggle("#contact-link", "active").addTo(controller);

/*******Other Scroll Magic Elements*******/

$(document).ready(function(){
  var controller2 = new ScrollMagic.Controller();

  var about_scene = new ScrollMagic.Scene({
    triggerElement: '.about-text',
    triggerHook: .7
  }).setClassToggle('.about-text', 'about-text-animate')
  .reverse(false).addTo(controller2);

  var about_scene = new ScrollMagic.Scene({
    triggerElement: '.services-title',
    triggerHook: .7
  }).setClassToggle('.services-title', 'section-title-animate')
  .reverse(false).addTo(controller2);

  var about_scene = new ScrollMagic.Scene({
    triggerElement: '.project-title',
    triggerHook: .7
  }).setClassToggle('.project-title', 'section-title-animate')
  .reverse(false).addTo(controller2);

  var about_scene = new ScrollMagic.Scene({
    triggerElement: '.contact-title',
    triggerHook: .7
  }).setClassToggle('.contact-title', 'section-title-animate')
  .reverse(false).addTo(controller2);
    
  //Icons in Services
  var about_scene = new ScrollMagic.Scene({
    triggerElement: '.trigger',
    triggerHook: .7
  }).setClassToggle('.icon', 'service-icon-animate')
  .reverse(false).addTo(controller2);
    
});

/*******************************************MOBILE NAV*******************************************/
$('.mobile-toggle').click(function(){
  if($('#main-header').hasClass('open-nav')){
     $('#main-header').removeClass('open-nav');
  }else{
    $('#main-header').addClass('open-nav');
  }
});

/*******************************************NAV SCROLL*******************************************/
$('nav a').click(function(event) {
    var id = ""+$(this).attr("href");
    var target = document.body.scrollTop + $(id)[0].getBoundingClientRect().top
    $('html, body').animate({
        scrollTop: target
    }, 500);
    event.preventDefault();
});

/***********************Particles*************/

particlesJS("canvas-div",{ // particles-js
  "particles":{
    "number":{
      "value":120,
      "density":{
        "enable":true,
        "value_area":800
      }
    },"color":{"value":"#2d79e5"},
    "shape":{
      "type":"circle",
      "stroke":{"width":0,"color":"#000000"},
      "polygon":{"nb_sides":5},
      "image":{"src":"img/github.svg","width":100,"height":100}
    },"opacity":{
      "value":0.5,
      "random":false,
      "anim":{"enable":false,"speed":1,"opacity_min":0.1,"sync":false}
      },"size":{
        "value":3,
        "random":true,
        "anim":{"enable":false,"speed":40,"size_min":0.1,"sync":false}
      },"line_linked":{
        "enable":true,"distance":150,"color":"#000000","opacity":0.2,"width":1
      },"move":{
        "enable":true,
        "speed":6,
        "direction":"none",
        "random":false,
        "straight":false,
        "out_mode":"out",
        "bounce":false,
        "attract":{"enable":false,"rotateX":600,"rotateY":1200}
      }
    },"interactivity":{
      "detect_on":"canvas",
      "events":{
        "onhover":{"enable":false,"mode":"repulse"},
        "onclick":{"enable":false,"mode":"push"},
        "resize":true},
        "modes":{
          "grab":{"distance":400,"line_linked":{"opacity":1}},
          "bubble":{"distance":400,"size":40,"duration":2,"opacity":8,"speed":3},
          "repulse":{"distance":200,"duration":0.4},
          "push":{"particles_nb":4},"remove":{"particles_nb":2}
        }
      },"retina_detect":true
    });