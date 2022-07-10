<?php 
   $this->view("admin/admin-header");
?>

<?php
    $action = strtolower($data['action']);

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $user = $this->loadModel("user");
        $user->addUser($_POST);
        //show($_POST);
    }
?>

    <section class="admin-content" style="min-height: 400px;">

        <div class="login-holder">
            <?php if($action == 'add'): ?>
                <div class="" style="max-width: 500px; margin: auto">
                    <form action="" method="post">
                        <h3>Add New User</h3>
                        
                        <div class="" style="margin-top: 10px; color: red;">
                            <?php
                                check_error_message();
                            ?>
                        </div>
                        <input class="form-control my-1" type="text" value="<?=set_value('username')?>" name="username" id="username" placeholder="Username">


                        <input class="form-control my-1" value="<?=set_value('email')?>"" type="email" name="email" id="email" placeholder="Email">
                    
                        <select name="role" id="role" class="form-control my-1">
                            <option value="">--Select Role--</option>
                            <option value="user">User</option>
                            <option value="admin">Admin</option>
                        </select>
                
                        
                        <input class="form-control my-1" type="password" value="<?=set_value('password')?>"" name="password" id="password" placeholder="Password">
                        

                        
                        <input class="form-control my-1" type="password" value="<?=set_value('confirm_password')?>"" name="confirm_password" id="confirm_password" placeholder="Confirm Password">
                        

                        <button type="submit" class="btn bg-orange">Create</button>
                        <a href="http://localhost/musixx/public/admin/users">
                            <button type="button" class="btn bg-red float-end">Back</button>
                        </a>
                    </form>
                </div>

            <?php elseif($action == 'edit'): ?>
                <p>EDIT</p>
            <?php elseif($action == 'delete'): ?>
                <p>DELETE</p>
            <?php elseif($action == ''): ?>
                <h3>
                    Users 
                    <a href="http://localhost/musixx/public/admin/users/add">
                        <button class="float-end btn bg-purple">Add New</button></h3>
                    </a>
                <table class="table">
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        <td>ID</td>
                        <td>Username</td>
                        <td>Email</td>
                        <td>Role</td>
                        <td>Date</td>
                        <td>Action</td>
                    </tr>
                </table>
            <?php else: ?>
                <h1>ERROR 404 PAGE NOT FOUND</h1>
            <?php endif; ?>
        </div>

    </section>


<?php
   $this->view("footer");
?>