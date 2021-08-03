<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    
    
    <body>
        <h1> This Section Explores Handling Disk Files </h1>
        <?php
            echo "First, the server must check to see if the file exists";
            
            $filename = "text.txt";
            //must check if the file exists in an accessible spot
            if (file_exists($filename)) echo "<br>Given file exists..."; 
            if (file_exists($filename)) $fh = fopen($filename, 'w') or die("Failed to create file...");
            else $fh = fopen("text.txt", 'w') or die("Failed to create file...");
            
            $text = <<<_END
                    Line 1
                    Line 2
                    Line 3
                    Line 4
                    _END;
            
            fwrite($fh, $text) or die("Could not write to file...");
            fclose($fh);
            
            echo ("Text was written to text.txt succesfully!");
            
            
            echo ("<br><br> Next is an exmaple of file reading:");
            
            $fh = fopen("text.txt", 'r') or die("Unable to read file...");
            $fileText = fgets($fh);
            
            
            
            echo ("<br>The first line reads:  $fileText ");
            
            
            $entireFile = fread($fh, 24);
            fclose($fh);
           echo ("<br>The rest of the file reads:  $entireFile");
        ?>
    </body>
</html>

