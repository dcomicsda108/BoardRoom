<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NHF Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('https://alexwlchan.net/images/2016/specktre_demo_tr.png');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .navbar {
            background-color: rgba(0, 123, 255, 0.8);
            width: 100%;
            position: absolute;
            top: 0;
            left: 0;
        }

        .navbar-brand {
            color: white !important;
            font-weight: bold;
            font-size: 1.5rem;
        }

        .login-container {
            background: rgba(255, 255, 255, 0.85);
            padding: 30px;
            border-radius: 10px;
            border: 2px solid rgba(0, 123, 255, 0.8);
            box-shadow: 0px 0px 10px rgba(0, 123, 255, 0.5);
            max-width: 400px;
            width: 100%;
            text-align: center;
            margin-top: 60px; /* Adjusted margin to account for the navbar */
        }

        .input-group {
            margin-bottom: 15px;
        }

        .input-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .input-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
        }

        button:hover {
            background-color: #0056b3;
        }

        p {
            margin-top: 15px;
        }

        a {
            color: #007bff;
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#">NHF Board Room Scheduler</a>
    </nav>

    <!-- Login Form -->
    <div class="login-container">
        <h2>NHF Scheduler Login</h2>
        <form>
            <div class="input-group">
                <label for="username">User Name:</label>
                <input type="text" id="username" name="username">
            </div>
            <div class="input-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password">
            </div>
            <button type="submit">Login</button>
        </form>
        <p>Don't have an account? <a href="#">Register here</a></p>
    </div>
</body>
</html>
