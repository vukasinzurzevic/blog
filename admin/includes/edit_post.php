<?php
if(isset($_GET['p_id'])){

    $the_post_id =  $_GET['p_id'];

}

$query= "SELECT * FROM posts WHERE post_id = {$the_post_id} ";
$select_posts_by_id = mysqli_query($connection,$query);
while($row = mysqli_fetch_assoc($select_posts_by_id)){
    $post_id = $row ['post_id'];
    $post_title = $row ['post_title'];
    $post_author = $row ['post_author'];
    $post_date = $row ['post_date'];
    $post_content = $row ['post_content'];



}


if(isset($_POST['update_post'])){

    $post_title = $_POST['title'];
    $post_author = $_POST['author'];
    $post_date = date('d-m-y');
    $post_content = $_POST['post_content'];


    $query = "UPDATE posts SET post_title = '{$post_title}', post_author = '{$post_author}', ";
    $query .= "post_date = now(), post_content = '{$post_content}' WHERE post_id= '{$the_post_id}' ";
    $update_query = mysqli_query($connection,$query);
    


}

?>                 


<form action="" method="post" enctype="multipart/form-data">    


    <div class="form-group">
        <label for="title">Post Title</label>
        <input value = "<?php echo $post_title; ?>" type="text" class="form-control" name="title">
    </div>

    <div class="form-group">
        <label for="author">Author</label>
        <input value = "<?php echo $post_author; ?>" type="text" class="form-control" name="author">
    </div>
    


    <div class="form-group">
        <label for="post_content">Post Content</label>
        <textarea class="form-control "name="post_content" id="" cols="30" rows="10">
            <?php echo $post_content; ?>
        </textarea>
    </div>


    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="update_post" value="Update Post">
    </div>


</form>