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
                        <img src="assets/images/image 10.jpg" alt="Focus Night">
                        <h3>Focus Night</h3>
                    </div>
                    <div class="upcoming-item">
                        <img src="assets/images/image 11.jpg" alt="Virtual Rival">
                        <h3>Virtual Rival</h3>
                    </div>
                    <div class="upcoming-item">
                        <img src="assets/images/image 12.jpg" alt="Missakabhiwandana">
                        <h3>Missakabhiwandana</h3>
                    </div>
                    <div class="upcoming-item">
                        <img src="assets/images/image 13.jpg" alt="Miyasirawa">
                        <h3>Miyasirawa</h3>
                    </div>
                    <div class="upcoming-item">
                        <img src="assets/images/image 14.jpg" alt="Sipmanasala">
                        <h3>Sipmansala</h3>
                    </div>
                    <div class="upcoming-item">
                        <img src="assets/images/image 15.jpg" alt="Diyawara Sihinaya">
                        <h3>Diyawara Sihinaya</h3>
                    </div>
                </div>
            </div>
        </section>
</main>
@include('footer')

</x-app-layout>
