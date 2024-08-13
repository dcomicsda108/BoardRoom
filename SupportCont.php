<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Support Contact</title>
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

        .contact-info {
            margin-top: 20px;
        }

        .contact-info h5 {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#">Support Contact</a>
    </nav>

    <!-- Main Content -->
    <div class="container">
        <h2 class="my-4">Get in Touch with Support</h2>
        <p>If you need further assistance, our support team is here to help you. You can reach out to us through the following contact details:</p>
        
        <div class="contact-info">
            <h5><strong>Phone:</strong></h5>
            <p>+1-234-567-890</p>
            
            <h5><strong>Email:</strong></h5>
            <p>support@yourcompany.com</p>
            
            <h5><strong>Address:</strong></h5>
            <p>123 Support Lane, Tech City, TX 75001</p>
        </div>
        
        <h4 class="my-4">Need Immediate Assistance?</h4>
        <p>If your issue is urgent, please call us directly using the phone number above. Our support team is available from 8:30 AM to 5:00 PM, Monday to Thursday and 8:30 AM to 4:00 PM on Friday.</p>
        
        <button type="button" class="btn btn-primary" onclick="window.location.href='mailto:support@yourcompany.com';">Email Support</button>
        <button type="button" class="btn btn-secondary" onclick="window.location.href='Support.php';">Return to Support</button>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
