<?php include "includes/db.php"                /* Include Navigation */ ?> 
<?php include "includes/header.php"             /* Include Header */ ?> 
<?php include "includes/nav.php"                /* Include Navigation */ ?> 


    

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <h1 class="page-header">
                    My First CMS
                    <small>Fully Custom Made</small>
                </h1>

                <?php

                    $query = "SELECT * FROM posts";
                    $select_all_posts = mysqli_query($connection,$query);

                    if (!$select_all_posts) {
                        die("Query FAILED " . mysqli_error($connection));
                    }

                    while($row = mysqli_fetch_assoc($select_all_posts)){
                        $post_id = $row['post_id']; 
                        $post_category_id = $row['post_category_id']; 
                        $post_title = $row['post_title']; 
                        $post_author = $row['post_author']; 
                        $post_date = $row['post_date']; 
                        $post_image = $row['post_image']; 
                        $post_content = $row['post_content']; 
                        $post_tags = $row['post_tags'];
                        $post_status = $row['post_status'];
                        $post_comment_count = $row['post_comment_count'];
                ?>    


                    <!-- Blog Post -->
                    <h2>
                        <a href="#"><?php echo $post_title ?></a>
                    </h2>
                    <p class="lead">
                        by <a href="index.php"><?php echo $post_author ?></a>
                    </p>
                    <p><span class="glyphicon glyphicon-time"></span> Posted on <?php echo $post_date ?></p>
                    <hr>
                    <img class="img-responsive" src="images/<?php echo $post_image ?>" alt="">
                    <hr>
                    <p><?php echo $post_content ?></p>
                    <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                    <hr>

                <?php } ?>


                

                
   

            </div>
            
            <?php include "includes/sidebar.php"                 /* Include sidebar */ ?> 
            

        </div>
        <!-- /.row -->

        <hr>

<?php include "includes/footer.php"                     /* Include footer */ ?> 