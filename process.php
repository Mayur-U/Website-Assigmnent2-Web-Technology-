<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize and retrieve form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    // Display the submitted information with better styling
    echo "
    <!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Form Submission Success</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f9;
                margin: 0;
                padding: 0;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }
            .container {
                background: #fff;
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
                width: 100%;
                max-width: 500px;
                text-align: center;
            }
            h2 {
                color: #28a745;
            }
            p {
                color: #333;
                line-height: 1.6;
            }
            .back-button {
                display: inline-block;
                margin-top: 20px;
                padding: 10px 20px;
                background: #007BFF;
                color: white;
                text-decoration: none;
                border-radius: 5px;
                font-size: 14px;
            }
            .back-button:hover {
                background: #0056b3;
            }
        </style>
    </head>
    <body>
        <div class='container'>
            <h2>Form Submitted Successfully!</h2>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Phone:</strong> $phone</p>
            <p><strong>Message:</strong> $message</p>
            <a href='index.html' class='back-button'>Go Back</a>
        </div>
    </body>
    </html>
    ";
} else {
    // Display an error for invalid request methods
    echo "
    <!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Form Error</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f8d7da;
                color: #721c24;
                margin: 0;
                padding: 0;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }
            .error-container {
                background: #f8d7da;
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
                width: 100%;
                max-width: 400px;
                text-align: center;
            }
            h2 {
                margin-bottom: 10px;
            }
            p {
                line-height: 1.6;
            }
            .back-button {
                display: inline-block;
                margin-top: 20px;
                padding: 10px 20px;
                background: #dc3545;
                color: white;
                text-decoration: none;
                border-radius: 5px;
                font-size: 14px;
            }
            .back-button:hover {
                background: #c82333;
            }
        </style>
    </head>
    <body>
        <div class='error-container'>
            <h2>Invalid Request</h2>
            <p>It seems you've accessed this page incorrectly.</p>
            <a href='index.html' class='back-button'>Go Back</a>
        </div>
    </body>
    </html>
    ";
}
?>
