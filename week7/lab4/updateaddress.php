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
              
              if ( $address->update($AddressbookModel) ) {
                  echo '<p>Address updated</p>';
              } else {
                   echo '<p>Address not updated</p>';
              }
          }
         
         
         $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
         
         if ( !is_int($id) ) {
             Util::redirect('viewaddress');
         }
         
         $addressResult = $address->read($id);
          //print_r($addressResult);
          
        ?>
        
        <form name="mainform" action="#" method="post"> 
           <fieldset>
		<legend>Update:</legend>
                <label for="name">Name:</label> 
                <input id="name" type="text" name="name" value="<?php echo $addressResult['name']; ?>" /> <br />
               
                <label for="address">Address:</label> 
                <input id="address" type="text" name="address" value="<?php echo $addressResult['address']; ?>" /> <br />
               
                <label for="city">City:</label> 
                <input id="city" type="text" name="city" value="<?php echo $addressResult['city']; ?>" /> <br />
               
                <label for="state">State:</label> 
                <select name="state" >
                <?php
                
                foreach($states as $stateid=>$state){
                    if( $addressResult['state'] === $stateid ){
                        echo'<option value="',$stateid,'" selected = "selected">',$state,'</option>';
                    }  else {
                      echo'<option value="',$stateid,'">',$state,'</option>';  
                    }
                }
                
                ?>
                </select><br />
                              
                <label for="zip">ZIP:</label> 
                <input id="zip" type="text" name="zip" value="<?php echo $addressResult['zip']; ?>" /> <br />
               
                
                <input type="hidden" name="id" value="<?php echo $addressResult['id']; ?>" />
                <input type="submit" value="Submit" />
                <a href="viewaddress.php">Go back to Address Book</a>
            </fieldset>
        </form>
        
        
    </body>
</html>