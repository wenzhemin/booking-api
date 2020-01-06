<!-- View stored in resources/views/emails/booking.complete.blade.php -->
<html>
    <body>
        <h1>Thank you for booking with us</h1>
        <p>Hi {{ $booking->name_of_guest }}</p>
        <br />
        <h2>Here is an overview of your booking credentials:</h2>

        <p>The date of you booking: {{ $booking->date }}</p>
        <p>The time of your booking: {{ $booking->timeslot }}</p>
        <p>The length of your booking: {{ $booking->interval_id }} hour(s)</p>
        <p>The number of guests: {{ $booking->no_of_guests }}</p>
        <p>The adress to pick up your booking: {{ $booking->address }}</p>
        {{-- <p>The adress to pick up your booking: {{ $booking->location_id }}</p> --}}
        <p>The raft you have booked: {{ $booking->service_id }}</p>

        
        
        <h3>{{ $booking->buniness_id }}</h3>
        
    </body>
</html>
