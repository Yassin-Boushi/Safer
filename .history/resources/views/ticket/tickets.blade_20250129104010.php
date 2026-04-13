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
                                <div class="actions-button">
                                    <a href="ticket/destroy/{{ $ticket['id'] }}"
                                        class="card-button btn-danger  p-1 ps-4 pe-4 rounded-pill">
                                        حذف</a>
                            @if (auth()->user() != null &&auth()->user()->is_employee == 0)
                                @if($ticket['is_buy'] == 0)
                            <a href="ticket/update/{{ $ticket['id'] }}"
                                class="card-button btn-success p-1 ps-4 pe-4 rounded-pill">
                                دفع</a>
                                @endif
                                @endif
                        </div>
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
