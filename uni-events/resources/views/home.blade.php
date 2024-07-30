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
        <div class="hero-image">
            <img src="assets/images/image 6.jpg" alt="Hero Image">
        </div>
    </header>
    <main>
        <section class="search">
            <h1>Find Your Event Here</h1>
            <div class="search-bar">
                <input type="date" id="event-date">
                <select id="category">
                    <option value="Music">Music</option>
                    <option value="Dance">Dance</option>
                    <option value="Sport">Sport</option>
                    <option value="Academic">Academic</option>
                    <option value="Other">Other</option>
                </select>
                <button class="search-btn">Search</button>
            </div>
        </section>
        <section class="events">
            <h2>See the Events</h2>
            <div class="event-list">
                <div class="event-item">
                    <img src="assets/images/image 7.jpg" alt="Infobash v3.0">
                    <h3>InfoBash v3.0</h3>
                    <p>2022/06/24</p>
                    <p>Regional</p>
                </div>
                <div class="event-item">
                    <img src="assets/images/image 8.jpg" alt="Aseniya">
                    <h3>Aseniya</h3>
                    <p>2022/06/24</p>
                    <p>Music</p>
                </div>
                <div class="event-item">
                    <img src="assets/images/image 9.jpg" alt="Adawwa">
                    <h3>Adawwa</h3>
                    <p>2022/06/24</p>
                    <p>Music</p>
                </div>
            </div>
        </section>
        <section class="upcoming">
            <h2>Upcoming Events</h2>
            <div class="upcoming-list">
                <div class="upcoming-item">
                    <img src="assets/images/image 10.jpg" alt="Feesa NDHT">
                    <h3>Feesa NDHT</h3>
                </div>
                <div class="upcoming-item">
                    <img src="assets/images/image 11.jpg" alt="Virtual Brad">
                    <h3>Virtual Brad</h3>
                </div>
                <div class="upcoming-item">
                    <img src="assets/images/image 12.jpg" alt="Mazhal Sandhya">
                    <h3>Mazhal Sandhya</h3>
                </div>
                <div class="upcoming-item">
                    <img src="assets/images/image 13.jpg" alt="Miyatsuwa">
                    <h3>Miyatsuwa</h3>
                </div>
                <div class="upcoming-item">
                    <img src="assets/images/image 14.jpg" alt="Spasanasala">
                    <h3>Spasanasala</h3>
                </div>
                <div class="upcoming-item">
                    <img src="assets/images/image 15.jpg" alt="Diyawe Siththwa">
                    <h3>Diyawe Siththwa</h3>
                </div>
            </div>
        </section>
    </main>
    
    <footer>
        <img src="assets/images/fotter.jpg" alt="Footer Image" class="footer-image">
    </footer>
</body>
</html>
