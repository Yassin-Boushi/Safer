<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <title>flights</title>

    <link rel="stylesheet" href="/css/flight.css">



</head>

<body>


    <x-nav />
    <main>
        <h1>الرحلات المتاحة</h1>
        <div class="flights-list">
   @foreach ($flights as $flight)
                <div class="popup">
                    <div class="content" >
                    <h2 id="details"> : عنوان الرحلة {{ $flight['name'] }}</h2>
                    <h2 id="details"> : رقم الرحلة {{ $flight['name'] }}</h2>
                        <p class="details"> {{ $flight['description'] }}</p>
                        <p class="details"> {{ $flight['desination'] }}</p>
                        <p class="details"> {{ $flight['date'] }}</p>
                        <p class="details"> {{ $flight['price'] }}</p>
                        <hr>

                        
                        <div class="actions-button">
                            @if (auth()->user() != null)
                            @if(auth()->user()->is_employee == 1)
                            <a href="flight/destroy/{{ $flight['id'] }}"
                                class="card-button btn-danger  p-1 ps-4 pe-4 rounded-pill">
                                حذف</a>
                            <a href="flight/edit/{{ $flight['id'] }}"
                                class="card-button btn-primary p-1 ps-4 pe-4 rounded-pill">
                                تعديل</a>
                                @endif
                                <a href="ticket/edit/{{ $flight['id'] }}"
                                class="button book ">
                                حجز</a>
                                @endif
                        </div>
                    </div>
                </div>

                @endforeach
        </div>
    </main>


             




    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/bootstrap.bundle.min.js.map"></script>
    <script src="/js/all.min.js"></script>



</body>

</html>