<x-nav />

<main>


            <div class="nav">
                    <div>حجز جديد</div>
            </div>

        <form class="form-add" action="/ticket/add/{{$flight_id}}" method="post">
            @csrf

            <div>
                <label for="name">اسم المسافر</label>
                <input class="form-styling" type="text" name="name" value="{{auth()->user()->is_employee ==0 ?auth()->user()->user_name:''}}" />

            </div>
            @if(auth()->user()->is_employee ==0 )
            <div>
                <label for="card_code">رقم البطاقة </label> <input class="form-styling" type="text"
                    name="card_code" />
</div>
@endif
<div>
    <label for="card_code">الرقم الوطني</label> <input class="form-styling" type="text"
        name="national_number" />
</div>


                <!-- <div class="actions-button"> -->

                    <input type="submit"  class="button  " value="ADD">
                <!-- </div> -->

        </form>
</main>