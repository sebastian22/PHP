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
    </head>
    <body>
        <?php
        
        // Explode: split the string into separates strings
        $NewEngland  = "Mass Rhody Vermont Connecticut Maine NewHam";
        $states = explode(" ", $NewEngland);
        echo "<h1> Most important states of New England? </h1>";
        echo $states[0]." and ".$states[1]; 
         
        ?>
        </br>
        
        <?php
        //sha1: Return the sha1 hash as a string
        $str = 'apple';

        if (sha1($str) === 'd0be2dc421be4fcd0172e5afceea3970e2f3d940') {
        echo "<h1>Would you like a green or red apple?<h1>";
        }
        
        ?>
        </br>
        
        <?php
        // htmlentities: Return the sha1 hash as a string
        $str = "My hat is <b>black</b>";

        // Outputs: My hat is &lt;b&gt;bold&lt;/b&gt;
        echo htmlentities($str);

        // Outputs: A &#039;quote&#039; is &lt;b&gt;bold&lt;/b&gt;
        echo htmlentities($str, ENT_QUOTES);
        ?>
        </br>
        
        <?php
        // md5
        $str = 'apple';

        if (md5($str) === '1f3870be274f6c49b3e31a0c6728957f') {
        echo "Would you like a green or red apple?";
        }
        ?>
        </br>
        
        <?php
        // strip_tags
        $text = '<p>Test paragraph.</p><!-- Comment --> <a href="#fragment">Other text</a>';
        echo strip_tags($text);
        echo "\n";

        // Allow <p> and <a>
        echo strip_tags($text, '<p><a>');
        ?>
        </br>
        
        <?php
        // trim
        $text   = "\t\tThese are a few words :) ...  ";
        $binary = "\x09Example string\x0A";
        $hello  = "Hello World";
        var_dump($text, $binary, $hello);

        print "\n";

        $trimmed = trim($text);
        var_dump($trimmed);

        $trimmed = trim($text, " \t.");
        var_dump($trimmed);

        $trimmed = trim($hello, "Hdle");
        var_dump($trimmed);

        $trimmed = trim($hello, 'HdWr');
        var_dump($trimmed);

        // trim the ASCII control characters at the beginning and end of $binary
        // (from 0 to 31 inclusive)
        $clean = trim($binary, "\x00..\x1F");
        var_dump($clean);
        ?>
        </br>
        
        <?php
        $foo = 'hello world!';
        $foo = ucwords($foo);             // Hello World!

        $bar = 'HELLO WORLD!';
        $bar = ucwords($bar);             // HELLO WORLD!
        $bar = ucwords(strtolower($bar)); // Hello World!
        ?>
        
        </br></br>
        <?php
        $str = 'abcdef';
        echo strlen($str); // 6

        $str = ' ab cd ';
        echo strlen($str); // 7
        ?>
        
        <?php
        //str_shuffle
        $str = 'abcdef';
        $shuffled = str_shuffle($str);

        // This will echo something like: bfdaec
        echo $shuffled;
        
        ?>
        </br></br></br>
        
        <?php
        // ord
        $str = "\n";
        if (ord($str) == 10) {
        echo "The first character of \$str is a line feed.\n";
        }
        ?>
        </br></br></br>
        
    </body>
</html>
