<x-app-layout>
    <div class="event-container">
        <div class="event-main-content">
            <div class="event-update-form">
                <form action="{{ url('/updateanevent') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <label for="updateEventName">Event Name</label>
                    <input type="text" id="updateEventName" name="eventName" required>

                    <label for="updateFaculty">Faculty</label>
                    <select id="updateFaculty" name="faculty" required>
                        <option value="">Select Faculty</option>
                        <option value="Faculty of Computing">Faculty of Computing</option>
                        <option value="Faculty of Applied Science">Faculty of Applied Science</option>
                        <option value="Faculty of Medicine">Faculty of Medicine</option>
                        <option value="Faculty of Agricultural Sciences">Faculty of Agricultural Sciences</option>
                        <option value="Faculty of Management Studies">Faculty of Management Studies</option>
                        <option value="Faculty of Social Sciences and Languages">Faculty of Social Sciences and Languages</option>
                        <option value="Faculty of Technology">Faculty of Technology</option>
                        <option value="Faculty of Geomatics">Faculty of Geomatics</option>
                    </select>

                    <label for="updateEventType">Event Type</label>
                    <select id="updateEventType" name="event_type" required>
                        <option value="">Select Type</option>
                        <option value="Sport">Sport</option>
                        <option value="Dance">Dance</option>
                        <option value="Music">Music</option>
                        <option value="Drama">Drama</option>
                        <option value="Film">Film</option>
                        <option value="Other">Other</option>
                    </select>

                    <label for="updateDate">Date</label>
                    <input type="date" id="updateDate" name="date" required>

                    <label for="updateVenue">Venue</label>
                    <input type="text" id="updateVenue" name="venue" required>

                    <label for="updateProposal">Proposal</label>
                    <input type="file" id="updateProposal" name="proposal">

                    <button type="submit" class="event-submit-btn">Submit</button>
                </form>
            </div>

            <div class="event-image-section">
                <img src="assets/images/image.jpg" alt="Event Image">
            </div>
        </div>
    </div>

   
</x-app-layout>
@include('footer')