<?php 

session_start();

include('includes/header.php');
include('authentication.php');

?>

<div class="container-fluid px-4">
        <h1 class="mt-4">Users</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Menu</li>
            <li class="breadcrumb-item">Users</li>
        </ol>
        <div class="row">

        <div class="col-md-12">

            <?php include('message.php'); ?>

            <div class="card">
                <div class="card-header">
                    <h4>
                        Registered User 
                     <a href="register-add.php" class="btn btn-primary float-end"><i class="fa fa-add fa-fw"></i>
                         Add User
                    </a>
                    </h4>
                        
                </div>
                <div class="card-body">

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Number</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Password</th>
                                <th>Points</th>
                                <th>Roles</th>
                                <th>Created Date</th>
                                <th>Status</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            <?php
                                $query = "SELECT * FROM users";
                                $query_run = mysqli_query($db, $query);

                                if(mysqli_num_rows($query_run) > 0)
                                {
                                    foreach($query_run as $row)
                                    {
                                        ?>
                                        <tr>
                                            <td><?= $row['user_id']; ?></td>
                                            <td><?= $row['fname']; ?></td>
                                            <td><?= $row['lname']; ?></td>
                                            <td><?= $row['number']; ?></td>
                                            <td><?= $row['email']; ?></td>
                                            <td style="word-break: break-all;"><?= $row['address']; ?></td>
                                            <td><?= $row['password']; ?></td>
                                            <td><?= $row['user_points']; ?></td>
                                            <td>
                                                <?php
                                                if($row['role_as'] == '1')
                                                {
                                                    echo 'Admin';    
                                                }
                                                elseif($row['role_as'] == '0')
                                                {
                                                    echo 'User'; 
                                                }
                                                ?>
                                            </td>
                                            
                                            <td> <?= $row['created_at']; ?> </td>
                                            <td>
                                                <?php
                                                if($row['user_status'] == '1')
                                                {
                                                    echo 'Active';    
                                                }
                                                elseif($row['user_status'] == '0')
                                                {
                                                    echo 'Inactive'; 
                                                }
                                                ?>
                                            </td>
                                            <td><a href="register-edit.php?id=<?= $row['user_id']; ?>" class="btn btn-success"><i class="fa fa-edit fa-fw"></i>Edit</a></td>
                                            <td>
                                                <form action="code.php" method="POST">
                                                <button type="submit" name="user_delete" value="<?= $row['user_id'];?>" class="btn btn-danger"><i class="fa fa-trash fa-fw"></i>Delete</button>
                                                </form>
                                            </td>
                                            
                                        </tr>
                                        <?php
                                    }
                                    
                                }
                                else
                                {
                                ?>
                                    <tr>
                                        <td colspan="6">No Record Found</td>
                                    </tr>
                                <?php
                                }
                            ?>
                          
                        </thead>

                    </table>

                </div>
            </div>
        </div>
    </div>
</div>

<?php 
include('includes/footer.php');
include('includes/scripts.php');


?>