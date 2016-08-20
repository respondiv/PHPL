<!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

              <!-- Blog Search Well -->
                <div class="well">
                    <h4>Blog Search</h4>
                    <form action="search.php" method="post">
                    <div class="input-group">
                        <input type="text" class="form-control" name="search">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="submit" name="submit">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>
                    </form> 
                </div>


                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Blog Categories</h4>
                    <div class="row">
                                <?php
                                    
                                    // will limit the # of category returs from query
                                    // $query = "SELECT * FROM categories LIMIT 5";

                                    $query = "SELECT * FROM categories";
                                    $select_all_categories = mysqli_query($connection,$query);

                                    if (!$select_all_categories) {
                                        die("Query FAILED " . mysqli_error($connection));
                                    }
                                    
                                    // count total number of category, find if it's odd or even number and determine the column break point (number)
                                    $count_cat = mysqli_num_rows($select_all_categories);
                                    if($count_cat % 2 == 0){
                                        $col_break = ($count_cat / 2) + 1;
                                    }
                                    else{
                                        $col_break = intdiv($count_cat, 2) + 2;
                                    }
                                   
                                   // countdown to  break the column
                                    $i = 1;           

                                    // print categories in two column, if odd # of category, the first column will have 1 more row, if even, both have same # or row.
                                    while($row = mysqli_fetch_assoc($select_all_categories)){
                                        $cat_title = $row['cat_title']; 
                                        switch($i){
                                            case 1:
                                ?>
                                                <div class="col-lg-6">
                                                    <ul class="list-unstyled">
                                <?php
                                                break;
                                            case $col_break:
                                ?>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6">
                                                    <ul class="list-unstyled">
                                <?php
                                                break;
                                        }                                    

                                        echo "<li><a href='#''>{$cat_title}</a></li>";
                                        $i++;
                                    }


                                ?>
                                                    </ul>
                                                </div>

                    </div>
                    <!-- /.row -->
                </div>


                <!-- Side Widget Well -->
                <div class="well">
                    <h4>Side Widget Well</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                </div>

                
                <?php 

                // if you want to add more widgets then it's better to separate them in widgets.php for code readibility.

                // include "includes/Widget.php"                /* Include widget */ 
                
                ?> 

            </div>