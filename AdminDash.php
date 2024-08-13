<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
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
            background-color: #007bff !important; /* Darker blue shade */
        }

        .navbar-nav .nav-link {
            color: white !important;
        }

        .container {
            margin: 20px auto; /* Increased margins for better visibility */
            background: rgba(255, 255, 255, 0.8);
            padding: 20px; /* Increased padding for better content spacing */
            border-radius: 10px;
            max-width: 80%; /* Reduced the width to make the container smaller */
        }

        .cancel-btn-group {
            display: flex;
            justify-content: space-between;
            align-items: center; /* Center align items vertically */
            margin-bottom: 10px; /* Add spacing between items */
        }

        .cancel-btn-group span {
            flex: 1; /* Allow the span to take up available space */
        }

        .room-card {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="#">Admin Dashboard</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#create-booking">Create New Booking</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#usage-statistics">Usage Statistics</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#user-management">User Management</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#pending-requests">Pending Requests</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#room-management">Room Management</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="Settings.php">Settings</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Support.php">Support</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Log Out</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container">
        <!-- Admin Dashboard -->
        <div id="dashboard">
            <h2 class="my-4">Admin Dashboard</h2>
            <p>Welcome, Jonathan Doe</p>
            <h4>Upcoming Bookings</h4>
            <ul>
                <li class="cancel-btn-group">
                    <span>Date and Time: August 5, 2024 | 8:30AM - 2:00PM | Category: Emergency | Status: Confirmed</span>
                    <button class="btn btn-danger btn-sm">Cancel</button>
                </li>
                <li class="cancel-btn-group">
                    <span>Date and Time: August 20, 2024 | 9:30AM - 3:00PM | Category: Training | Status: Pending</span>
                    <button class="btn btn-danger btn-sm">Cancel</button>
                </li>
            </ul>
        </div>

        <!-- User Management -->
        <div id="user-management" class="mt-5">
            <h2 class="my-4">User Management</h2>
            <input type="text" class="form-control mb-3" placeholder="Search Name">
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">Name: Jane Doe</h5>
                    <p class="card-text">User Type: Employee</p>
                    <p class="card-text">Department: ICT</p>
                    <button class="btn btn-primary">Edit Role</button>
                    <button class="btn btn-danger">Remove User</button>
                </div>
            </div>
        </div>

        <!-- Pending Requests -->
        <div id="pending-requests" class="mt-5">
            <h2 class="my-4">Pending Requests</h2>
            <div class="card mb-3">
                <div class="card-body">
                    <p>Conference Room 1 | Type: Training | Time: 8:30AM - 2:00PM | Category: Emergency | Name: Jane Doe | Department: ICT</p>
                    <button class="btn btn-success">Confirm</button>
                    <button class="btn btn-danger">Deny</button>
                </div>
            </div>
        </div>

        <!-- Room Management -->
        <div id="room-management" class="mt-5">
            <h2 class="my-4">Room Management</h2>

            <!-- Add New Room -->
            <div class="mb-4">
                <h4>Add New Room</h4>
                <input type="text" id="new-room-name" class="form-control mb-2" placeholder="Enter Room Name">
                <button id="add-room-btn" class="btn btn-success">Add Room</button>
            </div>

            <!-- List of Rooms -->
            <div id="room-list">
                <h4>Existing Rooms</h4>
                <!-- Example Room Card -->
                <div class="card room-card">
                    <div class="card-body">
                        <h5 class="card-title">Conference Room 1</h5>
                        <button class="btn btn-danger btn-sm float-right remove-room-btn">Remove</button>
                        <h6 class="card-subtitle mb-2 text-muted">Availability</h6>

                        <div class="availability-select">
                            <div class="day-select">
                                <label for="day-select">Select Day:</label>
                                <select class="form-control">
                                    <option value="Monday">Monday</option>
                                    <option value="Tuesday">Tuesday</option>
                                    <option value="Wednesday">Wednesday</option>
                                    <option value="Thursday">Thursday</option>
                                    <option value="Friday">Friday</option>
                                </select>
                            </div>
                            <div class="time-select">
                                <label for="time-select">Select Time:</label>
                                <select class="form-control">
                                    <option value="08:00-12:00">08:00-12:00</option>
                                    <option value="12:00-16:00">12:00-16:00</option>
                                    <option value="16:00-20:00">16:00-20:00</option>
                                </select>
                            </div>
                            <button class="btn btn-primary add-availability-btn">Add Availability</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        document.getElementById('add-room-btn').addEventListener('click', function() {
            var roomName = document.getElementById('new-room-name').value;
            if (roomName) {
                // Create a new room card
                var roomList = document.getElementById('room-list');
                var newRoomCard = document.createElement('div');
                newRoomCard.classList.add('card', 'room-card');
                newRoomCard.innerHTML = `
                    <div class="card-body">
                        <h5 class="card-title">${roomName}</h5>
                        <button class="btn btn-danger btn-sm float-right remove-room-btn">Remove</button>
                        <h6 class="card-subtitle mb-2 text-muted">Availability</h6>
                        <div class="availability-select">
                            <div class="day-select">
                                <label for="day-select">Select Day:</label>
                                <select class="form-control">
                                    <option value="Monday">Monday</option>
                                    <option value="Tuesday">Tuesday</option>
                                    <option value="Wednesday">Wednesday</option>
                                    <option value="Thursday">Thursday</option>
                                    <option value="Friday">Friday</option>
                                </select>
                            </div>
                            <div class="
