<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('https://alexwlchan.net/images/2016/specktre_demo_tr.png');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: rgb(0, 123, 255) !important;
        }

        .navbar-brand, .nav-link {
            color: #fff !important;
        }

        .container {
            margin-top: 50px;
            background: rgba(255, 255, 255, 0.8);
            padding: 15px;
            border-radius: 10px;
            max-width: 90%;
        }

        .card {
            margin-top: 20px;
        }

        .cancel-btn {
            background-color: #dc3545;
            color: white;
        }

        .cancel-btn:hover {
            background-color: #c82333;
        }

        .navigation {
            margin-top: 30px;
            text-align: center;
        }

        .navigation button {
            display: block;
            width: 100%;
            margin-bottom: 10px;
        }

        h2 {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#">Dashboard</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"> <a class="nav-link" href="#">Support and Feedback</a> </li>
                <li class="nav-item"> <a class="nav-link" href="Settings.php">Settings</a> </li>
                <li class="nav-item"> <a class="nav-link" href="login.php">Log Out</a></li>
                
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container">
        <h2>Welcome, Jane Doe</h2>
        <p>Department: ICT</p>
        <h4>Upcoming Bookings</h4>
        <div class="card">
            <div class="card-body">
                <p>Date and Time: August 5, 2024 | 8:30AM - 2:00PM | Category: Emergency | Status: Confirmed</p>
                <button class="btn cancel-btn">Cancel</button>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <p>Date and Time: August 20, 2024 | 9:30AM - 3:00PM | Category: Training | Status: Pending</p>
                <button class="btn cancel-btn">Cancel</button>
            </div>
        </div>
        <div class="navigation">
            <button class="btn btn-primary">Create new booking</button>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
