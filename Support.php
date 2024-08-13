<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Support & Feedback</title>
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

        .navbar-brand,
        .nav-link {
            color: #fff !important;
        }

        .container {
            margin-top: 30px;
            background: rgba(255, 255, 255, 0.8);
            padding: 15px;
            border-radius: 10px;
            max-width: 90%;
        }

        .option-card {
            cursor: pointer;
        }
    </style>
</head>

<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#">Support & Feedback</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="Feedback.php">Submit Feedback</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Report.php">Report Issues</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="SupportCont.php">Support Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container">
        <h2 class="my-4">How may we assist you?</h2>

        <!-- Options -->
        <div class="row">
            <!-- Submit Feedback -->
            <div class="col-md-4">
                <div class="card option-card" id="feedback-card">
                    <div class="card-body">
                        <h5 class="card-title">Submit Feedback</h5>
                        <p class="card-text">Share your thoughts and help us improve.</p>
                    </div>
                </div>
            </div>

            <!-- Report Issues -->
            <div class="col-md-4">
                <div class="card option-card" id="report-card">
                    <div class="card-body">
                        <h5 class="card-title">Report Issues</h5>
                        <p class="card-text">Encountered a problem? Let us know.</p>
                    </div>
                </div>
            </div>

            <!-- Support Contact -->
            <div class="col-md-4">
                <div class="card option-card" id="contact-card">
                    <div class="card-body">
                        <h5 class="card-title">Support Contact</h5>
                        <p class="card-text">Reach out to our support team.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Back Button -->
        <div class="text-center mt-4">
            <button onclick="goBack()" class="btn btn-secondary">Back</button>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        function goBack() {
            window.history.back();
        }

        document.getElementById('feedback-card').addEventListener('click', function () {
            window.location.href = 'Feedback.php';
        });

        document.getElementById('report-card').addEventListener('click', function () {
            window.location.href = 'Report.php';
        });

        document.getElementById('contact-card').addEventListener('click', function () {
            window.location.href = 'SupportCont.php';
        });
    </script>
</body>

</html>