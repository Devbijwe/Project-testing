<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Hosting</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            text-align: center;
        }

        h1 {
            color: #333;
        }

        .php-info {
            border: 1px solid #ccc;
            padding: 20px;
            margin-top: 20px;
            background-color: #f9f9f9;
            text-align: left;
        }
    </style>
</head>
<body>

    <h1>Welcome to PHP Hosting!</h1>

    <p>This is a sample PHP application hosted on your server.</p>

    <div class="php-info">
        <h2>PHP Information</h2>
        <?php
        // Display PHP information
        phpinfo();
        ?>
    </div>

</body>
</html>
