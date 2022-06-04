<?php 

session_start();
include('includes/header.php');
include('authentication.php');

?>

<div class="container-fluid px-4">
        <h1 class="mt-4">Users</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
            <li class="breadcrumb-item">Users</li>
        </ol>
        <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Edit User
                    <a href="view-register.php" class="btn btn-danger float-end"> 
                            Back
                        </a>
                    </h4>
                    
                </div>
                <div class="card-body">

                        <?php
                        
                        if(isset($_GET['id']))
                        {
                            $user_id = $_GET['id'];
                            $users = "SELECT * FROM users WHERE user_id='$user_id' ";
                            $users_run = mysqli_query($db, $users);

                            if(mysqli_num_rows($users_run) > 0)
                            {
                                foreach($users_run as $user)
                                {
                                ?>

                            <form action="code.php" method="POST">
                                <input type="hidden" name="user_id" value="<?= $user['user_id'];?>">

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="">First name</label>
                                        <input type="text" name="fname" value="<?= $user['fname'];?>" class="form-control">
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="">Last name</label>
                                        <input type="text" name="lname" value="<?= $user['lname'];?>" class="form-control">
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="">Number</label>
                                        <input type="text" name="number" value="<?= $user['number'];?>" class="form-control">
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="">Email</label>
                                        <input type="text" name="email" value="<?= $user['email'];?>" class="form-control">
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="">Address</label>
                                        <input type="text" name="address" value="<?= $user['address'];?>" class="form-control">
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="">Password</label>
                                        <input type="text" name="password" value="<?= $user['password'];?>"class="form-control">
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="">Role as</label>
                                        <select name="role_as" required class="form-control">
                                            <option value="">--Select Role--</option>
                                            <option value="1" <?= $user['role_as'] == '1' ? 'selected' : '' ?> >Admin</option>
                                            <option value="0"<?= $user['role_as'] == '0' ? 'selected' : '' ?> >User</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">Status</label> <br/>
                                        
                                        <input type="checkbox" name="user_status" <?= $user['user_status'] == '1' ? 'checked' : '' ?> width="70px" height="70px"/>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <button type="submit" name="update_user" class="btn btn-primary">Update User</button>
                                    </div>
                                </div>
                            </form>

                                <?php
                                }
                            }
                            else
                            {
                                ?>
                                <h4> No record Found</h4>
                                <?php
                            }

                        }

                        ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
include('includes/footer.php');
include('includes/scripts.php');


?>