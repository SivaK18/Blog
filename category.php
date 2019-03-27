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
                  Category
                    <small><?php   $cat1=$_GET['category']; echo $cat1;  ?></small>
                </h1>
                <!-- Error Message -->
                <div class='alert alert-info'>
                    <p class='text-center'>
                      <?php $cat=$_GET['category'];
                      include "loadcategory.php"; ?>
                    </p>

                </div>
                <!-- Blog Post -->
                <div id="category_blog_posts"></div>
            </div><!-- / blog entries column -->
            <?php include 'includes/sidebar.php'; ?>
        </div>
        <!-- /.row -->
        <hr>
 <?php include 'includes/footer.php'; ?>
