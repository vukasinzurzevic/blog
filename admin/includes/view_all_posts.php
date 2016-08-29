<table class="table table-bordered table-hover">
    <thead>
        <th>Id</th>
        <th>Title</th>
        <th>Author</th>
        <th>Date</th>
        <th>Content</th>
    </thead>


    <tbody>

        <?php

        $query= "SELECT * FROM posts";
        $select_posts = mysqli_query($connection,$query);
        while($row = mysqli_fetch_assoc($select_posts)){
            $post_id = $row ['post_id'];
            $post_title = $row ['post_title'];
            $post_author = $row ['post_author'];
            $post_date = $row ['post_date'];
            $post_content = $row ['post_content'];

            echo "<tr>";
            echo "<td>$post_id</td>";
            echo "<td>$post_title</td>";
            echo "<td>$post_author</td>";
            echo "<td> $post_date</td>";
            echo "<td>$post_content</td>";
            echo "<td><a href='posts.php?source=edit_post&p_id={$post_id}'>Edit</a></td>";
            echo "<td><a href='posts.php?delete={$post_id}'>Delete</a></td>";
            echo "</tr>";

        }


        ?>                              



    </tbody>
</table>

<?php
    if(isset($_GET['delete'])){
        
        $the_post_id = $_GET['delete'];
        $query = "DELETE FROM posts WHERE post_id = {$the_post_id} ";
        $delet_query = mysqli_query($connection,$query);
    
    
    }


?>




