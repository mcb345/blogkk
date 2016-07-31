<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script>
        window.setTimeout(function() {
            $(".cm-alert").fadeTo(1000, 0).slideUp(500, function(){
                $(this).remove(); 
            });
        }, 4000);
    </script>
</head>

<body>
    <div class="error">
        <?php
    
        
        
        if(isset($_POST['submit'])){
            $username = $_POST['username'];
            $password = $_POST['password'];
            if($password=="user"&&$username=="user"){
                echo '<div class="alert alert-success cm-alert">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Login Success!</strong> You are inside the system now.
                      </div>"';
            }
            else{
                echo '<div class="alert alert-danger cm-alert">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Login Failed!</strong> Wrong username and password.
                      </div>';
            }
        }
    ?>
    </div>

    <div class="row" style="padding:20px;">
        <div class="col-md-4 col-md-offset-4">
            <form action="" method="POST" style="padding:25%;">
                <div class="form-group">
                    <label for="">Username :</label>
                    <input name="username" type="text" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Password :</label>
                    <input name="password" type="password" class="form-control" required>
                </div>
                <button type="submit" name="submit" class="btn btn-default">Login</button>
            </form>
        </div>
    </div>

    

</body>

</html>