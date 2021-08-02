<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title> </title>
    </head>
    <body>
        <h1>Welcome to the Server!</h1>
        <?php
        
       $username = 'chblicharz01';
        
       //greeting to the webserver
       echo <<<_END
        
        This server is designed and implemented for the sole purpose of testing
        features. <br>There is no real content on this server. <br>Thanks for stopping
        by!<br>
        
        - $username
        _END;
        
        
       //example of function definitions/usage
       echo ("<br><br>Below is usage of a written function, as opposed to predefined functions:");
       $temp = "<br>The date is: ";
        echo $temp. longdate(time());
        function longdate($timestamp)
        {
           
            return date("l F jS Y", $timestamp);
        }
        
        
        
         
        //useful example of the ? operator being used
        echo "<br><br>Next is an example of operators being used.";
        
        $page = "Home";
        echo "<br>Expected output: Yes <br>";
         echo $page == "Home" ? "Yes": "No";
         
         //the ? operator  can also be used to assign boolean variables
         $correctLocation = $page == "Home" ? TRUE : FALSE;
         echo "<br> Expected output: 1 <br>";
         echo $correctLocation; //should print out 1
         
         
         //This will eventually be put in a different location 
         /*
         $fp = fopen("text.txt", 'rb');
         $output = fread($fp, filesize("text.txt"));
         echo $output;
         fclose($fp);
         */
        
         
         echo "<br><br> Below is an example of the sprintf function. <br>"
         . "The prompt was 12.4 / 6.2 <br>"
                 . "The result should be 2.00";
         
         
         $hexString = sprintf("<br> Answer: %.2f", 12.4 / 6.2);
         echo $hexString;
         
         
         
         
        ?>
    </body>
</html>
