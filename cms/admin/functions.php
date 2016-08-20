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
            
                if (!$create_category) {
                    die('QUERY FAILED' . mysqli_error($connection));
                }
            }
        }
	}
	


	// Update Category: 
	function updateCategory(){
		global $connection;
		//Step - 1: First Display the edit box with category name to make changes
		if (isset($_GET['edit'])) {
		    $cat_id_update = $_GET['edit'];
		    $query = "SELECT * FROM categories WHERE cat_id = $cat_id_update ";
		    $delete_category = mysqli_query($connection,$query);

		    if (!$delete_category) {
		        die("Query FAILED " . mysqli_error($connection));
		    }

		    while($row = mysqli_fetch_assoc($delete_category)){
	        $cat_id = $row['cat_id']; 
	        $cat_title = $row['cat_title'];
?>

   			<input type="text" class="form-control" name="cat_title_update" value="<?php if(isset($cat_title)){echo $cat_title;} ?>">

<?php
	    	}

		}


		// Step - 2: When Update button is clicked, update the category name
		if (isset($_POST['update'])) {
		    $cat_title_update = $_POST['cat_title_update'];
		    $query = "UPDATE categories SET cat_title = '{$cat_title_update}' WHERE cat_id = {$cat_id_update}";
		    $update_category = mysqli_query($connection, $query);
		    header("Location: categories.php");
		    if (!$update_category) {
		        die("Query FAILED " . mysqli_error($connection));
		    }
		}
	}


	// View Category List
	function viewCategories(){
		global $connection;
	 	$query = "SELECT * FROM categories";
        $select_all_categories = mysqli_query($connection,$query);

        if (!$select_all_categories) {
            die("Query FAILED " . mysqli_error($connection));
        }

        while($row = mysqli_fetch_assoc($select_all_categories)){
            $cat_id = $row['cat_id']; 
            $cat_title = $row['cat_title'];
            echo "<tr>";
            echo "<td>{$cat_id}</td>";
            echo "<td>{$cat_title}</td>";
            echo "<td><a href='categories.php?delete={$cat_id}'>Delete </a> | ";
            echo "<a href='categories.php?edit={$cat_id}'> Edit</a></td>";
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
            header("Location: categories.php");
            if (!$detele_category) {
                die("Query FAILED " . mysqli_error($connection));
            }
        }
	}


    // View All Posts
    function viewPosts(){
        global $connection;
        $query = "SELECT * FROM posts";
        $select_all_posts = mysqli_query($connection,$query);

        if (!$select_all_posts) {
            die("Query FAILED " . mysqli_error($connection));
        }

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

            echo "<tr>";
            echo "<td class='hide-m'>{$post_id}</td>";
            echo "<td>{$post_title}</td>";
            echo "<td>{$post_author}</td>";
            echo "<td class='hide-m'>{$post_category_id}</td>";
            echo "<td class='hide-m'><img src='../images/{$post_image}' width='90em'></td>";
            echo "<td class='hide-m'>{$post_content}...</td>";
            echo "<td class='hide-m'>{$post_tags}</td>";
            echo "<td class='hide-m'>{$post_date}</td>";
            echo "<td>{$post_status}</td>";
            echo "<td class='hide-m'>{$post_comment_count}</td>";
            echo "</tr>";
        }
    }













?>