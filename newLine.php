<?php
    $input_data = $_POST['new_line'];
    $hamlet = fopen("hamlet.txt", "a+") or die("I told you, he died");
    
    fwrite($hamlet, "\n".$input_data);
    fclose($hamlet);
    header("Location: https://php-flat-files-drummerbear26.c9.io/");
    die();
?>