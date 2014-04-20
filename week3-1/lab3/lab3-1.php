<!DOCTYPE html>
<!--
Using PHP try to see how you would solve the issue of putting an error class
into each input.  I created the class for you, and the solution is solved
but in the refactoring phase there has to be a better way.  Also make sure
to populate the post values back into the field. 

Goals:
1.  Re-populate post values into the input fields.
2.  Put the "inputerror" class into the input form fields if 
    they are not populated on a post.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            .error {
                border: 1px solid red;
                padding: 0.2em;
                color: red;
            }
            
            .inputerror {border: 1px solid red;}
        </style>
    </head>
    <body>
        <?php
        // put your code here
        
            if ( !empty($_POST)) {
                
                $errorMessages = array(
                  "email" => 'email is invalid',  
                  "username" => 'username is not found',  
                  "password" => 'password does not work',  
                );
                
                $email = filter_input(INPUT_POST, 'email');
                $username = filter_input(INPUT_POST, 'username');
                $password = filter_input(INPUT_POST, 'password');


                if (!empty($email)) {
                    $errorMessages['email'] = '';
                }/* else {
                    echo '<style> input[name=email] {border: 1px solid red;}</style>';
                }*/
                if (!empty($username)) {
                    $errorMessages['username'] = '';
                }/* else {
                    echo '<style> input[name=username] {border: 1px solid red;}</style>';
                }*/
                if (!empty($password)) {
                    $errorMessages['password'] = '';
                }/*else {
                    echo '<style> input[name=password] {border: 1px solid red;}</style>';
                }*/
            
             }
        ?>
        
        
        <h2> My Form Demo </h2>
       <form name="mainform" action="#" method="post">            
           
           Email: <input type="text" name="email" class="<?php if ( !empty($_POST)){ 
                                                                    if(!empty($email)){} 
                                                                    else echo inputerror;}?>" 
                                                  value="<?php if(!empty($_POST))
                                                                    echo $_POST["email"]; ?>"/> <br /> 
            
            <?php 
            if ( !empty($errorMessages["email"]) ) 
                echo '<p class="error">',$errorMessages["email"], '</p>' ;
            ?>
            Username: <input type="text" name="username" class="<?php if ( !empty($_POST)){ 
                                                                            if(!empty($username)){} 
                                                                            else echo inputerror;}?>" 
                                                         value="<?php if(!empty($_POST))
                                                                            echo $_POST["username"]; ?>" />  <br /> 
            
            <?php 
            if ( !empty($errorMessages["username"]) )
                echo '<p class="error">',$errorMessages["username"], '</p>';                
            ?>   
            
            Password: <input type="password" name="password" class="<?php if ( !empty($_POST)){ 
                                                                                if(!empty($email)){} 
                                                                                else echo inputerror;}?>" /> <br />
            <?php 
            if ( !empty($errorMessages["password"]) )
                echo '<p class="error">',$errorMessages["password"], '</p>';                
            ?>
            <br />
            <input type="submit" value="Submit" />                        
        </form>
    </body>
</html>