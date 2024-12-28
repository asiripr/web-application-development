<x-app-layout>
    <main>
        <!-- Event Proposal Section -->
        <section style="text-align: center; padding: 40px; background-color: #f9f9f9; border-radius: 8px; margin-bottom: 30px;">
            <h1 style="font-size: 32px; font-weight: 600; color: #333; margin-bottom: 20px; font-family: 'Arial', sans-serif;">
                Create an Event Proposal
            </h1>
            <hr style="width: 50%; margin: 20px auto; border: 1px solid #ddd;">
            <button style="background-color: #4CAF50; padding: 15px 30px; border-radius: 5px; border: none; cursor: pointer; transition: background-color 0.3s ease;">
                <a href="{{ url('/eventcreation') }}" style="display: inline-block; text-decoration: none; color: white; font-size: 18px; font-weight: bold;">
                    <i>Submit Proposal</i>
                </a>
            </button>
        </section>
        
        
        <br><br>
        <h1 style="font-size: 25px; font-weight: 600; color: #333; margin-bottom: 20px; font-family: 'Arial', sans-serif;">
            Submitted Proposals
        </h1>
        <br><br>
        <!-- Submitted Proposals Section -->
        <section class="submitted-proposals-container">
            
            @foreach ($eventdata as $event)
                <div class="event-card">
                    <p class="proposal-status">
                        Status: 
                        @if ($event->is_approved == 0)
                            Not Approved
                        @else
                            Approved
                        @endif
                    </p>
                    <h3 class="event-name">Event Name: {{ $event->name }}</h3>
                    <p class="event-date">Date: {{ $event->date }}</p>
                    <p class="event-venue">Venue: {{ $event->venue }}</p>
                </div>
                <br><br>
            @endforeach
        </section>
    </main>
</x-app-layout>
@include('footer')
