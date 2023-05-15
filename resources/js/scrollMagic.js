/*******************************************SCROLL MAGIC*******************************************/

/*******Scroll for the nav*******/
var controller = new ScrollMagic.Controller();

/*** about ***/
new ScrollMagic.Scene({
  triggerElement: "#about",
  duration: $("#about").height(),
})
  .setClassToggle("#about-link", "active")
  .addTo(controller);

/*** employment ***/
new ScrollMagic.Scene({
  triggerElement: "#employment",
  duration: $("#employment").height(),
})
  .setClassToggle("#employment-link", "active")
  .addTo(controller);

/*** education ***/
new ScrollMagic.Scene({
  triggerElement: "#education",
  duration: $("#education").height(),
})
  .setClassToggle("#education-link", "active")
  .addTo(controller);

/*** skills ***/
new ScrollMagic.Scene({
  triggerElement: "#skills",
  duration: $("#skills").height(),
})
  .setClassToggle("#skills-link", "active")
  .addTo(controller);

/*** project ***/
new ScrollMagic.Scene({
  triggerElement: "#project",
  duration: $("#project").height(),
})
  .setClassToggle("#project-link", "active")
  .addTo(controller);

/*** contact ***/
new ScrollMagic.Scene({
  triggerElement: "#contact",
  duration: $("#contact").height(),
})
  .setClassToggle("#contact-link", "active")
  .addTo(controller);

/*******Other Scroll Magic Elements*******/

/*******Scroll for the texts and icons*******/
$(document).ready(function () {
  var controller2 = new ScrollMagic.Controller();

  var about_scene = new ScrollMagic.Scene({
    triggerElement: ".about-text",
    triggerHook: 0.7,
  })
    .setClassToggle(".about-text", "about-text-animate")
    .reverse(false)
    .addTo(controller2);

  /*
  var about_scene = new ScrollMagic.Scene({
    triggerElement: '.skills-title', triggerHook: .7
  }).setClassToggle('.skills-title', 'section-title-animate')
  .reverse(false).addTo(controller2);

  var about_scene = new ScrollMagic.Scene({
    triggerElement: '.project-title', triggerHook: .7
  }).setClassToggle('.project-title', 'section-title-animate')
  .reverse(false).addTo(controller2);

  var about_scene = new ScrollMagic.Scene({
    triggerElement: '.contact-title', triggerHook: .7
  }).setClassToggle('.contact-title', 'section-title-animate')
  .reverse(false).addTo(controller2);
  */

  //Icons in Skills
  var about_scene = new ScrollMagic.Scene({
    triggerElement: ".trigger",
    triggerHook: 0.7,
  })
    .setClassToggle(".icon", "skills-icon-animate")
    .reverse(false)
    .addTo(controller2);
});

/*******************************************MOBILE NAV*******************************************/
$(".mobile-toggle").click(function () {
  if ($("#main-header").hasClass("open-nav")) {
    $("#main-header").removeClass("open-nav");
  } else {
    $("#main-header").addClass("open-nav");
  }
});

/*******************************************NAV SCROLL*******************************************/
$("nav a").click(function (event) {
  var id = "" + $(this).attr("href");
  var target = document.body.scrollTop + $(id)[0].getBoundingClientRect().top;
  $("html, body").animate(
    {
      scrollTop: target,
    },
    500
  );
  event.preventDefault();
});
