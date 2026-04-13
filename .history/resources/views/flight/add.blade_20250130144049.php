<x-nav />
<main>
<div class="nav">
                <div>اضافة رحلة</div>
        </div>

            <form class="form-add"  action="flights" method="post" >
                @csrf
<div>
    <label for="name">اسم الرحلة</label>
    <input class="form-styling" type="text" name="name" placeholder="" />
    
</div>
<div>
    <label for="description">الوصف </label> <input class="form-styling" type="text"
        name="description" placeholder="" />

</div>
<div>
    <label for="desination">الوجهة </label> <input class="form-styling" type="text"
        name="desination" placeholder="" />

</div>
<div>
    <label for="date">التاريخ</label> <input class="form-styling" type="date"
        name="date" placeholder="" />

</div>
<div>
    <label for="price">
        السعر
    </label> <input class="" type="number" name="price" placeholder="" />

</div>
<div>
    <label for="number">
        الرقم
    </label> <input class="" type="number" name="number" placeholder="" />

</div>
<div>
    <label for="number">
    عدد الركاب
    </label> <input class="" type="number" name="all_rider_numbers" placeholder="" />

</div>

                <input type="submit" class="button  " value="ADD">

            </form>
</main>
           
