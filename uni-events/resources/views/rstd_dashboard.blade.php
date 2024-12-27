<x-app-layout>
    <main>
        <section class="create-proposal-section">
            <h2>Create Event Proposal</h2>
            <button type=""><a href="{{ url('/eventcreation') }}">Submit Proposal</a></button>
        </section>

        <section class="submitted-proposals-section">
            <h2>Submitted Proposals</h2>
            @foreach ($eventdata as $eventdata)
                <div class="proposal-card">
                    <p>Status:
                        @if ($eventdata->is_approved == 0)
                            Not Approved
                        @else
                            Approved
                        @endif
                    </p>
                    <h3>Event Name: {{ $eventdata->name }}</h3>
                    <p>Date: {{ $eventdata->date }}</p>
                    <p>Venue: {{ $eventdata->venue }}</p>
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
</x-app-layout>    