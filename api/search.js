// FIlter anything
$(document).ready(function () {
    $("#anythingSearch").on("keyup", function () {
      var value = $(this).val().toLowerCase();
      $("#hid").filter(function () {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });