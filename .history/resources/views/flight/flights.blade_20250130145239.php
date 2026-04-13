<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <title>flights</title>




</head>

<body>


    <x-nav />
    <main>
        <h1>الرحلات المتاحة</h1>
        <div class="flights-list">
   @foreach ($flights as $flight)
   @if($flight->all_rider_numbers != $flight->rider_numbers)
                    <div class="content" >
                    <div class="details" > <div>
                     عنوان الرحلة
                    </div> 
                    <div>
                    {{ $flight['name'] }}
                    </div></div>
                    <div class="details" > <div>
                     وصف الرحلة
                    </div> 
                    <div>
                    {{ $flight['description'] }}
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
                    {{ $flight['desination'] }}
                    </div></div>
                    <div class="details" > <div>
                     تاريخ الرحلة
                    </div> 
                    <div>
                    {{ $flight['date'] }}
                    </div></div>
                    <div class="details " > <div>
                     سعر الرحلة
                    </div> 
                    <div class="price">
                    {{ $flight['price'] }}
                    </div></div>
                    <div class="details " > <div>
                     عدد الركاب                     </div> 
                    <div >
                    {{ $flight['all_rider_numbers'] }}
                    </div></div>
                    <div class="details " > <div>
                      عدد الركاب المتاحة                  </div> 
                    <div class="price">
                    {{ $flight['all_rider_numbers']-$flight['rider_numbers']  }}
                    </div></div>

                        
                        <div class="actions-button">
                            @if (auth()->user() != null)
                            @if(auth()->user()->is_employee == 1)
                            <a href="flight/destroy/{{ $flight['id'] }}"
                                class="button delete">
                                حذف</a>
                            <a href="flight/edit/{{ $flight['id'] }}"
                                class="button edit">
                                تعديل</a>
                                @endif
                                <a href="ticket/edit/{{ $flight['id'] }}"
                                class="button  ">
                                حجز</a>
                                @endif
                    </div>
                </div>
    @endif
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