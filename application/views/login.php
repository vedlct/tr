<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Login</title>




    <link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css">




</head>

<body>

<div class="wrapper">
    <div class="container">
        <h1>Transaction Record</h1>

        <form class="form" method="post" action="Welcome/logincheck">
            <input type="text" placeholder="Username" name="username">
            <input type="password" placeholder="Password" name="password">
            <input type="submit" id="login-button" name="btnLogin" value="Login"/>
        </form>
    </div>

</div>
<!--<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>-->

<script src="<?php echo base_url(); ?>js/index.js"></script>




</body>
</html>
