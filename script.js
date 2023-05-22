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
      "customer[first_name]": {
        required: true,
        regex: /^[A-Za-z]+$/,
      },
      "customer[last_name]": {
        required: true,
        regex: /^[A-Za-z]+$/,
      },
      "customer[email]": {
        required: true,
        email: true,
        regex: /^\S+@\S+\.\S+$/,
      },
      "customer[password]": {
        required: true,
        minlength: 8,
        maxlength: 20,
        regex: /^\S{8,20}$/,
      },
    },
    messages: {
      "customer[first_name]": {
        required: "Please enter your first name",
        regex: "Please enter a valid first name",
      },
      "customer[last_name]": {
        required: "Please enter your last name",
        regex: "Please enter a valid last name",
      },
      "customer[email]": {
        required: "Please enter your email",
        email: "Please enter a valid email address",
        regex: "Please enter a valid email address",
      },
      "customer[password]": {
        required: "Please enter a password",
        minlength: "Password must be at least 8 characters long",
        maxlength: "Password cannot exceed 20 characters",
        regex: "Please enter a valid password",
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
  });

  // Initialize form validation for customer_login form
  $("#customer_login").validate({
    rules: {
      "customer[email]": {
        required: true,
        email: true,
        regex: /^\S+@\S+\.\S+$/,
      },
      "customer[password]": {
        required: true,
        minlength: 8,
        maxlength: 20,
        regex: /^\S{8,20}$/,
      },
    },
    messages: {
      "customer[email]": {
        required: "Please enter your email",
        email: "Please enter a valid email address",
        regex: "Please enter a valid email address",
      },
      "customer[password]": {
        required: "Please enter a password",
        minlength: "Password must be at least 8 characters long",
        maxlength: "Password cannot exceed 20 characters",
        regex: "Please enter a valid password",
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
  });

  // Get HTML head element
  var head = document.getElementsByTagName("head")[0];

  // Create new link element
  var link = document.createElement("link");

  // Set the attributes for the link element
  link.rel = "stylesheet";
  link.type = "text/css";
  link.href = "../kalaajee/css/astyle.css";

  // Append the link element to HTML head
  head.appendChild(link);

  function function1() {
    if ($("#customer_login").valid()) {
      swal({
        icon: "success",
        title: "Perfect Naukri",
        text: "Login Successful!",
        type: "success",
      }).then(function () {
        $(".customer_login").hide();
        window.location = "index.php";
      });
    } else {
      swal({
        icon: "error",
        title: "Oops...",
        text: "Invalid login credentials!",
        type: "error",
      });
    }
  }

  function function2() {
    if ($("#register-customer").valid()) {
      swal({
        icon: "success",
        title: "Thankyou",
        text: "Account Created Successfully!",
        type: "success",
      }).then(function () {
        $(".form1").hide();
        window.location = "<?php echo $path_new ?>";
      });
    } else {
      swal({
        icon: "error",
        title: "Oops...",
        text: "Invalid form data!",
        type: "error",
      });
    }
  }
});

// Get HTML head element
var head = document.getElementsByTagName("head")[0];

// Create new link element
var link = document.createElement("link");

// Set the attributes for the link element
link.rel = "stylesheet";
link.type = "text/css";
link.href = "../css/astyle.css";

// Append the link element to HTML head
head.appendChild(link);
