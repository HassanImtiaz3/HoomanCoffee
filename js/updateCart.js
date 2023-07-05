$(document).ready(function() {
    $('#updateBtn').click(function(e) {
      e.preventDefault(); // Prevent the default form submission
  
      // Perform the AJAX request
      $.ajax({
        url: 'updateCart.php',
        type: 'POST',
        dataType: 'json',
        data: $('form').serialize(), // Serialize the form data
        success: function(response) {
          // Handle the response from the server
          if (response.success) {
            alert('Data updated successfully!');
          } else {
            alert('Error updating data.');
          }
        },
        error: function() {
          alert('Error occurred during AJAX request.');
        }
      });
    });
  });
  