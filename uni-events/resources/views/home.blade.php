<x-app-layout>
<main>
    <div class="slider">
        <div class="slides">
            <img src="assets/images/image 15.jpg" alt="" class="homeslide">
            <img src="assets/images/image 13.jpg" alt="" class="homeslide">
            <img src="assets/images/image 12.jpg" alt="" class="homeslide">
        </div>
    </div>
    <section class="searcharea">

        <div class="container">
            <div class="search">
                <input type="search" name="search" id="search" placeholder="Search For an Event..."
                    class="form-control">
            </div>
        </div>

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
            <tbody id="Content" class="searchdata">
            </tbody>
        </table>


        {{-- search results will display here --}}

        {{-- the required js part for the live search is here --}}
        <script type="text/javascript">
            $('#search').on('keyup', function() {
                $value = $(this).val();
                if ($value) {
                    $('.alldata').hide();
                    $('.searchdata').show();
                } else {
                    $('.alldata').show();
                    $('.searchdata').hide();
                }
                $.ajax({
                    type: 'get',
                    url: '{{ URL::to('search') }}',
                    data: {
                        'search': $value
                    },

                    success: function(data) {
                        console.log(data);
                        $('#Content').html(data);
                    }
                });
            })
        </script>
        </div>
        {{-- ================================ --}}

        <section class="coming-soon">
            <h2>Upcoming Events</h2>
            @foreach ($eventdata as $event)
                <div class="coming-soon-item">
                    <h3>{{ $event->name }}</h3>
                    <p>{{ $event->name }}, conducted by {{ $event->faculty }} and it will be held on
                        {{ $event->date }} at {{ $event->venue }}</p>
                </div>
            @endforeach
        </section>
        <section class="myevents">

            <section class="events first-column">
                <div class="event-card">
                    <img src="assets/images/focus-night.jpeg" alt="Focus NIGHT">
                    <h3>Focus NIGHT</h3>
                </div>
                <div class="event-card">
                    <img src="assets/images/vr.jpeg" alt="Virtual Rival">
                    <h3>Virtual Rival</h3>
                </div>
                <div class="event-card">
                    <img src="assets/images/Missakhabivandana.jpeg" alt="Missakhabivandana">
                    <h3>Missakihivandana</h3>
                </div>
            </section>
            
            <section class="events second-column">
                <div class="event-card">
                    <img src="assets/images/Miyasirava.jpeg" alt="Focus NIGHT">
                    <h3>Miyasiravaya</h3>
                </div>
                <div class="event-card">
                    <img src="assets/images/Sipmansal.jpeg" alt="Virtual Rival">
                    <h3>Sipmansala</h3>
                </div>
                <div class="event-card">
                    <img src="assets/images/pearl hack.jpeg" alt="Missakhabivandana">
                    <h3>Pearl Hack</h3>
            
                </div>
            </section>
            
            <section class="events third-column">
                <div class="event-card">
                    <img src="assets/images/Infobash.jpeg" alt="Focus NIGHT">
                    <h3>Infobash</h3>
                </div>
                <div class="event-card">
                    <img src="assets/images/blood.jpeg" alt="Virtual Rival">
                    <h3>Blood Donation Camp</h3>
                </div>
                <div class="event-card">
                    <img src="assets/images/Koduyathra.jpeg" alt="Missakhabivandana">
                    <h3>Koduyathra</h3>
            
                </div>
            </section>
        </section>
</main>
@include('footer')

</x-app-layout>
