<?php
    session_start();
    include_once "config.php";
    $outgoing_id = $_SESSION['unique_id'];
    $sql = mysqli_query($conn, "SELECT * FROM users WHERE NOT unique_id = {$outgoing_id}");
    $output = "";
    //if there is only one row in the db then definitely this is a current
    // logged in user so we tell there is no user to chat if users = 1
    if(mysqli_num_rows($sql) == 1){
        echo "No users are available to chat";
    }elseif(mysqli_num_rows($sql) > 0){ // otherwise show users
        include "data.php";
    }
    
    echo $output;
    
?>

