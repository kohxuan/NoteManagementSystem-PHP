<!DOCTYPE html>
<html>
<head>
    <title>Invalid Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Cambria;
            background-color: #EC7063;
            text-align: center;
        }
        .container {
            max-width: 550px;
            margin: 0 auto;
            padding: 40px;
            background-color: #fff;
            border-radius: 5px;
            margin-top: 150px;
            text-align: center;
        }
        h2 {
            color: #FF0000; /* Red color for the error message */
            font-size: 40px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Invalid login credentials.</h2>
        <p style="font-size: 17px;">Please check your username and password and try again.</p>
        <a href="login.php" class="btn btn-outline-dark" style="margin-top: 15px;">Login</a> <!-- Add a link to the login page -->
    </div>
</body>
</html>
