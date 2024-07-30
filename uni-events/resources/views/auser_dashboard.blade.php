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
            <div class="proposal-card">
                <h3>Event Name: Workshop on AI</h3>
                <p>Event Type: Workshop</p>
                <p>Date: 2024-08-10</p>
                <p>Description: A workshop on AI and Machine Learning.</p>
                <p>Proposal: <a href="#">Click Here To Download</a></p>
                <button onclick="showApprovalForm(this)">Review Proposal</button>
                <div class="approval-form" style="display: none;">
                    <textarea placeholder="Instructions (optional)"></textarea>
                    <button>Approve</button>
                    <button>Reject</button>
                </div>
            </div>
            <div class="proposal-card">
                <h3>Event Name: Cybersecurity Seminar</h3>
                <p>Event Type: Seminar</p>
                <p>Date: 2024-08-15</p>
                <p>Description: A seminar on the latest trends in cybersecurity.</p>
                <p>Proposal: <a href="#">Click Here To Download</a></p>
                <button onclick="showApprovalForm(this)">Review Proposal</button>
                <div class="approval-form" style="display: none;">
                    <textarea placeholder="Instructions (optional)"></textarea>
                    <button>Approve</button>
                    <button>Reject</button>
                </div>
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

    <script>
        function showApprovalForm(button) {
            const form = button.nextElementSibling;
            form.style.display = form.style.display === 'none' ? 'block' : 'none';
        }
    </script>
</body>
</html>
