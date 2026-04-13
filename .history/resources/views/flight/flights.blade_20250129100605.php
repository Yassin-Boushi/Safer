<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <title>flights</title>

    <link rel="stylesheet" href="/css/browse.css">



</head>

<body>


    <x-nav />

    <div class="">
        <div class="most-popular">
                

            <div class="row">
                @foreach ($flights as $flight)
                        <div class="col-lg-3 col-sm-6">
                            <div class="item " style="background-color: #a10ca1" >
                                <p style="font-size:20px ;text-align:center;color: white"> {{ $flight['name'] }}</p>
                                <p style="font-size:20px ;text-align:center;color: white"> {{ $flight['description'] }}</p>
                                <p style="font-size:20px ;text-align:center;color: white"> {{ $flight['price'] }}</p>
                                <p style="font-size:20px ;text-align:center;color: white"> {{ $flight['desination'] }}</p>
                                <p style="font-size:20px ;text-align:center;color: white"> {{ $flight['date'] }}</p>

                                <hr>
                                <!-- @if (auth()->user() != null &&auth()->user()->is_employee == 1) -->
                                <div class="d-flex  align-items-center justify-content-evenly mt-1">
                                    <a href="course/destroy/{{ $flight['id'] }}"
                                        class="card-button btn-primary  p-1 ps-4 pe-4 rounded-pill">
                                        حذف</a>
                                    <a href="course/edit/{{ $flight['id'] }}"
                                        class="card-button btn-primary p-1 ps-4 pe-4 rounded-pill">
                                        تعديل</a>
                                </div>
                                <!-- @endif -->
                            </div>
                        </div>

                @endforeach

            </div>
        </div>
    </div>




    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/bootstrap.bundle.min.js.map"></script>
    <script src="/js/all.min.js"></script>



</body>

</html>
