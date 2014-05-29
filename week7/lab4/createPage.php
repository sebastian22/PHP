<?php include 'dependency.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        
        Util::confirmAccess();
      
        $states = States::getStates();
        
         $address = new AddressBook();
         
         
         if ( Util::isPostRequest() ) {
              
              $AddressbookModel = new AddressbookModel($_POST);
              
              
              if ( $address->create($AddressbookModel) ) {
                  echo '<p>New Address created</p>';
              } else {
                   echo '<p>Address not created</p>';
              }
               
               
              
              //var_dump($AddressbookModel);
          }
         
                 
        ?>
        
        <form name="mainform" action="#" method="post"> 
           <fieldset>
		<legend>Create:</legend>
                <label for="name">Name:</label> 
                <input id="name" type="text" name="name" value="" /> <br />
               
                <label for="address">Address:</label> 
                <input id="address" type="text" name="address" value="" /> <br />
               
                <label for="city">City:</label> 
                <input id="city" type="text" name="city" value="" /> <br />
               
                <label for="state">State:</label> 
                <select name="state" >
                <?php
                
                foreach($states as $stateid=>$state){
                   echo'<option value="',$stateid,'">',$state,'</option>';  
                    }
                
                ?>
                </select><br />
                              
                <label for="zip">ZIP:</label> 
                <input id="zip" type="text" name="zip" value="" /> <br />
                               
                <input type="submit" value="Submit" />
                <a href="viewaddress.php">Go back to Address Book</a>
                
            </fieldset>
        </form>
        
        
    </body>
</html>