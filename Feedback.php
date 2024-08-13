<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit Feedback</title>
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
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#">Submit Feedback</a>
    </nav>

    <!-- Main Content -->
    <div class="container">
        <h2 class="my-4">We value your feedback</h2>
        <form>
            <div class="form-group">
                <label for="feedback">Your Feedback</label>
                <textarea class="form-control" id="feedback" rows="5" placeholder="Write your feedback here..."></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Send Feedback</button>
            <button type="button" class="btn btn-secondary" onclick="window.location.href='Support.php';">Return to Support</button>
        </form>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
