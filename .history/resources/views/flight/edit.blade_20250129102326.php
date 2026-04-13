<link href="/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="/css/add.css">
<div class="container ">
    <div class="frame " style="height:550px" >
        <div class="nav">
            <ul class="links">
                <li class="signin-active"><a class="btn">add course</a></li>
            </ul>
        </div>
        <div ng-app ng-init="checked = false">

            <form class="form-signin" action="flight/update/{{$edit['id']}}" method="post" >
                @csrf

                <label for="name">name</label>
                <input class="form-styling" type="text" name="name" value="{{$edit['name']}}" />
                <label for="description">description </label> <input class="form-styling" type="text"
                    name="description" placeholder="" value="{{$edit['description']}}"  />
                <label for="desination">desination </label> <input class="form-styling" type="text"
                    name="desination" value="{{$edit['desination']}}"  />
                <label for="date">date</label> <input class="form-styling" type="date"
                    name="date" value="{{$edit['date']}}"  />
                <label for="price">
                    <div> price</div>
                </label> <input class="" type="number" name="price" value="{{$edit['price']}}"  />
                <div>
                <input type="submit" style="background-color: rgb(247, 171, 30) " class=" btn-signup " value="  ">
            </div>
                <br>

            </form>
        </div></div>
           
