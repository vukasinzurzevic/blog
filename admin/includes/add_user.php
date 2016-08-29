<?php addUser();?>

<form action="" method="post" enctype="multipart/form-data">    


    <div class="form-group">
        <label for="firstname">First Name</label>
        <input type="text" class="form-control" name="user_firstname">
    </div>

    <div class="form-group">
        <label for="lastname">Last Name</label>
        <input type="text" class="form-control" name="user_lastname">
    </div>
    
    <div class = "form-group">
        <select  name = "user_role" id = "">
            <option value="subscriber">Select Option</option>
            <option value="admin">Admin</option>
            <option value="subscriber">Subscriber</option>
        </select>
    
    </div>


    
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="user_email">
    </div>
    <div class="form-group">
        <label for="email">Username</label>
        <input type="text" class="form-control" name="username">
    </div>
    
       <div class="form-group">
        <label for="email">Password</label>
        <input type="password" class="form-control" name="user_password">
    </div>
    
    
    

     <div class="form-group">
        <input class="btn btn-primary" type="submit" name="create_user" value="Add User">
     </div>


</form>