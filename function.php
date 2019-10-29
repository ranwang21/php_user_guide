<?php

function showButton($message)
{
    // echo "<button type='button' onClick='alert(";
    // echo '"'.$message.'")';
    // echo "'>$message</button>";

    // echo "<button type='button' onClick='alert(".'"'.$message.'")'."'>".$message.'</button>';

    echo '<button type="button" onClick="'.'alert('."'".$message."'".')">'.$message.'</button>';
}

showButton('test1');
showButton('test2');
showButton('test3');
showButton('test4');
