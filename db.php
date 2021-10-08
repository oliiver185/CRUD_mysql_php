
<!-- to conect to database -->

<?php

//inciar sesion so I can see a message after submitting
//it allows us to save data
session_start();

$conn = mysqli_connect(
    'localhost',
    'root',
    '',
    'php_mysql_crud'
);

// if(isset($conn)){
//     echo 'BD is connected';
// }

?>