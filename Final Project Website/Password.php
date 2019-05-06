<?php
    $Password = 'password';     // Set your password here

    if (isset($_POST['submit_pwd'])){
        $pass = isset($_POST['passwd']) ? $_POST['passwd'] : '';

        if ($pass != $Password) {
            showForm("I'm sorry, that password is not correct");
            exit();
        }
    } else {
        showForm();
        exit();
    }

    function showForm($error="If you do not know the password, you ill need to contact Jonathon"){
        ?>
        <!DOCTYPE html>
        <html>
            <head>
                <title>Password Example</title>
                <link href="style/style.css" rel="stylesheet" type="text/css" />
            </head>
            <body>
                <div id="main">
                    <div class="caption"><?php echo $error; ?></div>
                    <div id="icon">&nbsp;</div>
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="pwd">
                    Password:
                    <table>
                        <tr><td><input class="text" name="passwd" type="password" /></td></tr>
                        <tr><td align="center"><br/>
                            <input class="text" type="submit" name="submit_pwd" value="Login"/>
                        </td></tr>
                    </table>
                    </form>
                </div>
            </body>
            <?php
    }
    ?>
    Congratulations, you are in!!! <br>
    <a href="admin.php">Click here</a> to go to the admin page.
