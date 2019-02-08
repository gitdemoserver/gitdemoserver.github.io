<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="css/responsive-layouts.css">

<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/jquery.validate.min.js"></script> 

<script type="text/javascript">
        // Wait for the DOM to be ready
$(function() {
jQuery.validator.addMethod("lettersonly", function(value, element) {
  return this.optional(element) || /^[a-zA-Z\s]+$/i.test(value);
}, "Letters only please");
// Initialize form validation on the registration form.
// It has the name attribute "registration"
$("form[name='enquiryform']").validate({
 // Specify validation rules
 rules: {
   // The key name on the left side is the name attribute
   // of an input field. Validation rules are defined
   // on the right side
   firstname: {
     required: true,
     lettersonly: true
   },
   mobilenumber: {
      required: true,
      number: true
    },
   email: {
     required: true,
     email: true
   },
   message: "required",
 },
 // Specify validation error messages
 messages: {
   firstname: "Please enter your Name",
   mobilenumber: "Please enter your mobile Number",
   email: "Please enter a valid email address",
   message: "Please enter your Message"
 },
 // Make sure the form is submitted to the destination defined
 // in the "action" attribute of the form when valid
 submitHandler: function(form) {
   form.submit();
 }
});
});
      </script>