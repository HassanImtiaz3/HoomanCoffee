$(document).ready(function() {
    $.ajax({
      url: 'accountFetchData.php', // Make sure to enclose the URL in quotes
      type: 'GET', // Make sure to enclose the request type in quotes
      success: function(data) {
        $("#table-data").html(data); // Correct the selector to include the '#' symbol for ID selection
      }
    });
  });