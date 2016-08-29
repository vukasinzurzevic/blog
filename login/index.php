<!--LOGIN FORMA-->
<?php include_once "../includes/db.php";?>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/main.css">
<script type="text/javascript" src="js/main.js"></script>
<!-- Pen Title-->
<div class="pen-title">
  
  <span><i class='fa fa-paint-brush'></i>  <i class='fa fa-code'></i><a href="#"></a></span>
</div>

<!-- Container-->
<div class="container-fluid">

<div class="row">
    <!-- Form Container-->

      <style type="text/css">
        .style-1 .header h1 {
          color: #33b5e5;
        }

        .style-1 .form-group input:valid,
        .style-1 .form-group input:focus {
          color: #33b5e5;
        }

        .style-1 .form-group input:valid ~ .line,
        .style-1 .form-group input:focus ~ .line {
          background: #33b5e5;
        }

        .style-1 .button {
          background: #33b5e5;
        }

      </style>
      <div style="width: 400px;" class="form style-1 col-sm-6">
        <header class="header">
          <h1 class="active">Sign In</h1>
          
        </header>
        <form class="active" action="../includes/login.php" method="post">
          <div class="form-group">
            <input type="text" id="username" name="username" placeholder="Username" required="required"/>
            <label for="username">Username</label>
            <div class="line"></div>
          </div>
          <div class="form-group">
            <input type="password" id="password" name="password" placeholder="Password" required="required"/>
            <label for="password">Password</label>
            <div class="line"></div>
          </div>
          <button class="button" name="login" type="submit">Login</button>
        </form>
        
        
</div>
      <br>
      




  </div>



