<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Calendar</title>
    <link rel="stylesheet" href="css/Booking Calendar.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="text-center mb-4">Book a Meeting</h1>
                <form>
                    <div class="form-group">
                        <label for="organizer">Your Name</label>
                        <input type="text" id="organizer" placeholder="Enter your name" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="department">Department</label>
                        <select id="department" class="form-control">
                            <option value="hr">Human Resources</option>
                            <option value="it">Information Technology</option>
                            <option value="sales">Sales</option>
                            <option value="marketing">Marketing</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="conference-room">Conference Room Number</label>
                        <select id="conference-room" class="form-control">
                            <option value="101">101</option>
                            <option value="102">102</option>
                            <option value="103">103</option>
                            <option value="104">104</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="meeting-type">Meeting Type</label>
                        <select id="meeting-type" class="form-control">
                            <option value="team">Team Meeting</option>
                            <option value="client">Client Meeting</option>
                            <option value="review">Review Meeting</option>
                            <option value="brainstorming">Brainstorming Session</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="date">Select Date</label>
                        <input type="date" id="date" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="start-time">Start Time</label>
                        <input type="time" id="start-time" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="end-time">End Time</label>
                        <input type="time" id="end-time" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="attendees">Number of Attendees</label>
                        <input type="number" id="attendees" min="1" placeholder="Enter number of people" class="form-control">
                    </div>

                    <div class="form-group">
                        <input type="submit" value="Book Meeting" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>