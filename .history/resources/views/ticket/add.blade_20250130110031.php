<x-nav />

<main>


    <div class="frame">
        <div class="nav">
            <ul class="links">
                <li class="signin-active"><a class="btn">add ticket</a></li>
            </ul>
        </div>

        <form class="form-add" action="/ticket/add/{{$flight_id}}" method="post">
            @csrf

            <div>
                <label for="name">name</label>
                <input class="form-styling" type="text" name="name" value="{{auth()->user()->is_employee ==0 ?auth()->user()->user_name:''}}" />

            </div>
            @if(auth()->user()->is_employee ==0 )
            <div>
                <label for="card_code">card_code </label> <input class="form-styling" type="text"
                    name="card_code" />
</div>
                    @endif


                <!-- <div class="actions-button"> -->

                    <input type="submit"  class="button  " value="ADD">
                <!-- </div> -->

        </form>
    </div>
</main>