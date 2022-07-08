<?php 
   $this->view("admin/admin-header");
?>

<?php
    $action = strtolower($data['action']);
?>

    <section class="admin-content" style="min-height: 400px;">

        <div class="login-holder">
            <?php if($action == 'add'): ?>
                <div class="" style="max-width: 500px; margin: auto">
                    <form action="" method="post">
                        <h3>Add New User</h3>
                        <input class="form-control my-1" type="text" name="username" id="username" placeholder="Username">
                        
                        <?php if(!empty($errors['username'])):?>
                            <small class="error"><?=$errors['username']?></small>
                        <?php endif;?>

                        <input class="form-control my-1" type="email" name="email" id="email" placeholder="Email">
                        
                        <?php if(!empty($errors['email'])):?>
                            <small class="error"><?=$errors['email']?></small>
                        <?php endif;?>
                        
                        <select name="role" id="role" class="form-control my-1">
                            <option value="">--Select Role--</option>
                            <option value="">User</option>
                            <option value="">Admin</option>
                        </select>
                        
                        <?php if(!empty($errors['role'])):?>
                            <small class="error"><?=$errors['role']?></small>
                        <?php endif;?>
                        
                        <input class="form-control my-1" type="password" name="password" id="password" placeholder="Password">
                        
                        <?php if(!empty($errors['password'])):?>
                            <small class="error"><?=$errors['password']?></small>
                        <?php endif;?>
                        
                        <input class="form-control my-1" type="text" name="confirm_password" id="confirm_password" placeholder="Confirm Password">
                        
                        <?php if(!empty($errors['confirm_password'])):?>
                            <small class="error"><?=$errors['confirm_password']?></small>
                        <?php endif;?>

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