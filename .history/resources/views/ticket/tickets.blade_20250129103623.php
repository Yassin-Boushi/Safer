<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <title>tickets</title>

    <link rel="stylesheet" href="/css/browse.css">



</head>

<body>


    <x-nav />

    <div class="">
        <div class="most-popular">


            <div class="row">
                @foreach ($tickets as $ticket)
                        <div class="col-lg-3 col-sm-6">
                            <div class="item   " style="background-color:rgb(12, 129, 161)" >
                                <p style="font-size:20px ;text-align:center;color: white"> {{ $ticket['flight']['name'] }}</p>
                                <p style="font-size:20px ;text-align:center;color: white"> {{ $ticket['flight']['date'] }}</p>
                                <p style="font-size:20px ;text-align:center;color: white"> {{ $ticket['flight']['desination'] }}</p>

                                <hr>
                          
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
