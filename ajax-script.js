$(document).ready(function () {
  /**
   * <===================================================>
   * <---------+  Fetch City Name wrt Country  +--------->
   * <===================================================>
   */
  $("#countrySelect").on("change", function () {
    var id = $(this).val();

    $.ajax({
      url: "./backend/fetch_city_list.php",
      type: "POST",
      data: { id: id },
      success: function (response) {
        $("#cityData").html(response);
      },
    });
  });

  /**
   * <===================================================>
   * <---------------+  Load/Fetch Data  +--------------->
   * <===================================================>
   */
  function loadData(page) {
    $.ajax({
      url: "./backend/fetch_data.php",
      type: "POST",
      data: { page_no: page },
      success: function (response) {
        $("#tableData").html(response);
      },
    });
  }
  loadData();

  /**
   * <===================================================>
   * <-----------------+  Pagination  +------------------>
   * <===================================================>
   */
  $(document).on("click", "#pagination a", function (e) {
    e.preventDefault();
    var id = $(this).attr("id");

    loadData(id);
  });

  /**
   * <===================================================>
   * <-----------------+  Insert Data  +----------------->
   * <===================================================>
   */
  $(document).on("click", "#submitBtn", function () {
    var name = $("#nameInput").val();
    var gender = $("input[type='radio']:checked").val();
    var age = $("#ageInput").val();
    var language = [];
    var country = $("#countrySelect").val();
    var city = $("#citySelect").val();

    $("input[type='checkbox']:checked").each(function () {
      language.push($(this).val());
    });

    language = language.toString();

    $.ajax({
      url: "./backend/insert.php",
      type: "POST",
      data: {
        name: name,
        gender: gender,
        age: age,
        language: language,
        country: country,
        city: city,
      },
      success: function (data) {
        $("#InsertForm")[0].reset();
        $(".btn-close").click();
        loadData();
      },
    });
  });

  /**
   * <===================================================>
   * <---------------+  Delete All Data  +--------------->
   * <===================================================>
   */

  // Checked all by Click
  //   $("#selectAll").on("click", function () {
  //     $(".chkbx").prop("checked", true);
  //   });

  // Delete Data from database
  //   $("#deleteBtn").on("click", function () {
  //     var selectedId = [];
  //     $(".chkbx:checked").each(function () {
  //       selectedId.push($(this).val());

  //       if (selectedId.length > 0) {
  //         $.ajax({
  //           url: "./backend/delete.php",
  //           type: "POST",
  //           data: { id: selectedId },
  //           success: function (data) {
  //             loadData();
  //           },
  //         });
  //       }
  //     });
  //   });

  /**
   * <===================================================>
   * <-----------+  Fetch Data before Update  +---------->
   * <===================================================>
   */

  /**
   * <===================================================>
   * <-----------------+  Update Data  +----------------->
   * <===================================================>
   */

  /**
   * <===================================================>
   * <-----------------+  Search Data  +----------------->
   * <===================================================>
   */
});
