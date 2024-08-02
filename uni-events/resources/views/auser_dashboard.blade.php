<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authorized User Dashboard</title>
    <link rel="stylesheet" href="assets/css/auser_dashboard.css">
</head>

<body>
    <header>
        @include('navbar')
    </header>

    <main>
        <section class="pending-proposals-section">
            <h2>Pending Proposals</h2>
            @foreach ($eventdata as $eventdata)
                <div class="proposal-card">
                    <h3>Event Name: {{$eventdata->name}}</h3>
                    <p>Organized by: {{$eventdata->faculty}}</p>
                    <p>Date: {{$eventdata->date}}</p>
                    <p>Venue: {{$eventdata->venue}}</p>
                    <p>Event Type: {{$eventdata->event_type}}</p>
                    <p>Proposal: <a href="#">Click Here To Download</a></p>
                    <button onclick="showApprovalForm(this)">Review Proposal</button>
                    <div class="approval-form" style="display: none;">
                        <textarea placeholder="Instructions (optional)"></textarea>
                        <button>Approve</button>
                        <button>Reject</button>
                    </div>
                </div>
            @endforeach
        </section>

        <section class="profile-section">
            <h2>Profile</h2>
            <p>Name: John Doe</p>
            <p>Email: john.doe@example.com</p>
            <button>Edit Profile</button>
        </section>
    </main>

    <script>
        function showApprovalForm(button) {
            const form = button.nextElementSibling;
            form.style.display = form.style.display === 'none' ? 'block' : 'none';
        }
    </script>
</body>

</html>
