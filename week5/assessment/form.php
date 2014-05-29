<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="style.css" media="all" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <?php
        
        //Date function
        $date = date('M d y');
        
        $signup = new Signup();
        $state_list = array('AL'=>"Alabama",  
			'AK'=>"Alaska",  
			'AZ'=>"Arizona",  
			'AR'=>"Arkansas",  
			'CA'=>"California",  
			'CO'=>"Colorado",  
			'CT'=>"Connecticut",  
			'DE'=>"Delaware",  
			'DC'=>"District Of Columbia",  
			'FL'=>"Florida",  
			'GA'=>"Georgia",  
			'HI'=>"Hawaii",  
			'ID'=>"Idaho",  
			'IL'=>"Illinois",  
			'IN'=>"Indiana",  
			'IA'=>"Iowa",  
			'KS'=>"Kansas",  
			'KY'=>"Kentucky",  
			'LA'=>"Louisiana",  
			'ME'=>"Maine",  
			'MD'=>"Maryland",  
			'MA'=>"Massachusetts",  
			'MI'=>"Michigan",  
			'MN'=>"Minnesota",  
			'MS'=>"Mississippi",  
			'MO'=>"Missouri",  
			'MT'=>"Montana",
			'NE'=>"Nebraska",
			'NV'=>"Nevada",
			'NH'=>"New Hampshire",
			'NJ'=>"New Jersey",
			'NM'=>"New Mexico",
			'NY'=>"New York",
			'NC'=>"North Carolina",
			'ND'=>"North Dakota",
			'OH'=>"Ohio",  
			'OK'=>"Oklahoma",  
			'OR'=>"Oregon",  
			'PA'=>"Pennsylvania",  
			'RI'=>"Rhode Island",  
			'SC'=>"South Carolina",  
			'SD'=>"South Dakota",
			'TN'=>"Tennessee",  
			'TX'=>"Texas",  
			'UT'=>"Utah",  
			'VT'=>"Vermont",  
			'VA'=>"Virginia",  
			'WA'=>"Washington",  
			'WV'=>"West Virginia",  
			'WI'=>"Wisconsin",  
			'WY'=>"Wyoming");
        
        
        class Signup {                            
        
            //Declare the public variables
            public $fullname;
            public $state;
            public $comments;
            




            //The default constructor
            public function __construct()
                        {
                        $this->fullname = filter_input(INPUT_POST, 'fullname');
                        $this->state = filter_input(INPUT_POST, 'state');
                        $this->comments = filter_input(INPUT_POST, 'comments');
                        $this->time = filter_input(INPUT_POST, 'time');
                        }
                     }
        ?>
        
        <!--Creating the form -->
        <form name="mainform" action="#" method="post"> 
           <fieldset>
		
               <legend>Main Form:</legend>
                
                
                <label for="fullname">Name:</label> 
                <input id="fullname" type="text" name="fullname" /> 
                <br />
                
                <label for="state">State:</label>
                <select id="state" name="state">
                    
                    <!--Display the dropDown list with states -->
                    <?php 
                    
                    if (count($state_list) ) {foreach ($state_list as $value) {
                            echo '<option>',$value,'</option>';
                                                                              }
                                             }
                            
                    ?>
                </select>
                <br /> 
                
                
                <label for="comments">Comments:</label>
                <textarea id="comments" type="text" name="comments" rows="4" cols="36">
                </textarea>
                <br />
                
                
                
                
                <!-- Display the input entered by user 
                <label for="display">Display:</label>-->
                
                <div class="Preview" hidden="true">
                <h1 class="preview" for="display">Preview</h1>
                    <?php 
                        echo "<h3> First Name: $signup->fullname <br />",
                             "State: $signup->state <br />",
                             "Posted On: $date->date <br />",   
                             "Comments: $signup->comments <br /></h3>";
                            
                    ?>
                </div>
                
                <input type="submit" value="Submit" />
            </fieldset>
        </form>
        
    </body>
</html>