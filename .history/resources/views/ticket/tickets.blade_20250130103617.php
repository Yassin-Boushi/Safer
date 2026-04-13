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
    <main>
        <h1>الحجوزات</h1>
        <div class="flights-list">


            @foreach ($tickets as $ticket)
            <div class="container">
                <div class="content">
                    <div class="details">
                        <div>
                            عنوان الرحلة
                        </div>
                        <div>
                            {{ $ticket['flight']['name'] }}
                        </div>
                    </div>
                    <div class="details">
                        <div>
                            رقم الرحلة
                        </div>
                        <div>
                            {{ $ticket['flight']['number'] }}
                        </div>
                    </div>
                    <div class="details">
                        <div>
                            اسم المسافر </div>
                        <div>
                            {{ $ticket['name'] }}
                        </div>
                    </div>



                    <div class="actions-button">
                        <a href="ticket/destroy/{{ $ticket['id'] }}"
                            class="button delete">
                            الغاء الحجز</a>

                    </div>

                </div>
                @endforeach
            </div>

        </div>
    </main>




    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/bootstrap.bundle.min.js.map"></script>
    <script src="/js/all.min.js"></script>



</body>

</html>