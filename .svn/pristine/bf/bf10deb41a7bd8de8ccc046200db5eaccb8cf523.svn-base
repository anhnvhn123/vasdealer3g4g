;(function($){
    "use strict"; // Start of use strict

    $("form[name='bookingform']").validate({
        // Specify validation rules
        rules: {
            // The key name on the left side is the name attribute
            // of an input field. Validation rules are defined
            // on the right side
            date_in: "required",
            date_out: "required",
            people: "required",
            children: "required",
            phone: "required",
            name: "required",
            email: {
                required: true,
                // Specify that email should be validated
                // by the built-in "email" rule
                email: true
            }
        },
        // Specify validation error messages
        messages: {
            date_in: "Please pick the check in date.",
            date_out: "Please pick the check out date.",
            name: "Please enter your name",
            phone: "Please enter your phone number",
            email: "Please enter a valid email address"
        },
        // Make sure the form is submitted to the destination defined
        // in the "action" attribute of the form when valid
        submitHandler: function(form) {
            form.submit();
        }
    });

    $('.post-tags a').addClass('ui tag');
    $('.tags-inner a').addClass('ui tag');
    $('.tagcloud a').addClass('ui tag');

    $(window).on('load', function() { // makes sure the whole site is loaded
        $('#status').fadeOut(); // will first fade out the loading animation
        $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
        $('body').delay(350).css({'overflow':'visible'});
    })

})(jQuery);