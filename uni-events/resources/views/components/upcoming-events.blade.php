<div class="coming-soon">
    <h2>Upcoming Events</h2>
    <div class="coming-soon-grid">
        @foreach ($events as $event)
            <div class="coming-soon-item">
                <h3>{{ $event->name }}</h3>
                <p>{{ $event->name }}, conducted by {{ $event->faculty }} and it will be held on
                    {{ $event->date }} at {{ $event->venue }}</p>
            </div>
        @endforeach
    </div>
</div>
