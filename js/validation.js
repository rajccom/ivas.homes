$(document).ready(function() {
  $('#enquiry-form input').on('input', function() {
    $(this).removeClass('alert-danger').css('border-color', '');
    $(this).parent().find('.error').remove();
  });

  $('#enquiry-form').submit(function(e) {
    // Clear any existing error messages
    $('.error').remove();

    // Validate the form fields
    var error = false;
    var nameRegex = /^[a-zA-Z ]*$/;
    var phoneRegex = /^[6789][0-9]{9}$/;
    var emailRegex = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/;
    var name = $('input[name=sname]');
    var phone = $('input[name=phone]');
    var email = $('input[name=email]');
    var city = $('input[name=city]');

    if (name.val() == '') {
      name.after('<div class="error">Please enter your name.</div>');
      name.css('border-color', 'red');
      error = true;
    } else if (!nameRegex.test(name.val())) {
      name.after('<div class="error">Please enter a valid name.</div>');
      name.css('border-color', 'red');
      error = true;
    } else {
      name.css('border-color', 'green');
    }

    if (phone.val() == '') {
      phone.after('<div class="error">Please enter your phone number.</div>');
      phone.css('border-color', 'red');
      error = true;
    } else if (!phoneRegex.test(phone.val())) {
      phone.after('<div class="error">Please enter a valid phone number.</div>');
      phone.css('border-color', 'red');
      error = true;
    } else {
      phone.css('border-color', 'green');
    }

    if (email.val() == '') {
      email.after('<div class="error">Please enter your email address.</div>');
      email.css('border-color', 'red');
      error = true;
    } else if (!emailRegex.test(email.val())) {
      email.after('<div class="error">Please enter a valid email address.</div>');
      email.css('border-color', 'red');
      error = true;
    } else {
      email.css('border-color', 'green');
    }

    if (city.val() == '') {
      city.after('<div class="error">Please enter your city.</div>');
      city.css('border-color', 'red');
      error = true;
    } else if (!nameRegex.test(city.val())) {
      city.after('<div class="error">Please enter a valid city.</div>');
      city.css('border-color', 'red');
      error = true;
    } else {
      city.css('border-color', 'green');
    }

    // If there are errors, prevent the form from submitting and show the error messages
    if (error) {
      e.preventDefault();
      $('.error').css('color', 'red');
      return false;
    } else {
      $('#enquiry-form input').css('border-color', 'green');
    }
  });
});