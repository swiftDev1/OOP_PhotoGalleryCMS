<div class="container-fluid">

<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            ADMIN
            <small>Subheading</small>
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
            </li>
            <li class="active">
                <i class="fa fa-file"></i> Blank Page
            </li>
        </ol>
<?php



// $found_user = User::find_user_by_id(2); 
// $user = User::instantiation($found_user);
// echo $user->username;

$users = User::find_all_users();
foreach($users as $user){
    echo $user->username. "<br>";
}








?>





    </div>
</div>
<!-- /.row -->

</div>