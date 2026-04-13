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
                <div class="container">
                    <div class="content" >
                    <div class="details" > <div>
                     عنوان الرحلة
                    </div> 
                    <div>
                    {{ $flight['name'] }}
                    </div></div>
                    <div class="details" > <div>
                     رقم الرحلة 
                    </div> 
                    <div>
                    {{ $flight['number'] }}
                    </div></div>
                    <div class="details" > <div>
                     وجهة الرحلة                  </div> 
                    <div>
                    {{ $flight['name'] }}
                    </div></div>
                    <div class="details" > <div>
                     تاريخ الرحلة
                    </div> 
                    <div>
                    {{ $flight['name'] }}
                    </div></div>
                    <div class="details price" > <div>
                     سعر الرحلة
                    </div> 
                    <div>
                    {{ $flight['name'] }}
                    </div></div>

                        
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