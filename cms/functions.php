<?php

	//  Check MySql Querry
	function querryCheck($myQuerry){
        global $connection;
        if (!$myQuerry) {
                die("Query FAILED " . mysqli_error($connection));
            }
    }

    // Query all the posts
    function queryAllPosts(){
        global $connection;
        $query = "SELECT * FROM posts";
        $select_all_posts = mysqli_query($connection,$query);

        querryCheck($select_all_posts);

        while($row = mysqli_fetch_assoc($select_all_posts)){
            $post_id = $row['post_id']; 
            $post_category_id = $row['post_category_id']; 
            $post_title = $row['post_title']; 
            $post_author = $row['post_author']; 
            $post_date = $row['post_date']; 
            $post_image = $row['post_image']; 
            $post_content = $row['post_content']; 
            $post_content = mb_substr($post_content, 0, 200);
            $post_tags = $row['post_tags'];
            $post_status = $row['post_status'];
            $post_comment_count = $row['post_comment_count'];
            
            $rows[] = compact('post_id','post_status','post_title','post_content','post_category_id','post_author','post_tags','post_image','post_date','post_comment_count');
            
        }
             return $rows;       
     }


	// Sort Array
	function arraySort($array, $on, $order=SORT_ASC){
		$new_array = array();
		$sortable_array = array();

		if (count($array) > 0) {
		    foreach ($array as $k => $v) {
		        if (is_array($v)) {
		            foreach ($v as $k2 => $v2) {
		                if ($k2 == $on) {
		                    $sortable_array[$k] = $v2;
		                }
	           		}
	        	} else {
	            $sortable_array[$k] = $v;
	        	}
	    	}

		    switch ($order) {
		        case SORT_ASC:
		            asort($sortable_array);
		        break;
		        case SORT_DESC:
		            arsort($sortable_array);
		        break;
		    }

		    foreach ($sortable_array as $k => $v) {
		        $new_array[$k] = $array[$k];
		    }
		}

		return $new_array;
	}


    // Display All Posts
    function displayAllPosts(){

        $new_array = queryAllPosts();
        $new_array = arraySort($new_array, 'post_date', SORT_DESC);
        foreach ($new_array as $key => $value) {
                echo("<!-- Blog Post --> ");
                    echo "<h2>";
                        echo "<a href='#'>{$value['post_title']}</a>";
                    echo "</h2>";
                    echo "<p class='lead'>";
                        echo "by <a href='index.php'>{$value['post_author']}</a>";
                    echo "</p>";
                    echo "<p><span class='glyphicon glyphicon-time'></span> Posted on {$value['post_date']}</p>";
                    echo "<hr>";
                    echo "<img class='img-responsive' src='images/{$value['post_image']}'>";
                    echo "<hr>";
                    echo "<p>{$value['post_content']} .....</p>";
                    echo "<a class='btn btn-primary' href='#''>Read More <span class='glyphicon glyphicon-chevron-right'></span></a>";

                    echo "<hr>";

        }


    }




























































?>