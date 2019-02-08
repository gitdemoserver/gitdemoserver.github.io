
                     <form action="" name="enquiryform" method="post">
                        <div class="form-field">
                           <input name="firstname" placeholder="Name" type="text" class="textbox">
                        </div>
                        <div class="form-field">
                           <input name="email" placeholder="Email" type="text" class="textbox">
                        </div>
                        <div class="form-field">
                           <input name="mobilenumber" placeholder="Mobile Number" type="text" class="textbox">
                        </div>
                        <div class="form-field">
                           <textarea name="message" placeholder="Message"></textarea>
                        </div>
                        <div class="form-field-btn">
                           <span><input type="submit" class="enquiry-btn"></span>
                        </div>
                     </form>
                  
   
       
      
      <script>      
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
   