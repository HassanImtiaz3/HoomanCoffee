$(document).ready(function() {
    $('#deleteBtn').click(function() {
      if (confirm('Are you sure you want to delete all data?')) {
        $.ajax({
          url: 'emptyCart.php',
          method: 'POST',
          success: function(data) {
            alert(data); // Display success message or handle it as needed
          },
          error: function(xhr, textStatus, errorThrown) {
            console.log('Error: ' + errorThrown);
          }
        });
      }
    });
  });