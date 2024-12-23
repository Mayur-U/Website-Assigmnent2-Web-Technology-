$(document).ready(function () {
    $('#applicationForm').submit(function (event) {
        event.preventDefault(); // Prevent default form submission
        $.ajax({
            url: $(this).attr('action'),
            type: $(this).attr('method'),
            data: $(this).serialize(),
            success: function (response) {
                $('#response').html(response);
                $('#applicationForm')[0].reset(); // Reset form
            },
            error: function () {
                $('#response').html('<p style="color: red;">Error processing form. Please try again.</p>');
            }
        });
    });
});
