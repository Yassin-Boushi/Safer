
<link rel="stylesheet" href="/css/browse.css">
<link rel="stylesheet" href="/css/bootstrap.min.css">
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <ul class="nav">
                        @if(Auth::guard('teacher')->user()!=null)
                        <li><a href="/course">home</a></li>
                        <li><a href="/add_course">add course</a></li>
                        <li><a href="/episode/create">add episode</a></li>
                        <li><a href="/easy_question/create">add easy question</a></li>
                        <li><a href="/challenge_question/create">add challenge question</a></li>
                        @elseif (Auth::guard('student')->user() != null)
                        <li><a href="/course">home</a></li>
                        <li><a href="/student_rate">rates</a></li>
                        @else
                        <li><a href="/teacher">teachers</a></li>
                        <li><a href="/add_teacher">add teacher</a></li>
                        <li><a href="/student">students</a></li>
                        <li><a href="/adminTeacher" >orders</a></li>
                        @endif
                        <li><a href="/account/logout" style="color:white ;font-size:20px">log out</a></li>
                    </ul>

                </nav>
            </div>
        </div>
    </div>
</header>
