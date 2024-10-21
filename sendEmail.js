(function() {
    emailjs.init("F15ed3rtOA487erdB"); // Replace with your EmailJS user ID
})();

// Get the form element
document.getElementById('contact-form').addEventListener('submit', function(event) {
    event.preventDefault();  // Prevent the form from submitting in the traditional way

    // Get the form data
    let name = document.getElementById('name').value;
    let email = document.getElementById('email').value;
    let message = document.getElementById('message').value;

    // Prepare the parameters to send to EmailJS
    var templateParams = {
        from_name: name,
        email: email,
        message: message
    };

    // Use EmailJS to send the email
    emailjs.send('service_1xfmwhf', 'template_2cxvzdg', templateParams)
        .then(function(response) {
            alert("Email successfully sent!");
            document.getElementById('contact-form').reset();
            console.log('SUCCESS!', response.status, response.text);
        }, function(error) {
            alert("Failed to send email. Try again later.");
            console.log('FAILED...', error);
        });
});
