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
            @foreach ($eventdata as $event)
                @if ($event->is_approved==0)
                    <div class="proposal-card">
                        <a href=""></a>
                        <h3>Event Name: {{$event->name}}</h3>
                        <p>Organized by: {{$event->faculty}}</p>
                        <p>Date: {{$event->date}}</p>
                        <p>Venue: {{$event->venue}}</p>
                        <p>Event Type: {{$event->event_type}}</p>
                        <p>Proposal: <a href="{{ route('downloadproposal', $event->id) }}">Click Here To Download</a></p>
                        <button onclick="showApprovalForm(this)">Review Proposal</button>
                        <div class="approval-form" style="display: none;">
                                <form action="{{url('/approveevent',$event->id)}}" method="post">
                                @csrf
                                <textarea placeholder="Instructions (optional)" name="instructions"></textarea>
                                <button type="submit">Approve</button>
                            </form>
                            <form action="{{url('/rejectevent', $event->id) }}" method="post">
                                @csrf
                                <textarea placeholder="Instructions (optional)" name="instructions"></textarea>
                                <button type="submit">Reject</button>
                            </form>
                        </div>
                    </div>
                @endif
                
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
