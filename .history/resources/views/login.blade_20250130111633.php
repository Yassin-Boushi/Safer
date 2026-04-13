<x-nav />
<main>
<div class="nav">
                <div>LOGIN</div>
        </div>

            <form class="form-add" action="account/login" method="post" enctype="multipart/form-data" >
            @csrf
             <label for="email">email</label>
             <input class="form-styling" type="text" name="email" placeholder="" />
             <label for="password">password </label> <input class="form-styling" type="password" name="password" placeholder="" />
           <br>
            <input type="submit" style="background-color: rgb(247, 171, 30) " class=" btn-signup " value="login">



            </form>

            </main>
