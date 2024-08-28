$(document).ready(function () {
  $("#slider-range").slider({
    range: true,
    min: 10,
    max: 100,
    values: [18, 80],
    slide: function (event, ui) {
      $("#age").val("Age: " + ui.values[0] + " - " + ui.values[1]);
    },
  });
  $("#age").val(
    "Age: " +
      $("#slider-range").slider("values", 0) +
      " - " +
      $("#slider-range").slider("values", 1)
  );
});
