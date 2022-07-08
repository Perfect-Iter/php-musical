<?php
   $this->view("header");
?>

<section class="content">

    <div class="login-holder">
        <center><img class="" style="width: 300px;" src="http://localhost/musixx/public/assets/img/logo.png" alt=""></center>
        <h2>Login</h2>
        <form action="" method="post">
            <input class="my-1 form-control" type="email" name="email" id="email" placeholder="Email">
            <input class="my-1 form-control" type="password" name="password" id="password" placeholder="Password">

            <button type="submit" class="my-1 btn bg-blue">Login</button>
        </form>
    </div>

</section>


<?php
   $this->view("footer");
?>