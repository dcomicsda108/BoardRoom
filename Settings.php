<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f0f8ff;
            color: #333;
            font-family: 'Arial', sans-serif;
        }

        .settings-header h1 {
            color: #007bff;
        }

        .card {
            border: none;
            border-radius: 10px;
            transition: transform 0.2s ease-in-out;
            background-color: #e6f2ff;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card-title {
            color: #0056b3;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            transition: background-color 0.2s ease-in-out;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .btn-block {
            padding: 10px;
            font-size: 18px;
        }

        .container {
            margin-top: 50px;
        }

        /* Initially hide sections */
        #preferences-section, #profile-management-section {
            display: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="settings-header text-center my-5">
            <h1 class="display-4">Settings</h1>
        </div>
        
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card shadow">
                    <div class="card-body">
                        <h5 class="card-title">Preferences</h5>
                        <p class="card-text">Select your room preferences and favorite times.</p>
                        <button id="preferences-btn" class="btn btn-primary btn-block">Go to Preferences</button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card shadow">
                    <div class="card-body">
                        <h5 class="card-title">Profile Management</h5>
                        <p class="card-text">Manage your profile settings and personal information.</p>
                        <button id="profile-btn" class="btn btn-primary btn-block">Go to Profile Management</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Preferences Section -->
        <div id="preferences-section" class="my-5">
            <h2 class="mb-4">Room Preferences</h2>
            <form>
                <div class="form-group">
                    <label for="roomType">Preferred Room Type</label>
                    <select class="form-control" id="roomType">
                        <option>Conference Room</option>
                        <option>Meeting Room</option>
                        <option>Private Office</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="timeSlot">Favorite Time Slot</label>
                    <select class="form-control" id="timeSlot">
                        <option>8:00 AM - 10:00 AM</option>
                        <option>10:00 AM - 12:00 PM</option>
                        <option>1:00 PM - 3:00 PM</option>
                        <option>3:00 PM - 5:00 PM</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Save Preferences</button>
            </form>
        </div>

        <!-- Profile Management Section -->
        <div id="profile-management-section" class="my-5">
            <h2 class="mb-4">Profile Management</h2>
            <form>
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter your name">
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Enter new password">
                </div>
                <button type="submit" class="btn btn-primary">Update Profile</button>
            </form>
        </div>

        <!-- Back Button -->
        <div class="text-center mt-4">
            <button onclick="goBack()" class="btn btn-secondary">Back</button>
        </div>
    </div>

    <script>
        // JavaScript to toggle visibility of sections
        document.getElementById('preferences-btn').addEventListener('click', function() {
            var preferencesSection = document.getElementById('preferences-section');
            var profileSection = document.getElementById('profile-management-section');
            
            preferencesSection.style.display = preferencesSection.style.display === 'none' ? 'block' : 'none';
            profileSection.style.display = 'none';
        });

        document.getElementById('profile-btn').addEventListener('click', function() {
            var profileSection = document.getElementById('profile-management-section');
            var preferencesSection = document.getElementById('preferences-section');
            
            profileSection.style.display = profileSection.style.display === 'none' ? 'block' : 'none';
            preferencesSection.style.display = 'none';
        });

        function goBack() {
            window.history.back();
        }
    </script>
</body>
</html>
