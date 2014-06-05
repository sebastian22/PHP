<?php include 'dependency.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>SaaS Project - Login</title>
         <link rel="stylesheet" type="text/css" href="css/admin.css" />
    </head>
    <body>
        
        <?php 
        $msg = '';
        $login = new Login();
        $dataModel = new UsersModel(filter_input_array(INPUT_POST));
        var_dump($dataModel);
        
        if ( Util::isPostRequest() ) {
            $_SESSION['user_id'] = $login->checkLogin($dataModel);
            if ($_SESSION['user_id'] > 0){
                Util::redirect('admin');
            }
        }
           
          ?>
        
        <h1 id="logo"><span>&#x2728;</span>SaaS Project</h1>
        
        <fieldset>
            <legend>Login</legend>
            <p> Not a member, <a href="signup.php">Signup</a></p>

                        
            <form name="mainform" action="#" method="post">

                <label>Email:</label> <input type="text" name="email" /> <br />
                <label for="code">Password:</label> 
                <input type="password" name="password" id="code" /> <br />

                <input type="submit" value="Submit" />

            </form>
        </fieldset>
    </body>
</html>

<!-- Hosting24 Analytics Code -->
<script type="text/javascript" src="http://stats.hosting24.com/count.php"></script>
<!-- End Of Analytics Code -->