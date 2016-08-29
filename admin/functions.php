<?php

function confirmQuery($result){

    global $connection;
    if(!$result){

        die("query failed ." . mysqli_error($connection));
    }


}



function addPost(){
    global $connection;
    
    if(isset($_POST['create_post'])){

        $post_title = $_POST['title'];
        $post_author = $_POST['author'];
        $post_date = date('d-m-y');
        $post_content = $_POST['post_content'];



        $query = "INSERT INTO posts(post_title, post_author, post_date, post_content) ";
        $query .= "VALUES('{$post_title}','{$post_author}',now(),'{$post_content}' )";

        $create_post_query = mysqli_query($connection,$query);
        confirmQuery($create_post_query);

    }
    
}

function addUser(){
    
    global $connection;
    if(isset($_POST['create_user'])){


        $user_firstname = $_POST['user_firstname'];
        $user_lastname = $_POST['user_lastname'];
        $user_role = $_POST['user_role'];
        $username = $_POST['username'];
        $user_email = $_POST['user_email'];
        $user_password = $_POST['user_password'];
    
        $query = "INSERT INTO users(user_firstname, user_lastname, user_role, username, user_email, user_password) ";
        $query .= "VALUES('{$user_firstname}','{$user_lastname}','{$user_role}','{$username}','{$user_email}','{$user_password}' )";

        $create_user_query = mysqli_query($connection,$query);
        confirmQuery($create_user_query);

    }
    
    
}



?>