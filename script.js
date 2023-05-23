$(document).ready(function () {
  // Add custom validation method
  $.validator.addMethod(
    "regex",
    function (value, element, regexp) {
      var re = new RegExp(regexp);
      return this.optional(element) || re.test(value);
    },
    "Please check your input."
  );

  // Initialize form validation for register-customer form
  $("#register-customer").validate({
    rules: {
      first_name1: {
        required: true,
        regex: /^[A-Za-z\s]+$/,
      },
      last_name1: {
        required: true,
        regex: /^[A-Za-z\s]+$/,
      },
      email1: {
        required: true,
        email: true,
        regex: /^\S+@\S+\.\S+$/,
      },
      password1: {
        required: true,
        minlength: 8,
        maxlength: 20,
        regex: /^\S+$/,
      },
      "customer[phone]": {
        required: true,
        regex: /^\d{10}$/, // Only allow 10-digit numeric phone number
      },
    },
    messages: {
      first_name1: {
        required: "Please enter your first name",
        regex: "Please enter a valid first name without whitespace",
      },
      last_name1: {
        required: "Please enter your last name",
        regex: "Please enter a valid last name without whitespace",
      },
      email1: {
        required: "Please enter your email",
        email: "Please enter a valid email address",
        regex: "Please enter a valid email address",
      },
      password1: {
        required: "Please enter a password",
        minlength: "Password must be at least 8 characters long",
        maxlength: "Password cannot exceed 20 characters",
        regex: "Please enter a valid password without whitespace",
      },
      "customer[phone]": {
        required: "Please enter your phone number",
        regex: "Please enter a valid 10-digit phone number",
      },
    },
    errorElement: "span",
    errorClass: "error-message",
    errorPlacement: function (error, element) {
      error.insertAfter(element);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass(errorClass).removeClass(validClass);
      $(element).closest(".input").addClass("invalid");
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass(errorClass).addClass(validClass);
      $(element).closest(".input").removeClass("invalid");
    },
    invalidHandler: function (form, validator) {
      if (!validator.numberOfInvalids()) {
        return;
      }

      // Show SweetAlert popup for invalid form submission
      swal({
        title: "Error",
        text: "Please fix the validation errors before submitting the form.",
        icon: "error",
      });
    },
    submitHandler: function (form) {
      // Handle form submission
      // Add your logic here

      // Check if the form is valid
      if ($(form).valid()) {
        // Save the form data in the database using an AJAX request
        $.ajax({
          type: "POST",
          url: "register-customer.php",
          data: $(form).serialize(), // Serialize the form data
          success: function (response) {
            // Call the function1 with success message
            function1("account created successfully");
          },
          error: function (xhr, status, error) {
            // Handle the error case
            swal("Error", "An error occurred while saving the data.", "error");
          },
        });
      }
    },
  });

  // Initialize form validation for customer_login form
  $("#customer_login").validate({
    rules: {
      email1: {
        required: true,
        email: true,
        regex: /^\S+@\S+\.\S+$/,
      },
      password1: {
        required: true,
        minlength: 8,
        maxlength: 20,
        regex: /^\S+$/,
      },
    },
    messages: {
      email1: {
        required: "Please enter your email",
        email: "Please enter a valid email address",
        regex: "Please enter a valid email address without whitespace",
      },
      password1: {
        required: "Please enter a password",
        minlength: "Password must be at least 8 characters long",
        maxlength: "Password cannot exceed 20 characters",
        regex: "Please enter a valid password without whitespace",
      },
    },
    errorElement: "span",
    errorClass: "error-message",
    errorPlacement: function (error, element) {
      error.insertAfter(element);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass(errorClass).removeClass(validClass);
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass(errorClass).addClass(validClass);
    },
    invalidHandler: function (form, validator) {
      if (!validator.numberOfInvalids()) {
        return;
      }

      // Show SweetAlert popup for invalid form submission
      swal({
        title: "Error",
        text: "Please fix the validation errors before submitting the form.",
        icon: "error",
      });
    },
    submitHandler: function (form) {
      // Handle form submission
      // Add your logic here

      // Check if the form is valid
      if ($(form).valid()) {
        function1("login success"); // Call the function1 with success message
      }
    },
  });

  function function1(message) {
    setTimeout(function () {
      swal({
        title: "Success",
        text: message,
        icon: "success",
      }).then(function () {
        window.location = "index.php"; // Redirect to index.php
      });
    }, 1000); // Wait for 1 second before showing the SweetAlert
  }

  // Click event handler for the "Create Account" button
  $("#create-account-button").on("click", function (event) {
    // Prevent form submission

    // Check if the register-customer form is valid
    if ($("#register-customer").valid()) {
      function1("account created successfully"); // Call the function1 with success message
    }
  });

  // Click event handler for the "Login" button
  $("#login-button").on("click", function (event) {
    event.preventDefault(); // Prevent form submission

    // Check if the customer_login form is valid
    if ($("#customer_login").valid()) {
      function1("login success"); // Call the function1 with success message
    }
  });
});
