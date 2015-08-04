<?php
    $hamlet = fopen("hamlet.txt", "r") or die("Hamlet died!");
    $hamletData = fread($hamlet,filesize("hamlet.txt"));
    fclose($hamlet);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Flat File Mini Assignment</title>
        <link rel="stylesheet" href="styles.css" type="text/css" />
    </head>
    <body>
        <h1>Hamlet</h1>
        <form action="newLine.php" method="POST">
            <fieldset>
                <legend>Add a line of text to the end of file:</legend>
                <input type="text" name="new_line"/>
                <input type="submit" value="Add"/>
            </fieldset>
         </form>
         <pre><?php echo $hamletData; ?></pre>
    </body>
</html>