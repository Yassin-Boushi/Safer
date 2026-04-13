<x-nav />
<main>
<div class="nav">
                <div>تسجيل الدخول</div>
        </div>

            <form class="form-add"  action="flights" method="post" >
                @csrf
<div>
    <label for="name">name</label>
    <input class="form-styling" type="text" name="name" placeholder="" />
    
</div>
<div>
    <label for="description">description </label> <input class="form-styling" type="text"
        name="description" placeholder="" />

</div>
<div>
    <label for="desination">desination </label> <input class="form-styling" type="text"
        name="desination" placeholder="" />

</div>
<div>
    <label for="date">date</label> <input class="form-styling" type="date"
        name="date" placeholder="" />

</div>
<div>
    <label for="price">
        <div> price</div>
    </label> <input class="" type="number" name="price" placeholder="" />

</div>
<div>
    <label for="number">
        <div> number</div>
    </label> <input class="" type="number" name="number" placeholder="" />

</div>

                <div>
                <input type="submit" class="button  " value="ADD">
            </div>
                <br>

            </form>
</main>
           
