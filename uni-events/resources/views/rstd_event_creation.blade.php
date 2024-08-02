<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNI Events</title>
    <link rel="stylesheet" href="assets/css/styleshome.css">
</head>

<body>

    <header>
        @include('navbar')
    </header>


    <div class="container">

        <div class="main-content">
            <div class="event-form">
                <form action="{{url('/updateanevent')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <label for="eventName">Event Name</label>
                    <input type="text" id="eventName" name="eventName" required>

                    <label for="faculty">Faculty</label>
                    <select id="faculty" name="faculty" required>
                        <option value="">Select Faculty</option>
                        <option value="Faculty of Computing">Faculty of Computing</option>
                        <option value="Faculty of Applied Science">Faculty of Applied Science</option>
                        <option value="Faculty of Medicine">Faculty of Medicine</option>
                        <option value="Faculty of Agricultural Sciences">Faculty of Agricultural Sciences</option>
                        <option value="Faculty of Management Studies">Faculty of Management Studies</option>
                        <option value="Faculty of Socail Sciences and Languages">Faculty of Socail Sciences and Languages</option>
                        <option value="Faculty of Technology">Faculty of Technology</option>
                        <option value="Faculty of Geomatics">Faculty of Geomatics</option>
                    </select>

                    <label for="event_type">Event Type</label>
                    <select id="event_type" name="event_type" required>
                        <option value="">Select Type</option>
                        <option value="Sport">Sport</option>
                        <option value="Dance">Dance</option>
                        <option value="Music">Music</option>
                        <option value="Drama">Drama</option>
                        <option value="Film">Film</option>
                        <option value="Other">Other</option>
                    </select>

                    <label for="date">Date</label>
                    <input type="date" id="date" name="date" required>

                    <label for="venue">Venue</label>
                    <input type="text" id="venue" name="venue" required>

                    <label for="proposal">Proposal</label>
                    <input type="file" name="proposal" id="">

                    <button type="submit" class="submit-btn">Submit</button>
                </form>
            </div>

            <div class="image-section">
                <img src="assets/images/image.jpg" alt="Event Image"> <!-- Image path -->
            </div>
        </div>
    </div>

    @include('footer')

</body>

</html>
