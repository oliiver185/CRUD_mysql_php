<?php

include("db.php");

if(isset($_POST['save_task'])){
//    this is a variable $title
    $title = $_POST['title'];
    $description = $_POST['description'];
    // echo $title;
    // echo $description;

    $query = "INSERT INTO task(title, description) 
    VALUES ('$title', '$description')";
    
    //cadena de coneccion y la consulta
    $result = mysqli_query($conn, $query);
    if(!$result){
        die("Query failed");
    }

    $_SESSION['message'] = 'Task saved succesfully';
    $_SESSION['message_type'] = 'success';


    //redirect to index.php
    header("Location: index.php");
}

?>