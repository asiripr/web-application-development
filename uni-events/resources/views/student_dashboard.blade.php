<x-app-layout>
    <main>
        <section class="search-section">
            <h2>Search Events</h2>
            <input type="text" placeholder="Search by event name...">
            <select>
                <option value="">Select event type</option>
                <option value="workshop">Workshop</option>
                <option value="seminar">Seminar</option>
                <option value="conference">Conference</option>
            </select>
            <input type="date">
            <button>Search</button>
        </section>

        <section class="events-section">
            <h2>Upcoming Events</h2>
            <div class="event-card">
                <h3>Event Name</h3>
                <p>Event Type: Workshop</p>
                <p>Date: 2024-08-10</p>
                <p>Location: Auditorium</p>
                <a href="#">View Details</a>
            </div>
            <div class="event-card">
                <h3>Event Name</h3>
                <p>Event Type: Seminar</p>
                <p>Date: 2024-08-15</p>
                <p>Location: Conference Room</p>
                <a href="#">View Details</a>
            </div>
            <!-- Add more event cards as needed -->
        </section>

        <section class="profile-section">
            <h2>Profile</h2>
            <p>Name: John Doe</p>
            <p>Email: john.doe@example.com</p>
            <button>Edit Profile</button>
        </section>
    </main>
</x-app-layout>
