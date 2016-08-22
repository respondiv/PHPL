<?php

	// Add New Category
	function addCategories(){
		global $connection;
		 if (isset($_POST['submit'])) {
            $cat_title = $_POST['cat_title'];

            if ($cat_title =="" || empty($cat_title)) {
                echo "<div class='alert alert-danger'>";
                echo "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
                echo "Please Enter Category Name";
                echo "</div>";
            }
            else{
                $query = "INSERT INTO categories(cat_title) ";
                $query .= "VALUE('{$cat_title}') ";

                $create_category = mysqli_query($connection, $query);
            
                // Check if the query is good
                querryCheck($create_category);
            }
        }
	}
	


	// Update Category: 
	function updateCategory(){
		global $connection;
        global $cat_title;
		//Step - 1: First Display the edit box with category name to make changes
		if (isset($_GET['edit'])) {
		    $cat_id_update = $_GET['edit'];
		    $query = "SELECT * FROM categories WHERE cat_id = $cat_id_update ";
		    $edit_category = mysqli_query($connection,$query);

		    // Check if the query is good
            querryCheck($edit_category);

		    while($row = mysqli_fetch_assoc($edit_category)){
	        $cat_id = $row['cat_id']; 
	        $cat_title = $row['cat_title'];

	    	}

		} 

		// Step - 2: When Update button is clicked, update the category name
		if (isset($_POST['update'])) {
		    $cat_title_update = $_POST['cat_title_update'];
		    $query = "UPDATE categories SET cat_title = '{$cat_title_update}' WHERE cat_id = {$cat_id_update} ";
		    $update_category = mysqli_query($connection, $query);
		    // Check if the query is good
            querryCheck($update_category);
            header("Location: categories.php");
		}
	}


	// View Category List
	function viewCategories(){
		global $connection;
	 	$query = "SELECT * FROM categories ";
        $select_all_categories = mysqli_query($connection,$query);

        // Check if the query is good
        querryCheck($select_all_categories);

        while($row = mysqli_fetch_assoc($select_all_categories)){
            $cat_id = $row['cat_id']; 
            $cat_title = $row['cat_title'];
            echo "<tr>";
            echo "<td>{$cat_id}</td>";
            echo "<td>{$cat_title}</td>";
            echo "<td><a href='categories.php?edit={$cat_id}'>Edit </a> | ";
            echo "<a href='categories.php?delete={$cat_id}'> Delete </a></td>";
            
            echo "</tr>";
        }
    }


    //  Delete Selected Category
    function deleteCategory(){
    	global $connection;
        // Delete Selected Categories
        if (isset($_GET['delete'])) {
            
            $cat_id_delete = $_GET['delete'];
            $query = "DELETE FROM categories WHERE cat_id = {$cat_id_delete}";
            $detele_category = mysqli_query($connection, $query);
            // Check if the query is good
            querryCheck($detele_category);
            header("Location: categories.php");
        }
	}


    // Return Category name when Category ID is provided
    function categoryName($cat_id){
        global $connection;
        $query = "SELECT * FROM categories WHERE cat_id = $cat_id ";
        $category_name = mysqli_query($connection,$query);

        // Check if the query is good
        querryCheck($category_name);

        while($row = mysqli_fetch_assoc($category_name)){
        $cat_title = $row['cat_title'];
        return $cat_title;
        }

    }


    // View All Posts
    function viewPosts(){
        global $connection;
        $query = "SELECT * FROM posts";
        $select_all_posts = mysqli_query($connection,$query);

        // Check if the query is good
        querryCheck($select_all_posts);

        while($row = mysqli_fetch_assoc($select_all_posts)){
            $post_id = $row['post_id']; 
            $post_title = $row['post_title'];
            $post_author = $row['post_author']; 
            $post_category_id = $row['post_category_id'];
            $post_image = $row['post_image']; 
            $post_content = $row['post_content'];
            $post_content = mb_substr($post_content, 0, 25);
            $post_tags = $row['post_tags']; 
            $post_date = $row['post_date'];
            $post_status = $row['post_status']; 
            $post_comment_count = $row['post_comment_count'];

            $category_name = categoryName($post_category_id);

            echo "<tr>";
            echo "<td class='hide-m'>{$post_id}</td>";
            echo "<td>{$post_title}</td>";
            echo "<td>{$post_author}</td>";
            echo "<td class='hide-m'>{$category_name}</td>";
            echo "<td class='hide-m'><img src='../images/{$post_image}' width='90em'></td>";
            echo "<td class='hide-m'>{$post_content}...</td>";
            echo "<td class='hide-m'>{$post_tags}</td>";
            echo "<td class='hide-m'>{$post_date}</td>";
            echo "<td>{$post_status}</td>";
            echo "<td class='hide-m'>{$post_comment_count}</td>";
            echo "<td><a href='posts.php?source=edit_post&post_id={$post_id}'> Edit</a> | ";
            echo "<a href='posts.php?delete={$post_id}'> Delete </a></td>";
            
            echo "</tr>";
        }
    }


    // Add New Posts
    function addPosts(){
        global $connection;
        if (isset($_POST['create_post'])) {
           $post_status = $_POST['post_status'];
           $post_title = $_POST['post_title'];
           $post_content = $_POST['post_content'];
           $post_category_id = $_POST['post_category_id'];
           $post_author = $_POST['post_author'];
           $post_tags = $_POST['post_tags'];
           $post_image = basename($_FILES['post_image']['name']);
           $post_image_temp = $_FILES['post_image']['tmp_name'];
           $post_date_if_empty = date('d-m-y');               // this format's the date into MySQL acceptable format
           $post_date = $_POST['post_date'];            
           $post_comment_count = 4;

           // move uploaded file from temp location to images folder of CMS
           move_uploaded_file($post_image_temp, "../images/{$post_image}");

           if (empty($post_date)) {     // If $post_date is empty, set current date as $post_date
               $query = "INSERT INTO posts(post_category_id, post_title, post_author, post_date, post_image, post_content, post_tags, post_status, post_comment_count) ";
               $query .= "VALUES({$post_category_id}, '{$post_title}', '{$post_author}', now(), '{$post_image}', '{$post_content}', '{$post_tags}', '{$post_status}', {$post_comment_count}) ";  
           }
           else{
               $query = "INSERT INTO posts(post_category_id, post_title, post_author, post_date, post_image, post_content, post_tags, post_status, post_comment_count) ";
               $query .= "VALUES({$post_category_id}, '{$post_title}', '{$post_author}', '{$post_date}', '{$post_image}', '{$post_content}', '{$post_tags}', '{$post_status}', {$post_comment_count}) ";
            }

           $add_new_post = mysqli_query($connection,$query);

           // Check if the query is good
           querryCheck($add_new_post);

           $post_id = mysqli_insert_id($connection);

           header("Location: posts.php?source=edit_post&post_id={$post_id}");

        }
    }


    // Delete Posts
    function deletePosts(){
        global $connection;
        if (isset($_GET['delete'])) {
            $delete_post_id = $_GET['delete'];
            $query = "DELETE FROM posts WHERE post_id = {$delete_post_id} ";
            $delete_selected_post = mysqli_query($connection,$query);
            // Check if the query is good
           querryCheck($delete_selected_post);
           header("Location: posts.php");

        }
    }


    // Edit Posts

    // Step 1: First Display the edit page with existing content to make changes
    function editPostsStep1(){
        global $connection;
        if (isset($_GET['post_id'])) {
            $post_id_update = $_GET['post_id'];
            $query = "SELECT * FROM posts WHERE post_id = $post_id_update ";
            $edit_post_by_id = mysqli_query($connection, $query);

            // Check if the query is good
            querryCheck($edit_post_by_id);

            while($row = mysqli_fetch_assoc($edit_post_by_id)){
                $post_id = $row['post_id'];
                $post_status = $row['post_status'];
                $post_title = $row['post_title'];
                $post_content = $row['post_content'];
                $post_category_id = $row['post_category_id'];
                $post_author = $row['post_author'];
                $post_tags = $row['post_tags'];
                $post_image_current = $row['post_image'];
                $post_date = $row['post_date'];            
                $post_comment_count = $row['post_comment_count'];
                return compact('post_id','post_status','post_title','post_content','post_category_id','post_author','post_tags','post_image_current','post_date','post_comment_count');                              
            }
        }

    }

    // Step 2: Update the entered post content when Update button is pressed
    function editPostsStep2(){
        global $connection;

        // retriving couple values from editPostsStep1() to resuse here 
        $get_val = editPostsStep1();
        $post_id = $get_val['post_id'];
        $post_image_current = $get_val['post_image_current'];
       
        if (isset($_POST['update_post'])) {
            $post_id = $post_id;
            $post_status = $_POST['post_status'];
            $post_title = $_POST['post_title'];
            $post_content = $_POST['post_content'];
            $post_category_id = $_POST['post_category_id'];
            $post_author = $_POST['post_author'];
            $post_tags = $_POST['post_tags'];
            $post_image = basename($_FILES['post_image']['name']);
            $post_image_temp = $_FILES['post_image']['tmp_name'];
            $post_date = $_POST['post_date'];
            $post_date_if_empty = date('d-m-y');        // this format's the date into MySQL acceptable format

            if ($post_image_temp = "" || empty($post_image_temp)) {
                $post_image = $post_image_current; 
            }else{
                $post_image = $post_image;
            }

            // move uploaded file from temp location to images folder of CMS
            move_uploaded_file($post_image_temp, "../images/{$post_image}");

            $query = "UPDATE posts SET ";
            $query .= "post_status = '{$post_status}', ";
            $query .= "post_title = '{$post_title}', ";
            $query .= "post_content = '{$post_content}', ";
            $query .= "post_category_id = '{$post_category_id}', ";
            $query .= "post_author = '{$post_author}', ";
            $query .= "post_tags = '{$post_tags}', ";
            $query .=  "post_image = '{$post_image}', ";
            
            // adjust query depending upon the $post_date
            if (empty($post_date)) {    // If $post_date is empty, set current date as $post_date
                $query .= "post_date = now() ";
            }
            else{
                $query .= "post_date = '{$post_date}' "; 
            }

            $query .= "WHERE post_id = {$post_id} ";

            $update_post = mysqli_query($connection, $query);
            // Check if the query is good
            querryCheck($update_post);

            header("Location: posts.php?source=edit_post&post_id={$post_id}");
        }
    }
    

     // Select Categories Dynamically for Add / Edit Posts
    function selectCategories(){
        global $connection;
        $query = "SELECT * FROM categories ";
        $select_categories = mysqli_query($connection,$query);

        // Check if the query is good
        querryCheck($select_categories);


        while($row = mysqli_fetch_assoc($select_categories)){
            $cat_id = $row['cat_id']; 
            $cat_title = $row['cat_title'];

             // retriving current post_category_id. 
            $get_val = editPostsStep1();
            $post_category_id = $get_val['post_category_id'];

            if ($cat_id == $post_category_id) {             // if editing an existing post, make the existing post category selected by default
                echo "<option value='{$cat_id}' selected>{$cat_title}</option>";
            }
            else{       // display the rest (all) of the post category in list when adding / editing post
                echo "<option value='{$cat_id}'>{$cat_title}</option>";
            }
        }

    }




    // Display different CRUD pages / forms in posts.php depending upon user's interaction
    function diffCrudInPosts (){

        //  get the value from URL to check what user's want to do
        if (isset($_GET['source'])) {
            $source = $_GET['source'];
        }
        else{
            $source = "";
        }

        // Check various Case and display the correct CRUD page request 

        switch ($source) {
            case 'add_post':
                include "includes/add_posts.php";      // Include add_posts
                break;

            case 'edit_post':
                include "includes/edit_posts.php";      // Include edit_posts
                break;
            
            default:
                include "includes/view_all_posts.php";      // Include view_all_posts by default
                break;
        }


    }


    // Check Query and display a meaningfull error message if there is an error.
    function querryCheck($myQuerry){
        global $connection;
        if (!$myQuerry) {
                die("Query FAILED " . mysqli_error($connection));
            }
    }












?>