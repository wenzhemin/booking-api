<!-- View stored in resources/views/emails/booking.complete.blade.php -->
<html>
    <body>
    Hej {{ $booking->name_of_guest }}

        {{ $booking->timeslot }}
    </body>
</html>
