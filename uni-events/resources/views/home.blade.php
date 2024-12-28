<x-app-layout>
    <main>
        <div class="slider">
            <div class="slides">
                <img src="assets/images/image 15.jpg" alt="" class="homeslide">
                <img src="assets/images/image 13.jpg" alt="" class="homeslide">
                <img src="assets/images/image 12.jpg" alt="" class="homeslide">
            </div>
            <div class="slider-controls">
                <button id="prev-btn">Prev</button>
                <button id="next-btn">Next</button>
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
                    const $value = $(this).val();
                    if ($value) {
                        $('.alldata').hide();
                        $('.searchdata').show();
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
                    } else {
                        // Clear the content of the search results
                        $('#Content').html('');
                        // Hide both data sections
                        $('.alldata').hide();
                        $('.searchdata').hide();
                    }
                });
            </script>
            </div>
            {{-- ================================ --}}
        </section>
            <section class="coming-soon">
                <h2>Upcoming Events</h2>
                <div class="coming-soon-grid">
                    @foreach ($eventdata as $event)
                        <div class="coming-soon-item">
                            <h3>{{ $event->name }}</h3>
                            <p>{{ $event->name }}, conducted by {{ $event->faculty }} and it will be held on
                                {{ $event->date }} at {{ $event->venue }}</p>
                        </div>
                    @endforeach
                </div>
            </section>

            <section class="past-events-section">
                <h2 class="section-title">Previous Events</h2>
            
                <div class="event-gallery">
                    <div class="gallery-item">
                        <img src="assets/images/focus-night.jpeg" alt="Focus NIGHT" class="event-thumbnail">
                        <h3 class="event-title">Focus NIGHT</h3>
                    </div>
                    <div class="gallery-item">
                        <img src="assets/images/vr.jpeg" alt="Virtual Rival" class="event-thumbnail">
                        <h3 class="event-title">Virtual Rival</h3>
                    </div>
                    <div class="gallery-item">
                        <img src="assets/images/Missakhabivandana.jpeg" alt="Missakhabivandana" class="event-thumbnail">
                        <h3 class="event-title">Missakihivandana</h3>
                    </div>
                    <div class="gallery-item">
                        <img src="assets/images/Miyasirava.jpeg" alt="Miyasiravaya" class="event-thumbnail">
                        <h3 class="event-title">Miyasiravaya</h3>
                    </div>
                    <div class="gallery-item">
                        <img src="assets/images/Sipmansal.jpeg" alt="Sipmansala" class="event-thumbnail">
                        <h3 class="event-title">Sipmansala</h3>
                    </div>
                    <div class="gallery-item">
                        <img src="assets/images/pearl hack.jpeg" alt="Pearl Hack" class="event-thumbnail">
                        <h3 class="event-title">Pearl Hack</h3>
                    </div>
                    <div class="gallery-item">
                        <img src="assets/images/Infobash.jpeg" alt="Infobash" class="event-thumbnail">
                        <h3 class="event-title">Infobash</h3>
                    </div>
                    <div class="gallery-item">
                        <img src="assets/images/blood.jpeg" alt="Blood Donation Camp" class="event-thumbnail">
                        <h3 class="event-title">Blood Donation Camp</h3>
                    </div>
                    <div class="gallery-item">
                        <img src="assets/images/Koduyathra.jpeg" alt="Koduyathra" class="event-thumbnail">
                        <h3 class="event-title">Koduyathra</h3>
                    </div>
                </div>
            </section>
            
        
    </main>
    @include('footer')

</x-app-layout>
