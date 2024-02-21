$(document).ready(function () {
    $("#contact-form").submit(function (event) {
      // Disable the submit button
      $("#submitBtn").prop("disabled", true);
  
      var formData = {
        name: $("#name").val(),
        email: $("#email").val(),
        mobile: $("#mobile").val(),
        subject: $("#subject").val(),
        message: $("#message").val(),
      };
  
      $.ajax({
        type: "POST",
        url: "process/process_contact.php",
        data: formData,
        dataType: "json",
        encode: true,
      })
        .done(function (data) {
          // Assuming your server responds with a success key in the JSON data
          if (data.success) {
            // Display a success message to the user
            // alert("Thank You For Contacting Us!");
            Swal.fire({
              icon: "success",
              title: "Thank You!",
              text: "Your Data is Successfully Received!",
            });
            // Reset the form fields
            $("#contact-form")[0].reset();
          } else {
            // Handle other cases if needed
            Swal.fire({
              icon: "error",
              title: "Error ! Please Try Again",
              text: "Your Data is Not Received!",
            });
            // Reset the form fields
            $("#contact-form")[0].reset();
            // console.log(data);
          }
        })
        .fail(function (jqXHR, textStatus, errorThrown) {
          // Handle AJAX request failure
          Swal.fire({
            icon: "error",
            title: "Server request Failed!",
            text: "Please Try again Sometime! " + textStatus + ", " + errorThrown,
          });
          // console.log("AJAX request failed: " + textStatus, errorThrown);
        })
        .always(function () {
          // Re-enable the submit button regardless of success or failure
          $("#submitBtn").prop("disabled", false);
        });
  
      event.preventDefault();
    });
  
    $("#contact-popup-form").submit(function (event) {
      // Disable the submit button
      $("#submitBtnPopup").prop("disabled", true);
  
      var formData = {
        name: $("#name-popup").val(),
        email: $("#email-popup").val(),
        mobileno: $("#mobileno-popup").val(),
        subject: $("#subject-popup").val(),
        message: $("#message-popup").val(),
      };
  
      $.ajax({
        type: "POST",
        url: "process/process_contact.php",
        data: formData,
        dataType: "json",
        encode: true,
      })
        .done(function (data) {
          // Assuming your server responds with a success key in the JSON data
          if (data.success) {
            // Display a success message to the user
            Swal.fire({
              icon: "success",
              title: "Thank You!",
              text: "Your Data is Successfully Received!",
            });
            $("#contactFormPopup").hide();
            // Reset the form fields
            $("#contact-popup-form")[0].reset();
          } else {
            // Handle other cases if needed
            Swal.fire({
              icon: "error",
              title: "Error ! Please Try Again",
              text: "Your Data is Not Received!",
            });
            $("#contactFormPopup").hide();
            // Reset the form fields
            $("#contact-popup-form")[0].reset();
            // console.log(data);
          }
        })
        .fail(function (jqXHR, textStatus, errorThrown) {
          // Handle AJAX request failure
          Swal.fire({
            icon: "error",
            title: "Server request Failed!",
            text: "Please Try again Sometime! " + textStatus + ", " + errorThrown,
          });
          $("#contactFormPopup").hide();
          // Reset the form fields
          $("#contact-popup-form")[0].reset();
  
          // console.log("AJAX request failed: " + textStatus, errorThrown);
        })
        .always(function () {
          // Re-enable the submit button regardless of success or failure
          $("#submitBtn").prop("disabled", false);
        });
  
      event.preventDefault();
    });
  });