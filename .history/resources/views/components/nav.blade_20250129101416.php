
<link rel="stylesheet" href="/css/browse.css">
<link rel="stylesheet" href="/css/bootstrap.min.css">
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-space-between">
                <nav class="main-nav">
                    <ul class="nav">
                     
                        <li><a href="/flights">الرحلات</a></li>
                        <li><a href="/add_flight">اضافة رحلة</a></li>
                        <li><a href="/tickets">التذاكر</a></li>
                        @if (auth()->user() != null)
                        <h4>{{auth()->user()->user_name}}</h4>
                        <li><a href="/account/logout" style="color:white ;font-size:20px">logout</a></li>
                        @else
                        <li><a href="login" style="color:white ;font-size:20px">login</a></li>
                        @endif
                    </ul>

                </nav>
            </div>
        </div>
    </div>
</header>
