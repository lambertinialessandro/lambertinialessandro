/*******************************************PROJECTS GALLERY*******************************************/

/*******Filtering*******/

// init Isotope
var $grid = $(".img-grid").isotope({
  itemSelector: ".img-container",
  layoutMode: "fitRows",
});

// filter functions
var filterFns = {
  // show if number is greater than 50
  numberGreaterThan50: function () {},
};

// bind filter button click
$("#filter-btn").on("click", "button", function () {
  var filterValue = $(this).attr("data-filter");
  // use filterFn if matches value
  filterValue = filterFns[filterValue] || filterValue;
  $grid.isotope({ filter: filterValue });
});

// change is-checked class on buttons
$(".button-group").each(function (i, buttonGroup) {
  var $buttonGroup = $(buttonGroup);
  $buttonGroup.on("click", "button", function () {
    $buttonGroup.find(".is-checked").removeClass("is-checked");
    $(this).addClass("is-checked");
  });
});
