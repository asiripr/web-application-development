<x-app-layout>
    <main>
        <section class="create-proposal-section">
            <h1>Create Event Proposal</h1>
            <hr>
            <button type=""><a href="{{ url('/eventcreation') }}"><i>Submit Proposal</i></a></button>
        </section>
        <br><br>
        <section class="submitted-proposals-section">
            <h1>Submitted Proposals</h1>
            
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
    </main>
</x-app-layout>
@include('footer')    