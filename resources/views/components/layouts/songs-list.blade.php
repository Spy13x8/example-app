<div>
    <!-- Your rendering logic for the songs list goes here -->
    @foreach ($songs as $song)
        <p>{{ $song }}</p>
    @endforeach
</div>