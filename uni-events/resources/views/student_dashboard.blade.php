<x-app-layout>
    <main>
        <section class="search-section">
            <h2>Search Events</h2>
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
        </section>

        <section class="events-section">
            <h2>Upcoming Events</h2>
            <br><br>
            @include('components.upcoming-events', ['events' => $eventdata])
        </section>

    </main>
</x-app-layout>
