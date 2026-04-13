<link rel="stylesheet" href="/css/flight.css">

            <nav class="navbar">
                    <ul >
                        <div class="titles">
                            <li><a href="/flights">الرحلات</a></li>
                            @if (auth()->user() != null && auth()->user()->is_employee == 1)
                            <li><a href="/add_flight">اضافة رحلة</a></li>
                            @endif
                            <li><a href="/tickets">الحجوزات</a></li>

                        </div>
                        @if (auth()->user() != null)
                        <div class="account">
                            <h4>{{auth()->user()->user_name}}</h4>
                            <li><a href="/account/logout" style="color:white ;font-size:20px">logout</a></li>

                        </div>
                        @else
                        <li><a href="login" style="color:white ;font-size:20px">login</a></li>
                        @endif
                    </ul>

                </nav>
