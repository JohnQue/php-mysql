<?php
    $conn = mysqli_connect("localhost", "root", "eiaclr", "opentutorials");
    settype($_POST['id'], 'integer');
    $filtered = array(
        'id' => mysqli_real_escape_string($conn, $_POST['id']),
    );
    $sql = "
        DELETE FROM topic WHERE author_id = {$filtered['id']}
    ";
    mysqli_query($conn, $sql);
    $sql = "
       DELETE FROM author WHERE id = {$filtered['id']}
    ";
    $result = mysqli_multi_query($conn, $sql);
    if($result === false){
        echo mysqli_error($conn);
    }else{
        header('Location: author.php');
    }
?>