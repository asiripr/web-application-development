<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNI Events</title>
    <link rel="stylesheet" href="assets/css/styleshome.css">
    <script src="assets/scripts/script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

</head>

<body>
    <header>
        @include('navbar')
        <div class="slider">
            <div class="slides">
                <img src="assets/images/image 15.jpg" alt="" srcset="">
                <img src="assets/images/image 13.jpg" alt="" srcset="">
                <img src="assets/images/image 12.jpg" alt="" srcset="">
            </div>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="search">
                <input type="search" name="search" id="search" placeholder="Search For an Event..." class="form-control">
            </div>
        </div>
        {{-- search results will display here --}}
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Faculty</th>
                    <th>Date</th>
                    <th>Venue</th>
                    <th>Event Type</th>
                </tr>
            </thead>
            <tbody class="alldata">
                @foreach ($eventdata as $event)
                    <tr>
                        <td>{{ $event->name }}</td>
                        <td>{{ $event->faculty }}</td>
                        <td>{{ $event->date }}</td>
                        <td>{{ $event->venue }}</td>
                        <td>{{ $event->event_type }}</td>
                    </tr>
                @endforeach
            </tbody>
            {{-- <tbody id="Content" class="searchdata">
            </tbody> --}}
        </table>
        {{-- the required js part for the live search is here --}}
        <script type="text/javascript">
        $('#home').on('keyup',function(){
            $value = $(this).val();
            if ($value) {
                $('.alldata').hide();
                $('.searchdata').show();
            }else{
                $('.alldata').show();
                $('.searchdata').hide();
            }
            $.ajax({
                type:'get',
                url:'{{URL::to('search')}}',
                data:{'search':$value},

                success:function(data){
                    console.log(data);
                    $('#Content').html(data);
                }
            });
        })
        </script>

        {{-- ================================ --}}
        <h2>Upcoming Events</h2>
        <section class="coming-soon">
            @foreach ($eventdata as $event)
                <div class="coming-soon-item">
                    <h3>{{ $event->name }}</h3>
                    <p>{{ $event->name }}, conducted by {{ $event->faculty }} and it will be held on {{ $event->date}} at {{ $event->venue}}</p>
                </div>
            @endforeach
        </section>
        <section class="events">

            <h2>Events For You</h2>
            <div class="event-list">
                <div class="event-item">
                    <img src="assets/images/image 7.jpg" alt="Infobash v3.0">
                    <h3>InfoBash v3.0</h3>
                </div>
                <div class="event-item">
                    <img src="assets/images/image 8.jpg" alt="Aseniya">
                    <h3>Aseniya</h3>
                </div>
                <div class="event-item">
                    <img src="assets/images/image 9.jpg" alt="Adawwa">
                    <h3>Adawwa</h3>
                </div>
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
            </div>
        </section>
        <section class="upcoming">
            <h2>Upcoming Events</h2>

        </section>
    </main>

    @include('footer')
</body>

</html>
