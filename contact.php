<?php include "includes/header.php";?>
    
    
<?php

if(isset($_POST['submit'])){



    $to = "primer@gmail.com";
    echo $subject = wordwrap($_POST['subject'], 70);
    echo $header = "From: " . $_POST['email'];
    echo $body = $_POST['body'];

    echo mail($to,$subject,$body,$header);




}

?>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <p>Want to get in touch with me? Fill out the form below to send me a message and I will try to get back to you within 24 hours!</p>
               
                <form action = "" name="sentMessage" id="contactForm"  method="post">
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Subject</label>
                            <input type="text" class="form-control" name="subject" placeholder="Subject" id="name" >
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Email Address</label>
                            <input type="email" name="email" class="form-control" placeholder="Email Address" id="email" >
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>

                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Message</label>
                            <textarea rows="5" name="body" class="form-control" placeholder="Message" id="message"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br>
                    
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <button type="submit" name="submit" class="btn btn-default">Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <hr>

    <!-- Footer -->
    <?php include "includes/footer.php";?>