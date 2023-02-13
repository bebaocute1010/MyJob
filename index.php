<?php
include 'vendor/autoload.php';
use DebugBar\StandardDebugBar;

$debugbar = new StandardDebugBar();
$debugbarRenderer = $debugbar->getJavascriptRenderer();

// $debugbar["messages"]->addMessage("hello world!");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo $debugbarRenderer->renderHead() ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <?php
        require('bootstrap.php');
    ?>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript">
    </script>
    <link rel="stylesheet" href="app.css">
</head>

<body>
    <div class="container">
        <form id='form' name='form'>
            <h1>Sign Up</h1>
            <div class="mb-3">
                <label for="tbEmail" class="form-label">Email</label>
                <input type="text" class="form-control" id="tbEmail" aria-describedby="emailHelp"
                    name='email'>
            </div>

            <div class="mb-3">
                <label for="tbPassword" class="form-label">Password</label>
                <input type="password" class="form-control" id="tbPassword" name='password'>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <!-- <a class="btn btn-primary" href='http://localhost/MyJob/T2_6/AllUsers.php'>All users</a> -->
    </div>

    <script>
    $().ready(function() {
        $("#form").validate({
            onfocusout: false,
            onkeyup: false,
            rules: {
                "email": {
                    required: true,
                    email: true
                },
                "password": {
                    required: true,
                    minlength: 8
                }
            },
            messages: {
                "email": {
                    required: "Please enter your email !",
                    email: "Email not valid !"
                },
                "password": {
                    required: "Please enter your password !",
                    minlength: "Password must have at least 8 characters !"
                }
            },
            submitHandler: function(form) {
                submitForm()
            }
        });
    })
    function submitForm() {
        $.ajax({
            url: "Logic/sign_up.php",
            method: "POST",
            dataType: "json",
            data: {
                email: $("#tbEmail").val(),
                password: $("#tbPassword").val()
            },
            success: function(response) {
                alert(response.message)
            }
        })
    }
    </script>

    <?php echo $debugbarRenderer->render() ?>
</body>

</html>