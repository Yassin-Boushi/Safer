<x-nav />

<main>


    <div class="frame" >
        <div class="nav">
            <ul class="links">
                <li class="signin-active"><a class="btn">add ticket</a></li>
            </ul>
        </div>

            <form class="form-add" action="/ticket/add/{{$flight_id}}" method="post">
                @csrf

                <label for="name">name</label>
                <input class="form-styling" type="text" name="name" value="{{auth()->user()->is_employee ==0 ?auth()->user()->user_name:''}}" />
                @if(auth()->user()->is_employee ==0 )
                <label for="card_code">card_code </label> <input class="form-styling" type="text"
                    name="card_code" />
                @endif
                <div>
                    <input type="submit" style="background-color: rgb(247, 171, 30) " class=" btn-signup " value="ADD">
                </div>
                <br>

            </form>
    </div></main>