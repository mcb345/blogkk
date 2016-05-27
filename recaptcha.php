<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body>
    <h1>Google reCAPTHA Demo</h1>
    <form action="" method="post">
        <input type="text" name="nama">
        <div class="g-recaptcha" data-sitekey="6Lf44xETAAAAAKtqJIJAjLQSKbXUMcW5irKJHL-V"></div>
        <input type="submit" name="submit" value="Submit">
        <br>
        <br>
    </form>
    <?php
        
        if(isset($_POST['g-recaptcha-response']) && isset($_POST['nama'])){
        var_dump($_POST);
            
        $captcha=$_POST['g-recaptcha-response'];
        $nama =  $_POST['nama'];   
        $secretKey = "6Lf44xETAAAAAEKEG_7Fy_IqkbvFzKOqd4gpkS4m";
            
        $ip = $_SERVER['REMOTE_ADDR'];
            
        $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
        var_dump($response);
        $responseKeys = json_decode($response,true);
        if(intval($responseKeys["success"]) !== 1) {
          echo '<h2>You are spammer !</h2>';
        } else {
          echo '<h2>Thanks for registering.</h2>';
        }
        }
        
?>
</body>

</html>