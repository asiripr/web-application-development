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
                <form action="submit_event.php" method="post">
                    <label for="eventName">Event Name</label>
                    <input type="text" id="eventName" name="eventName" required>

                    <label for="faculty">Faculty</label>
                    <select id="faculty" name="faculty" required>
                        <option value="">Select Faculty</option>
                        <option value="Computing">Faculty of Computing</option>
                        <option value="Management">Faculty of Applied Sciencest</option>
                        <option value="Medicine">Faculty of Medicine</option>
                        <option value="Agriculture">Faculty of Agricultural Sciences</option>
                        <option value="Management">Faculty of Management Studies</option>
                        <option value="Socail">Faculty of Socail Sciences and Languages</option>
                        <option value="Technology">Faculty of Technology</option>
                        <option value="Geomatics">Faculty of Geomatics</option>
                    </select>

                    <label for="date">Date</label>
                    <input type="date" id="date" name="date" required>

                    <label for="venue">Venue</label>
                    <input type="text" id="venue" name="venue" required>

                    <label for="proposal">Proposal</label>
                    <input type="file" name="proposal" id="">

                    <button type="submit" class="submit-btn">Submit</button>
                    <button type="reset" class="delete-btn">Delete</button>

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
