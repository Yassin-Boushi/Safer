<x-nav />
<main>
<div class="nav">
                <div>تعديل رحلة</div>
        </div>

            <form class="form-add" action="/flight/update/{{$edit['id']}}" method="post" >
                @csrf

                <div>
                    <label for="name">الاسم</label>
                    <input class="form-styling" type="text" name="name" value="{{$edit['name']}}" />

                </div>
                <div>
                    <label for="description">الوصف </label> <input class="form-styling" type="text"
                        name="description" placeholder="" value="{{$edit['description']}}"  />

                </div>
                <div>
                    <label for="desination">الوجهة </label> <input class="form-styling" type="text"
                        name="desination" value="{{$edit['desination']}}"  />

                </div>
                <div>
                    <label for="date">التاريخ</label> <input class="form-styling" type="date"
                        name="date" value="{{$edit['date']}}"  />

                </div>
                <div>

                    <label for="price">
                        السعر
                    </label> <input class="" type="number" name="price" value="{{$edit['price']}}"  />
                </div>
                <div>

                    <label for="number">
                        الرقم
                    </label> <input class="" type="number" name="number" value="{{$edit['number']}}"  />
                </div>
                <div>
                <input type="submit" class="button  " value=" تعديل الرحلة">
            </div>

            </form>
</main>
           
