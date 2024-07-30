<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsible Student Dashboard</title>
    <link rel="stylesheet" href="assets/css/rstd_dashboard.css">
</head>
<body>
    <header>
        @include('navbar')
    </header>

    <main>
        <section class="create-proposal-section">
            <h2>Create Event Proposal</h2>
            <button type=""><a href="{{url('/eventcreation')}}">Submit Proposal</a></button>
        </section>

        <section class="submitted-proposals-section">
            <h2>Submitted Proposals</h2>
            <div class="proposal-card">
                <h3>Event Name</h3>
                <p>Event Type: Workshop</p>
                <p>Date: 2024-08-10</p>
                <p>Status: Pending</p>
                <a href="#">View Details</a>
            </div>
            <div class="proposal-card">
                <h3>Event Name</h3>
                <p>Event Type: Seminar</p>
                <p>Date: 2024-08-15</p>
                <p>Status: Approved</p>
                <a href="#">View Details</a>
            </div>
            <!-- Add more proposal cards as needed -->
        </section>

        <section class="profile-section">
            <h2>Profile</h2>
            <p>Name: John Doe</p>
            <p>Email: john.doe@example.com</p>
            <button>Edit Profile</button>
        </section>
    </main>
</body>
</html>
