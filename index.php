<?php
require 'bootstrap.php';
include 'includes/header.php';
?>
    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <!-- Blog Entries Column -->
            <div class="col-md-8">
                <h1 class="page-header">
                    B-logger
                    <small>Express yourself</small>
                </h1>
                <!-- Error Message -->
                <div class='alert alert-info'>
                    <p class='text-center'><?php include 'loadpost.php'; ?></p>
                </div>
                <!-- Blog Post -->
                <div id="index_blog_posts"></div>
            </div><!-- / blog entries column -->
            <?php include 'includes/sidebar.php'; ?>
        </div>
        <!-- /.row -->
        <hr>
<?php include 'includes/footer.php'; ?>
