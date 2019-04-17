<?php include("includes/header.php"); ?>

<?php if(!$session->is_signed_in()){ redirect("login.php");} ?>

        <!-- Navigation -->
<?php include("includes/admin_navigation.php"); ?>


        <div id="page-wrapper">

        <?php include("includes/admin_content.php"); ?>

            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

  <?php include("includes/footer.php"); ?>