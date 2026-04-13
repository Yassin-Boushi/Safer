<x-nav />
<main>
<div class="nav">
                <div>LOGIN</div>
        </div>

            <form class="form-add" action="account/login" method="post" enctype="multipart/form-data" >
            @csrf
            <div>
                <label for="email">email</label>
                <input class="form-styling" type="text" name="email" placeholder="" />

            </div>
            <div>
                <label for="password">password </label> <input class="form-styling" type="password" name="password" placeholder="" />

            </div>
            <input type="submit" class="button  " value="login">



            </form>

            </main>
