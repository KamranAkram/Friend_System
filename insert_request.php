<?php 
     session_start();
    include ('../inc/conn.php');
    if(isset($_SESSION['id'])){
        $sender_id = $_SESSION['id'];
        $receiver_id = $_GET['receiver_id'];
        $req=0;
        $sql = mysqli_query($con,"INSERT INTO friend_request (date, sender_id, receiver_id, request)
        VALUES (CURRENT_TIMESTAMP(), {$sender_id}, {$receiver_id}, $req)");
        if($sql){
            echo "successfully inserted";
        }else{
            echo mysqli_error($con);
        }
    
    }
    
?>