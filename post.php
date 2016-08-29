<?php include "includes/db.php";?>
<?php include "includes/header.php";?>


<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <?php 
            
            if(isset($_GET['p_id'])){
                $the_post_id = $_GET['p_id'];
            }

            $query= "SELECT * FROM posts WHERE post_id = $the_post_id ";
            $select_posts = mysqli_query($connection,$query);
            while($row = mysqli_fetch_assoc($select_posts)){
                $post_title = $row ['post_title'];
                $post_author = $row ['post_author'];
                $post_date = $row ['post_date'];
                $post_content = $row ['post_content'];


            ?> 

            <hr>
            <div class="post-preview">
                <a href="post.html">
                    <h2 class="post-title"><?php echo $post_title;?></h2>
                    <?php echo $post_content;?>
                </a>
                <p class="post-meta">Posted by <a href="#"><?php echo $post_author. " "; ?></a><?php echo "Date: ".$post_date;?></p>
            </div>


            <?php
            } ?>

            <!-- Pager -->
            <ul class="pager">
                <li class="next">
                    <a href="index.php">All Posts &rarr;</a>
                </li>
            </ul>
        </div>
    </div>
</div>

<hr>

<!-- Footer -->
<?php include "includes/footer.php";?>