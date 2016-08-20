<?php include "includes/header.php"             /* Include Header */ ?> 
<?php include "includes/nav.php"                /* Include Navigation */ ?> 
        

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header">
                            View Posts:
                            <small> Here you can View, Add, Update and Delete Posts</small>
                        </h3>
                        
                        <!-- Display All Posts -->
                        <table class="table table-striped table-bordered table-hover top3">
                                <thead>
                                    <tr>
                                        <th class='hide-m'>ID</th>
                                        <th>Title</th>
                                        <th>Author</th>
                                        <th class='hide-m'>Category</th>
                                        <th class='hide-m'>Image</th>
                                        <th class='hide-m'>Post Excerpt</th>
                                        <th class='hide-m'>Tags</th>
                                        <th class='hide-m'>Date</th>
                                        <th>Status</th>
                                        <th class='hide-m'>Comments</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php viewPosts();       //Display all posts ?>
                                </tbody>
                            </table>                
                                               
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

<?php include "includes/footer.php"                /* Include footer */ ?> 
