@extends('admin.app')

@section('content')

<!-- Page content -->
<div class="content">
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
        
            <a class='btn btn-xs btn-primary justify-content-center' href="{{ route('admincalendar', ['year' => $year, 'week' => $week - 1]) }}">Last Week</a> <!--Previous week-->
            <a class='btn btn-xs btn-primary justify-content-center' href="{{ route('admincalendar', ['year' => $year, 'week' => $week + 1]) }}">Next Week</a> <!--Next week-->

    <table class="table table-striped table-hover table-dark table-bordered dashcalendar">
        <thead>
            <tr>
                <th scope="col">Time</th>
                    <?php
                    do {
                        echo "<th>" . $dt->format('l') . "<br>" . $dt->format('d M Y') . "</th>\n";
                        $dt->modify('+1 day');
                    } while ($week == $dt->format('W'));
                    ?>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">10:00</th>
                <td><button type="button" class="btn btn-danger btn-sm">Booked 12345678</button></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>

            <tr>
                <th scope="row">11:00</th>
                <td></td>
                <td></td>
                <td><button type="button" class="btn btn-danger btn-sm">Booked 12345678</button></td>
                <td></td>
                <td></td>
                <td></td>
                <td><button type="button" class="btn btn-danger btn-sm">Booked 12345678</button></td>
            </tr>

            <tr>
                <th scope="row">12:00</th>
                <td></td>
                <td><button type="button" class="btn btn-danger btn-sm">Booked 12345678</button></td>
                <td></td>
                <td><button type="button" class="btn btn-danger btn-sm">Booked 12345678</button></td>
                <td></td>
                <td><button type="button" class="btn btn-danger btn-sm">Booked 12345678</button></td>
                <td></td>
            </tr>

            <tr>
                <th scope="row">13:00</th>
                <td><button type="button" class="btn btn-danger btn-sm">Booked 12345678</button></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td><button type="button" class="btn btn-danger btn-sm">Booked 12345678</button></td>
                <td><button type="button" class="btn btn-danger btn-sm">Booked 12345678</button></td>
            </tr>

            <tr>
                <th scope="row">14:00</th>
                <td></td>
                <td><button type="button" class="btn btn-danger btn-sm">Booked 12345678</button></td>
                <td></td>
                <td><button type="button" class="btn btn-danger btn-sm">Booked 12345678</button></td>
                <td><button type="button" class="btn btn-danger btn-sm">Booked 12345678</button></td>
                <td></td>
                <td></td>
            </tr>

            <tr>
                <th scope="row">15:00</th>
                <td></td>
                <td><button type="button" class="btn btn-danger btn-sm">Booked 12345678</button></td>
                <td><button type="button" class="btn btn-danger btn-sm">Booked 12345678</button></td>
                <td></td>
                <td><button type="button" class="btn btn-danger btn-sm">Booked 12345678</button></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <th scope="row">16:00</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td><button type="button" class="btn btn-danger btn-sm">Booked 12345678</button></td>
                <td></td>
                <td><button type="button" class="btn btn-danger btn-sm">Booked 12345678</button></td>
            </tr>

            <tr>
                <th scope="row">17:00</th>
                <td><button type="button" class="btn btn-danger btn-sm">Booked 12345678</button></td>
                <td><button type="button" class="btn btn-danger btn-sm">Booked 12345678</button></td>
                <td><button type="button" class="btn btn-danger btn-sm">Booked 12345678</button></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>

            <tr>
                <th scope="row">18:00</th>
                <td></td>
                <td></td>
                <td><button type="button" class="btn btn-danger btn-sm">Booked 12345678</button></td>
                <td><button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal">TESTER 12345678</button></td><!-- Button trigger modal -->
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>
    </div>

    
<!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Booking: 12345678</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body" id="bookingform">
                    <div data-role="fieldcontain">
                        <label for="first_name">First Name:</label>
                        <input type="text" name="first_name" id="first_name" value="" placeholder="First Name" disabled/>
                    </div>

                    <div data-role="fieldcontain">
                        <label for="last_name">Last Name:</label>
                        <input type="text" name="last_name" id="last_name" value="" placeholder="Last Name" disabled/>
                    </div>

                    <div data-role="fieldcontain">
                        <label for="user_name">User Name:</label>
                        <input type="text" name="user_name" id="user_name" value="" placeholder="User Name" disabled/>
                    </div>

                    <div data-role="fieldcontain">
                        <label for="password">Password:</label>
                        <input type="text" name="password" id="password" value="" placeholder="Password" disabled/>
                    </div>

                    <div data-role="fieldcontain">
                        <label for="email">Email Address:</label>
                        <input type="text" name="email" id="email" value="" placeholder="Email Address" disabled/>
                    </div>
                </div>

                <div class="modal-footer">
                    <button onclick="enable_disable()" type="button"
                        class="btn btn-primary" value="Disable(Save)"
                        id="myButton1"> Save
                    </button>
                    <button onclick="disable_enable()" type="button"
                        class="btn btn-primary" value="Enable(Edit)"
                        id="myButton1"> Edit
                    </button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
</div>
    <script type="text/javascript"> 
        function enable_disable() {  
            $("#bookingform :input").prop("disabled", true); 
        }
        function disable_enable() {  
            $("#bookingform :input").prop("disabled", false); 
        }  
    </script>
@endsection