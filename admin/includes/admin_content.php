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
$sql = "SELECT * FROM users WHERE user_id = 1";
$result = $database->query($sql);
$user_found = mysqli_fetch_assoc($result);
echo $user_found['username'];


?>





    </div>
</div>
<!-- /.row -->

</div>